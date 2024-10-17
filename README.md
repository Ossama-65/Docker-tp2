# Docker TP2

## Description
Ce projet est un exercice visant à déployer une installation de WordPress en utilisant plusieurs containers Docker. Il comprend des étapes de configuration, de connexion à une base de données MySQL, et la mise en place d'un serveur Nginx pour servir l'application.

## Prérequis
- [Docker](https://www.docker.com/get-started) (Desktop ou Engine)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Structure du Projet
- **app/** : Contient les fichiers de l'application WordPress téléchargée.
- **nginx.conf** : Fichier de configuration pour Nginx.
- **Dockerfile-script** : Dockerfile pour créer l'image PHP-FPM avec les extensions nécessaires.
- **docker-compose.yml** : Fichier pour configurer et déployer tous les services via Docker Compose.

## Installation
### Étape 1 : Créer l'Image PHP-FPM
1. Cloner le repository :
   ```sh
   git clone https://github.com/Ossama-65/docker-tp2.git
   cd docker-tp2
   ```
2. Construire l'image PHP avec mysqli :
   ```sh
   docker build -t php-script:latest -f Dockerfile-script .
   ```

### Étape 2 : Déployer avec Docker Compose
1. Lancer les containers avec Docker Compose :
   ```sh
   docker-compose up -d
   ```
2. Accéder à WordPress à l'adresse [localhost:83](http://localhost:83) pour finaliser l'installation.

## Configuration de la Base de Données
Pendant l'installation de WordPress, les informations de connexion à la base de données sont les suivantes :
- **Nom de la base de données** : `wordpress`
- **Identifiant** : `root`
- **Mot de passe** : `password`
- **Adresse de la base de données** : `data_new` (le nom du container MySQL)
- **Préfixe des tables** : `wp_`

## Docker Compose
Le fichier `docker-compose.yml` est utilisé pour configurer les services nécessaires :
- **MySQL** : Fournit la base de données pour WordPress.
- **PHP-FPM** : Gère l'interprétation des scripts PHP.
- **Nginx** : Utilisé comme serveur web pour servir l'application.

## Commandes Utiles
- **Construire les images** :
  ```sh
  docker-compose build
  ```
- **Démarrer les services** :
  ```sh
  docker-compose up -d
  ```
- **Vérifier les logs** :
  ```sh
  docker-compose logs
  ```
- **Arrêter les services** :
  ```sh
  docker-compose down
  ```

## Troubleshooting
- **Erreur 403** : Assurez-vous que la configuration Nginx pointe bien vers le bon répertoire `app` et que les permissions sont correctement définies.
- **Problème de connexion à la base de données** : Vérifiez que le container MySQL est bien en cours d'exécution et que les informations de connexion sont correctes.

## Auteurs
- Ossama
