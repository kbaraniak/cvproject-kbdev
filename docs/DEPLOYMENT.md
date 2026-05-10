# Deployment Guide (VPS + Cloudflare Tunnel)

## Overview
This project runs as a multi-service Docker Compose stack:
- `app` (PHP 8.2 + Apache)
- `redis` (visitor counter persistence)
- `tailwind` (watch/build CSS)

Recommended production flow:
1. Push to GitHub.
2. Deploy on VPS.
3. Expose app through Cloudflare Tunnel (no direct public app port).

## Prerequisites
- VPS with Docker Engine + Docker Compose plugin
- Cloudflare account with zone for `kbdev.run`
- DNS management access in Cloudflare
- SSH access to the VPS

## 1. Prepare VPS
```bash
sudo apt update
sudo apt install -y docker.io docker-compose-plugin git curl
sudo usermod -aG docker $USER
newgrp docker
```

## 2. Clone and run stack
```bash
git clone git@github.com:kbaraniak/cvproject-kbdev.git
cd cvproject-kbdev

docker compose up -d --build
```

Check services:
```bash
docker compose ps
curl -I http://localhost:8080
```

## 3. Install cloudflared on VPS
```bash
curl -L --output cloudflared.deb \
  https://github.com/cloudflare/cloudflared/releases/latest/download/cloudflared-linux-amd64.deb
sudo dpkg -i cloudflared.deb
```

## 4. Authenticate and create tunnel
```bash
cloudflared tunnel login
cloudflared tunnel create cvprojects
```

This creates credentials in `~/.cloudflared/`.

## 5. Create tunnel config
Create `~/.cloudflared/config.yml`:
```yaml
tunnel: cvprojects
credentials-file: /home/<USER>/.cloudflared/<TUNNEL_ID>.json

ingress:
  - hostname: cvprojects.kbdev.run
    service: http://localhost:8080
  - service: http_status:404
```

## 6. Create DNS record from tunnel
```bash
cloudflared tunnel route dns cvprojects cvprojects.kbdev.run
```

## 7. Run tunnel as a service
```bash
sudo cloudflared service install
sudo systemctl enable cloudflared
sudo systemctl restart cloudflared
sudo systemctl status cloudflared
```

## 8. Cloudflare SSL settings
In Cloudflare dashboard:
- SSL/TLS mode: `Full` (or `Full (strict)` if cert is configured end-to-end)
- Proxy status: enabled (orange cloud)

## 9. Optional GitHub Actions auto-deploy
Use SSH-based deploy workflow:
1. Add VPS deploy key to GitHub Secrets.
2. On push to `main`, run:
   - `git pull`
   - `docker compose up -d --build`

## Operations
Restart all services:
```bash
docker compose restart
```

Tail logs:
```bash
docker compose logs -f app redis tailwind
sudo journalctl -u cloudflared -f
```

Update deployment after changes:
```bash
git pull
docker compose up -d --build
```

## Security Notes
- Keep port 8080 closed in public firewall when tunnel is used.
- Keep SSH key auth only; disable password login on VPS.
- Rotate Cloudflare tunnel token/credentials if host is re-provisioned.
