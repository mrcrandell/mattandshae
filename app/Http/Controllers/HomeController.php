<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
use App\Mail\Contact;
use Validator;

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
            $view->active_page = 'our-wedding';
            $view->title = 'Welcome';
            return $view;
        } else {
            return redirect('/')->with('errors', 'You are not logged in.');
        }
    }

    public function getPhotos(Request $request)
    {
        $view = view('home.photos');
        $view->active_page = 'photos';
        $view->title = 'Photos';
        return $view;
    }

    public function getFaq(Request $request)
    {
        if ($request->session()->has('loggedin')) {
            $view = view('home.faq');
            $view->active_page = 'faq';
            $view->title = 'FAQ';
            return $view;
        } else {
            return redirect('/')->with('errors', 'You are not logged in.');
        }
    }

    public function getAccommodations()
    {
        $view = view('home.accommodations');
        $view->active_page = 'accommodations';
        $view->title = 'Accommodations';
        return $view;
    }

    public function getContact()
    {
        $view = view('home.contact');
        $view->active_page = 'contact';
        $view->title = 'Contact';
        return $view;
    }

    public function postContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'message_text' => 'required',            ],
            [
                'name.required' => 'Please enter your name.',
                'email.required' => 'Please enter your email address.',
                'email.email' => 'Please enter a valid email address.',
                'message_text.required' => 'What? You Don\'t Want to Say Something?',
            ]
        );
        if ($validator->fails()) {
            return redirect('/contact')
                ->withErrors($validator)
                ->withInput();
        }
        Mail::to('matt@crandelldesign.com')->send(new Contact($request));
        return redirect('/contact')->with('status', 'Thank you for contacting us, we will get back to you as soon as possible.');
    }

    public function getStyleGuide(Request $request)
    {
        $view = view('style');
        $view->active_page = 'style-guide';
        $view->title = 'Style Guide';
        return $view;
    }
}
