<?php

    // connect to database
    $db_host     = 'database';
    $db_user     = 'root';
    $db_password = 'xens';
    $db_db       = 'schedule';
    
    $mysqli = @new mysqli($db_host, $db_user, $db_password, $db_db);
    
    if ($mysqli->connect_error) {
        echo 'Errno: ' . $mysqli->connect_errno;
        echo '<br>';
        echo 'Error: ' . $mysqli->connect_error;
        exit();
    }
    ;



$sql = "INSERT INTO `user` (`id`, `username`, `password`, `entreprise`, `access_level`) VALUES (NULL, '". $_POST["uname"] ."', '". hash("SHA256", $_POST['password']) . "', " . $_POST["entreprise"] .", " . $_POST["access_level"] .")";
echo $sql;
$mysqli->query($sql);
$mysqli->commit();
$mysqli -> close();

echo "User has been added";