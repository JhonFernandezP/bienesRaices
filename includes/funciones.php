<?php

require  'app.php';


function incluiirTemplate($nombre, $inicio = false){  
    include TEMPLATES_URL . "/${nombre}.php";
}