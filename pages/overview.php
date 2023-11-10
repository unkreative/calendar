<?php
require "../scripts/check-login.php";
cookie_session();

?>
<?php
// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';
// print_r($_SESSION["test"]);

require "../scripts/import_db_array.php";

// import timeschedule from student

$salle_name_keys = [
    "id",
    "name",
    "entreprise",
 
 ];
 
 $sql_salle_name = "SELECT id, name, entreprise FROM salle;";
 $salle_name_result = import_arr($sql_salle_name, $salle_name_keys);
 
 
 $id_salle_name = $salle_name_result[0];
 $name_salle_name = $salle_name_result[1];
 $entreprise_salle = $salle_name_result[2];
 
 $student_salle_keys = [
    "id",
    "salle_1",
    "salle_2",
    "salle_3",
    "salle_4",
    "salle_5",
    "salle_6",
    "salle_7",
    "salle_8",
    
 ];
 
 $sql_student_salle = "SELECT * FROM entreprise_student WHERE id = " . $id_student[0] . ";";
 
 $result_student_salle = import_arr($sql_student_salle, $student_salle_keys);
 
 $salle_1 = $result_student_salle[1];
 $salle_2 = $result_student_salle[2];
 $salle_3 = $result_student_salle[3];
 $salle_4 = $result_student_salle[4];
 $salle_5 = $result_student_salle[5];
 $salle_6 = $result_student_salle[6];
 $salle_7 = $result_student_salle[7];
 $salle_8 = $result_student_salle[8];
 



 
$student_entreprise_keys = [
    "id",
    "entreprise_1",
    "entreprise_1_plage",
    "entreprise_2",
    "entreprise_2_plage",
    "entreprise_3",
    "entreprise_3_plage",
    "entreprise_4",
    "entreprise_4_plage",
    "entreprise_5",
    "entreprise_5_plage",
    "entreprise_6",
    "entreprise_6_plage",
    "entreprise_7",
    "entreprise_7_plage",
    "entreprise_8",
    "entreprise_8_plage",
];

$sql_student_entreprise = "SELECT * FROM entreprise_student";

$result_student_entreprise = import_arr(
    $sql_student_entreprise,
    $student_entreprise_keys
);

$id_student_entreprise = $result_student_entreprise[0];
$entreprise_1 = $result_student_entreprise[1];
$entreprise_1_plage = $result_student_entreprise[2];
$entreprise_2 = $result_student_entreprise[3];
$entreprise_2_plage = $result_student_entreprise[4];
$entreprise_3 = $result_student_entreprise[5];
$entreprise_3_plage = $result_student_entreprise[6];
$entreprise_4 = $result_student_entreprise[7];
$entreprise_4_plage = $result_student_entreprise[8];
$entreprise_5 = $result_student_entreprise[9];
$entreprise_5_plage = $result_student_entreprise[10];
$entreprise_6 = $result_student_entreprise[11];
$entreprise_6_plage = $result_student_entreprise[12];
$entreprise_7 = $result_student_entreprise[13];
$entreprise_7_plage = $result_student_entreprise[14];
$entreprise_8 = $result_student_entreprise[15];
$entreprise_8_plage = $result_student_entreprise[16];

// get timetable data

// get entreprise names
$entreprise_keys = ["id", "name", "ceo"];

$sql_entreprise = "SELECT * FROM entreprise";
$result_entreprise = import_arr($sql_entreprise, $entreprise_keys);

$id_entrerprise = $result_entreprise[0];
$name_entreprise = $result_entreprise[1];
$ceo_entreprise = $result_entreprise[2];

// get class

$class_keys = ["id", "class_id", "house_id"];

$sql_class = "SELECT id, class_id, house_id FROM class";
$class_result = import_arr($sql_class, $class_keys);

$id_class = $class_result[0];
$name_class = $class_result[1];
$house_id = $class_result[2];

// get house

$house_keys = ["id", "name"];

$sql_houses = "SELECT id, name FROM house";

$result_houses = import_arr($sql_houses, $house_keys);

$id_houses = $result_houses[0];
$name_houses = $result_houses[1];

$student_keys = ["id", "first_name", "second_name", "iam", "class", "tuteur"];

$sql_student =
    "SELECT id, first_name, second_name, iam, class, tuteur FROM student";

$student_result = import_arr($sql_student, $student_keys);

$id_student = $student_result[0];
$first_name_student = $student_result[1];
$second_name_student = $student_result[2];
$iam_student = $student_result[3];
$class_student = $student_result[4];
$tuteur_student = $student_result[5];

$tuteur_key = ["id", "first_name", "second_name"];

$sql_tuteur = "SELECT id, first_name, second_name FROM tuteur";

$tuteur_result = import_arr($sql_tuteur, $tuteur_key);

$id_tuteur = $tuteur_result[0];
$first_name_tuteur = $tuteur_result[1];
$second_name_tuteur = $tuteur_result[2];

$student_entreprise_keys = [
    "id",
    "entreprise_1",
    "entreprise_1_plage",
    "entreprise_2",
    "entreprise_2_plage",
    "entreprise_3",
    "entreprise_3_plage",
    "entreprise_4",
    "entreprise_4_plage",
    "entreprise_5",
    "entreprise_5_plage",
    "entreprise_6",
    "entreprise_6_plage",
    "entreprise_7",
    "entreprise_7_plage",
    "entreprise_8",
    "entreprise_8_plage",
];

$sql_student_entreprise = "SELECT * FROM entreprise_student";

$result_student_entreprise = import_arr(
    $sql_student_entreprise,
    $student_entreprise_keys
);

$id_student_entreprise = $result_student_entreprise[0];
$entreprise_1 = $result_student_entreprise[1];
$entreprise_1_plage = $result_student_entreprise[2];
$entreprise_2 = $result_student_entreprise[3];
$entreprise_2_plage = $result_student_entreprise[4];
$entreprise_3 = $result_student_entreprise[5];
$entreprise_3_plage = $result_student_entreprise[6];
$entreprise_4 = $result_student_entreprise[7];
$entreprise_4_plage = $result_student_entreprise[8];
$entreprise_5 = $result_student_entreprise[9];
$entreprise_5_plage = $result_student_entreprise[10];
$entreprise_6 = $result_student_entreprise[11];
$entreprise_6_plage = $result_student_entreprise[12];
$entreprise_7 = $result_student_entreprise[13];
$entreprise_7_plage = $result_student_entreprise[14];
$entreprise_8 = $result_student_entreprise[15];
$entreprise_8_plage = $result_student_entreprise[16];

// get entreprise names
$entreprise_keys = ["id", "name", "ceo"];

$sql_entreprise = "SELECT * FROM entreprise";
$result_entreprise = import_arr($sql_entreprise, $entreprise_keys);

$id_entreprise = $result_entreprise[0];
$name_entreprise = $result_entreprise[1];
$ceo_entreprise = $result_entreprise[2];

?>


<!doctype html>
<html lang="en" style="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Overview</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8765e29cc7.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
body {overflow:scroll;}

a {
  color: black !important;
  text-decoration: none; /* no underline */
}

       .tile {
            /* width: auto; */

            height: fit-content;
            min-height: 200px;
    
        }
          
        .txt {
            font-family: 'Inter', sans-serif;
            /* font-style: bold; */
            font-weight: 700;
            font-size: 24px;
            line-height: 150%;
            /* or 36px */
            align-items: center;
            text-align: center;
            align-items: center;
            display: inline-block;
  vertical-align: middle;
            justify-content: center;
            letter-spacing: -.019em;
            color: #000000;
            /* scale: 0.7 0.7; */
        }


        .header_tile {
            /* calendar cell */
            width: 300px;
            height: 70px;
            border-radius: 6px;
            background: #A4A3A3;
            /* Inside auto layout */
            flex: none;
            /* order: 0; */
            /* flex-grow: 0; */
            left: 0%;
            right: 0%;
            top: 0%;
            bottom: 0%;
        }

        .big_tile {
            width: 300px;
            min-height: auto;
            min-height: 140px;
            height: 100%

            /* scale: 0.7 0.7; */
        }

        .liddle_tile {
            width: 300px;
            min-height: auto;
            min-height: 70px;
            height: 100%
            /* scale: 0.7 0.7; */
        }

        .dark_tile {
            background: #C9C9C9;
            border-radius: 6px;
            /* Inside auto layout */
            flex: none;
            flex-grow: 0;
        }

        .light_tile {
            background: #E6E6E6;
            border-radius: 6px;
            /* Inside auto layout */
            flex: none;
            flex-grow: 0;
        }

        .calendar {
            /* Auto layout */
            left: 0px;
            display: flex;
            /* position: relative; */
            flex-direction: column;
            /* align-items: flex-start; */
            padding-top: -100px;
            gap: 10px;
            /* width: 1250px; */
            /* height: 690px; */
            /* Inside auto layout */
            /* flex: none; */
            flex-grow: 0;
        }

        .big_box {
            /* Auto layout */
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: -100px;
            /* gap: 49px; */
            width: auto;
            height: auto;
            /* background: #525252; */
            border-radius: 6px;
            /* Inside auto layout */
            /* flex: none; */
            /* order: 0; */
            /* flex-grow: 0; */
            /* overflow: auto; */
        }

        .row {
            /* Auto layout */
            flex-wrap: nowrap !important;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            padding: 0px;
            gap: 10px;
            width: 1250px;
            /* height: 140px; */
            /* Inside auto layout */
            flex: none;
            flex-grow: 0;
        }

        p {
            font-size: 17px;
            padding-right: 5px;
            color: black;
        }

        .container {
            display: flex;
            margin-left: 0px;
            margin-right: 0px;
            /* flex-wrap: wrap; */
            overflow: hidden;
        }

        .container3 {
            display: flex;
            height: 100vh;
            flex-direction: row;
            align-items: flex-start;
            align-content: flex-start;
            flex-wrap: wrap;
            list-style: none;
            padding: 0;
            overflow: visible;
        }

        .item {
            order: 5;
            /* default is 0 */
            margin: 10px;
        }

        .class_box {
            font-size: 13px;
            width: 200px;
            height: 130px;
            border-radius: 16px;
            background-color: #E6E6E6;
        }

        .center {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .filterDiv {
            float: left;
            text-align: center;
            order: 5;
            /* default is 0 */
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 0px;
            margin-right: 20px;
            text-decoration: none;
            font-size: 13px;
            width: 200px;
            height: 130px;
            border-radius: 16px;
            background-color: #E6E6E6;
            display: flex;
            align-items: center;
            justify-content: center;
            display: none;
            /*Hidden by default */
            color: black;
        }

        .filterDiv:hover {
            text-decoration: none;
        }

        /* The "show" class is added to the filtered elements */
        .show {
            display: flex !important;
            /* display: block; */
        }

        .containerr {
            /* overflow: hidden; */
            display: flex;
            margin-left: 0px;
            margin-right: 0px;
            flex-wrap: wrap;
            overflow: hidden;
        }

        /* Style the buttons */
        .btnn {
            border: none;
            outline: none;
            padding: 6px 13px;
            /* padding-left: 4px; */
            margin-right: 5px;
            border-radius: 8px;
            background-color: #f1f1f1;
            font-size: 16px;
            cursor: pointer;
        }

        /* Add a light grey background on mouse-over */
        .btnn:hover {
            background-color: #ddd;
        }

        /* Add a dark background to the active button */
        .btnn.active {
            background-color: #666;
            color: white;
        }

        .info_sheet {
            margin-top: 10px;
            padding: 20px;
            background: #525252;
            width: auto;
            height: auto;
            border-radius: 10px;
            overflow: auto;
        }

        .first_textfield {
            list-style-type: none;
            font-size: 20px;
            padding-left: 30px;
        }

        .no_link {
            font-size: 17px;
            text-decoration: none;
            color: black;
        }

        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            margin-bottom: 8px;
            /* width: 60px;
            height: 34px; */
            width: 30px;
            height: 17px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: default;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            /* height: 26px;
            width: 26px; */
            height: 13px;
            width: 13px;

            left: 2px;
            bottom: 2px;

            /* left: 4px;
            bottom: 4px;
             */
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            /* -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px); */
            -webkit-transform: translateX(13px);
            -ms-transform: translateX(13px);
            transform: translateX(13px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 17px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        .box {
            border-radius: 6px;
            background: #A4A3A3;
            /* Inside auto layout */
            flex: none;

        }

        .filter {
            font-size: large;
            font-weight: bold;
            padding: 5px;
            display: flex;
            flex: auto;
            flex-direction: column;

        }
        .filter td:first-child {
            width: 120%;
        }

        .inside_filter {
            display: flex;
            flex: auto;
            flex-direction: row;
            /* justify-content: center; */
            align-items: center;
        }

        .inside_filter p {
            cursor: default;
            font-size: 18px;
            font-weight: lighter;
            padding-right: 10px;
        }
        /* ===== Scrollbar CSS ===== */
  /* Firefox */
  * {
    
    scrollbar-width: thin;
    scrollbar-color: #a09f9c #ffffff;
  }

  /* Chrome, Edge, and Safari */
  *::-webkit-scrollbar {
    width: 0px;
  }

  *::-webkit-scrollbar-track {
    background: #ffffff;
  }

  *::-webkit-scrollbar-thumb {
    background-color: #a09f9c;
    border-radius: 13px;
    border: 3px none #ffffff;
  }
  .container_scroll {
    -ms-overflow-style: none;  /* Internet Explorer 10+ */
    scrollbar-width: none;  /* Firefox */
}
.container::-webkit-scrollbar { 
    display: none;  /* Safari and Chrome */
}
    </style>
</head>

<!-- create student profile -->
<script>

var id_student = <?php echo json_encode($id_student); ?>;
var first_name_student = <?php echo json_encode($first_name_student); ?>;
var second_name_student = <?php echo json_encode($second_name_student); ?>;
var iam_student = <?php echo json_encode($iam_student); ?>;
var class_student = <?php echo json_encode($class_student); ?>;
var tuteur_student = <?php echo json_encode($tuteur_student); ?>;


var id_class = <?php echo json_encode($id_class); ?>;
var name_class = <?php echo json_encode($name_class); ?>;
var house_id_class = <?php echo json_encode($house_id); ?>;


var id_houses = <?php echo json_encode($id_houses); ?>;
var name_houses = <?php echo json_encode($name_houses); ?>;

const id_tuteur = <?php echo json_encode($id_tuteur); ?>;
const first_name_tuteur = <?php echo json_encode($first_name_tuteur); ?>;
const second_name_tuteur = <?php echo json_encode($second_name_tuteur); ?>;

      
const id_student_entreprise = <?php echo json_encode($id_student_entreprise); ?>;

const plage_1_entreprise = <?php echo json_encode($entreprise_1); ?>;
const plage_2_entreprise = <?php echo json_encode($entreprise_2); ?>;
const plage_3_entreprise = <?php echo json_encode($entreprise_4); ?>;
const plage_4_entreprise = <?php echo json_encode($entreprise_3); ?>;
const plage_5_entreprise = <?php echo json_encode($entreprise_5); ?>;
const plage_6_entreprise = <?php echo json_encode($entreprise_6); ?>;
const plage_7_entreprise = <?php echo json_encode($entreprise_7); ?>;
const plage_8_entreprise = <?php echo json_encode($entreprise_8); ?>;

const plage_1 = <?php echo json_encode($entreprise_1_plage); ?>;
const plage_2 = <?php echo json_encode($entreprise_2_plage); ?>;
const plage_3 = <?php echo json_encode($entreprise_4_plage); ?>;
const plage_4 = <?php echo json_encode($entreprise_3_plage); ?>;
const plage_5 = <?php echo json_encode($entreprise_5_plage); ?>;
const plage_6 = <?php echo json_encode($entreprise_6_plage); ?>;
const plage_7 = <?php echo json_encode($entreprise_7_plage); ?>;
const plage_8 = <?php echo json_encode($entreprise_8_plage); ?>;

const entreprises = <?php echo json_encode($name_entreprise); ?>;

const combined = [plage_1_entreprise, plage_2_entreprise, plage_3_entreprise, plage_4_entreprise, plage_5_entreprise, plage_6_entreprise, plage_7_entreprise, plage_8_entreprise];

var student_dict = [];

    id_student.forEach(student_id => {
        student_id = student_id - 1;
        
        let obj = {
        id: student_id,
        
        first_name: first_name_student[student_id],
        second_name: second_name_student[student_id],

        class_id: class_student[student_id],
        class_name: name_class[class_student[student_id]-1],

        house_id: house_id_class[class_student[student_id]],
        house_name: name_houses[house_id_class[class_student[student_id]-1]-1],

        tuteur_id: tuteur_student[student_id],
        tuteur_first_name: first_name_tuteur[tuteur_student[student_id]-1],
        tuteur_second_name: second_name_tuteur[tuteur_student[student_id]-1],

        entreprise_1: plage_1_entreprise[student_id],
        entreprise_1_name: entreprises[plage_1_entreprise[student_id]-1],
        entreprise_1_plage: plage_1[student_id],

        entreprise_2: plage_2_entreprise[student_id],
        entreprise_2_name: entreprises[plage_2_entreprise[student_id]-1],
        entreprise_2_plage: plage_2[student_id],

        entreprise_3: plage_3_entreprise[student_id],
        entreprise_3_name: entreprises[plage_3_entreprise[student_id]-1],
        entreprise_3_plage: plage_3[student_id],

        entreprise_4: plage_4_entreprise[student_id],
        entreprise_4_name: entreprises[plage_4_entreprise[student_id]-1],
        entreprise_4_plage: plage_4[student_id],

        entreprise_5: plage_5_entreprise[student_id],
        entreprise_5_name: entreprises[plage_5_entreprise[student_id]-1],
        entreprise_5_plage: plage_5[student_id],

        entreprise_6: plage_6_entreprise[student_id],
        entreprise_6_name: entreprises[plage_6_entreprise[student_id]-1],
        entreprise_6_plage: plage_6[student_id],

    };
        student_dict.push(obj); 
        // console.log(obj);
        
    });
</script>


<div id="navbar"></div>
<script src="/scripts/navbar.js"></script>

<div class="container3" style="overflow: scroll;">
    <!-- <div id="filters"> -->
    <!-- <div id="body" class="w100 container2"> -->
    <!-- <div id="body"> -->

    <div id="myBtnContainer" style="padding-right: 10px;">
        <div class="box"  style="margin-left: 10px; padding-left: 10px; margin-right: 10px; padding-right: 10px;">


        <div id="houses" class="filter">
                <p>Houses</p>

                <ul>
                    <div id="houses_insert"></div>

                </ul>
            </div>
            <div id="entreprises" class="filter">
                <p>Entreprises</p>

                <ul>
                    <div id="entreprises_insert"></div>

                </ul>
            </div>


            <div id="class" class="filter">

                <p>Classes</p>
                <ul>
                <div id="class_insert" class="container_scroll" style="overflow-y: scroll; height: 400px;"></div>


                </ul>
            </div>

            <!-- 
            <button class="btnn active" onclick="filterSelection('all')"> Show all</button><br>
            <button class="btnn active" onclick="filterSelection('Maisons')"> Maisons</button><br>
            <button class="btnn" onclick="filterSelection('Classes')"> Classes</button><br>
            <button class="btnn" onclick="filterSelection('eleves')"> eleves</button><br> -->

        </div>

    </div>

    <!-- <div id="main_box" class="containerr"> -->
    <!-- <div id="main_box"> -->
    <div class="big_box">
        <div class="calendar" id="clear_box">
        <div class="row" style="order: 1;">
                              <div style="padding-top: 17px;" class="header_tile txt"></div>
                              <div style="padding-top: 17px;" class="header_tile txt">Lundi</div>
                              <div style="padding-top: 17px;" class="header_tile txt">Mardi</div>
                              <div style="padding-top: 17px;" class="header_tile txt">Mercredi</div>
                              <div style="padding-top: 17px;" class="header_tile txt">Jeudi</div>
                              <div style="padding-top: 17px;" class="header_tile txt">Vendredi</div>
                           </div>

                           <div class="row" style="order: 2;">
                              <div style="padding-top: 50px;" class="dark_tile big_tile tile txt" id="sched-1-0">8:10 - 9:40</div>
                              <div class="dark_tile big_tile tile txt" id="sched-1-1"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-1-2"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-1-3"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-1-4"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-1-5"></div>
                           </div>

                           <div class="row" style="order: 3;">
                              <div style="padding-top: 50px;" class="light_tile big_tile tile txt" id="sched-2-0">10:10 - 11:40</div>
                              <div class="light_tile big_tile tile txt" id="sched-2-1"></div>
                              <div class="light_tile big_tile tile txt" id="sched-2-2"></div>
                              <div class="light_tile big_tile tile txt" id="sched-2-3"></div>
                              <div class="light_tile big_tile tile txt" id="sched-2-4"></div>
                              <div class="light_tile big_tile tile txt" id="sched-2-5"></div>
                           </div>

                           <div class="row" style="order: 4;">
                              <div style="padding-top: 17px;" class="dark_tile liddle_tile tile txt" id="sched-3-0">11:45 - 12:30</div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-3-1"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-3-2"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-3-3"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-3-4"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-3-5"></div>
                           </div>
                           
                           <div class="row" style="order: 5;">
                              <div style="padding-top: 17px;" class="light_tile liddle_tile tile txt" id="sched-4-0">12:30 - 13:15</div>
                              <div class="light_tile liddle_tile tile txt" id="sched-4-1"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-4-2"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-4-3"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-4-4"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-4-5"></div>
                           </div>
                           
                           <div class="row" style="order: 6;">
                              <div style="padding-top: 17px;" class="dark_tile liddle_tile tile txt" id="sched-5-0">13:15 - 14:00</div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-5-1"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-5-2"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-5-3"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-5-4"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-5-5"></div>
                           </div>
                           
                           <div class="row" style="order: 7;">
                              <div style="padding-top: 17px;" class="light_tile liddle_tile tile txt" id="sched-6-0">14:00 - 14:45</div>
                              <div class="light_tile liddle_tile tile txt" id="sched-6-1"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-6-2"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-6-3"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-6-4"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-6-5"></div>
                           </div>

                           <div class="row" style="order: 8;">
                              <div style="padding-top: 50px;" class="dark_tile big_tile tile txt" id="sched-7-0">14:50 - 16:20</div>
                              <div class="dark_tile big_tile tile txt" id="sched-7-1"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-7-2"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-7-3"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-7-4"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-7-5"></div>
                           </div>
                        </div>

            <!-- houses -->
            <script>
                var id_houses = <?php echo json_encode($id_houses); ?>;
                var name_houses = <?php echo json_encode($name_houses); ?>;
                var house_box = document.getElementById("houses_insert");

                //  for id, write name in main_box div
                for (let i = 0; i < id_houses.length; i++) {
                    house_box.insertAdjacentHTML("afterend", `      <li id="q_${name_houses[i]}" class="inside_filter"><table style="width:100%;"><tr><td><p>${name_houses[i]}</p></td><td><label class="switch"><input onclick='update_output("${name_houses[i]}", 0)' type="checkbox"><span class="slider round"></span></label></td></tr></table></li>`);
                }
            </script>
            <!-- entreprises -->
            <script>
                var id_entreprise = <?php echo json_encode($id_entreprise); ?>;
                var name_entreprises = <?php echo json_encode($name_entreprise); ?>;
                var entreprises_box = document.getElementById("entreprises_insert");

                //  for id, write name in main_box div
                for (let i = 0; i < id_houses.length; i++) {
                    entreprises_box.insertAdjacentHTML("afterend", `<li class="inside_filter">
   <table style="width:100%;">
      <tr>
         <td>
            <p>${name_entreprises[i]}</p>
         </td>
         <td><label class="switch"><input onclick='update_output("${name_entreprises[i]}", 1)' type="checkbox"><span class="slider round"></span></label></td>
      </tr>
   </table>
</li>`);
                }
            </script>


            <!-- classes -->
            <script>
                var id_classes = <?php echo json_encode($id_class); ?>;
                var name_classes = <?php echo json_encode($name_class); ?>;
                var class_box = document.getElementById("class_insert");

                //  for id, write name in main_box div
                for (let i = 0; i < id_classes.length; i++) {
                    class_box.insertAdjacentHTML("afterbegin", `      <li id="q_${name_classes[i]}" class="inside_filter"><table style="width:100%"><tr><td><p>${name_classes[i]}</p></td><td><label class="switch"><input onclick='update_output("${name_classes[i]}", 2)' type="checkbox"><span class="slider round"></span></label></td></tr></table></li>`);
                }

                var id_student = <?php echo json_encode($id_student); ?>;
                var first_name_student = <?php echo json_encode($first_name_student); ?>;
                var second_name_student = <?php echo json_encode($second_name_student); ?>;
                var iam_student = <?php echo json_encode($iam_student); ?>;


            </script>
    </div>
</div>

<script>

// 0 = houses
// 1 = entreprises
// 2 = classes

var filter_array = [
    [],
    [],
    []

];

function removeItemFromArray(array, item) {
    trueorfalse = true;
    if (array[0].length == 0 && array[1].length == 0 && array[2].length == 0) {
    
        console.log("empty")
        return {
        arr:array,
        truth:true
      }
    }
	  console.log("reached 1");
	  // Iterate over each subarray in the input array
	  for (let i = 0; i < array.length; i++) {
	    const subarray = array[i];
        console.log("reached 2");
	 
	    // Check if the item is present in the subarray
	    const index = subarray.indexOf(item);
	    if (index !== -1) {
	      // If found, remove the item from the subarray
	      subarray.splice(index, 1);
	  console.log("reached 3");
      trueorfalse = false;
	    }
	  }
	 
	  // Return the modified array
	  return {
        arr:array,
        truth:trueorfalse
      } 
	}

function clearBox(elementID){
    document.getElementById(elementID).innerHTML = `       <div class="row" style="order: 1;">
                              <div style="padding-top: 17px;" class="header_tile txt"></div>
                              <div style="padding-top: 17px;" class="header_tile txt">Lundi</div>
                              <div style="padding-top: 17px;" class="header_tile txt">Mardi</div>
                              <div style="padding-top: 17px;" class="header_tile txt">Mercredi</div>
                              <div style="padding-top: 17px;" class="header_tile txt">Jeudi</div>
                              <div style="padding-top: 17px;" class="header_tile txt">Vendredi</div>
                           </div>

                           <div class="row" style="order: 2;">
                              <div style="padding-top: 50px;" class="dark_tile big_tile tile txt" id="sched-1-0">8:10 - 9:40</div>
                              <div class="dark_tile big_tile tile txt" id="sched-1-1"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-1-2"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-1-3"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-1-4"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-1-5"></div>
                           </div>

                           <div class="row" style="order: 3;">
                              <div style="padding-top: 50px;" class="light_tile big_tile tile txt" id="sched-2-0">10:10 - 11:40</div>
                              <div class="light_tile big_tile tile txt" id="sched-2-1"></div>
                              <div class="light_tile big_tile tile txt" id="sched-2-2"></div>
                              <div class="light_tile big_tile tile txt" id="sched-2-3"></div>
                              <div class="light_tile big_tile tile txt" id="sched-2-4"></div>
                              <div class="light_tile big_tile tile txt" id="sched-2-5"></div>
                           </div>

                           <div class="row" style="order: 4;">
                              <div style="padding-top: 17px;" class="dark_tile liddle_tile tile txt" id="sched-3-0">11:45 - 12:30</div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-3-1"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-3-2"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-3-3"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-3-4"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-3-5"></div>
                           </div>
                           
                           <div class="row" style="order: 5;">
                              <div style="padding-top: 17px;" class="light_tile liddle_tile tile txt" id="sched-4-0">12:30 - 13:15</div>
                              <div class="light_tile liddle_tile tile txt" id="sched-4-1"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-4-2"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-4-3"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-4-4"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-4-5"></div>
                           </div>
                           
                           <div class="row" style="order: 6;">
                              <div style="padding-top: 17px;" class="dark_tile liddle_tile tile txt" id="sched-5-0">13:15 - 14:00</div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-5-1"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-5-2"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-5-3"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-5-4"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-5-5"></div>
                           </div>
                           
                           <div class="row" style="order: 7;">
                              <div style="padding-top: 17px;" class="light_tile liddle_tile tile txt" id="sched-6-0">14:00 - 14:45</div>
                              <div class="light_tile liddle_tile tile txt" id="sched-6-1"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-6-2"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-6-3"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-6-4"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-6-5"></div>
                           </div>

                           <div class="row" style="order: 8;">
                              <div style="padding-top: 50px;" class="dark_tile big_tile tile txt" id="sched-7-0">14:50 - 16:20</div>
                              <div class="dark_tile big_tile tile txt" id="sched-7-1"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-7-2"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-7-3"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-7-4"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-7-5"></div>
                           </div>
                        </div>
    `;
};

function update_output(added_value, group) {
    console.log("added value: ", added_value);
    console.log("filter_array: ", filter_array);
    
    clearBox("clear_box");
    
    let result = removeItemFromArray(filter_array, added_value);
    filer_array = result.array;

    if (result.truth) {
        filter_array[group].push(added_value);

    }
    clearBox("clear_box");


  console.log("filter_array: ", filter_array);

  display_output();
};



function display_output() {
    if (filter_array[0].length == 0 && filter_array[1].length == 0 && filter_array[2].length == 0) {
        return;
    }
    student_dict.forEach(student => {
        let counter = 0;
        // console.log(student)

        filter_array.forEach(group => {

            if (Array.isArray(group) && group.length){

                output = true;
            }
            else { 
                output = false;
                counter = counter + 1;
                return false;}

            // console.log("group;", group);
            let = group_matched = false;
        
            group.forEach(filter_items => {
                // console.log("filter item", filter_items)
                var obj1_str = JSON.stringify(student);
                var found = obj1_str.includes(filter_items);

                if (!found) {
                    return false;
                };

                if (group.indexOf(filter_items) === group.length - 1) {
                    // console.log("last iteration of group")
                };
                group_matched = true;

                counter = counter +1;
                // console.log(student)

                // console.log("counter: ", counter, "student passed the filter")
                

            });

        });
        if (counter == 3) {
            console.log("student to display")
            console.log(student)
                // insert them into the timetable
   
                const dict = {
                                 1: "1-1",
                                 2: "2-1",
                                 3: "3-1",
                                 4: "4-1",
                                 5: "5-1",
                                 6: "6-1",
                                 7: "7-1",
                                 8: "1-2",
                                 9: "2-2",
                                 10: "3-2",
                                 11: "4-2",
                                 12: "5-2",
                                 13: "6-2",
                                 14: "7-2",
                                 15: "1-3",
                                 16: "2-3",
                                 17: "3-3",
                                 18: "4-3",
                                 19: "5-3",
                                 20: "6-3",
                                 21: "7-3",
                                 22: "1-4",
                                 23: "2-4",
                                 24: "3-4",
                                 25: "4-4",
                                 26: "5-4",
                                 27: "6-4",
                                 28: "7-4",
                                 29: "1-5",
                                 30: "2-5",
                                 31: "3-5",
                                 32: "4-5",
                                 33: "5-5",
                                 34: "6-5",
                                 35: "7-5",
                };

                var plage_arr = [plage_1[student.id], plage_2[student.id], plage_3[student.id], plage_4[student.id], plage_5[student.id], plage_6[student.id], plage_7[student.id], plage_8[student.id]];
                             
                var index = 0;

                for (var element of plage_arr) {
                    let current_entreprise = combined[index];

                    // console.log(dict[element]);
                    
                    var cell = document.getElementById(`sched-${dict[element]}`);
                    
                    cell.insertAdjacentHTML("afterbegin", `<a href="student.php?student=${student.id+1}" title="${student.first_name} ${student.second_name}" style=" font-family: sans-serif; font-weigth: normal;">${student.first_name.split(' ')[0]} ${student.second_name.charAt(0)}.</a><br>`);
                    
                    index ++;
                    
                };

        }


    });
}
</script>
</div>
