<?php 
    require 'Models/User.php';
    require 'Models/Role.php';

    $user = new User();
    $role = new Role();

    if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
        if ((isset($_POST['add-user']))){
            $email =  $_POST['userEmail'];
            $firstname = $_POST['userFirstname'];
            $lastname =  $_POST['userLastname'];
            $password =  $_POST['userPassword'];
            $id_roles =  $_POST['userRole'];
            $user->createUser($email, $firstname, $lastname, $password, $id_roles);
        }
        redirectTo('/forum');
        // (systeme ou si ou l'utilisateur est un admin, il a accès à plus de fonctionnalités)
    //     if ($id_roles == 'user') {
            
    //     }
    };

    render('register', ['roles' => $role->getRoles()]);
?>