# CVProjects - Portfolio Website

Nowoczesne portfolio prezentujące wybrane projekty. Serwis łączy PHP backend z Tailwind CSS frontendo w konteneryzowanym środowisku Docker.

## 📋 Opis projektu

**CVProjects** to responsywna strona portfolio stworzonym w celu prezentacji projektów Portfolio dla rekruterów. 
Projekt demonstruje umiejętności PHP, pracy z API, bazami danych oraz nowoczesnych technologii frontend.

### Główne cechy:
- ✅ Szybkie ładowanie – blueprint-style animation
- ✅ Responsywny design – Tailwind CSS
- ✅ API do zapisywania danych użytkownika
- ✅ Modularna struktura template
- ✅ Konteneryzacja Docker & Docker Compose

---

## 📁 Struktura projektu

```
cvprojects/
├── public/                      # Publiczny root aplikacji
│   ├── index.php               # Główny punkt wejścia
│   ├── router.php              # Routing żądań HTTP
│   ├── routes.php              # Definicje ścieżek
│   ├── .htaccess               # Reguły Apache
│   ├── api/                    # Endpointy API
│   │   └── save_user.php       # Endpoint do zapisywania użytkownika
│   ├── assets/                 # Zasoby publiczne (CSS, JS)
│   │   └── css/
│   │       └── app.css         # Wygenerowany CSS (z Tailwind)
│   └── views/                  # Template Vue
│       ├── 404.php             # Strona 404
│       ├── full_name.php       # Widok full name
│       ├── index.php           # Layout główny
│       ├── user.php            # Widok profilu użytkownika
│       └── components/         # Komponenty wielokrotnego użytku
│           └── sections/
│               ├── projects.php        # Sekcja projektów
│               ├── other-projects.php  # Pozostałe projekty
│               └── langs/              # Projekty wg języka
│                   ├── projects-php.php
│                   ├── projects-node.php
│                   ├── projects-nextjs.php
│                   ├── projects-python.php
│                   ├── projects-react.php
│                   └── projects-rust.php
│
├── assets/                      # 🚧 Source (build - > public/assets)
│   └── css/
│       └── input.css           # Source CSS z Tailwind directives
│
├── templates/                  # Główne szablony
│   ├── blueprint.php          # Template blueprint (loading animation)
│   └── loading.php            # Komponent loading
│
├── tests/                      # Testy i eksperymenty
│   └── blueprint_animation.html
│
├── docker-compose.yml         # Orkestracja kontenerów
├── Dockerfile                 # Build image PHP
├── package.json               # Zależności Node (Tailwind)
├── tailwind.config.js         # Konfiguracja Tailwind CSS
├── shell.nix                  # Nix environment
├── .gitmessage                # Git commit template
├── .gitignore                 # Git ignore rules
└── .dockerignore              # Docker ignore rules
```

### Opisy folderów:

| Folder | Przeznaczenie |
|--------|---------|
| `public/` | Publiczny root aplikacji – bezpośrednio wyświetlany w przeglądarce |
| `public/api/` | API endpoints do komunikacji frontend-backend |
| `public/views/` | Widoki PHP (szablony HTML) |
| `public/assets/` | Zasoby (CSS, JS, obrazy) – **generowane z `assets/`** |
| `assets/` | Źródła do build (np. Tailwind input CSS) |
| `templates/` | Globalne szablony PHP |
| `tests/` | Eksperymenty i testy |

---

## 🚀 Jak zbudować i uruchomić projekt

### Wymagania
- Docker & Docker Compose
- lub: PHP 8+, Node.js 20+

### Opcja 1: Docker (Zalecane)

```bash
# Klonuj i przejdź do folderu
git clone <repo>
cd cvprojects

# Rozlacz kontenery
docker-compose up -d

# Zbuduj CSS (Tailwind) – uruchomia się automatycznie w containerze
npm run tw:build

# Otwórz w przeglądarce
open http://localhost:8080
```

### Opcja 2: Lokalna instalacja

```bash
# Instalacja zależności
npm install

# Build Tailwind CSS
npm run tw:build

# Watch mode (redeployuje CSS na każdą zmianę)
npm run tw:watch

# Uruchom wbudowany serwer PHP
php -S localhost:8000 -t public/
```

### Opcja 3: Nix shell (dla NixOS)

```bash
nix-shell
npm install
npm run tw:build
```

---

## 📦 Technologie

| Technologia | Użycie |
|---|---|
| **PHP** | Backend, routing, API |
| **Tailwind CSS** | Styling, responsive design |
| **Docker** | Konteneryzacja aplikacji |
| **Node.js** | Build system (Tailwind) |
| **Apache** | Web server (w Dockerfile) |

---

## 🔧 Dostępne komendy (npm)

```bash
npm run tw:watch   # Watch mode – obserwuje zmiany w CSS
npm run tw:build   # Build produkcyjny – kompresuje CSS
```

---

## 📝 Commit Message Template

Projekt używa `.gitmessage` template do standaryzacji commitów. Dostępne typy:

```
[Feature]   - nowa funkcjonalność
[Fix]       - naprawa błędu  
[UI]        - zmiany CSS/layout
[Docs]      - dokumentacja
[Build]     - konfiguracja build
[Chore]     - prace porządkowe
[Refactor]  - refactoring
```

---

## 📍 Struktura routingu

- `router.php` – główny router żądań HTTP
- `routes.php` – definicje ścieżek
- `.htaccess` – reguły Apache do rewritu URL

---

## 📊 Statystyki odwiedzin

- [Counter] Licznik oparty na Redisie zlicza unikalne wejścia użytkownika na podstawie hashowania `IP + User-Agent`
- Dzięki czemu odświeżenie strony przez tę samą osobę nie zwiększa znów wyniku

---

## 🤖 GitHub Project Scanner Agent

Projekt zawiera wbudowanego **GitHub Project Scanner** – agenta AI do automatycznego skanowania i analizy projektów z GitHub.

### Funkcjonalność agenta:

Agent analizuje repozytoria GitHub i ekstrahuje:
- 📝 **Nazwa projektu**
- 📄 **Krótki opis** (1-2 zdania) – syntetyzowany z kodu, nie z README
- 🏷️ **Tagi technologiczne** (języki, frameworki, bazy danych)
- 📌 **Wyniki** zapisywane w `scan/found_{timestamp}.txt`

### Jak korzystać:

Aby uruchomić skan projektu, użyj:
```
[AGENT_SCAN] Projekt: https://github.com/{user}/{project}
```

**Przykład:**
```
[AGENT_SCAN] Projekt: https://github.com/kbaraniak/MVList
```

Agent automatycznie:
1. Pobiera stronę repozytorium
2. Analizuje kod źródłowy (package.json, Dockerfile, routes, itd.)
3. Generuje opis na podstawie struktury kodu, nie opisu repozytorium
4. Zapisuje wyniki w `scan/` z timestampem

### Konfiguacja agenta:

Szczegółowa konfiguracja znajduje się w [.agents.md](.agents.md) – zawiera:
- Trigger patterns
- Format wyjściowy
- Zachowanie analizatora
- Priorytety inferencji

---

## 📧 Kontakt

Projekt portfolio – zapraszam do sprawdzenia na https://cvprojects.kbdev.run

---

**Status**: 🚧 W trakcie rozwijania

Last Updated: 2026-05-10
