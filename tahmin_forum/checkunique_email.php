<?php
include("db_conn.php");

    if(isset($_POST['email'])){

      $query =" SELECT * FROM users where email = '".trim($_POST["email"])."'";
      $query_run = mysqli_query($conn, $query);
      $row = mysqli_num_rows($query_run);

      if($row == 0){
         $output = array(
                'success'  => true
            );
          }
          echo json_encode($output);
    }
 ?>
