<?php ob_start() ?>

<div class="container">
    <form class="userForm" method="POST">
        <div class="formInput">
            <label for="userFirstname" class="form-label">Prénom :</label>
            <input name="userFirstname" type="text" class="form-control" id="userFirstname" placeholder="Nicolas" aria-label="First name" required>
        </div>
        <div class="formInput">
            <label for="userLastname" class="form-label">Nom :</label>
            <input name="userLastname" type="text" class="form-control" id="userLastname" placeholder="Dupond" aria-label="Last name" required>
        </div>
        <div class="formInput">
            <label for="userEmail" class="form-label">Email :</label>
            <input name="userEmail" type="email" class="form-control" id="userEmail" placeholder="exemple@email.com" required>
        </div>
        <div class="formInput">
            <label for="userPassword" class="form-label">Mot de passe :</label>
            <input name="userPassword" type="password" class="form-control" id="userPassword" placeholder="1234" required>
        </div>
        <div class="formInput">
            <label for="userRole" class="form-label">Rôle :</label>
            <select class="form-select" id="userRole" name="userRole" required>
                <option value="" selected disabled>Choisir un rôle</option>
                <?php
                foreach ($data['roles'] as $role) { ?>
                    <option value="<?= $role['id'] ?>"><?= $role['name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="formInput">
            <button type="submit" name="add-user" class="btn btn-primary">Valider</button>
        </div>
    </form>
    
    <div class="login">
        <h2>Si vous avez déjà un compte</h2>
        <a href="/login">Se connecter</a>
    </div>
    
</div>

<?php
$content = ob_get_clean();
render('register/register', ['content' => $content], true);
?>