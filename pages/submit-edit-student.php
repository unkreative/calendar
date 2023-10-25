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
    };

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';

    $dict = [
        "0-0" => 0,
        "1-1" => 1,
        "2-1" => 2,
        "3-1" => 3,
        "4-1" => 4,
        "5-1" => 5,
        "6-1" => 6,
        "7-1" => 7,
        "1-2" => 8,
        "2-2" => 9,
        "3-2" => 10,
        "4-2" => 11,
        "5-2" => 12,
        "6-2" => 13,
        "7-2" => 14,
        "1-3" => 15,
        "2-3" => 16,
        "3-3" => 17,
        "4-3" => 18,
        "5-3" => 19,
        "6-3" => 20,
        "7-3" => 21,
        "1-4" => 22,
        "2-4" => 23,
        "3-4" => 24,
        "4-4" => 25,
        "5-4" => 26,
        "6-4" => 27,
        "7-4" => 28,
        "1-5" => 29,
        "2-5" => 30,
        "3-5" => 31,
        "4-5" => 32,
        "5-5" => 33,
        "6-5" => 34,
        "7-5" => 35,
    ];

    $entreprises = [
        "Académie Beauté"=>1, "Arts & Metiers"=>2, "Atelier des Gourmets"=>3, "BAM"=>4, "C.A.D.E"=>5, "Chelsea"=>6, "Circles"=>7, "LEM.SCIENCE"=>8, "Dragons"=>9, "Lemur"=>10, "LITE"=>11, "Natter"=>12, "Sätzwierk"=>13, "Seefood"=>14, "Growlight Company"=>15, "Waves"=>16
    ];

    $sched_0_0_hidden = [substr($_POST["sched-0-0-hidden"],2), "0-0"];
    $sched_1_1_hidden = [substr($_POST["sched-1-1-hidden"],2), "1-1"];
    $sched_1_2_hidden = [substr($_POST["sched-1-2-hidden"],2), "1-2"];
    $sched_1_3_hidden = [substr($_POST["sched-1-3-hidden"],2), "1-3"];
    $sched_1_4_hidden = [substr($_POST["sched-1-4-hidden"],2), "1-4"];
    $sched_1_5_hidden = [substr($_POST["sched-1-5-hidden"],2), "1-5"];
    $sched_2_1_hidden = [substr($_POST["sched-2-1-hidden"],2), "2-1"];
    $sched_2_2_hidden = [substr($_POST["sched-2-2-hidden"],2), "2-2"];
    $sched_2_3_hidden = [substr($_POST["sched-2-3-hidden"],2), "2-3"];
    $sched_2_4_hidden = [substr($_POST["sched-2-4-hidden"],2), "2-4"];
    $sched_2_5_hidden = [substr($_POST["sched-2-5-hidden"],2), "2-5"];
    $sched_3_1_hidden = [substr($_POST["sched-3-1-hidden"],2), "3-1"];
    $sched_3_2_hidden = [substr($_POST["sched-3-2-hidden"],2), "3-2"];
    $sched_3_3_hidden = [substr($_POST["sched-3-3-hidden"],2), "3-3"];
    $sched_3_4_hidden = [substr($_POST["sched-3-4-hidden"],2), "3-4"];
    $sched_3_5_hidden = [substr($_POST["sched-3-5-hidden"],2), "3-5"];
    $sched_4_1_hidden = [substr($_POST["sched-4-1-hidden"],2), "4-1"];
    $sched_4_2_hidden = [substr($_POST["sched-4-2-hidden"],2), "4-2"];
    $sched_4_3_hidden = [substr($_POST["sched-4-3-hidden"],2), "4-3"];
    $sched_4_4_hidden = [substr($_POST["sched-4-4-hidden"],2), "4-4"];
    $sched_4_5_hidden = [substr($_POST["sched-4-5-hidden"],2), "4-5"];
    $sched_5_1_hidden = [substr($_POST["sched-5-1-hidden"],2), "5-1"];
    $sched_5_2_hidden = [substr($_POST["sched-5-2-hidden"],2), "5-2"];
    $sched_5_3_hidden = [substr($_POST["sched-5-3-hidden"],2), "5-3"];
    $sched_5_4_hidden = [substr($_POST["sched-5-4-hidden"],2), "5-4"];
    $sched_5_5_hidden = [substr($_POST["sched-5-5-hidden"],2), "5-5"];
    $sched_6_1_hidden = [substr($_POST["sched-6-1-hidden"],2), "6-1"];
    $sched_6_2_hidden = [substr($_POST["sched-6-2-hidden"],2), "6-2"];
    $sched_6_3_hidden = [substr($_POST["sched-6-3-hidden"],2), "6-3"];
    $sched_6_4_hidden = [substr($_POST["sched-6-4-hidden"],2), "6-4"];
    $sched_6_5_hidden = [substr($_POST["sched-6-5-hidden"],2), "6-5"];
    $sched_7_1_hidden = [substr($_POST["sched-7-1-hidden"],2), "7-1"];
    $sched_7_2_hidden = [substr($_POST["sched-7-2-hidden"],2), "7-2"];
    $sched_7_3_hidden = [substr($_POST["sched-7-3-hidden"],2), "7-3"];
    $sched_7_4_hidden = [substr($_POST["sched-7-4-hidden"],2), "7-4"];
    $sched_7_5_hidden = [substr($_POST["sched-7-5-hidden"],2), "7-5"];

    $combined = [$sched_0_0_hidden, $sched_1_1_hidden, $sched_1_2_hidden, $sched_1_3_hidden, $sched_1_4_hidden, $sched_1_5_hidden, $sched_2_1_hidden, $sched_2_2_hidden, $sched_2_3_hidden, $sched_2_4_hidden, $sched_2_5_hidden, $sched_3_1_hidden, $sched_3_2_hidden, $sched_3_3_hidden, $sched_3_4_hidden, $sched_3_5_hidden, $sched_4_1_hidden, $sched_4_2_hidden, $sched_4_3_hidden, $sched_4_4_hidden, $sched_4_5_hidden, $sched_5_1_hidden, $sched_5_2_hidden, $sched_5_3_hidden, $sched_5_4_hidden, $sched_5_5_hidden, $sched_6_1_hidden, $sched_6_2_hidden, $sched_6_3_hidden, $sched_6_4_hidden, $sched_6_5_hidden, $sched_7_1_hidden, $sched_7_2_hidden, $sched_7_3_hidden, $sched_7_4_hidden, $sched_7_5_hidden];

// INSERT INTO `entreprise_student` (`id`, `entreprise_1`, `entreprise_1_plage`, `entreprise_2`, `entreprise_2_plage`, `entreprise_3`, `entreprise_3_plage`, `entreprise_4`, `entreprise_4_plage`, `entreprise_5`, `entreprise_5_plage`, `entreprise_6`, `entreprise_6_plage`, `entreprise_7`, `entreprise_7_plage`, `entreprise_8`, `entreprise_8_plage`) VALUES ('', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)

$entreprise_insert = [];

foreach ($combined as $sched) {
    // print_r($sched);
    if (!empty($sched[0])) {
        // echo "<br>";
        // echo $sched[0];

        $entreprise_id = $entreprises[$sched[0]];
        $entreprise_plage = $dict[$sched[1]];

        array_push($entreprise_insert, [$entreprise_id, $entreprise_plage]);

    };
};

// print_r($entreprise_insert);
if (count($entreprise_insert) > 8) {
    echo "something is wrong";

};


$sql_student_entreprise = "UPDATE entreprise_student SET entreprise_1_plage = ". $entreprise_insert[0][1]. ", entreprise_2_plage = ". $entreprise_insert[1][1]. ", entreprise_3_plage = ". $entreprise_insert[2][1]. ", entreprise_4_plage = ". $entreprise_insert[3][1]. ", entreprise_5_plage = ". $entreprise_insert[4][1]. ", entreprise_6_plage = ". $entreprise_insert[5][1]. ", entreprise_7_plage = ". $entreprise_insert[6][1]. ", entreprise_8_plage = ". $entreprise_insert[7][1]. ", entreprise_1 = " .$entreprise_insert[0][0]. ", entreprise_2 = " .$entreprise_insert[1][0]. ", entreprise_3 = " .$entreprise_insert[2][0]. ", entreprise_4 = " .$entreprise_insert[3][0]. ", entreprise_5 = " .$entreprise_insert[4][0]. ", entreprise_6 = " .$entreprise_insert[5][0]. ", entreprise_7 = " .$entreprise_insert[6][0]. ", entreprise_8 = " .$entreprise_insert[7][0]. " WHERE id = " . $_POST["student_id"]. ";";


$sql_student = "UPDATE student SET first_name = '". $_POST["first_name"] . "', second_name ='". $_POST["second_name"] . "', iam = '". $_POST["iam"] . "', class = ". $_POST["class"] . ", tuteur =" . $_POST["tuteur"] ." WHERE id = "  . $_POST["student_id"]. ";";


$sql_note = "UPDATE note SET note = '". $_POST["note"] . "' WHERE id = " . $_POST["student_id"]. ";";

// echo $sql_student_entreprise;
// echo "<br>";
// echo $sql_student;
// echo "<br>";
// echo $sql_note;
// echo "<br>";

$mysqli->query($sql_student_entreprise);
$mysqli->query($sql_student);
$mysqli->query($sql_note);



$mysqli->commit();
$mysqli->close();

// echo "User has been added";

header("Location: student.php?student=". $_POST["student_id"] . "");
