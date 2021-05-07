<?php
include "db_conn.php";

$id = $_SESSION['id'];
$topiccounter ="SELECT * FROM topic WHERE userId = $id";
$counter_run = mysqli_query($conn, $topiccounter);
$count = mysqli_num_rows($counter_run);

$topiccountertotal ="SELECT * FROM topic";
$counter_run = mysqli_query($conn, $topiccountertotal);
$counttotal = mysqli_num_rows($counter_run);

$topiccounteruser ="SELECT * FROM users";
$counter_run = mysqli_query($conn, $topiccounteruser);
$counttotaluser = mysqli_num_rows($counter_run);


$query = "SELECT * from users ORDER BY userId desc LIMIT 1";
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

$replytotal ="SELECT * FROM replies";
$counter_run2 = mysqli_query($conn, $replytotal);
$replytotalcount = mysqli_num_rows($counter_run2);

$replycounter ="SELECT * FROM replies WHERE userId =$id";
$counter_run1 = mysqli_query($conn, $replycounter);
$replycount = mysqli_num_rows($counter_run1);

 ?>

<div class="container foruminfo">
  <h4 class="">Profil Fotoğrafı</h3>
    <h4 class="" style="text-align:center;"><?php echo $_SESSION['username'];?></h3>
      <div class="">
        <dl class="">
          <dt>Açılan Başlık</dt>
          <dd><?php echo $count; ?></dd>
        </dl>
        <dl class="">
          <dt>Yanıtlar</dt>
          <dd><?php echo $replycount; ?></dd>
        </dl>
        <dl class="">
          <dt>Beğeniler</dt>
          <dd>31</dd>
        </dl>

      </div>

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
        <dd><?php echo $replytotalcount;  ?></dd>
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
