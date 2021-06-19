<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $files = File::all();
        if (Auth::user()->role == "admin") {
            return view('pages.admin.home', compact('files'));
        }
        return view('pages.member.products', compact('files'));
    }
}
