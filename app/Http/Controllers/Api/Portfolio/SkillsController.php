<?php
namespace App\Http\Controllers\Api\Portfolio;

use App\Http\Controllers\Controller;

class SkillsController extends Controller
{
    public function index()
    {
        $cdn = 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons';

        return response()->json([
            [
                'category' => 'Backend', 'proficiency' => 75,
                'skills'   => [
                    ['name' => 'Laravel',  'icon' => "$cdn/laravel/laravel-plain.svg"],
                    ['name' => 'PHP',      'icon' => "$cdn/php/php-original.svg"],
                    ['name' => 'MySQL',    'icon' => "$cdn/mysql/mysql-original.svg"],
                    ['name' => 'REST API', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg'],
                ],
            ],
            [
                'category' => 'Frontend & Mobile', 'proficiency' => 85,
                'skills'   => [
                    ['name' => 'Angular',    'icon' => "$cdn/angularjs/angularjs-original.svg"],
                    ['name' => 'TypeScript', 'icon' => "$cdn/typescript/typescript-original.svg"],
                    ['name' => 'HTML/CSS',   'icon' => "$cdn/html5/html5-original.svg"],
                    ['name' => 'SCSS',       'icon' => "$cdn/sass/sass-original.svg"],
                    ['name' => 'Flutter',    'icon' => "$cdn/flutter/flutter-original.svg"],
                    ['name' => 'Dart',       'icon' => "$cdn/dart/dart-original.svg"],
                    ['name' => 'Kotlin',     'icon' => "$cdn/kotlin/kotlin-original.svg"],
                ],
            ],
            [
                'category' => 'Desktop',  'proficiency' => 60,
                'skills'   => [
                    ['name' => 'Java',       'icon' => "$cdn/java/java-original.svg"],
                    ['name' => 'Java Swing', 'icon' => "$cdn/java/java-original.svg"],
                ],
            ],
            [
                'category' => 'Tools',  'proficiency' => 70,
                'skills'   => [
                    ['name' => 'GitHub',  'icon' => "$cdn/github/github-original.svg"],
                    ['name' => 'Postman', 'icon' => "$cdn/postman/postman-original.svg"],
                    ['name' => 'Railway', 'icon' => "$cdn/railway/railway-original.svg"],
                ],
            ],

            
        ]);
    }
}