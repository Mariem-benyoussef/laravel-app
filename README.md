# 📌 Projet Backend - Laravel

Ce projet est le backend d'une application CRUD avec authentification, développé avec **Laravel**. Il fournit une API RESTful pour le frontend Next.js.

---

## 🚀 Fonctionnalités

- **Authentification** : Gestion des utilisateurs avec Sanctum.
- **Gestion des utilisateurs** : Deux rôles disponibles (Admin et User).
- **CRUD** : Création, lecture, mise à jour et suppression de tâches.
- **Permissions** : Accès restreint en fonction du rôle (Admin ou User).
- **Documentation API** : Disponible via Postman ou Swagger.

---

## 📌 Prérequis

Avant de commencer, assure-toi d'avoir installé :

- **PHP** (version 8.0 ou supérieure)
- **Composer**
- **Base de données** (MySQL, PostgreSQL, etc.)
- **Node.js** (si nécessaire pour les dépendances frontend)

---

## 🔧 Installation

### 1️⃣ Cloner le dépôt

```bash
git clone https://github.com/Mariem-benyoussef/laravel-app.git
cd laravel-app
```

### 2️⃣ Installer les dépendances

```bash
composer install
```

### 3️⃣ Configurer les variables d’environnement
- **Crée un fichier .env à la racine du projet et ajoute les configurations suivantes :**

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_la_base
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Générer une clé d'application

```bash
php artisan key:generate
```

### 5️⃣ Exécuter les migrations et seeders

```bash
php artisan migrate --seed
```

### 6️⃣ Démarrer le serveur de développement

```bash
php artisan serve
```
- **L'API sera accessible à l'adresse suivante :**

```bash
http://localhost:8000/api/tasks
```

---

## 🌍 Déploiement sur Vercel
- **Connecte ton dépôt GitHub à Vercel.**
- **Ajoute les variables d'environnement dans les paramètres de Vercel.**
- **Déploie, Vercel redéploiera automatiquement à chaque push sur main.**
- **Vercel n'est pas optimisé pour des bases de données MySQL traditionnelles, mais fonctionne très bien avec des solutions de bases de données serverless.**

---

## 🛠 Technologies utilisées
- **Laravel : Framework PHP pour le backend**
- **Sanctum : Gestion de l'authentification via API**
- **MySQL/PostgreSQL : Base de données relationnelle**
- **Laravel Passport : Authentification par token**
- **Postman/Swagger : Documentation et test des API**

---

✨ Auteur 👤 Mariem Ben Youssef 📧 Email : benyoussefmeriem27@gmail.com 🔗 GitHub : https://github.com/Mariem-benyoussef/


