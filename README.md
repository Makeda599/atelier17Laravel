# Atelier 17 — Architecture type Laravel

Mini-application illustrant l'architecture en couches inspirée de Laravel :
front-controller (`public/index.php`), Router, Container, Controllers, Repositories, Views.

Inclut l'exercice guidé : route `GET /about` → `HomeController@about` → `views/about.php`.

## Lancer le projet
```bash
php -S localhost:8000 -t public public/index.php
```
Puis ouvrir `http://localhost:8000/`, `/books`, `/about`.
