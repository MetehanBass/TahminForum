<?php
include "db_conn.php";
session_start();

$page1=1;
if(isset($_GET['page'])){
$page =$_GET['page'];

if($page =="" || $page =="1"){
  $page1=0;
}
else{
  $page1 = ($page*9)-9;
}
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  <?php if(isset($_SESSION['username']) == '') {
          include('./include/nav.php');
        }
          else{
            include('./include/navlogged.php');
          }
  ?>
  <br><br><br>
  <div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
        <a href="" style="margin-left:1%;" class="btn btn-secondary disabled">Yeni Konu Açmak için Kategoriye Gidiniz.</a>
      <table class="table table-borderless table-hover">
        <thead style="border-bottom:1px solid;">
          <tr>
            <th scope="col">
              <h4><b></b></h4>
            </th>
          </tr>
        </thead>

        <tbody>
          <?php
          $topic = $conn->query("SELECT t.*,u.username from topic t inner join users u on u.userId = t.userId order by topicId desc limit $page1,9");

          $topiccounter ="SELECT t.*,u.username from topic t inner join users u on u.userId = t.userId";
          $counter_run = mysqli_query($conn, $topiccounter);
          $count = mysqli_num_rows($counter_run);

          $a =$count/9;
          $a = ceil($a);


            while($row=$topic->fetch_assoc()):
               ?>
               <?php
               $topicId = $row['topicId'];
               $repliescounter1 ="SELECT * from replies where topicId = $topicId";
               $counter_run1 = mysqli_query($conn, $repliescounter1);
               $repliescounter = mysqli_num_rows($counter_run1); ?>

          <tr> <?php
          if(isset($_SESSION['username']) == '') {
              // session isn't started
                ?>  <td colspan="3"><a href="post.php?id=<?php echo $row['topicId']; ?>"><b><?php echo ucwords($row['topic']) ?></b></a> <br><br> <?php
              }else{
            ?>  <td colspan="3"><a href="postlogged.php?id=<?php echo $row['topicId']; ?>"><b><?php echo ucwords($row['topic']) ?></b></a> <br><br>  <?php
          } ?>
            <p> <a style="color:#FFF;" href="#"><?php echo ucwords($row['username']) ?></a> &nbsp <b><?php echo ucwords($row['release_date']) ?></b></p>
            </td>
            <td class="topicinfo">Toplam Yanıt: <?php echo $repliescounter; ?><i class="fa fa-reply"></i></td>
          </tr>
          <?php endwhile; ?>

        </tbody>
      </table>
      <b style="text-decoration:none; color:rgb(143, 148, 83)">Sayfa</b>
      <?php
      for($b=0;$b < $a;$b++) {
      ?> <a href="recentevents.php?page=<?php echo $b+1; ?>" style="text-decoration:none; color:rgb(143, 148, 83)"><b><?php echo $b+1;?></b></a> <?php
      }
       ?>
      <hr>
    </div>
    <div class="col-md-2" style="margin-top:2%;">
      <?php  if(isset($_SESSION['username']) == '') {
              include('./include/right_side.php');
            }
              else{
                include('./include/right_sidelogged.php');
              }
      ?>
    </div>
  </div>

  <?php include('./include/footer.php'); ?>

</body>
</html>
