<?php
namespace App\Http\Controllers\Api\Portfolio;

use App\Http\Controllers\Controller;

class ExperienceController extends Controller
{
    public function index()
    {
        return response()->json([
            [
                'type'        => 'ThebroTect',
                'company'     => 'Capstone Project',
                'role'        => 'Frontend Developer',
                'start'       => '2025',
                'end'         => '2027',
                'description' => 'Served as the Frontend Developer for ThebroTect, a cacao disease detection mobile application. Responsible for designing and building the user interface using Flutter, enabling farmers to scan and identify cacao diseases such as Black Pod and Pod Borer. Also developed the admin dashboard with heatmap visualization for monitoring disease spread across farm locations.',
                'tags'        => ['Flutter', 'Dart', 'UI/UX', 'Mobile Development'],
            ],
            [
                'type'        => 'Registrar Module',
                'company'     => 'Academic Project',
                'role'        => 'Full Stack Developer',
                'start'       => '2026',
                'end'         => '2026',
                'description' => 'Acted as the Full Stack Developer for the Registrar Module, handling both backend and frontend development. Built a RESTful API using Laravel to manage staff, program curriculum, subjects, and section assignments. Developed the Angular frontend and deployed the entire system on Railway.',
                'tags'        => ['Laravel', 'Angular', 'REST API', 'MySQL', 'Railway'],
            ],
        ]);
    }
}