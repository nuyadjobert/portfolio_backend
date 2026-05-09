<?php
namespace App\Http\Controllers\Api\Portfolio;

use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index()
    {
        return response()->json([
            [
                'id'          => 1,
                'title'       => 'ThebroTect Mobile Application',
                'description' => 'A cacao disease detection mobile app that empowers farmers to scan cacao pods and accurately identify diseases such as Black Pod and Pod Borer using machine learning. Features an admin dashboard with heatmap visualization to monitor disease spread across farm locations in real time.',
                'tags'        => ['Flutter', 'Dart', 'MySQL', 'Machine Learning'],
                'demo_url'    => null,
                'repos'       => [
                    ['label' => 'Repository', 'url' => 'https://github.com/nuyadjobert/TheobroTect'],
                ],
                'featured'    => true,
            ],
            [
                'id'          => 2,
                'title'       => 'Registrar Module',
                'description' => 'A full-stack registrar management system that handles staff management, program curriculum, subjects, and section assignments. Built with a Laravel REST API backend and an Angular frontend, deployed on Railway for reliable cloud hosting.',
                'tags'        => ['Laravel', 'Angular', 'REST API', 'Railway'],
                'demo_url'    => null,
                'repos'       => [
                    ['label' => 'Backend',  'url' => 'https://github.com/nuyadjobert/Registrar_module1'],
                    ['label' => 'Frontend', 'url' => 'https://github.com/nuyadjobert/registrar-frontend'],
                ],
                'featured'    => false,
            ],
        ]);
    }
}