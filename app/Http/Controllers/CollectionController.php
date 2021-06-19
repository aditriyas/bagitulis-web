<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $files = File::all();
        return view('pages.collection', compact('files'));
    }

    public function show($id)
    {
        $file = File::find($id);
        if ($file) {
            return view('pages.details', compact('file'));
        }
        abort(404);
    }
}
