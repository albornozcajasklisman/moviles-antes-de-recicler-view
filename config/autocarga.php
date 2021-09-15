<?php
spl_autoload_register(function ($nombre_clase){
    require_once $nombre_clase.".php";
});