<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Portfolio\HeroController;
use App\Http\Controllers\Api\Portfolio\SkillsController;
use App\Http\Controllers\Api\Portfolio\ProjectsController;
use App\Http\Controllers\Api\Portfolio\ExperienceController;
use App\Http\Controllers\Api\Portfolio\EducationController;
use App\Http\Controllers\Api\Portfolio\BlogController;
use App\Http\Controllers\Api\Portfolio\ContactController;

Route::prefix('portfolio')->group(function () {
    Route::get('/hero',       [HeroController::class,       'index']);
    Route::get('/skills',     [SkillsController::class,     'index']);
    Route::get('/projects',   [ProjectsController::class,   'index']);
    Route::get('/experience', [ExperienceController::class, 'index']);
    Route::get('/education',  [EducationController::class,  'index']);
    Route::get('/blog',       [BlogController::class,       'index']);
    Route::post('/contact',   [ContactController::class,    'send']);
});