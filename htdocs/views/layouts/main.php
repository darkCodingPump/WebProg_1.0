<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autoblog.com - Your favourite Blog!</title>
    <link rel="stylesheet" href="./views/layouts/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body class="bg-light text-dark">
<header class="mb-3 border-bottom">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
          <a id="logo_anchor" href="/" class="navbar-brand">
            <img class="logo-light"/>
          </a>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              <li class="nav-item"><a href="/" class="nav-link link-dark px-2">Home</a></li>
              <li class="nav-item"><a href="/car" class="nav-link link-dark px-2 ">Blog</a></li>
              <li class="nav-item"><a href="/shop" class="nav-link link-dark px-2 ">Shop</a></li>
              <li class="nav-item"><a href="/aboutus" class="nav-link link-dark px-2 ">Über uns</a></li>
            </ul>

          <form class="d-flex">
            <input type="search" class="form-control me-2" placeholder="Suche..." aria-label="Search">
          </form>

          <div class="dropdown">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="./statics/placeholder_portrait.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu dropdown-menu-lg-end" >
              <li><a class="dropdown-item" href="/User/newPost">Neuer Eintrag...</a></li>
              <li><a class="dropdown-item" href="/User/posts">Deine Einträge</a></li>
              <li><a class="dropdown-item" href="/User/settings">Einstellungen</a></li>
              <li><a class="dropdown-item" href="/User">Profil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/logout">Abmelden</a></li>
              <div class="form-check form-switch ms-auto mt-3 me-3">
  <label class="form-check-label ms-3" for="lightSwitch">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width="25"
      height="25"
      fill="currentColor"
      class="bi bi-brightness-high"
      viewBox="0 0 16 16"
    >
      <path
        d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
      />
    </svg>
  </label>
  <input class="form-check-input" type="checkbox" id="lightSwitch" />
</div>
            </ul>
          </div>
        </div>
      </div>
  </nav>
</header>
<main id="content">
<div class="container blogContent-light">
    {{content}}
</div>
</main>
  <footer class="p-2 pb-0 border-top">
    <div class="container">
    <div class="row d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <div class="col-6">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link link-dark" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link-dark" href="/car">Car</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link-dark" href="/shop">Shop</a>
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
            <button class="btn btn-primary" type="button">Anmelden</button>
          </div>
        </form>
      </div>
</div>
    </div>
    <div class="d-flex flex-column flex-sm-row justify-content-between border-top">
      <p>© 2022 Autoblog.com All rights reserved.</p>
      <ul class="list-unstyled d-flex" id="social-links">
      <li>Uns gibts auch hier: </li>
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

<script src="./views/js/switch.js"></script>
</body>
</html>