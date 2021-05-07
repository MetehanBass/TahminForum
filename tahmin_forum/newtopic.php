<?php
include "db_conn.php";
session_start();

$userId = $_SESSION['id'];
$cname=$_GET['category_name'];
$date = date('Y-m-d H:i:s');

$query = "SELECT * from category where category_name='".$cname."'";
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
$categoryId = $row['categoryId'];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/index_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="logout.php" class="btn btn-secondary">Çıkış Yap</a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="indexlogged.php">Ana Sayfa <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Son Olaylar</a>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Ligler
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="forumlogged.php?id=9">Spor Toto Süperlig</a>
            <a class="dropdown-item" href="forumlogged.php?id=4">Premier Lig</a>
            <a class="dropdown-item" href="forumlogged.php?id=5">Serie A</a>
            <a class="dropdown-item" href="forumlogged.php?id=7">Bundesliga</a>
            <a class="dropdown-item" href="forumlogged.php?id=6">La Liga</a>
            <a class="dropdown-item" href="forumlogged.php?id=8">Ligue 1</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="forumlogged.php?id=3">NBA</a>
          </div>
        </li>
        <li style="padding-left:20px;margin-top:1px;"><a href="#" class="btn btn-secondary"><i class="fa fa-envelope-open"></i></a>
        </li>
        <li style="padding-left:20px;margin-top:1px;"> <a href="#" class="btn btn-secondary"><i class="fa fa-bell"></i></a>
        </li>
        <li style="padding-left:20px;margin-top:1px;"><a href="profile.html" class="btn btn-secondary"> <i class="fa fa-user"></i>&nbspProfil</a>
        </li>
      </ul>
    </div>
  </nav>
  <br><br><br>
  <div class="row">
    <div class="col-md-2">

    </div>
<?php
if (isset($_POST['submit'])) {
  $content = $_POST['content'];
  $topic = $_POST['topic'];

  // insert data into database
  $sql = "INSERT INTO topic (topic,content,release_date,categoryId,userId) VALUES ('$topic','$content','$date','$categoryId','$userId')";

  if ($conn->query($sql) === TRUE) {
    header("location:forumlogged.php?id=$categoryId&page=1");
  } else {
    header("location:forumlogged.php?id=$categoryId&page=1&error=Konu Açılamadı.");
  }
}
 ?>
    <div class="col-md-8">
      <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-warning alert-dismissible fade show" style="width:50%;margin-left:auto;margin-right:auto;margin-top:1%;" role="alert">
      <strong><p class="error"><?php echo $_GET['error']; ?></p></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php } ?>
      <form class="" action="newtopic.php?category_name=<?php echo $cname ?>" method="POST">
        <div class="form-group col-md-4">
          <label style="color:white;" for="exampleFormControlSelect1">Konu Başlığı Giriniz.</label>
          <textarea  class="form-control" name="topic" id="topic_title" rows="1"></textarea>
        </div>
        <div class="form-group col-md-6">
          <label style="color:white;" for="exampleFormControlTextarea1">Konu İçeriği Giriniz.</label>
          <textarea  class="form-control" name="content" id="topic_content" rows="6"></textarea>
        </div>
        <button style="margin-left:1%;"class="btn btn-primary" name="submit" type="submit">Yeni Konu Aç</button>
      </form>
      <hr>
    </div>
    <div class="col-md-2" style="margin-top:2%;">
      <div class="container foruminfo">
        <h4 class="">Profil Fotoğrafı</h3>
          <h4 class="">Stadium Sign</h3>
            <div class="">
              <dl class="">
                <dt>Açılan Başlık</dt>
                <dd>42</dd>
              </dl>
              <dl class="">
                <dt>Yanıtlar</dt>
                <dd>276</dd>
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
              <dd>15,342</dd>
            </dl>
            <dl class="">
              <dt>Yanıtlar</dt>
              <dd>976,933</dd>
            </dl>
            <dl class="">
              <dt>Üyeler</dt>
              <dd>5,639</dd>
            </dl>
            <dl class="">
              <dt>Son Üye </dt>
              <dd>Sign Stadium</dd>
            </dl>
          </div>
      </div>
    </div>
  </div>
  <div class="container-fluid pb-0 mb-0 justify-content-center text-light ">
    <footer>
      <div class="row my-5 justify-content-center py-5">
        <div class="col-11">
          <div class="row ">
            <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
              <h3 class="text-muted mb-md-0 mb-5 bold-text">TahminForum.net</h3>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-4 col-12">
              <h6 class="mb-3 mb-lg-4 bold-text "><b>MENU</b></h6>
              <ul class="list-unstyled">
                <li>Anasayfa</li>
                <li>Son Olaylar</li>
                <li>Profil</li>
              </ul>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-4 col-12">
              <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>ADRES</b></h6>
              <p class="mb-1">3850.Sokak, Kepez</p>
              <p>Antalya</p>
            </div>
          </div>
          <div class="row ">
            <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
              <p class="social text-muted mb-0 pb-0 bold-text"> <span class="mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span> <span class="mx-2"><i
                    class="fa fa-twitter" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></span> </p><small class="rights"><span>&#174;</span> Tahmin Forum Tüm Hakları Saklıdır.</small>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-1 align-self-end ">
              <h6 class="mt-55 mt-2 text-muted bold-text"><b>Metehan Baş</b></h6><small> <span><i class="fa fa-envelope" aria-hidden="true"></i></span>metehancse@gmail.com</small>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
