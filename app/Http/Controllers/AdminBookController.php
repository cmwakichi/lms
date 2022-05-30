<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AdminBookController extends Controller
{
    public function create(){
        return view('admin.books.create');
    }
    public function store(Request $request){
        $attributes = $request->validate([
            'title'=>'required',
            'author'=>'required',
            'genre'=>'required',
            'published'=>'required',
            'synopsis'=>'required',
            'image'=>['required','file']
        ]);
        $attributes['image'] = $request->file('image')->store('thumbnails');
        Book::create($attributes);

        return redirect('/');
    }
}
