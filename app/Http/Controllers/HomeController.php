<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-09-09
 * Time: 14:10
 */

namespace App\Http\Controllers;


use App\Article;

class HomeController extends Controller
{
    public function index() {
        return view('pages.home');
    }
}
