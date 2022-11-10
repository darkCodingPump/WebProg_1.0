<?php

use app\core\Application;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autoblog.com - Your favourite Blog!</title>
    <link rel="stylesheet" href="/views/layouts/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="icon" href="../favicon.png" type="image/png">
</head>
<body class="bg-light text-dark">
<header class="">
    <nav class="navbar navbar-expand-lg shadow-lg p-2 rounded">
        <div class="container-fluid">
            <a id="logo_anchor" href="/" class="navbar-brand">
                <img class="logo-light"/>
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item"><a href="/" class="nav-link link-dark px-2">Home</a></li>
                    <li class="nav-item"><a href="/blog" class="nav-link link-dark px-2 ">Blog</a></li>
                    <li class="nav-item"><a href="/car" class="nav-link link-dark px-2 ">Autos</a></li>
                    <li class="nav-item"><a href="/shop" class="nav-link link-dark px-2 ">Shop</a></li>
                </ul>
                <div class="form-check form-switch ms-auto me-3">
                    <label class="form-check-label ms-3" for="lightSwitch">
                        <i class="bi bi-moon-stars"></i>
                    </label>
                    <input class="form-check-input" type="checkbox" id="lightSwitch"/>
                </div>
                <form action="" method="post" class="d-flex">
                    <input type="search" name="query" class="form-control me-2" placeholder="Suche..." aria-label="Search">
                </form>
                <?php if (!Application::isGuest()): ?>
                    <div class="dropdown">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <img src="/statics/placeholder_portrait.png" alt="User" width="32" height="32"
                                 class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href="/newPost">Neuer Eintrag...</a></li>
                            <li><a class="dropdown-item" href="/posts">Deine Einträge</a></li>
                            <li><a class="dropdown-item" href="/profile">Profil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/logout">Abmelden</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="text-center text-lg-center">
                        <a type="button" href="/login" class="btn btn-dark btn-lg">Login</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>
<main id="content">
    <div class="container blogContent-light">
        <?php if (Application::$app->session->getFlash('success')): ?>
            <div class="alert alert-success">
                <?php echo Application::$app->session->getFlash('success') ?>
            </div>
        <?php endif ?>
        <div class="pt-3 pb-3">
            {{content}}
        </div>

    </div>
</main>
<footer class="p-2 pb-0 shadow-lg">
    <div class="container">
        <div class="row d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <div class="col-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link link-dark" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-dark" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-dark" href="/car">Autos</a>
                    </li>
                </ul>
            </div>
            <div class="col-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link link-dark" href="/shop">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-dark" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-dark" href="/aboutus">Über uns</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-5 justify-content-center offset-md-1 mb-3">
                <form>
                    <h5>Melde dich zu unserem Newsletter an!</h5>
                    <p>Monatliche Meldungen über die beliebtesten Beiträge.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">E-Mail Adresse</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="E-Mail Adresse">
                        <button class="btn btn-dark text-center" type="button">Anmelden</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column flex-sm-row justify-content-between border-top">
        <p>© 2022 Autoblog.com All rights reserved.</p>
        <ul class="list-unstyled d-flex" id="social-links">
            <li>Uns gibts auch hier:</li>
            <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-twitter"></i></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-instagram"></i></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-facebook"></i></a></li>
        </ul>
    </div>
</footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

<script src="/views/js/switch.js"></script>
</body>
</html>