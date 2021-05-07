<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <?php include('./include/cdn.php'); ?>
  <title>Tahmin Forum</title>
</head>

<body>
  <header class="p-header" id="header">
    <div class="p-header-inner">
      <div class="p-header-content">
        <div class="p-header-logo p-header-logo--image">
          <a href="">
            <img src="https://www.thefootballforum.net/images/footballforumlogo.png" alt="Football Forum - Official Message Boards" class="logo-desktop">
          </a>
        </div>
      </div>
    </div>
  </header>
 <?php include('./include/navlogged.php'); ?>
  <br><br><br>
  <div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8 loginform">
      <div class="">
        <form>
          <div class="form-group">
            <div class="col-md-6 mb-3">
              <label for="validationServer03">Eski Şifre</label>
              <input type="password" class="form-control" id="validationServer03" placeholder="Eski Şifre" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationServer04">Yeni Şifre</label>
              <input type="password" class="form-control" id="validationServer04" placeholder="Yeni Şifre" required>
            </div>
          </div>
          <button type="submit" style="margin-left:1%;" class="btn btn-primary">Şifre Güncelle</button>
        </form>
      </div>
      <hr>
    </div>
    <div class="col-md-2" style="margin-top:2%;">
      <?php include('./include/right_sidelogged.php'); ?>
    </div>
  </div>
  <?php include('./include/footer.php'); ?>


</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="./js/accordion.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
