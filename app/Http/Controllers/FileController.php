<?php

namespace App\Http\Controllers;

use App\File;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class FileController extends Controller
{
    public function index()
    {
        $files = File::all();
        dd($files);
        if (Auth::user()->role == 'admin') {
            return view('pages.admin.products', compact('files'));
        } else {
            return view('pages.member.products', compact('files'));
        }
    }

    public function show()
    {
        return view('pages.member.details');
    }

    public function create()
    {
        return view('pages.member.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'author' => 'required',
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|file|mimes:jpeg,png',
            'file' => 'required|file|mimetypes:application/pdf'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }


        $newname = Str::random(7);
        $thumbnail_ext = $request->file('thumbnail')->extension();
        $thumbnail_name =  $newname.'.'.$thumbnail_ext;
        $thumbnail = $request->file('thumbnail')->storeAs('public/thumbnails', $thumbnail_name);

        $newname = Str::random(7);
        $file_ext = $request->file('file')->extension();
        $file_name =  $newname.'.'.$file_ext;
        $file = $request->file('file')->storeAs('public/files', $file_name);



        $user = User::find(Auth::user()->id);
        $file = $user->files()->create([
            'author' => $request->input('author'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'thumbnail' => $thumbnail_name,
            'file' => $file_name
        ]);

        if ($file) {
            return redirect()->route('home');
        }
        return redirect()->back()->with('error', 'Data gagal disimpan');
    }
}
