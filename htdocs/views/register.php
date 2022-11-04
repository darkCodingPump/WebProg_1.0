<?php
?>
<link rel="stylesheet" href="./views/css/auth.css">
<section class="pt-3 pb-3">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="./statics/register.png"
                     class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="" method="post">
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3">Registriere dich mit</p>
                        <button type="button" class="btn btn-dark btn-floating mx-1">
                            <i class="bi bi-facebook"></i>
                        </button>

                        <button type="button" class="btn btn-dark btn-floating mx-1">
                            <i class="bi bi-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-dark btn-floating mx-1">
                            <i class="bi bi-apple"></i>
                        </button>
                    </div>

                    <div class="divider d-flex align-items-center my-4 line-light ">
                        <p class="text-center fw-bold mx-3 mb-0">oder</p>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="name" id="name" class="form-control form-control-lg"
                               placeholder="Max" required />
                        <label class="form-label" for="name">Vorname</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="lastname" id="lastname" class="form-control form-control-lg"
                               placeholder="Mustermann" required />
                        <label class="form-label" for="lastname">Nachname</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="mail" id="emailAddress" class="form-control form-control-lg"
                               placeholder="Enter a valid email address" required />
                        <label class="form-label" for="emailAddress">E-Mail Adresse</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" name="password" id="password" class="form-control form-control-lg"
                               placeholder="Passwort" required />
                        <label class="form-label" for="password">Passwort</label>
                    </div>
                    <div class="form-outline mb-3">
                        <input type="password" name="passwordRep" id="passwordRep" class="form-control form-control-lg<?php echo $model->hasError('passwordRep') ? ' is-invalid' : ''?>"
                               placeholder="Passwort bestätigen" required />
                        <label class="form-label" for="passwordRep">Passwort bestätigen</label>
                        <div class="invalid-feedback">
                            <?php echo "Die Passwörter stimmen nicht überein!"?>
                        </div>
                    </div>

                    <div class="text-center text-lg-center mt-4 pt-2">
                        <button type="submit" class="btn btn-dark btn-lg">Registrieren</button>
                    </div>
                </form>
                <p class="small fw-bold mt-2 pt-1 mb-0">Du hast einen Account? <a href="/login" class="link-danger">Log dich ein</a></p>
            </div>
        </div>
    </div>
</section>