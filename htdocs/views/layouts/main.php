<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autoblog.com - Your favourite Blog!</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="/car" class="nav-link px-2 link-dark">Blog</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Shop</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Über uns</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">Neuer Eintrag...</a></li>
            <li><a class="dropdown-item" href="#">Deine Einträge</a></li>
            <li><a class="dropdown-item" href="#">Einstellungen</a></li>
            <li><a class="dropdown-item" href="#">Profil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Abmelden</a></li>
          </ul>
        </div>
      </div>
    </div>
</header>

<div class="container">
    {{content}}
</div>

  <footer class="p-3 mb-3 border-top">
    <div class="container">
    <div class="row d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <div class="col-6">
        <h5>Section</h5>
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/car">Car</a>
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
            <button class="btn btn-primary" type="button">Anmelden</button>
          </div>
        </form>
      </div>
</div>
    </div>
    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>© 2022 Autoblog.com All rights reserved.</p>
      <ul class="list-unstyled d-flex" id="social-links">
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
</body>
</html>