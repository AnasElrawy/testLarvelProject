<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\JobPost;


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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $user = Auth::User();
        $jobPosts = JobPost::all();
        // dd($jobPosts);
        return view('home' , ['jobPosts'=> $jobPosts ]);
    }
}
