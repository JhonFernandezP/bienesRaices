<?php

require  'app.php';


function incluiirTemplate(string $nombre,bool $inicio = false){  
    include TEMPLATES_URL . "/${nombre}.php";
}