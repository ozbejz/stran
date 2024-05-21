<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <script src="jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="stili.css">

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <?php
    include("header.php");
  ?>

  <div class="container border">
    <h2 class="text-danger mb-3 text-center">Pošljite povpraševanje</h2>
      <div class="container">
          <form class="row g-4" id="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="col-md-4">
                <label for="imePriimek" class="form-label">Ime in priimek</label>
                <input type="text" class="form-control" name="imePriimek" id="imePriimek" required>
              </div>
              <div class="col-md-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control"  name="email"id="email" required>
              </div>
              <div class="col-md-4">
                  <label for="tel" class="form-label">Telefon</label>
                  <input type="tel" class="form-control" name="tel" id="tel" required>
                </div>
              <div class="col-12 mt-2">
                <label for="sporocilo" class="form-label">Pošljite sporočilo</label>
                <textarea name="sporocilo" id="sporocilo" class="form-control" required></textarea>
              </div>
              <div class="col-12">
                  <button type="submit" class="btn btn-primary mt-2">Pošljite</button>
              </div>
          </form>
      </div>
      <?php
        if(isset($_POST["imePriimek"])){
          $imePriimek = preg_match("/[a-zA-Z\s]+/i", $_POST["imePriimek"]);
          $mail = preg_match("/[a-zA-Z\.]+@([a-zA-Z]+\.)+[a-zA-Z\.]/", $_POST["email"]);
          $tel = preg_match("/\d+/", $_POST["tel"]);

          if(!$imePriimek){
            ?>
            <div class="alert alert-danger" role="alert">
              Nepravilna ime in priimek
            </div>
            <?php
          }

          if(!$mail){
            ?>
            <div class="alert alert-danger" role="alert">
              Nepravilen mail
            </div>
            <?php
          }

          if(!$tel){
            ?>
            <div class="alert alert-danger" role="alert">
              Nepravilna telefonska številka
            </div>
            <?php
          }

          if($imePriimek && $mail && $tel){
            ?>
            <div class="alert alert-success" role="alert">
              Vaše povpraševanje je uspešno poslano.
            </div>
          <?php
          }
        }
      ?>
  </div>
  <script src="skripta.js"></script>

  <?php

  include("footer.php");

  ?>
</body>
</html>