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
    public function index(Request $request)
    {
        $request->session()->forget('register');
        if (Auth::user()->role == "admin") {
            $files = File::all();
            return view('pages.admin.home', compact('files'));
        }
        $files = Auth::user()->files;
        return view('pages.member.products', compact('files'));
    }
}
