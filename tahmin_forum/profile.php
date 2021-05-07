<?php
include "db_conn.php";
session_start();
$userId = $_SESSION['id'];


$page1=1;
if(isset($_GET['page'])){
$page =$_GET['page'];

if($page =="" || $page =="1"){
  $page1=0;
}
else{
  $page1 = ($page*3)-3;
}
}
$query = $conn->query("SELECT * from topic where userId =$userId order by topicId desc limit $page1,3");
$topiccounter ="SELECT * from topic where userId =$userId";
$counter_run = mysqli_query($conn, $topiccounter);
$count = mysqli_num_rows($counter_run);

$a =$count/3;
$a = ceil($a);



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
<script>
  $('.toggle').click(function() {
    if (!$(this).next().hasClass('in')) {
      $(this).parent().children('.collapse.in').collapse('hide');
    }
    $(this).next().collapse('toggle');
  });
</script>

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
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Son Açtığın Başlıklar
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <table class="table table-borderless table-hover">
                  <thead>
                    <tr>
                      <th scope="col">
                        <h4><b>Son Açtığın Başlıklar</b></h4>
                      </th>
                    </tr>
                  </thead>
                  <tbody><?php
                    while($row=$query->fetch_assoc()):


                      $topicId = $row['topicId'];
                      $repliescounter1 ="SELECT * from replies where topicId = $topicId";
                      $counter_run1 = mysqli_query($conn, $repliescounter1);
                      $repliescounter = mysqli_num_rows($counter_run1); ?>

                    <tr>
                      <td colspan="3"><a href="postlogged.php?id=<?php echo $row['topicId'];?>&page=1"><b><?php echo $row['topic']; ?></b></a> <br><br>
                        <p> <a style="color:#FFF;" href="#"></a> &nbsp <b><?php echo $row['release_date']; ?></b></p>
                      </td>
                      <td class="topicinfo">Toplam Yanıt: <?php echo $repliescounter; ?><i class="fa fa-reply"></i></td>
                    </tr>
<?php endwhile; ?>
                  </tbody>
                </table>
                <?php
                for($b=0;$b < $a;$b++) {
                ?> <a href="profile.php?page=<?php echo $b+1; ?>" style="text-decoration:none; color:rgb(143, 148, 83)"><b><?php echo $b+1;?></b></a> <?php
                }
                 ?>
              </div>
            </div>
          </div>
          <?php
          $userId = $_SESSION['id'];
          $query ="SELECT * FROM users where userId = $userId";
          $query_run = mysqli_query($conn, $query);
          $row=$query_run->fetch_assoc();
           ?>

          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Profil Bilgilerin
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <div class="col-md-3 mb-3">
                      <label class="form-label" for="customFile">Profil Fotoğrafı Yükle</label>
                      <input type="file" class="form-control" id="customFile" />
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationServerEmail">E-Posta</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend3">@</span>
                        </div>
                        <input type="text" class="form-control" id="validationServerUsername" placeholder="E-Posta" aria-describedby="inputGroupPrepend3" value="<?php echo $row['email']; ?>"required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-6 mb-3">
                      <label for="validationServer03">Şehir</label>
                      <input type="text" class="form-control" id="validationServer03" placeholder="Şehir" value="<?php echo $row['city'];?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationServer04">Favori Takım</label>
                      <input type="text" class="form-control" id="validationServer04" placeholder="Favori Takım"  value="<?php echo $row['favTeam'];?>"required>
                    </div>
                  </div>
                  <button type="submit" style="margin-left:1%;" name="submit" class="btn btn-primary">Kaydet</button>
                  <a style="margin-left:5%;color:#FFF;" href="profilepassword.php">Şifre Değiştir</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </div>
    <div class="col-md-2" style="margin-top:2%;">
      <?php include('./include/right_sidelogged.php'); ?>
    </div>
  </div>
    <?php include('./include/footer.php'); ?>
</body>
</html>
