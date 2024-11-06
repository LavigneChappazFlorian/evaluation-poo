<?php
    function redirectTo($url) {
        header("Location: $url");
    }

    function render($path, $data = [], $template = false) { // fonction render pour remplacer et améliorer le système de "require" render("chemin du fichier", "tableau de données", "template = actif (vrai) ou pas actif (faux)")
        if ($template) {
            require "templates/$path.php";
        } else {
            require "views/$path.php";
        }
    }
?>