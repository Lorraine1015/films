<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenresController extends Controller
{
    //
    function index(Request $req){
        $genres= Genre::all();
        return view('genres.index',['genres'=>$genres]);
    }
    function create(Request $req){
        return view('genres.create');
    }
    function show(Request $req,Genre $genre){
        return view('genres.show',['genre'=>$genre]);
    }
    function store(Request $req){
        $genre=$req->input('genre');
        Genre::create($genre);
        return redirect(route('genres.index'));
    }
    function edit(Request $req,Genre $genre){
        return view('genres.edit',['genre'=>$genre]);
    }
    function update(Request $req,Genre $genre){
        $genre->name=$req->input('genre.name');
        $genre->save();
        return redirect(route('genres.show',['genre'=>$genre]));
    }
    function delete(Request $req,Genre $genre){
        $genre->delete();
        return redirect(route('genres.index'));
    }
}
