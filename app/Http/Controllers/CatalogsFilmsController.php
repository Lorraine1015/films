<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Catalog;

class CatalogsFilmsController extends Controller
{
    //
    public function edit(Request $req,Film $film){
        $catalogs=Catalog::all();
        return view ('films.catalogs.edit',['film'=>$film,'catalog'=>$catalogs]);
    }
    public function update(Request $req,Film $film){
        $ct=$req->input('catalogs');
        $film->catalogs()->attach($ct);
        return redirect(route('films.show',['film'=>$film]));
    }
}
 