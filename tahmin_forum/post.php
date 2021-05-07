<?php
include "db_conn.php";
session_start();

$gid = $_GET['id'];

$topic = $conn->query("SELECT t.*,u.username,u.likes,u.signUp_date from topic t inner join users u on u.userId = t.userId where topicId = $gid");
$row=$topic->fetch_assoc();
$userId = $row['userId'];
$topiccounter ="SELECT * FROM topic WHERE userId =$userId";
$counter_run = mysqli_query($conn, $topiccounter);
$count = mysqli_num_rows($counter_run);

$page1=1;
if(isset($_GET['page'])){
$page =$_GET['page'];

if($page =="" || $page =="1"){
  $page1=0;
}
else{
  $page1 = ($page*5)-5;
}
}

$replies = $conn->query("SELECT r.*,u.username,u.likes,u.signUp_date,u.userId from replies r inner join users u on u.userId = r.userId where topicId = $gid limit $page1,5") or die($conn->error);

$repliescounter = $conn->query("SELECT r.*,u.username,u.likes,u.signUp_date,u.userId from replies r inner join users u on u.userId = r.userId where topicId = $gid");
$repliescount = mysqli_num_rows($repliescounter);

$a =$repliescount/5;
$a = ceil($a);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <?php include('./include/cdn.php'); ?>
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
  <?php include('./include/nav.php'); ?>
  <br><br><br>

  <div class="row">

    <div class="container">
      <div class="row">
        <table class="table table-hover table-borderless">
          <thead>
            <tr style="text-align:center;">
              <th scope="col"><?php echo $row['username'];?></th>
              <th colspan="3"><?php echo $row['topic']; ?></th>

            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid;">
              <th scope="row">
                <div class="col-xs-2 cevaplayan_info">
                  <div class="container foruminfo userinfo">
                    <h5 class=""> Profil Fotoğrafı</h5>
                    <h5 class=""><?php echo $row['username'];?></h5>
                    <div class="column">
                      <dl class="">
                        <dt>Açılan Başlık</dt>
                        <dd><?php echo $count;?></dd>
                      </dl>
                      <dl class="">
                        <dt>Yanıtlar</dt>
                        <dd>66</dd>
                      </dl>
                      <dl class="">
                        <dt>Üyelik Başlangıcı</dt>
                        <dd style="font-size:10px;text-align:left;"><?php echo $row['signUp_date']; ?></dd>
                      </dl>
                    </div>
                  </div>
                </div>
              </th>
              <td>
                <div class="col-sm-10 post-details">
                  <h3></h3>
                  <div class="post-footer29032">
                    <div class="l-side2023"><i class="fa fa-clock-o clock2" aria-hidden="true"> 4 min ago</i> <a href="" style="color:rgb(143, 148, 83);"><i class="fa fa-commenting commenting2" aria-hidden="ture"> <?php echo $repliescount; ?> Yanıt</i></a></div>
                  </div> <br>
                  <div style="font-size:0.9em;" class="post-details-info1982">
                    <p><?php echo $row['content'];?></p>
                  </div>
                </div>
              </td>
            </tr>
            <?php
            //user info for replies



            while($rowui=$replies->fetch_assoc()):

              $replyUserId = $rowui['userId'];
              $replycounter ="SELECT * FROM replies WHERE userId =$replyUserId";
              $counter_run1 = mysqli_query($conn, $replycounter);
              $replycount = mysqli_num_rows($counter_run1);

              $topicUserId = $rowui['userId'];
              $replycounter ="SELECT * FROM topic WHERE userId =$topicUserId";
              $counter_run2 = mysqli_query($conn, $replycounter);
              $topiccount = mysqli_num_rows($counter_run2);
               ?>
            <tr style="border-bottom: 1px solid;">
              <th scope="row">
                <div class="col-xs-2 cevaplayan_info">
                  <div class="container foruminfo userinfo">
                    <h5 class=""> Profil Fotoğrafı</h5>
                    <h5 class=""> <?php echo $row['username']; ?></h5>
                    <div class="">
                      <dl class="">
                        <dt>Açılan Başlık</dt>
                        <dd><?php echo $topiccount; ?></dd>
                      </dl>
                      <dl class="">
                        <dt>Yanıtlar</dt>
                        <dd><?php echo $replycount; ?></dd>
                      </dl>
                      <dl class="">
                        <dt>Üye olma tarihi</dt>
                        <dd style="font-size:10px;text-align:left;"><?php echo $rowui['signUp_date']; ?></dd>
                      </dl>
                    </div>
                  </div>
                </div>
              </th>
              <td>
                <div class="col-sm-10 post-details">
                  <h3></h3>
                  <div class="post-footer29032">
                    <div class="l-side2023"><i class="fa fa-clock-o clock2" aria-hidden="true"> 4 min ago</i></div>
                  </div> <br>
                  <div class="post-details-info1982">
                    <p><?php echo $rowui['message']; ?></p>


                  </div>
                </div>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
        <b style="text-decoration:none; color:rgb(143, 148, 83)">Sayfa</b>
        <?php

        for($b=0;$b < $a;$b++) {
        ?><a href="post.php?id=<?php echo $gid ?>&page=<?php echo $b+1; ?>" style="text-decoration:none; color:rgb(143, 148, 83)">  <b><?php echo '&nbsp'.($b+1);?></b></a><?php
        }
         ?>

         <div class="col-md-12 offset-md-3">
             <form class="" action="" method="">
               <div class="form-group col-md-6">
                 <label style="color:white;display:inline-block;" for="exampleFormControlTextarea1">Başlığı Yanıtla</label>
                 <textarea  class="form-control" name="message" id="topic_content" rows="6"></textarea>
             </div>
             <a href="" style="margin-left:1%;" class="btn btn-secondary disabled">Yanıt Yazmak için Giriş Yapın.</a>
         </form>
       </div>
      </div>
    </div>

    <div class="col-sm-2" style="margin-top:2%;">
      <?php include('./include/right_side.php'); ?>
    </div>

  </div>



    <?php include('./include/footer.php'); ?>


</body>
</html>
