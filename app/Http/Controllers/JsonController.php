<?php

namespace App\Http\Controllers;

use App\Article;
use App\Metatype;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function getArticles($limit = 15) {
        $articles = Article::all()->take($limit);
        return json_encode($articles);
    }

    public function getMetatypes() {
        $metatype = Metatype::all('id', 'metatype', 'traits_label', 'traits_id', 'special_points', 'description', 'priority_avail', 'metatype_parent', 'metatype_category', 'karma_cost');
        return json_encode($metatype);
    }
}
