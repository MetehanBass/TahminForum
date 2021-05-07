<?php
include "db_conn.php";
session_start();

$userId = $_SESSION['id'];
$topicId=$_GET['id'];
$date = date('Y-m-d H:i:s');


if (isset($_POST['submit']) && !empty($_POST['message'])) {
  $message = $_POST['message'];

  // insert data into database
  $sql = "INSERT INTO replies (userId,topicId,message,replyDate) VALUES ('$userId','$topicId','$message','$date')";

  if ($conn->query($sql) === TRUE) {
    header("location:postlogged.php?id=$topicId&page=1");
  } else {
    header("location:postlogged.php?id=$topicId&page=1&error=Yanıt Gönderilemedi.");
  }
}
 ?>
