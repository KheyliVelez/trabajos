<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\ejerModel;
use Database\Seeders\ejer1;

class ejerController extends Controller
{
   

    public function create()
    {
        return view ('ejercicio.create');
    }

    public function store(Request $request)
    {
       
        $ejer=new ejerModel ();
        $ejer->id =$request->id;
        $ejer->name =$request->name;
        $ejer->descripción =$request->descripción;
        $ejer->precio =$request->precio;
        $ejer->existencias =$request->existencias;
        $ejer->proveedor =$request->proveedor;
        

        $ejer->save();


    }
}
