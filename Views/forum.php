<?php ob_start() ?>

<div class="container">
    <h1>Bienvenue sur notre site de forums/blogs !</h1>
    <a href="/account">Voir ton compte utilisateur</a>
</div>

<?php 
    $content = ob_get_clean();
    render('default', ['content' => $content], true);
?>