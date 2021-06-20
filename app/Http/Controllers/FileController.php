<?php

namespace App\Http\Controllers;

use App\File;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class FileController extends Controller
{
    public function index()
    {
        $files = File::all();
        if (Auth::user()->role == 'admin') {
            return view('pages.admin.products', compact('files'));
        } else {
            return view('pages.member.collections', compact('files'));
        }
    }

    public function show($id)
    {
        $file = File::where('id', $id)->first();
        if ($file) {
            if (Auth::user()->role == 'admin') {
                return view('pages.admin.details', compact('file'));
            } else {
                return view('pages.member.details', compact('file'));
            }
        }
        abort(404);
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

    public function edit($id)
    {
        if (Auth::user()->role == 'admin') {
            $file = File::where('id', $id)->first();
            if ($file) {
                return view('pages.admin.edit', compact('file'));
            }
            abort(404);
        } else {
            $file = Auth::user()->files()->where('id', $id)->first();
            if ($file) {
                return view('pages.member.edit', compact('file'));
            }
            abort(404);
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'author' => 'required',
            'title' => 'required',
            'description' => 'required',
            'new-thumbnail' => 'sometimes|file|mimes:jpeg,png',
            'new-file' => 'sometimes|file|mimetypes:application/pdf'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }


        $file = File::find($request->input('id'));
        if ($request->file('new-thumbnail')) {
            // upload thumbnail baru
            $newname = Str::random(7);
            $thumbnail_ext = $request->file('new-thumbnail')->extension();
            $thumbnail_name =  $newname.'.'.$thumbnail_ext;
            $newthumbnail = $request->file('new-thumbnail')->storeAs('public/thumbnails', $thumbnail_name);
            $request->merge(['thumbnail' => $thumbnail_name]);
            // hapus thumbnail lama
            Storage::delete('public/thumbnails/'.$file->thumbnail);
        }

        if ($request->file('new-file')) {
            // Upload file baru
            $newname = Str::random(7);
            $file_ext = $request->file('new-file')->extension();
            $file_name =  $newname.'.'.$file_ext;
            $newfile = $request->file('new-file')->storeAs('public/files', $file_name);
            $request->merge(['file' => $file_name]);
            // Hapus file lama
            Storage::delete('public/files/'.$file->file);
        }

        // update database
        $file = $file->update($request->all());

        if ($file) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.product.show', ['id' => $request->input('id')]);
            }
            return redirect()->route('member.product.show', ['id' => $request->input('id')]);
        }
        return redirect()->back()->with('error', 'Data gagal disimpan');
    }

    public function destroy($id)
    {
        if (Auth::user()->role == 'admin') {
            $file = File::where('id', $id)->first();
        } else {
            $file = Auth::user()->files()->where('id', $id)->first();
        }

        if ($file) {
            // Hapus file dan thumbnail
            Storage::delete('public/thumbnails/'.$file->thumbnail);
            Storage::delete('public/files/'.$file->file);

            // Hapus data di database
            $file->delete();

            return redirect()->route('home');
        }
        abort(404);
    }
}
