<?php

namespace App\DataFixtures;

use App\Entity\Note;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $notes = [
            [
                'title' => 'Introduction to Web Development',
                'content' => 'This note covers the basics of web development including HTML, CSS, and JavaScript.'
            ],
            [
                'title' => 'Responsive Web Design Principles',
                'content' => 'Learn about the principles and techniques for creating responsive web designs that adapt to different screen sizes.'
            ],
            [
                'title' => 'Introduction to JavaScript Frameworks',
                'content' => 'Explore popular JavaScript frameworks such as React, Angular, and Vue.js.'
            ],
            [
                'title' => 'Best Practices for Web Accessibility',
                'content' => 'Discover guidelines and techniques to ensure your websites are accessible to all users, including those with disabilities.'
            ],
            [
                'title' => 'Web Security Fundamentals',
                'content' => 'Learn about common web security vulnerabilities and how to protect your web applications from attacks.'
            ],
            [
                'title' => 'Introduction to UX Design',
                'content' => 'Understand the principles of user experience (UX) design and how to create intuitive and user-friendly web interfaces.'
            ],
            [
                'title' => 'CSS Grid Layout',
                'content' => 'Explore the CSS Grid Layout module and learn how to create complex grid-based website layouts.'
            ],
            [
                'title' => 'Introduction to Backend Development',
                'content' => 'Learn the basics of server-side programming and database management for building dynamic web applications.'
            ],
            [
                'title' => 'Introduction to API Development',
                'content' => 'Discover how to build and consume APIs (Application Programming Interfaces) to enable data exchange between different systems.'
            ],
            [
                'title' => 'Web Performance Optimization',
                'content' => 'Learn techniques to optimize the performance and loading speed of your web applications.'
            ]
        ];
        
        foreach ($notes as $item) {
            $note = new Note();
            $note->setTitle($item['title']);
            $note->setContent($item['content']);
            $manager->persist($note);
        }

        $categories = [
            [
                'name' => 'Web Development'
            ],
            [
                'name' => 'JavaScript Frameworks'
            ],
            [
                'name' => 'Web Design'
            ],
            [
                'name' => 'Web Security'
            ],
            [
                'name' => 'Backend Development'
            ],
            [
                'name' => 'API Development'
            ],
            [
                'name' => 'Web Performance'
            ]
        ];

        foreach ($categories as $item) {
            $category = new Category();
            $category->setName($item['name']);
            $manager->persist($category);
        }

        $manager->flush();
    }
}
