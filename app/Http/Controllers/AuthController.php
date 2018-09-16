<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-09-15
 * Time: 11:08
 */

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;
use Sentinel;

class AuthController extends Controller
{
    protected $messageBag = null;

    /**
     * Initializer.
     *
     */
    public function __construct()
    {
        $this->messageBag = new MessageBag;

    }
    /**
     * Account sign in form processing.
     * @param Request $request
     * @return mixed
     */
    public function postSignin(Request $request)
    {

        $user = User::where('email', $request->email)->get();
        $user = Sentinel::findById($user[0]->id);
        try {
            // Try to log the user in
            if (Sentinel::authenticate($request->only(['email', 'password']), $request->get('remember-me', false))) {
                // Redirect to the dashboard page
                return Redirect::route("dashboard")->with('success', trans('auth/message.signin.success'));
            }
            $this->messageBag->add('email', trans('auth/message.account_not_found'));
        } catch (NotActivatedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_not_activated'));
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            $this->messageBag->add('email', trans('auth/message.account_suspended', compact('delay')));
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors($this->messageBag);
    }

    /**
     * Account sign in.
     *
     * @return mixed
     */
    public function getSignin()
    {
        // Is the user logged in?
        if (Sentinel::check()) {
            dd('what the fuck i am login?');
            return redirect::route('dashboard');
        }

        $articles = Article::orderBy('created_at', 'asc')->take(4)->get();

        // Show the page
        return view('pages.login', ['articles' => $articles]);
    }

    public function dashboard() {
        response(200);
    }
}
