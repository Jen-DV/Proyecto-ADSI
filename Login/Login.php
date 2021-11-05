<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.87.0">
  <title>Power Car Audio</title>
  <link rel='shortcut icon' href='../Imag/CAR AUDIO.png' type='image/x-icon' sizes="16x16" />

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <?php

  include "../includes/inicio_sesion.php";

  ?>

  <main class="form-signin">
    <form method="POST" action="#">
      <img class="mb-4" src="../Imag/CAR AUDIO.png" alt="" width="220" height="120">
      <h1 class="h3 mb-3 fw-normal">Inicio Sesión</h1>

      <div class="form-floating">
        <input type="email" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email </label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Contraseña</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recuardame
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar Sesión</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
  </main>



</body>

</html>