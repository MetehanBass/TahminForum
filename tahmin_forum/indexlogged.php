<?php
include "db_conn.php";
session_start();
$id = $_SESSION['id'];
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
    <div class="col-md-8">
      <table class="table table-borderless table-hover">
        <thead>
          <tr>
            <th scope="col"><b>Genel Sohbet</b></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="3"><a href="forumlogged.php?id=1&page=1"><b>Genel Sohbet</b></a><br>Genel Sohbet için tek forum sayfası.<br><i class="fa fa-comments"></i><a href="#">Diğer Ligler</a></td>

            <td class="topicinfo"></td>
          </tr>

        </tbody>
      </table>
      <hr>
      <table class="table table-borderless table-hover">
        <thead>
          <tr>
            <th scope="col"><b>Diğer Sporlar</b></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="3"><a href="forumlogged.php?id=2&page=1"><b>Diğer Sporlar Genel Sohbet</b></a><br>Diğer Sporlar için tek forum sayfası.</td>
            <td class="topicinfo"></td>
          </tr>

        </tbody>
      </table>
      <hr>
      <table class="table table-borderless table-hover">
        <thead>
          <tr>
            <th scope="col"><b>NBA</b></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="3"><a href="forumlogged.php?id=3&page=1"><b>NBA</b></a><br>NBA için tek forum sayfası.</td>
            <td class="topicinfo"></td>
          </tr>

        </tbody>
      </table>
      <hr>
      <table class="table table-borderless table-hover">
        <thead>
          <tr>
            <th scope="col"><b>Ligler</b></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="3"><a href="forumlogged.php?id=4&page=1"><b>İngiltere (Premier Lig)</b></a> <br>Tüm Premier lig maçları için tek forum sayfası.</td>
            <td class="topicinfo"></td>
          </tr>
          <tr>
            <td colspan="3"><a href="forumlogged.php?id=5&page=1"><b>İtalya (Serie A)</b></a> <br>Tüm Seria A maçları için tek forum sayfası.</td>
            <td class="topicinfo"></td>
          </tr>
          <tr>
            <td colspan="3"> <a href="forumlogged.php?id=6&page=1"><b>İspanya (La Liga)</b></a> <br>Tüm La Liga maçları için tek forum sayfası.</td>
            <td class="topicinfo"></td>
          </tr>
          <tr>
            <td colspan="3"> <a href="forumlogged.php?id=7&page=1"><b>Almanya (Bundesliga)</b></a> <br>Tüm Bundesliga maçları için tek forum sayfası.</td>
            <td class="topicinfo"></td>
          </tr>
          <tr>
            <td colspan="3"> <a href="forumlogged.php?id=8&page=1"><b>Fransa (Ligue 1)</b></a> <br>Tüm Ligue 1 maçları için tek forum sayfası.</td>
            <td class="topicinfo"></td>
          </tr>
          <tr>
            <td colspan="3"> <a href="forumlogged.php?id=9&page=1"><b>Türkiye (STSP)</b></a> <br>Tüm STSP maçları için tek forum sayfası.</td>
            <td class="topicinfo"></td>
          </tr>
          <tr>
            <td colspan="3"> <a href="forumlogged.php?id=10&page=1"><b>İngiltere (Championship)</b></a> <br>Tüm Championship maçları için tek forum sayfası.</td>
            <td class="topicinfo"></td>
          </tr>
          <tr>
            <td colspan="3"> <a href="forumlogged.php?id=12&page=1"><b>İngiltere (EFL League 1)</b></a> <br>Tüm EFL League 1 maçları için tek forum sayfası.</td>
            <td class="topicinfo"></td>
          </tr>
          <tr>
            <td colspan="3"> <a href="forumlogged.php?id=11&page=1"><b>Türkiye (1.Lig)</b></a> <br>Tüm Türkiye 1.Lig maçları için tek forum sayfası.</td>
            <td class="topicinfo"></td>
          </tr>
        </tbody>
      </table>
      <hr>
    </div>
    <div class="col-md-2" style="margin-top:2%;">
      <?php include('./include/right_sidelogged.php'); ?>
    </div>
  </div>
  <?php include('./include/footer.php'); ?>


</body>
</html>
