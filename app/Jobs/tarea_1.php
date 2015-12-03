<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$ciudad  = "Bogota";
$departamento = "Cundimarca";
$evento = "LARABEL";

$vars_región = array("ciudad", "departamento");

$resultado = compact("evento", "nada_aquí", $vars_región);
print_r($resultado);

