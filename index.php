<?php

session_start();

if(isset($_SESSION['papel'])){
    switch($_SESSION['papel']){
        case "administrador":
            header('Location: /view/template/production2/login.html');
            break;
    }
}else{
    header('Location: /view/template/production2/login.html');
}

exit;

