<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getIndex()
    {
        $view = view('home.index');
        return $view;
    }

    public function postIndex(Request $request)
    {
        if ($request->passcode == env('PASSCODE')) {
            $request->session()->put('loggedin', true);

            if ($request->session()->has('loggedin')) {
                return redirect('/our-wedding');
            }
        } else {
            return redirect('/')->with('errors', 'The passcode you entered is not correct.');
        }
    }

    public function getLogout(Request $request)
    {
        $request->session()->forget('loggedin');
        return redirect('/');
    }

    public function getOurWedding(Request $request)
    {
        if ($request->session()->has('loggedin')) {
            $view = view('home.our-wedding');
            $view->active_page = 'home';
            $view->title = 'Welcome';
            return $view;
        } else {
            return redirect('/')->with('errors', 'You are not logged in.');
        }
    }

    public function getStyleGuide(Request $request)
    {
        if ($request->session()->has('loggedin')) {
            $view = view('style');
            $view->active_page = 'home';
            $view->title = 'Style Guide';
            return $view;
        } else {
            return redirect('/')->with('errors', 'You are not logged in.');
        }
    }
}
