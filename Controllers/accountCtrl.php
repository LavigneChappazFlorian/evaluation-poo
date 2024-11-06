<?php 
    require 'Models/User.php';

    $user = new User();

    render('account', ['users' => $user->getUsers()])
?>