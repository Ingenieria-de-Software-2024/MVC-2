<?php

function debuguear($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) {
    $s = htmlspecialchars($html);
    return $s;
}

// Función que revisa que el usuario este autenticado
function isAuth() {
    session_start();
    if(!isset($_SESSION['login'])) {
        header('Location: /MVC-2/'); //AGREGAR RUTA
    }
}
function isAuthApi() {
    getHeadersApi();
    session_start();
    if(!isset($_SESSION['auth_user'])) {
        echo json_encode([    
            "mensaje" => "No esta autenticado",

            "codigo" => 4,
        ]);
        exit;
    }
}

function isNotAuth(){
    session_start();
    if(isset($_SESSION['auth'])) {
        header('Location: /auth/login'); //GREGAMOS LOGIN(SI NO ENCUTRA ADMINISTRADOR REGRESA AL LOGIN)
    }
}


function hasPermission(array $permisos){

    $comprobaciones = [];
    foreach ($permisos as $permiso) {

        $comprobaciones[] = !isset($_SESSION[$permiso]) ? false : true;
      
    }

    if(array_search(true, $comprobaciones) !== false){}else{
        header('Location: /MVC-2/logout'); //AGREGAMOS RUTA Y LOGOUT
    }
}

function hasPermissionApi(array $permisos){
    getHeadersApi();
    $comprobaciones = [];
    foreach ($permisos as $permiso) {

        $comprobaciones[] = !isset($_SESSION[$permiso]) ? false : true;
      
    }

    if(array_search(true, $comprobaciones) !== false){}else{
        echo json_encode([     
            "mensaje" => "No tiene permisos",

            "codigo" => 4,
        ]);
        exit;
    }
}

function getHeadersApi(){
    return header("Content-type:application/json; charset=utf-8");
}

function asset($ruta){
    return "/". $_ENV['APP_NAME']."/public/" . $ruta;
}