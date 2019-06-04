<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Catalog;

class CatalogsFilmsController extends Controller
{
    //
    public function edit(Request $req, Catalog $catalog){
        $films=Film::all();
        return view ('films.catalogs.edit',['films'=>$films,'catalog'=>$catalog]);
    }
    public function update(Request $req, Catalog $catalog){
        $ct=$req->input('catalogs');
        $catalog->films()->attach($ct);
        return redirect(route('catalogs.show', ['catalog' => $catalog]));
    }
}
 