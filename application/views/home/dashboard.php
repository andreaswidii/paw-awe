<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bulma-0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W 1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script defer src="../css/script.js"></script>
    <title>Home</title>
</head>
<style>
.hero{
    background: url("../images/nasgor.jpg") center / cover;
}
</style>
<body>
<section class="hero is-info is-fullheight">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <header class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
              <a href="../index.php"><img src="../images/logo.png" alt="Logo" width="112" height="28"></a>
          </a>
          <span class="navbar-burger burger" data-target="navbarMenuHeroC">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroC" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item" style="color: white" href="../dashboard/index.php">Home</a>
            <a class="navbar-item" style="color: white" href="../dashboard/profil.php">Profil</a>
            <a class="navbar-item" style="color: white" href="../dashboard/create.php">Create Article</a>
            '; if($_SESSION['user']['username'] != null){
              echo '<span class="navbar-item">
                <div class="buttons">
                <a class="button is-light" href="../proses/prosesLogout.php">Log Out</a>
              </div>
            </span>';
            }echo '
          </div>
        </div>
      </div>
    </header>
  </div>'
?>