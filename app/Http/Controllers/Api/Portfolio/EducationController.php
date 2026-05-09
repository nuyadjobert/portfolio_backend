<?php
namespace App\Http\Controllers\Api\Portfolio;

use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    public function index()
    {
        return response()->json([
            [
                'level'          => 'Tertiary',
                'school'         => 'Aces Tagum College Inc.',
                'degree'         => 'Bachelor of Science in Information Technology',
                'start'          => '2023',
                'end'            => '2027',
                'honors'         => null,
                'certifications' => [
                    [
                        'title'  => 'UI/UX Designer of the Year',
                        'issuer' => 'Aces Tagum College Inc.',
                        'year'   => '2026',
                    ],
                ],
            ],
            [
                'level'          => 'Secondary',
                'school'         => 'Kimamon National High School',
                'degree'         => 'Senior High School - Tech Voc Horticulture Strand',
                'start'          => '2013',
                'end'            => '2018',
                'honors'         => null,
                'certifications' => [
                    [
                        'title'  => 'National Certificate II in Horticulture',
                        'issuer' => 'TESDA',
                        'year'   => '2018',
                    ],
                ],
            ],
            [
                'level'          => 'Elementary',
                'school'         => 'Lunga-og Elementary School',
                'degree'         => 'Elementary Education',
                'start'          => '2009',
                'end'            => '2013',
                'honors'         => 'With Honors',
                'certifications' => [
                    [
                        'title'  => '1st Honorable Mention',
                        'issuer' => 'Lunga-og Elementary School',
                        'year'   => '2013',
                    ],
                ],
            ],
        ]);
    }
}