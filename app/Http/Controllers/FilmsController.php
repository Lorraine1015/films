<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Film;
use App\Genre;

class FilmsController extends Controller
{
    //Nos muestra la pagina inicial
    function index (Request $req){
        $films = Film::all();
        return view('films.index',['films'=> $films]);
    }
    //Nos muestra la vista de creacion
    function create(Request $req){
        $genres=Genre::all();
        return view('films.create',['genre'=> $genres]);
    }
    //Nos muestra los datos ingresados
    function show(Request $req, Film  $film){
       return view('films.show',['film'=>$film]);
    }
    //Nos ayuda a almacenar la informacion para llevarla a la base de datos
    function store(Request $req){
        $film=$req->input('film') ;
        Film::create($film);          
       return redirect(route('films.index'));
       
    }
    //Nos ayuda a editar los datos
    function edit(Request $req,Film $film){
        return view('films.edit',['film'=>$film]);
    }
    //Nos actuliza la info.
    function update(Request $req,Film $film){
        $film->name=$req->input('film.name');
        $film->year=$req->input('film.year');
        $film->duration=$req->input('film.duration');
        $film->link=$req->input('film.link');
        $film->save();
        return redirect(route('films.show',['film'=>$film]));
    }
    //Nos elimina una fila de datos
    function delete(Request $req, Film $film){
        $film->delete();
        return redirect(route('films.index'));
    }
}