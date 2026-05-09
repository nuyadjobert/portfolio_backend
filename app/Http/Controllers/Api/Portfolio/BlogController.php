<?php
namespace App\Http\Controllers\Api\Portfolio;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return response()->json([
            [
                'id'       => 1,
                'title'    => 'How to Fix CORS in Laravel',
                'excerpt'  => 'A quick guide to solving CORS issues between Laravel and Angular.',
                'date'     => '2024-11-01',
                'tags'     => ['Laravel', 'Angular', 'CORS'],
                'image'    => '/images/blog/cors.png',
                'url'      => '/blog/how-to-fix-cors-in-laravel',
            ],
        ]);
    }
}