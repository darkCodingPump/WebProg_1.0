<?php $infos = $model->getInfos() ?>
<h1>Profil</h1>
<form action="" method="post">
    <div class="form-outline mb-4">
        <input type="text" name="name" id="name" value="<?php echo $infos['name'] ?>" class="form-control form-control-lg"
               placeholder="Max" required />
        <label class="form-label" for="name">Vorname</label>
    </div>

    <div class="form-outline mb-4">
        <input type="text" name="lastname" id="lastname" value="<?php echo $infos['lastname'] ?>" class="form-control form-control-lg"
               placeholder="Mustermann" required />
        <label class="form-label" for="lastname">Nachname</label>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="email" name="email" id="emailAddress" value="<?php echo $infos['email'] ?>" class="form-control form-control-lg<?php echo $model->hasError('email') ? ' is-invalid' : ''?>"
               placeholder="Enter a valid email address" required />
        <label class="form-label" for="emailAddress">E-Mail Adresse</label>
        <div class="invalid-feedback">
            <?php echo "Es besteht bereits ein Account mit dieser Adresses!"?>
        </div>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-3">
        <input type="password" name="password" id="password" value="<?php echo $infos['password'] ?>" class="form-control form-control-lg<?php echo $model->hasError('password') ? ' is-invalid' : ''?>"
               placeholder="Passwort" required />
        <label class="form-label" for="password">Passwort</label>
        <div class="invalid-feedback">
            <?php echo "Password überprüfen"?>
        </div>
    </div>

    <div class="text-center text-lg-center mt-4 pt-2">
        <button type="submit" class="btn btn-dark btn-lg">Speichern</button>
    </div>
</form>