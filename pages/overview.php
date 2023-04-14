<?php
require "../scripts/import_db_array.php";

// import timetable
$id = array();
$interval = array();
$day_id = array();
$schoolyear = array();

$id_cache = array("id", $id);
$interval_cache = array("interval", $interval);
$day_id_cache = array("day_id", $day_id);
$schoolyear_cache = array("schoolyear", $schoolyear);

$timetable_arr = array($id_cache, $interval_cache, $day_id_cache, $schoolyear_cache);

$sql_selector = "SELECT `id`, `interval`, `day_id`, `schoolyear` FROM timetable";

$result_timetable = import_arr($sql_selector, $timetable_arr);

$id = $result_timetable[0][1];
$interval = $result_timetable[1][1];
$day_id = $result_timetable[2][1];
$schoolyear = $result_timetable[3][1];

// import class
$id_class = array();
$name_class = array();

$arr_class = array(
    array("id", $id),
    array("name", $name_class)
);

$sql_class = "SELECT id, name FROM classes WHERE id = " . $link_value . "";

$result_class = import_arr($sql_class, $arr_class);

$id_class = $result_class[0][1];
$name_class = $result_class[1][1];

// import class free hours data
$id = array();
$class_id = array();
$free_hour1 = array();
$free_hour2 = array();

$arr_classes_free_hours = array(
    array("id", $id),
    array("class_id", $class_id),
    array("free_hour1", $free_hour1),
    array("free_hour2", $free_hour2)
);

$sql_selector_classes_free_hours = "SELECT `id`, `class_id`, `free_hour1`, `free_hour2` FROM classes_free_hours WHERE class_id = " . $link_value . "";

$result_classes_free_hours = import_arr($sql_selector_classes_free_hours, $arr_classes_free_hours);

$id = $result_classes_free_hours[0][1];
$class_id = $result_classes_free_hours[1][1];
$free_hour1 = $result_classes_free_hours[2][1];
$free_hour2 = $result_classes_free_hours[3][1];

// import student
$id_student = array();
$first_name_student = array();
$second_name_student = array();
$iam_student = array();
$schoolyear_student = array();

$student_arr = array(
    array("id", $id_student),
    array("first_name", $first_name_student),
    array("second_name", $second_name_student),
    array("iam", $iam_student),
    array("schoolyear", $schoolyear_student)
);

$sql_student = "SELECT id, first_name, second_name, iam, schoolyear FROM students";

$reuslt_student = import_arr($sql_student, $student_arr);

$id_student = $reuslt_student[0][1];
$first_name_student = $reuslt_student[1][1];
$second_name_student = $reuslt_student[2][1];
$iam_student = $reuslt_student[3][1];
$schoolyear_student = $reuslt_student[4][1];

// import students classes
$id_classes_students = array();
$student_id_classes_students = array();
$classes_id_classes_students = array();

$classes_students_arr = array(
    array("id", $id_classes_students),
    array("student_id", $student_id_classes_students),
    array("classes_id", $classes_id_classes_students)
);

$sql_classes_students = "SELECT id, student_id, classes_id FROM students_classes";

$result_classes_students = import_arr($sql_classes_students, $classes_students_arr);

$id_classes_students = $result_classes_students[0][1];
$student_id_classes_students = $result_classes_students[1][1];
$classes_id_classes_students = $result_classes_students[2][1];

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Free hours</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8765e29cc7.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        .txt {
            font-family: 'Inter', sans-serif;
            /* font-style: bold; */
            font-weight: 700;
            font-size: 24px;
            line-height: 150%;
            /* or 36px */
            display: flex;
            align-items: center;
            text-align: center;
            align-items: center;
            justify-content: center;
            letter-spacing: -0.019em;
            color: #000000;
            /* scale: 0.7 0.7; */
        }


        .header_tile {
            /* calendar cell */
            width: 200px;
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
            width: 200px;
            height: 140px;
            /* scale: 0.7 0.7; */
        }

        .liddle_tile {
            width: 200px;
            height: 70px;
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
            cursor: pointer;
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
            /* border-radius: 34px; */
        }

        .slider.round:before {
            border-radius: 50%;
        }

        .box {
            /* width: 200px;
            height: 70px; */
            border-radius: 6px;
            background: #A4A3A3;
            /* Inside auto layout */
            flex: none;
            /* flex-direction: row; */
            /* order: 0; */
            /* flex-grow: 0; */
            /* left: 0%;
            right: 0%;
            top: 0%;
            bottom: 0%; */
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
            font-size: 18px;
            font-weight: lighter;
            padding-right: 10px;
        }
    </style>
</head>

<div id="navbar"></div>
<script src="/scripts/navbar.js"></script>

<div class="container3">
    <!-- <div id="filters"> -->
    <!-- <div id="body" class="w100 container2"> -->
    <!-- <div id="body"> -->

    <div id="myBtnContainer" style="padding: 10px;">
        <div class="box">

            <div id="class" class="filter">

                <p>Classes</p>
                <ul>
                    <li id="testclass" class="inside_filter">
                        <table style="width:100%">
                            <tr>
                                <td>
                                    <p>4C2</p>
                                </td>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>

                                </td>
                            </tr>
                        </table>
                    </li>

                    <li id="testclass" class="inside_filter">
                        <table style="width:100%">
                            <tr>
                                <td>
                                    <p>4C2</p>
                                </td>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>

                                </td>
                            </tr>
                        </table>
                    </li>

                </ul>
            </div>

            <div id="salles" class="filter">
                <p>Salles</p>
                <ul>
                    <li id="testclass" class="inside_filter">
                        <table style="width:100%">
                            <tr>
                                <td>
                                    <p>B.2.11</p>
                                </td>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>

                                </td>
                            </tr>
                        </table>
                    </li>

                    <li id="testclass" class="inside_filter">
                        <table style="width:100%">
                            <tr>
                                <td>
                                    <p>B.2.11</p>
                                </td>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>

                                </td>
                            </tr>
                        </table>
                    </li>
                    
                </ul>
            </div>

            <div id="houses" class="filter">
                <p>Houses</p>

                <ul>
                    <li id="testclass" class="inside_filter">
                        <table style="width:30px">
                            <tr>
                                <td>
                                    <p>Larochette</p>
                                </td>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>

                                </td>
                            </tr>
                        </table>
                    </li>

                    <li id="testclass" class="inside_filter">
                        <table style="width:100%">
                            <tr>
                                <td>
                                    <p>Mersch</p>
                                </td>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>

                                </td>
                            </tr>
                        </table>
                    </li>

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
        <div class="calendar">
            <div class="row 1" style="order: 1;">
                <div class="header_tile txt"></div>
                <div class="header_tile txt">Lundi</div>
                <div class="header_tile txt">Mardi</div>
                <div class="header_tile txt">Mercredi</div>
                <div class="header_tile txt">Jeudi</div>
                <div class="header_tile txt">Vendredi</div>
            </div>

            <div class="row" style="order: 2;">
                <div class="dark_tile big_tile txt">
                    8:10 - 9:40
                </div>

                <div class="dark_tile big_tile txt"></div>
                <div class="dark_tile big_tile txt"></div>
                <div class="dark_tile big_tile txt"></div>
                <div class="dark_tile big_tile txt"></div>
                <div class="dark_tile big_tile txt"></div>
            </div>

            <div class="row" style="order: 3;">
                <div class="light_tile big_tile txt">
                    10:10 - 11:40
                </div>

                <div class="light_tile big_tile txt"></div>
                <div class="light_tile big_tile txt"></div>
                <div class="light_tile big_tile txt"></div>
                <div class="light_tile big_tile txt"></div>
                <div class="light_tile big_tile txt"></div>
            </div>

            <div class="row" style="order: 4;">
                <div class="dark_tile liddle_tile txt">
                    11:45 - 12:30
                </div>

                <div class="dark_tile liddle_tile txt"></div>
                <div class="dark_tile liddle_tile txt"></div>
                <div class="dark_tile liddle_tile txt"></div>
                <div class="dark_tile liddle_tile txt"></div>
                <div class="dark_tile liddle_tile txt"></div>
            </div>

            <div class="row" style="order: 5;">
                <div class="light_tile liddle_tile txt">
                    12:30 - 13:15
                </div>

                <div class="light_tile liddle_tile txt"></div>
                <div class="light_tile liddle_tile txt"></div>
                <div class="light_tile liddle_tile txt"></div>
                <div class="light_tile liddle_tile txt"></div>
                <div class="light_tile liddle_tile txt"></div>
            </div>

            <div class="row" style="order: 6;">
                <div class="dark_tile liddle_tile txt">
                    13:15 - 14:00
                </div>

                <div class="dark_tile liddle_tile txt"></div>
                <div class="dark_tile liddle_tile txt"></div>
                <div class="dark_tile liddle_tile txt"></div>
                <div class="dark_tile liddle_tile txt"></div>
                <div class="dark_tile liddle_tile txt"></div>
            </div>

            <div class="row" style="order: 8;">
                <div class="light_tile liddle_tile txt">
                    14:00 - 14:45
                </div>

                <div class="light_tile liddle_tile txt"></div>
                <div class="light_tile liddle_tile txt"></div>
                <div class="light_tile liddle_tile txt"></div>
                <div class="light_tile liddle_tile txt"></div>
                <div class="light_tile liddle_tile txt"></div>
            </div>

            <div class="row" style="order: 9;">
                <div class="dark_tile big_tile txt">
                    14:50 - 16:20
                </div>
                <div class="dark_tile big_tile txt"></div>
                <div class="dark_tile big_tile txt"></div>
                <div class="dark_tile big_tile txt"></div>
                <div class="dark_tile big_tile txt"></div>
                <div class="dark_tile big_tile txt"></div>
            </div>

            <!-- houses -->
            <script>
                var id_houses = <?php echo json_encode($id_houses); ?>;
                var name_houses = <?php echo json_encode($name_houses); ?>;
                var number_houses = <?php echo json_encode($number_houses); ?>;
                var schoolyear_houses = <?php echo json_encode($schoolyear_classes); ?>;

                //  for id, write name in main_box div
                const main_box = document.getElementById("main_box")
                for (let i = 0; i < id_houses.length; i++) {
                    main_box.insertAdjacentHTML("afterbegin", `      <a href="free_hours_houses.html?house_id=${id_houses[i]}" class="filterDiv Maisons">${name_houses[i]}`)
                }
            </script>
            <!-- classes -->
            <script>
                var id_classes = <?php echo json_encode($id_classes); ?>;
                var name_classes = <?php echo json_encode($name_classes); ?>;
                var schoolyear_classes = <?php echo json_encode($schoolyear_classes); ?>;

                //  for id, write name in main_box div
                for (let i = 0; i < id_classes.length; i++) {
                    main_box.insertAdjacentHTML("afterbegin", `      <a href="free_hours_continue.php?classes_id=${id_classes[i]}" class="filterDiv Classes">${name_classes[i]}`);
                }

                var id_student = <?php echo json_encode($id_student); ?>;
                var first_name_student = <?php echo json_encode($first_name_student); ?>;
                var second_name_student = <?php echo json_encode($second_name_student); ?>;
                var iam_student = <?php echo json_encode($iam_student); ?>;
                var schoolyear_student = <?php echo json_encode($schoolyear_student); ?>;

                var id_classes_students = <?php echo json_encode($id_classes_students); ?>;
                var student_id_classes_students = <?php echo json_encode($student_id_classes_students); ?>;
                var classes_id_classes_students = <?php echo json_encode($classes_id_classes_students); ?>;

                //  for id, write name in main_box div
                for (let i = 0; i < id_student.length; i++) {
                    let temp_class = student_id_classes_students.indexOf(id_student[i]);

                    main_box.insertAdjacentHTML("afterbegin", `      <a href="free_hours_continue.php?classes_id=${temp_class}" class="filterDiv eleves">${first_name_student[i]} ${second_name_student[i]}</a>`)
                }
            </script>
        </div>
    </div>
</div>

</div>