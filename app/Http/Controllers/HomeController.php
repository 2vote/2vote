<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Displays the user dashboard.
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return View('dashboard', [
            'current_meeting' => \App\Models\Meeting::where('status', 'open')->first(),
            'meetings' => \App\Models\Meeting::where('status', '!=', 'preparation'),
        ]);
    }
}
