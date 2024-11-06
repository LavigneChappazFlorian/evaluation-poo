<?php ob_start() ?>

<div class="container">
    <form class="userForm" method="POST">
        <div class="formInput">
            <label for="userEmail" class="form-label">Email :</label>
            <input name="userEmail" type="email" class="form-control" id="userEmail" placeholder="exemple@email.com" required>
        </div>
        <div class="formInput">
            <label for="userPassword" class="form-label">Mot de passe :</label>
            <input name="userPassword" type="password" class="form-control" id="userPassword" placeholder="1234" required>
        </div>
        <div class="formInput">
            <button type="submit" name="userLogin" class="btn btn-primary">Se connecter</button>
        </div>
    </form>
    
</div>

<?php
$content = ob_get_clean();
render('login/login', ['content' => $content], true);
?>