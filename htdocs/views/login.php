<?php
?>
<link rel="stylesheet" href="./views/css/auth.css">
<section class="pt-3 pb-3">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <h1> Login </h1>
                <img src="./statics/login.png"
                     class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form>
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3">Melde dich an mit</p>
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

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" class="form-control form-control-lg"
                               placeholder="Gib deine E-Mail Adresse ein..." />
                        <label class="form-label" for="form3Example3">E-Mail Adresse</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" id="form3Example4" class="form-control form-control-lg"
                               placeholder="Passwort" />
                        <label class="form-label" for="form3Example4">Passwort</label>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Angemeldet bleiben
                            </label>
                        </div>
                        <a href="#!" class="text-body">Passwort vergessen??</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="button" class="btn btn-dark btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    </div>
                </form>
                <p class="small fw-bold mt-2 pt-1 mb-0">Noch kein Account? <a href="/register" class="link-danger">Register</a></p>
            </div>
        </div>
    </div>
</section>