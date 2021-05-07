<?php
include("db_conn.php");


    // post data

          if (isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['city']) && !empty($_POST['favTeam'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $city = $_POST['city'];
            $favTeam = $_POST['favTeam'];
            $password = md5($_POST['password']);
            $date = date('Y-m-d H:i:s');

            // insert data into database
            $sql = "INSERT INTO users (username, password,email,signUp_date,city,favTeam) VALUES ('$username', '$password','$email','$date','$city','$favTeam')";


            if ($conn->query($sql) === TRUE) {
              header('location:index.php?success=Kayıt Oluşturuldu Giriş Yapabilirsiniz.');
            } else {
              header('location:index.php?error=Kayıt Oluşturulamadı.');
            }

          }




?>
