<?php
include "db_conn.php";

$topiccountertotal ="SELECT * FROM topic";
$counter_run = mysqli_query($conn, $topiccountertotal);
$counttotal = mysqli_num_rows($counter_run);

$topiccounteruser ="SELECT * FROM users";
$counter_run = mysqli_query($conn, $topiccounteruser);
$counttotaluser = mysqli_num_rows($counter_run);

$replytotal ="SELECT * FROM replies";
$counter_run2 = mysqli_query($conn, $replytotal);
$replytotalcount = mysqli_num_rows($counter_run2);


$query = "SELECT * from users ORDER BY userId desc LIMIT 1";
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

 ?>


<div class="container">
  <form class="loginform" action="login.php" method="POST">
    <div class="form-group">
      <label>E-Posta</label>
      <input type="text" name="email" class="form-control" placeholder="">
    </div>
    <div class="form-group">
      <label>Parola</label>
      <input type="password" name="password" class="form-control" placeholder="">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="rememberme">
      <label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-unlock"></i>&nbspGiriş</button>
    <a style="margin-left:4%;" href="#">Şifremi Unuttum</a>
    <p>Hala Üye değil misin?&nbsp<a href="#">Kayıt Ol</a></p>
  </form>
</div>
<div class="container foruminfo">
  <h4 class=""> Forum İstatistikleri</h3>
    <div class="">
      <dl class="">
        <dt>Açılan Başlık</dt>
        <dd><?php echo $counttotal; ?></dd>
      </dl>
      <dl class="">
        <dt>Yanıtlar</dt>
        <dd><?php echo $replytotalcount; ?></dd>
      </dl>
      <dl class="">
        <dt>Üyeler</dt>
        <dd><?php echo $counttotaluser; ?></dd>
      </dl>
      <dl class="">
        <dt>Son Üye </dt>
        <dd><a style="text-decoration:none;" href="#"><b><?php echo $row['username'];?></b></a></dd>
      </dl>
    </div>
</div>
