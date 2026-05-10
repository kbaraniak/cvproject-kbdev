{ pkgs ? import <nixpkgs> {} }:

pkgs.mkShell {
  packages = with pkgs; [
    docker
    docker-compose
    podman
    podman-compose
    php82
    nodejs_20
  ];

  shellHook = ''
    echo "Nix shell loaded: Docker, Docker Compose, Podman, PHP 8.2, Node.js 20"

    if [ -S /var/run/docker.sock ]; then
      echo "Docker socket found at /var/run/docker.sock"
    elif [ -S /run/user/$(id -u)/docker.sock ]; then
      export DOCKER_HOST=unix:///run/user/$(id -u)/docker.sock
      echo "Using rootless Docker socket: $DOCKER_HOST"
    else
      echo "No Docker socket found."
      echo "If host allows it:"
      echo "  Rootful (systemd): sudo systemctl enable --now docker"
      echo "  Rootless (user): systemctl --user enable --now docker"
      echo "Fallback for restricted environments: use Podman rootless (daemonless)."
      echo "  Example: podman compose up --build"
    fi

    alias dcu='docker compose up --build'
    alias pcu='podman compose up --build'
  '';
}
