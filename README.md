# Projet Backend - Laravel

Ce projet est le backend d'une application CRUD avec authentification, développé avec **Laravel**. Il fournit une API RESTful pour le frontend Next.js.

---

## Fonctionnalités

-   **Authentification** : Gestion des utilisateurs avec Sanctum.
-   **Gestion des utilisateurs** : Deux rôles disponibles (Admin et User).
-   **CRUD** : Création, lecture, mise à jour et suppression de taches.
-   **Permissions** : Accès restreint en fonction du rôle (Admin ou User).
-   **Documentation API** : Disponible via Postman ou Swagger.

---

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

-   **PHP** (version 8.0 ou supérieure)
-   **Composer**
-   **Base de données** (MySQL, PostgreSQL, etc.)
-   **Node.js** (pour les dépendances frontend si nécessaire)

---

## Installation

### 1. Cloner le dépôt

Clonez ce dépôt sur votre machine locale :

```bash
git clone https://github.com/Mariem-benyoussef/laravel-app
cd laravel-app
### 2. Installer les dépendances
Installez toutes les dépendances nécessaires :

bash
Copy
composer install
3. Configurer les variables d'environnement
Créez un fichier .env à la racine du projet et configurez les variables suivantes :

env
Copy
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_la_base
DB_USERNAME=root
DB_PASSWORD=
4. Générer une clé d'application
Générez une clé d'application Laravel :

bash
Copy
php artisan key:generate
5. Exécuter les migrations et seeders
Migrez la base de données et exécutez les seeders :

bash
Copy
php artisan migrate --seed
6. Démarrer le serveur
Lancez le serveur de développement :

bash
Copy
php artisan serve
7. Accéder à l'API
L'API sera disponible à l'adresse suivante :

Copy
http://localhost:8000/api/tasks
Déploiement
Ce projet peut être déployé sur un serveur compatible PHP (ex: Laravel Forge, Heroku, etc.). Assurez-vous de configurer les variables d'environnement sur le serveur.

Technologies utilisées
Laravel : Framework PHP pour le backend.

JWT ou Sanctum : Pour l'authentification.

Eloquent ORM : Pour la gestion de la base de données.

MySQL/PostgreSQL : Base de données relationnelle.

Contribuer
Si vous souhaitez contribuer à ce projet, suivez ces étapes :

Forkez le projet.

Créez une nouvelle branche (git checkout -b feature/nouvelle-fonctionnalité).

Committez vos changements (git commit -m 'Ajout d'une nouvelle fonctionnalité').

Pushez la branche (git push origin feature/nouvelle-fonctionnalité).

Ouvrez une Pull Request.

Auteur
Mariem Ben Youssef

Licence
Ce projet est sous licence MIT. Voir le fichier LICENSE pour plus de détails.
```
