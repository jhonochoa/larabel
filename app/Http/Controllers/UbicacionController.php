<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UbicacionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tareainicial() {

        
        $vars_localizacion = array(
            array("cali", "Bogota","Bucaramanga"),
            array("Valledupar", "cali","socorro")
            );
        
        return view('ubicacion', compact('vars_localizacion'));
    }
    public function tareainiciall(Request $request, $id) {

        
      $id_rec=$id;
    //  print_r($id_rec);exit;
       return view('ubicacion',array('id' => $id_rec));
  
    }

}
