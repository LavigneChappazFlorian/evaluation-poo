<?php 
    // Le système de connexion sera très simple et sert uniquement à accéder au compte utilisateur (en attendant de créer un réel systeme de connexion)
    require 'Models/User.php';

    $user = new User();
    
    // en cours de construction

    render('login');
?>