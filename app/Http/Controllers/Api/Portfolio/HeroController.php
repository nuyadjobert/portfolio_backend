<?php

namespace App\Http\Controllers\Api\Portfolio;

use App\Http\Controllers\Controller;

class HeroController extends Controller
{
    public function index()
    {
        return response()->json([
            'name'       => 'Jobert Padillo Noyad',
            'title'      => 'Front End Developer',
            'subtitle'   => 'Laravel · Angular · Flutter · Kotlin · Java · MySQL · Figma',
            'bio'        => 'A passionate IT student who loves building web and mobile applications.',
            'avatar' => asset('images/avatar.jpg'),
            'resume_url' => '/files/resume.pdf',
            'socials'    => [
                ['platform' => 'github', 'url' => 'https://github.com/nuyadjobert'],
            ],
        ]);
    }
}
