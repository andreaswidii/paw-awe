<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bulma-0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Home</title>
</head>
<body>
<section class="hero is-info is-fullheight">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <header class="navbar">
      <div class="container">
        <div class="navbar-brand">
        <a class="navbar-item" href="../index.php">
              <img src="./images/logo.png" alt="Logo" width="119" height="35">
          </a>
          <span class="navbar-burger burger" data-target="navbarMenuHeroC">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroC" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item" style="color: white" href="./dashboard/profil.php">Profil</a>
            <a class="navbar-item" style="color: white" href="./dashboard/create.php">Create Article</a>
            <span class="navbar-item">
                <div class="buttons">
                  <a class="button is-link" href="./LogIn.php">
                    <strong>Masuk</strong>
                  </a>
                </div>
            </span>
          </div>
        </div>
      </div>
    </header>
  </div>

  <div class="hero-body">
    <div class="container is-center">
      
        <center>
        <h1 class="has-text-danger has-text-weight-semibold" style="font-size: 100px;"> Hellow Guest</h1>
        <h2 class="subtitle has-text-grey-lighter">Ingin Buat Reviewmu Sendiri</h2>
        <a class="button is-warning is-rounded" href='./LogIn.php'>Daftar Sekarang</a>
        </center>
      
    </div>
  </div>
</section>

<section id="home" class="section">
    <div class="container is-fullhd">
        <?php
          include('./db.php');
          $query = mysqli_query($con, "SELECT * FROM artikel") or die(mysqli_error($con)); 
          $data = mysqli_fetch_assoc($query);
          while($data = mysqli_fetch_assoc($query)){
            echo '<div class="box" style=width:"120px">
            <article class="media">
              <div class="media-left">
                <figure class="image is-64x64">
                  <img src="'. $data['foto'] . '" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>'. $data['username'] . '</strong> <small>'. $data['nama_makanan'] . '</small> <small>31m</small>
                    <br>
                    '. $data['judul'] . '
                  </p>
                </div>
                <nav class="level is-mobile">
                  <div class="level-left">
                    <a class="level-item" aria-label="like">
                      <span class="icon is-small">
                          <i class="fas fa-heart"></i>
                      </span>
                    </a>
                    <a class="level-item" aria-label="like" href="./dashboard/content.php?id=' . $data['id'] . '">
                      <span class="icon is-small">
                        <i class="fab fa-readme"></i>
                      </span>
                    </a>
                  </div>
                </nav>
              </div>
            </article>
        </div>';
          }
        ?>
    </div>
  </section>
</body>
</html>