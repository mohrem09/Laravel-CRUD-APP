# Laravel CRUD Application

Bienvenue dans l'application CRUD pour la gestion des étudiants, développée avec Laravel et Bootstrap. Ce projet permet de créer, lire, mettre à jour et supprimer des informations sur des étudiants.

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés :

- [PHP](https://www.php.net/) (version 8.0 ou supérieure recommandée)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) ou un autre SGBD compatible

## Installation

1. **Clonez le dépôt :**

    ```bash
    git clone https://github.com/mohrem09/Laravel-CRUD-APP.git
    ```

2. **Accédez au répertoire du projet :**

    ```bash
    cd Laravel-CRUD-APP
    ```

3. **Installez les dépendances avec Composer :**

    ```bash
    composer install
    ```

4. **Configurez votre fichier `.env` :**

    Copiez le fichier `.env.example` et renommez-le en `.env`, puis mettez à jour les paramètres de connexion à la base de données :

    ```bash
    cp .env.example .env
    ```

    Modifiez le fichier `.env` pour correspondre à votre configuration de base de données :

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nom_de_votre_base_de_donnees
    DB_USERNAME=votre_utilisateur
    DB_PASSWORD=mot_de_passe
    ```

5. **Générez une clé d'application :**

    ```bash
    php artisan key:generate
    ```

6. **Créez les tables dans la base de données :**

    ```bash
    php artisan migrate
    ```

7. **Démarrez le serveur de développement :**

    ```bash
    php artisan serve
    ```

    Votre application sera accessible à l'adresse [http://localhost:8000](http://localhost:8000).

## Utilisation

### Gestion des Étudiants

Vous pouvez effectuer les opérations suivantes :

- **Créer un étudiant :** Accédez à [http://localhost:8000/students/create](http://localhost:8000/students/create) pour ajouter un nouvel étudiant.
- **Afficher la liste des étudiants :** Accédez à [http://localhost:8000/students](http://localhost:8000/students) pour voir tous les étudiants.
- **Modifier un étudiant :** Accédez à [http://localhost:8000/students/{id}/edit](http://localhost:8000/students/{id}/edit) pour modifier les détails d'un étudiant existant. Remplacez `{id}` par l'ID de l'étudiant.
- **Supprimer un étudiant :** Vous pouvez supprimer un étudiant depuis la liste des étudiants ou en accédant à [http://localhost:8000/students/{id}](http://localhost:8000/students/{id}) et en utilisant l'option de suppression.

## Contribuer

1. **Forkez le dépôt** (Fork this repository)
2. **Créez une branche pour votre fonctionnalité ou correction de bogue :**

    ```bash
    git checkout -b ma-nouvelle-fonctionnalite
    ```

3. **Faites vos modifications et ajoutez des commits :**

    ```bash
    git add .
    git commit -m "Ajoute une nouvelle fonctionnalité"
    ```

4. **Poussez vos modifications :**

    ```bash
    git push origin ma-nouvelle-fonctionnalite
    ```

5. **Créez une Pull Request** pour proposer vos modifications.

## Licence

Ce projet est sous la licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

## Remerciements

- [Laravel](https://laravel.com/) pour le framework PHP puissant.
- [Bootstrap](https://getbootstrap.com/) pour le style et l'interface utilisateur.
- [Composer](https://getcomposer.org/) pour la gestion des dépendances PHP.

## Liens utiles

- [Dépôt GitHub](https://github.com/mohrem09/Laravel-CRUD-APP)
- [Documentation Laravel](https://laravel.com/docs)
- [Documentation Bootstrap](https://getbootstrap.com/docs)
