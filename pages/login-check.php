<?php 


// if ($_POST["remember-me"] == "")
ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);
ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 365);
session_start(); 

require "../scripts/import_db_array.php";


if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = hash("SHA256", validate($_POST['password']));

    if (empty($uname)) {

        // header("Location: index-lou.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        // header("Location: index-lou.php?error=Password is required");

        exit();

    }else{

        $keys = [
            "id",
            "username",
            "password",
            "entreprise",
            "access_level", 
        ];

        $sql = "SELECT * FROM user WHERE username='$uname' AND password='$pass'";

        $row = import_arr($sql, $keys);
        // echo $sql;
        // echo "<br>";
        // print_r($row);
        // sleep(10);
        if (!empty($row[0]) && !empty($row[1]) && !empty($row[2]) && !empty($row[3]) && !empty($row[4])){

        $id_sql = $row[0][0];
        $username_sql = $row[1][0];
        $password_sql = $row[2][0];
        $entreprise_sql = $row[3][0];
        $access_level_sql = $row[4][0];
        
        
        if ($username_sql === $uname && $password_sql === $pass) {

                // echo "Logged in!";

                setcookie("entreprise", $entreprise_sql, time() + 365 * 24 * 60 * 60, "/");
                setcookie("username", $username_sql, time() + 365 * 24 * 60 * 60, "/");
                setcookie("access_level", $access_level_sql, time() + 365 * 24 * 60 * 60, "/");
            
                $_SESSION['username'] = $username_sql;

                // $_SESSION['password'] = $row['password'];

            $_SESSION['entreprise'] = $entreprise_sql;

            $_SESSION['access_level'] = $access_level_sql;

            // $_SESSION['id'] = $id_sql;

            header("Location: overview.php");

            exit();
        }
        }else{

                header("Location: /index.php");

                exit();

            }

        }
        

    }
