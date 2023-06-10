# Projet backend - NoteXpress

<p align="center">
  <img src="public/images/nx-color.svg" alt="Actus Crypto" width="300" />
</p>

## Description

Pour mes étudiants : Ce projet est une application de prise de notes conçu avec le framework PHP, Symfony 6.

Ce projet fait partie de la formation Agiliteach "Développement Web Moderne avec l'IA". Disponible sur la plateforme Udemy.

 [Symfony 6](https://symfony.com/).

## Installation

1. Cloner le projet sur votre machine locale :

```bash
git clone https://github.com/Jensone/NoteXpress.git
```

2. Installer les dépendances :

```bash
composer install
```

3. Lancez CodeTour pour commencer la formation. Enjoy !

## Déroulé de la formation

1. Créer un projet Symfony
2. Créer une base de données (BDD)
3. Créer des entités
4. Migrer les entités en BDD
5. Ajouter des relations entre les entités
6. Créer des fixtures (données de test)
7. Installer un certificat SSL
8. Créer un premier contrôleur
9. Créer une page d'accueil
10. Comprendre le système de templates
11. Injecter des données dans les templates
12. Installer Bootstrap
13. Améliorer le design de la page d'accueil
14. Mettre en place le CRUD
15. Sécuriser les formulaires
16. Sécuriser les routes
17. Créer un système d'inscription
18. Créer un système de connexion
19. Attacher les notes à un utilisateur
20. Empêcher un utilisateur d'accéder aux notes sans être connecté
21. Tester l'application
22. Préparer le déploiement

## Ressources

- [Symfony](https://symfony.com/)
- [Bootstrap](https://getbootstrap.com/)
- [Twig](https://twig.symfony.com/)
- [Doctrine](https://www.doctrine-project.org/)
- [EasyAdmin](https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html)

### UML

L'ensemble des diagrammes UML sont disponibles dans le dossier `/UML`. Ils ont été générés avec [PlantUML](https://plantuml.com/).

| Diagramme de classes | Diagramme d'objets |
| :------------------: | :----------------: |
| ![Diagramme de classes](/UML/classes.svg) | ![Diagramme d'objets](/UML/objets.svg) |

| Diagramme d'activités (Algorithme) |
| :--------------------------------: |
| ![Diagramme d'activités](/UML/algorithme.svg) |

| Diagramme de séquence (Complet) |
| :------------------------------: |
| ![Diagramme de séquence (Complet)](/UML/sequence.svg) |

### Liste des commandes utiles

La liste des commandes utiles pour ce projet. Elles sont à exécuter dans le terminal, à la racine du projet. Chose importante, il faut avoir installé [Symfony CLI](https://symfony.com/download) pour pouvoir utiliser les commandes `symfony` autrement il faut remplacer `symfony` par `php bin/console`.

| Commande | Description |
| :------ | :--------- |
| `symfony server:ca:install` | Installe un certificat SSL en local |
| `symfony server:start -d` | Lance le serveur web en arrière-plan |
| `symfony server:stop` | Arrête le serveur web |
| `composer require symfony/messenger` | Installe le composant Messenger |
| `symfony console messenger:consume async` | Lance le consommateur de messages en arrière-plan |
| `symfony console make:entity` | Crée une entité |
| `symfony console make:migration` | Crée une migration pour le schéma de la BDD |
| `symfony console doctrine:migrations:migrate` | Exécute les migrations vers la BDD |
| `composer require --dev doctrine/doctrine-fixtures-bundle` | Installe le bundle de fixtures |
| `symfony console doctrine:fixtures:load` | Charge les fixtures (données de test) dans la BDD |
| `symfony console make:controller` | Crée un contrôleur |
| `symfony console make:crud` | Crée un CRUD (Create, Read, Update, Delete) |
| `symfony console make:auth` | Crée un système d'authentification |
| `symfony console make:user` | Crée un utilisateur |
| `symfony console make:registration-form` | Crée un formulaire d'inscription |

---

<p align="center">
    <img src="https://cdn.agiliteach.org/medias/images/github-at-.gif" alt="Agiliteach" width="376">
</p>
