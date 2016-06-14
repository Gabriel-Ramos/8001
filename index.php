<?php

session_start();

if(isset($_SESSION['papel'])){
    switch($_SESSION['papel']){
        case "administrador":
            header('Location: /view/template/production/login.html');
            break;
    }
}else{
    header('Location: /view/template/production/login.html');
}

exit;

