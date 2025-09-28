<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;


class MovieController extends Controller
{
    public function create(){
        $movies = Movie::all();
        return view('movie.create', compact('movies'));
    }

    public function store(Request $request){

        $movie = Movie::create([
            'title'=>$request->title,
            'director'=>$request->director,
            'plot'=>$request->plot,
            'img'=>$request->file('img')->store('images','public')
        ]);

        return redirect()->route('movie.index')->with('successMessage','You successfully posted your article!');
    }

    public function index(){
        $movies = Movie::all();
        return view('movie.index', ['movies'=>$movies]);
    }
}
