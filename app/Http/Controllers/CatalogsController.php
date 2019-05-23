<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;

class CatalogsController extends Controller
{
    
    //Nos muestra la pagina inicial
    function index (Request $req){
        $catalogs = Catalog::all();
        return view('catalogs.index',['catalogs'=> $catalogs]);
    }
    //Nos muestra la vista de creacion
    function create(Request $req){
        return view('catalogs.create');
    }
    //Nos muestra los datos ingresados
    function show(Request $req, Catalog  $catalog){
       return view('catalogs.show',['catalog'=>$catalog]);
    }
    //Nos ayuda a almacenar la informacion para llevarla a la base de datos
    function store(Request $req){
        $catalog=$req->input('catalog') ;
        Catalog::create($catalog);          
       return redirect(route('catalogs.index'));
       
    }
    //Nos ayuda a editar los datos
    function edit(Request $req,Catalog $catalog){
        return view('catalogs.edit',['catalog'=>$catalog]);

    }
    //Nos actuliza la info.
    function update(Request $req,Catalog $catalog){
        $catalog->name=$req->input('catalog.name');
        $catalog->description=$req->input('catalog.description');
        $catalog->save();
        return redirect(route('catalogs.show',['catalog'=>$catalog]));
    }
    //Nos elimina una fila de datos
    function delete(Request $req, Catalog $catalog){
        $catalog->delete();
        return redirect(route('catalogs.index'));
    }
}
