<?php
    $servername='sql381.your-server.de';
    $username='lemaco_lou';
    $password='fzivu28GGa8PFS49';
    $dbname = "calendar";
    
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?> 