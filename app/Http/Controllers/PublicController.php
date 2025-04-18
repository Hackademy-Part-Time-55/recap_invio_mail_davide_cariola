<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            'eyebrow'   => 'INTERVIEW',
            'title'     => 'Who is … Jermaine',
            'excerpt'   => 'Introducing Jermaine – A designer who loves edgy textures and striking contrasts',
        ],
        [
            'imageLink' => 'https://hyperfocus.cc/wp-content/uploads/2024/07/ADC-Thumbnail.jpg',
            'eyebrow'   => 'ON STAGE',
            'title'     => 'ADC – Artificial Realities 2023',
            'excerpt'   => 'Our Co-Founder Paul at the ADC Digital Event on AI in Branding',
        ],
        [
            'imageLink' => 'https://hyperfocus.cc/wp-content/uploads/2024/07/Giang-Thumbnail.jpg',
            'eyebrow'   => 'INTERVIEW',
            'title'     => 'Who is … Giang?',
            'excerpt'   => 'Introducing Giang – Award winning designer with a no-bullshit attitude',
        ],
        [
            'imageLink' => 'https://hyperfocus.cc/wp-content/uploads/2024/07/Red-Dot-Thumbnail.jpg',
            'eyebrow'   => 'NEWS',
            'title'     => 'RedDot Award',
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

    /**
     * Restituisce la pagina con form di contatto
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Riceve i dati dell'utente e gestisce l'invio dell'email
     * @param Request $request
     */
    public function sendMail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $userMessage = $request->input('userMessage');

        // Il metodo render ci permette di visualizzare l'estetica della mail senza inviarla
        // return (new ContactMail($name, $email, $userMessage))->render();

        Mail::to($email)->send(new ContactMail($name, $email, $userMessage));

        return redirect()->route('homepage')->with('emailSent', 'You have succesfully sent an email');
    }
}
