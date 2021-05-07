<?php
include("db_conn.php");

    if(isset($_POST['username'])){

      $query =" SELECT * FROM users where username  = '".trim($_POST["username"])."'";
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
