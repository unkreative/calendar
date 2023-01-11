<?php
require "../scripts/import_db_array.php";
$link_value = $_GET["classes_id"];

// import timetable
$id = array();
$interval = array();
$day_id = array();
$schoolyear = array();

$id_cache = array("id",$id);
$interval_cache = array("interval",$interval);
$day_id_cache = array("day_id",$day_id);
$schoolyear_cache = array("schoolyear",$schoolyear);

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
    array("id", $id ),
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
         flex-wrap: nowrap!important;
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
         .item {
         order: 5; /* default is 0 */
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
         order: 5; /* default is 0 */
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
         display: none; /*Hidden by default */
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
      </style>
    </head>

    <div id="navbar"></div>
    <script src="/scripts/navbar.js"></script>


<!-- the compartement where the active students are displayed -->
<div class="big_box">
    <div style="scale: 1">
        <p>class: <?php echo $name_class[0]; ?></p>

        <div class="calendar">
            <div class="row" style="order: 1;">
                <div class="header_tile txt"></div>
                <div class="header_tile txt">Lundi</div>
                <div class="header_tile txt">Mardi</div>
                <div class="header_tile txt">Mercredi</div>
                <div class="header_tile txt">Jeudi</div>
                <div class="header_tile txt">Mardi</div>
            </div>

            <div class="row" style="order: 2;">
                <div class="dark_tile big_tile txt" id="sched-1-0">8:10 - 9:40</div>
                <div class="dark_tile big_tile txt" id="sched-1-1"></div>
                <div class="dark_tile big_tile txt" id="sched-1-2"></div>
                <div class="dark_tile big_tile txt" id="sched-1-3"></div>
                <div class="dark_tile big_tile txt" id="sched-1-4"></div>
                <div class="dark_tile big_tile txt" id="sched-1-5"></div>
            </div>

            <div class="row" style="order: 3;">
                <div class="light_tile big_tile txt" id="sched-2-0">10:10 - 11:40</div>
                <div class="light_tile big_tile txt" id="sched-2-1"></div>
                <div class="light_tile big_tile txt" id="sched-2-2"></div>
                <div class="light_tile big_tile txt" id="sched-2-3"></div>
                <div class="light_tile big_tile txt" id="sched-2-4"></div>
                <div class="light_tile big_tile txt" id="sched-2-5"></div>
            </div>

            <div class="row" style="order: 4;">
                <div class="dark_tile liddle_tile txt" id="sched-3-0">11:45 - 12:30</div>
                <div class="dark_tile liddle_tile txt" id="sched-3-1"></div>
                <div class="dark_tile liddle_tile txt" id="sched-3-2"></div>
                <div class="dark_tile liddle_tile txt" id="sched-3-3"></div>
                <div class="dark_tile liddle_tile txt" id="sched-3-4"></div>
                <div class="dark_tile liddle_tile txt" id="sched-3-5"></div>
            </div>
            
            <div class="row" style="order: 5;">
                <div class="light_tile liddle_tile txt" id="sched-4-0">12:30 - 13:15</div>
                <div class="light_tile liddle_tile txt" id="sched-4-1"></div>
                <div class="light_tile liddle_tile txt" id="sched-4-2"></div>
                <div class="light_tile liddle_tile txt" id="sched-4-3"></div>
                <div class="light_tile liddle_tile txt" id="sched-4-4"></div>
                <div class="light_tile liddle_tile txt" id="sched-4-5"></div>
            </div>
            
            <div class="row" style="order: 6;">
                <div class="dark_tile liddle_tile txt" id="sched-5-0">13:15 - 14:00</div>
                <div class="dark_tile liddle_tile txt" id="sched-5-1"></div>
                <div class="dark_tile liddle_tile txt" id="sched-5-2"></div>
                <div class="dark_tile liddle_tile txt" id="sched-5-3"></div>
                <div class="dark_tile liddle_tile txt" id="sched-5-4"></div>
                <div class="dark_tile liddle_tile txt" id="sched-5-5"></div>
            </div>
            
            <div class="row" style="order: 7;">
                <div class="light_tile liddle_tile txt" id="sched-6-0">14:00 - 14:45</div>
                <div class="light_tile liddle_tile txt" id="sched-6-1"></div>
                <div class="light_tile liddle_tile txt" id="sched-6-2"></div>
                <div class="light_tile liddle_tile txt" id="sched-6-3"></div>
                <div class="light_tile liddle_tile txt" id="sched-6-4"></div>
                <div class="light_tile liddle_tile txt" id="sched-6-5"></div>
            </div>

            <div class="row" style="order: 8;">
                <div class="dark_tile big_tile txt" id="sched-7-0">14:50 - 16:20</div>
                <div class="dark_tile big_tile txt" id="sched-7-1"></div>
                <div class="dark_tile big_tile txt" id="sched-7-2"></div>
                <div class="dark_tile big_tile txt" id="sched-7-3"></div>
                <div class="dark_tile big_tile txt" id="sched-7-4"></div>
                <div class="dark_tile big_tile txt" id="sched-7-5"></div>
            </div>

        </div>
    </div>


<script>
    // import timetable
    const timetable_id = <?php echo json_encode($id); ?>;
    const interval = <?php echo json_encode($interval); ?>;
    const day_id = <?php echo json_encode($day_id); ?>;


    const id = <?php echo json_encode($id); ?>;
    const class_id = <?php echo json_encode($class_id); ?>;
    const free_hour1 = <?php echo json_encode($free_hour1); ?>;
    const free_hour2 = <?php echo json_encode($free_hour2); ?>;

    let free_hour1_new = free_hour1[0].split("-");
    let day_free_hour_1 = free_hour1_new[1];
    let plage_free_hour_1 = free_hour1_new[0];

    let free_hour2_new = free_hour2[0].split("-");
    let day_free_hour_2 = free_hour2_new[1];
    let plage_free_hour_2 = free_hour2_new[0];

    // failsafe if test data is bad
    if (day_free_hour_1 > 5){
        day_free_hour_1 = day_free_hour_1-5;
    };     
    if (day_free_hour_2 > 5){
        day_free_hour_2 = day_free_hour_2-5;
    };

    if (plage_free_hour_1 > 7){
        plage_free_hour_1 = plage_free_hour_1-5;
    };           
    
    if (plage_free_hour_2 > 7){
        plage_free_hour_2 = plage_free_hour_2-5;
    };
    
    var cell_hour1 = document.getElementById(`sched-${plage_free_hour_1}-${day_free_hour_1}`);
    console.log(cell_hour1);
    cell_hour1.insertAdjacentHTML("afterbegin", `<i class="fa-solid fa-check" style="scale: 2; color: #39FF14;"></i>`);

    var cell_hour2 = document.getElementById(`sched-${plage_free_hour_2}-${day_free_hour_2}`);

    cell_hour2.insertAdjacentHTML("afterbegin", `<i class="fa-solid fa-check" style="scale: 2; color: #39FF14;"></i>`);


</script>

