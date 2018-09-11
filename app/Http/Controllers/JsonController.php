<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function getArticles($limit = 15) {
        $articles = Article::all()->take($limit);
        return json_encode($articles);
    }
}
