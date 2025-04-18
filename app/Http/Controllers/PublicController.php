<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public array $recentWorks = [
        [
            'imageLink' => 'https://hyperfocus.cc/wp-content/uploads/2025/01/Jucr-thumb-2.png',
            'title'     => 'JUCR',
            'subtitle'  => '▷ JUCR end to end e-mobility',
        ],
        [
            'imageLink' => 'https://hyperfocus.cc/wp-content/uploads/2025/03/Dayy-thumbnail.jpg',
            'title'     => 'DAYY',
            'subtitle'  => '▷ DAYY Let\'s Rethink Tomorrow',
        ],
        [
            'imageLink' => 'https://hyperfocus.cc/wp-content/uploads/2024/10/Thumbnail-Static-scaled.jpg',
            'title'     => 'IMAGINE',
            'subtitle'  => '▷Music & Sound',
        ],
        [
            'imageLink' => 'https://hyperfocus.cc/wp-content/uploads/2024/07/Undiscovered-Thumbnail.jpg',
            'title'     => 'Undiscovered',
            'subtitle'  => '▷ Finding only the very best talents',
        ],
    ];

    public array $articles = [
        [
            'imageLink' => 'https://hyperfocus.cc/wp-content/uploads/2024/07/Jermaine-Thumbnail.jpg',
            'title'     => 'INTERVIEW',
            'excerpt'   => 'Introducing Jermaine – A designer who loves edgy textures and striking contrasts',
        ],
        [
            'imageLink' => 'https://hyperfocus.cc/wp-content/uploads/2024/07/ADC-Thumbnail.jpg',
            'title'     => 'ON STAGE',
            'excerpt'   => 'Our Co-Founder Paul at the ADC Digital Event on AI in Branding',
        ],
        [
            'imageLink' => 'https://hyperfocus.cc/wp-content/uploads/2024/07/Giang-Thumbnail.jpg',
            'title'     => 'INTERVIEW',
            'excerpt'   => 'Introducing Giang – Award winning designer with a no-bullshit attitude',
        ],
        [
            'imageLink' => 'https://hyperfocus.cc/wp-content/uploads/2024/07/Red-Dot-Thumbnail.jpg',
            'title'     => 'NEWS',
            'excerpt'   => 'Hyperfocus wins prestigious RedDot Award for our work with Heimplanet',
        ],
    ];


    /**
     * Restituisce la homepage
     */
    public function homepage()
    {
        return view(
            view: 'welcome',
            data: [
                'recentWorks' => $this->recentWorks,
                'articles'    => $this->articles,
            ]
        );
    }
}
