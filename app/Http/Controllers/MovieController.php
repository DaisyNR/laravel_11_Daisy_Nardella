<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\MovieRequest;


class MovieController extends Controller
{
    public function create(){
        $movies = Movie::all();
        return view('movie.create', compact('movies'));
    }

    public function store(MovieRequest $request){

        $title = $request->title;
        $director = $request->director;
        $plot = $request->plot;
        $img=null;
        
        if ($request->file('img')) {
            $img = $request->file('img')->store('img', 'public');
        }

        Movie::create([
            'title'=>$title,
            'director'=>$director,
            'plot'=>$plot,
            'img'=>$img
        ]);

        return redirect()->route('movie.index')->with('message','You successfully posted your article!');
    }

    public function index(){
        $movies = Movie::all();
        return view('movie.index', ['movies'=>$movies]);
    }

    public function show(Movie $movie){
        return view('movie.show',compact('movie'));
    }

    public function edit(Movie $movie){
        return view('movie.edit',compact('movie'));
    }

    public function update(Movie $movie){
        return view('movie.update',compact('movie'));
    }

    public function delete(Movie $movie){
        return view('movie.delete',compact('movie'));
    }
}
