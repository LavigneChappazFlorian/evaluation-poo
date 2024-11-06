<?php ob_start() ?>

<div class="container">
    <?php foreach ($data['users'] as $user) { ?>
        <div class="userInfo">
            <h2>Prénom :</h2> 
            <span><?= $user['firstname'] ?></span>

            <h2>Nom :</h2> 
            <span><?= $user['lastname'] ?></span>


            <h2>Email :</h2> 
            <span><?= $user['email'] ?></span>

            <h2>Mot de passe :</h2> 
            <span><?= $user['password'] ?></span>
        </div>
            
        </div>
    <?php } ?>
</div>

<?php
$content = ob_get_clean();
render('account/user', ['content' => $content], true);
?>