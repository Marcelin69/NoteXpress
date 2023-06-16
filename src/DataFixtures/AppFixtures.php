<?php

namespace App\DataFixtures;

use App\Entity\Note;
use App\Entity\User;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $users= new User();
        $users->setName("Silver Dragon");
        $users->setPassword('$2y$13$WUbUHpXU3sEo9tMwEMcb0u.NtFFmX9zo50L7Og702DXvQ0JoVvRhG');
        $users->setRoles(["ROLE_ADMIN"]);
        $users->setEmail('Dragon@gmail.com');
        $manager->persist($users);

        $users= new User();
        $users->setName("Mystic Soul");
        $users->setPassword('$2y$13$WUbUHpXU3sEo9tMwEMcb0u.NtFFmX9zo50L7Og702DXvQ0JoVvRhG');
        $users->setRoles(["ROLE_ADMIN"]);
        $users->setEmail('Soul@gmail.com');
        $manager->persist($users);

        $users= new User();
        $users->setName("Crimson Rider");
        $users->setPassword('$2y$13$WUbUHpXU3sEo9tMwEMcb0u.NtFFmX9zo50L7Og702DXvQ0JoVvRhG');
        $users->setRoles(["ROLE_USER"]);
        $users->setEmail('Rider@gmail.com');
        $manager->persist($users);

        $users= new User();
        $users->setName("Lunar Eclipse");
        $users->setPassword('$2y$13$WUbUHpXU3sEo9tMwEMcb0u.NtFFmX9zo50L7Og702DXvQ0JoVvRhG');
        $users->setRoles(["ROLE_USER"]);
        $users->setEmail('Eclipse@gmail.com');
        $manager->persist($users);

        // $user = new User();
        // $user->setName('')

        $category = new Category();
        $category ->setName('Backend');
        $category ->setUser($users);        $manager->persist($category);

        $category = new Category();
        $category ->setName('Backend');
        $category ->setUser($users);        $manager->persist($category);

        $category = new Category();
        $category ->setName('FrontEnd');
        $category ->setUser($users);        $manager->persist($category);

        $category = new Category();
        $category ->setName('FrontEnd');
        $category ->setUser($users);        $manager->persist($category);

        $note = new Note();
        $note ->setTitle('BackOffice');
        $note ->setContent('Le développement front-end se concentre sur la création d\'interfaces utilisateur et l\'amélioration de l\'expérience utilisateur. Il implique l\'utilisation de HTML, CSS et JavaScript pour construire des sites Web interactifs et des applications Web avec lesquels les utilisateurs peuvent interagir directement dans leur navigateur.');      
        $note ->setUser($users);      
        $note ->setCategory($category);      
        $manager->persist($note);

        $note = new Note();
        $note ->setTitle('Sécurité Web pour les Applications Backend');
        $note ->setContent('La sécurité Web est d\'une importance capitale lors du développement d\'applications backend. Les développeurs doivent se protéger contre les attaques courantes telles que les injections SQL, les attaques par force brute, les vulnérabilités XSS, etc. en appliquant les meilleures pratiques de sécurité, telles que la validation des entrées utilisateur, l\'utilisation de pare-feu applicatifs Web (WAF), et l\'utilisation de protocoles de sécurité tels que HTTPS.');      
        $note ->setUser($users);      
        $note ->setCategory($category);      
        $manager->persist($note);

        $note = new Note();
        $note ->setTitle('FrontEnd');
        $note ->setContent('Le développement front-end se concentre sur la création d\'interfaces utilisateur et l\'amélioration de l\'expérience utilisateur. Il implique l\'utilisation de HTML, CSS et JavaScript pour construire des sites Web interactifs et des applications Web avec lesquels les utilisateurs peuvent interagir directement dans leur navigateur.');      
        $note ->setUser($users);      
        $note ->setCategory($category);      
        $manager->persist($note);

        $note = new Note();
        $note ->setTitle('Gestion des Bases de Données avec MySQL');
        $note ->setContent('Le développement front-end évolue rapidement et plusieurs frameworks ont gagné en popularité. Parmi les meilleurs frameworks front-end en 2023, on retrouve React, Angular et Vue.js. Ces frameworks fournissent des outils et des bibliothèques efficaces qui aident les développeurs à construire des interfaces utilisateur dynamiques et réactives.');      
        $note ->setUser($users);      
        $note ->setCategory($category);      
        $manager->persist($note);


        // $manager->persist($product);

        $manager->flush();
    }
}
