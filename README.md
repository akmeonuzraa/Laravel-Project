# Laravel-Project — Gestion des Notes Étudiants

Application web Laravel permettant de gérer des étudiants, des modules et leurs notes (contrôle intra, projet, examen final, moyenne).

## Stack technique

- **Framework** : Laravel 8 (PHP ^7.3 | ^8.0)
- **Base de données** : MySQL
- **Auth API** : Laravel Sanctum
- **CORS** : fruitcake/laravel-cors

## Fonctionnalités

- CRUD complet sur les **étudiants** (nom, prénom, email, filière)
- CRUD complet sur les **modules** (intitulé, semestre)
- CRUD complet sur les **notes** (note intra, note projet, note finale, moyenne), liées à un étudiant et un module

## Structure du modèle de données

```
Etudiant (1) ── (N) Note (N) ── (1) Module
```

- `Etudiant` : `nom`, `prenom`, `email`, `filiere`
- `Module` : `intitule`, `semestre`
- `Note` : `etudiant_id`, `module_id`, `note_intra`, `note_projet`, `note_final`, `moyenne`

## Installation

```bash
git clone https://github.com/akmeonuzraa/Laravel-Project.git
cd Laravel-Project

composer install
cp .env.example .env
php artisan key:generate
```

Configurer la base de données dans `.env` :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Puis lancer les migrations et le serveur :

```bash
php artisan migrate
php artisan serve
```

L'application est accessible sur `http://localhost:8000`.

## Routes principales

| Ressource   | Route        |
|-------------|--------------|
| Étudiants   | `/etudiants` |
| Modules     | `/modules`   |
| Notes       | `/notes`     |

Chaque ressource expose les routes REST standard de Laravel (`index`, `create`, `store`, `edit`, `update`, `destroy`).

## Licence

MIT
