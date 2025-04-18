<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\HasJournalArticles;

class ArticleController extends Controller
{
    use HasJournalArticles;

    /**
     * Mostra il dettaglio dell'articolo
     * @param string $title
     */
    public function show(string $title)
    {
        $articles = $this->journalArticles();

        dd($articles, $title);

        return view('article.show', ['article' => $article]);
    }
}
