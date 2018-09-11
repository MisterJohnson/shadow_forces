<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-09-09
 * Time: 17:16
 */

namespace App\Http\Controllers;

use App\Article;

class ArticleController extends Controller
{
    public function getArticle($id) {
        $article = Article::find($id);
        return view('pages.article', ['article' => $article]);
    }
}
