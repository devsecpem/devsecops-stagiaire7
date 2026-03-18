# MediTrack

Portail interne de suivi patient — Hopital Sainte-Anne, Toulon.

## Installation

```bash
composer install
php -S localhost:8080 -t src/
```

## Stack

- PHP 8.3
- MySQL (via mysqli)
- Docker

## Structure

- `src/` — Code source PHP (controllers, models, config)
- `templates/` — Templates de vues
- `composer.json` — Dependances PHP
- `Dockerfile` — Configuration conteneur
- `.env` — Variables d'environnement

## Deploiement

```bash
docker build -t meditrack .
docker run -p 80:80 meditrack
```

## Contact

Marc Dupont — m.dupont@hsa-toulon.fr
Service Informatique — Hopital Sainte-Anne
