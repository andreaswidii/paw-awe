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
  </div>
        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            <div class="container has-text-centered" style="width: 80%">
                <div class="container">
                    <div class="notification">
                        <div class="columns">
                            <div class="column">
                                <center>
                                    <form action="<?php base_url("Artikel/add")?>" method="post" enctype="multipart/form-data">
                                    <figure  class="image is-128x128">
                                        <img src="https://bulma.io/images/placeholders/256x256.png">
                                    </figure>
                                    <input type="file" name="image">
                                    <div class="field">
                                        <p class="control">
                                        <label class="label">Username    :</label>
                                        <input name="username" class="input" type="username" >
                                        </p>
                                    </div>
                                    <div class="field">
                                        <p class="control">
                                        <label class="label">Judul    :</label>
                                        <input  name="judul" class="input" type="username" placeholder="Judul">
                                        </p>
                                    </div>
                                    <div class="field">
                                        <p class="control">
                                        <label class="label">Nama Makanan    :</label>
                                        <input name="jenis_makanan" class="input" type="username" placeholder="Nama Makanan">
                                        </p>
                                    </div>
                                    <div class="field">
                                        <p class="control">
                                        <label class="label">Alamat    :</label>
                                        <input  name="alamat" class="input" type="text" placeholder="alamat">
                                        </p>
                                    </div>
                                    <div class="field">
                                        <p class="control">
                                        <label class="label">Review   :</label>
                                        <textarea name="review" class="textarea" placeholder="10 lines of textarea" rows="10"></textarea>
                                        </p>
                                    </div>
                                    <button name="upload" class="button is-black" type="submit">Upload</button>
                                    </form>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>