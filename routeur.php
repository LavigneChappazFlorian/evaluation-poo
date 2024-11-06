<?php 
    require 'Utils/utils.php';

    switch($_SERVER['REDIRECT_URL']){
        case '/':
            require 'Controllers/registerCtrl.php';
            break;

        case '/login':
            require 'Controllers/loginCtrl.php';
            break; 
     
        case '/forum':
            require 'Controllers/forumCtrl.php';
            break;

        case '/account':
            require 'Controllers/accountCtrl.php';
            break;

        default:
            require 'Views/error404.php';
            break;
    }
?>