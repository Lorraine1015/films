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
}
 