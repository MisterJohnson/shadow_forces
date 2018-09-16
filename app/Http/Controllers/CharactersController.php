<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-09-14
 * Time: 16:14
 */

namespace App\Http\Controllers;


class CharactersController extends Controller
{
    public function index() {
        return view('auth.characters.index');
    }
}
