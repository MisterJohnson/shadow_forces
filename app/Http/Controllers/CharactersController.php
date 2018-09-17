<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-09-14
 * Time: 16:14
 */

namespace App\Http\Controllers;


use App\Character;
use Sentinel;

class CharactersController extends Controller
{
    public function index() {
        $user = Sentinel::getUser();
        $characters = Character::where('user_id', $user->id)->get();
        return view('auth.characters.index', [ 'user' => $user, 'characters' => $characters]);
    }

    public function add() {
        return response(200);
    }
}
