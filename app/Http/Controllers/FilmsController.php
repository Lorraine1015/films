<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmsController extends Controller
{
    //
    function index (Request $req){
        $films = Film::all();
        return view('films.index',['films'=> $films]);
    }
    function create(Request $req){
        return view('films.create');
    }
    function show(Request $req, Film  $film){
       return view('films.show',['film'=>$film]);
    }
    
    function store(Request $req){
        $film=$req->input('film') ;
        Film::create($film);          
       return redirect(route('films.index'));
       
    }
    function edit(Request $req,Film $film){
        return view('films.edit',['film'=>$film]);

    }
    function update(Request $req,Film $film){
        $film->name=$req->input('film.name');
        $film->year=$req->input('film.year');
        $film->duration=$req->input('film.duration');
        $film->link=$req->input('film.link');
        $film->save();
        return redirect(route('films.show',['film'=>$film]));
    }
    function delete(Request $req, Film $film){
        $film->delete();
        return redirect(route('films.index'));
    }
}
 