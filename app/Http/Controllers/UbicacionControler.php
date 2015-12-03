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

        $vars_localizacion = array("ciudad", "departamento");
        return view('ubicacion', compact('vars_localizacion'));
    }

}
