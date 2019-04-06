<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Returns the login view.
     * 
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return View('login');
    }

    /**
     * Check user credentials.
     * 
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function do_login(Request $request)
    {
        // Handle the login
    }

    public function do_logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
