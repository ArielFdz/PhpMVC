<?php
    
    function accion_listar(){
        global $aplicacion, $url_base, $variables_ruta, $controlador, $accion;

        include('modelo/feedModelo.php');

        $titulo = generarTitulo();
        $feeds= generarFeeds();

        include ('vista/feedListarVista.php');
    }