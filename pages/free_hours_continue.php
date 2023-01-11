<!-- import data what student should be there, and the names and links for the students -->
<?php
require "../scripts/import_db_array";

$link_value = $_GET['classes_id'];

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

// import student data
$id_student = array();
$first_name_student = array();
$second_name_student = array();
$iam_student = array();
$schoolyear_student = array();

$id_student_cache = array("id",$id_student);
$first_name_student_cache = array("first_name",$first_name_student);
$second_name_student_cache = array("second_name",$second_name_student);
$iam_student_cache = array("iam",$iam_student);
$schoolyear_student_cache = array("schoolyear",$schoolyear_student);

$arr_student = array($id_student_cache,$first_name_student_cache,$second_name_student_cache,$iam_student_cache,$schoolyear_student_cache);

$sql_student = "SELECT id, first_name, second_name, iam, schoolyear FROM students";

$result_student = import_arr($sql_student, $arr_student);

$id_student = $result_student[0][1];
$first_name_student = $result_student[1][1];
$second_name_student = $result_student[2][1];
$iam_student = $result_student[3][1];
$schoolyear_student = $result_student[4][1];

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

        </div>
    </div>


<script>
    // import timetable
    const timetable_id = <?php echo json_encode($id); ?>;
    const interval = <?php echo json_encode($interval); ?>;
    const day_id = <?php echo json_encode($day_id); ?>;

    // import entreprise students
    // const id_student_entreprise = <?php // echo json_encode($id_student_entreprise ); ?>;
    // const student_id = <?php // echo json_encode($student_id); ?>;
    // const entreprise_id = <?php // echo json_encode($entreprise_id); ?>;
    // const plage_1 = <?php // echo json_encode($plage_1); ?>;
    // const plage_2 = <?php // echo json_encode($plage_2); ?>;
    // const plage_3 = <?php // echo json_encode($plage_3); ?>;
    // const plage_4 = <?php // echo json_encode($plage_4); ?>;
    // const plage_5 = <?php // echo json_encode($plage_5); ?>;
    // const plage_6 = <?php // echo json_encode($plage_6); ?>;
    // const plage_7 = <?php // echo json_encode($plage_7); ?>;
    // const plage_8 = <?php // echo json_encode($plage_8)// ; ?>;


    // import plages
    const id_student_entreprise = <?php echo json_encode($id_student_entreprise); ?>;
    const student_id = <?php echo json_encode($student_id); ?>;
    const entreprise_id = <?php echo json_encode($entreprise_id); ?>;

    let plage_1 = <?php echo json_encode($plage_1); ?>;
    let plage_2 = <?php echo json_encode($plage_2); ?>;
    let plage_3 = <?php echo json_encode($plage_4); ?>;
    let plage_4 = <?php echo json_encode($plage_3); ?>;
    let plage_5 = <?php echo json_encode($plage_5); ?>;
    let plage_6 = <?php echo json_encode($plage_6); ?>;
    let plage_7 = <?php echo json_encode($plage_7); ?>;
    let plage_8 = <?php echo json_encode($plage_8); ?>;

    const plage_1_ = plage_1[0].split("-");
    const plage_1_day = plage_1_[1];
    const plage_1_plage = plage_1_[0];


    const plage_2_ = plage_2[0].split("-");
    const plage_2_day = plage_2_[1];
    const plage_2_plage = plage_2_[0];


    const plage_3_ = plage_3[0].split("-");
    const plage_3_day = plage_3_[1];
    const plage_3_plage = plage_3_[0];


    const plage_4_ = plage_4[0].split("-");
    const plage_4_day = plage_4_[1];
    const plage_4_plage = plage_4_[0];


    const plage_5_ = plage_5[0].split("-");
    const plage_5_day = plage_5_[1];
    const plage_5_plage = plage_5_[0];


    const plage_6_ = plage_6[0].split("-");
    const plage_6_day = plage_6_[1];
    const plage_6_plage = plage_6_[0];


    const plage_7_ = plage_7[0].split("-");
    const plage_7_day = plage_7_[1];
    const plage_7_plage = plage_7_[0];

    const plage_8_ = plage_8[0].split("-");
    const plage_8_day = plage_8_[1];
    const plage_8_plage = plage_8_[0];

    const schoolyear = <?php echo json_encode($schoolyear_timetable); ?>;

    // const timetable = <?php // echo json_encode($timetable_dates); ?>;


    // function getDayName(dateStr, locale){
    //     var date = new Date(dateStr);
    //     return date.toLocaleDateString(locale, { weekday: 'long' });        
    // };


    // function get_plage(){
        
    //     var currentTime = new Date();
    //     var day = getDayName(currentTime, "en-GB");

    //     // select day
    //     var day_id_selector = 0;
        
    //     var weekdays = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    //     var weekdays_id = [1,2,3,4,5,0,0];
        
    //     for (let i = 0; i < weekdays.length; i++) {
    //         if (weekdays[i] == day){
    //             console.log(weekdays[i], weekdays_id[i])
    //             day_id_selector = weekdays_id[i]
    //     }};

    //     // find the interval currenty in
    //     var plage = 0    
    //     console.log(interval)

    //     for (let ii = 0; ii < interval.length; ii++){
    //         var interval_i = interval[ii].split("-");
    //         var startTime = `${interval_i[0]}`;
    //         var endTime = `${interval_i[1]}`;
        
    //         // var startTime = '15:10:10';
    //         // var endTime = '22:30:00';
            
    //         currentDate = new Date()
    //         console.log(startTime, endTime,currentDate)
    
    //         startDate = new Date(currentDate.getTime());
    //         startDate.setHours(startTime.split(":")[0]);
    //         startDate.setMinutes(startTime.split(":")[1]);

    //         endDate = new Date(currentDate.getTime());
    //         endDate.setHours(endTime.split(":")[0]);
    //         endDate.setMinutes(endTime.split(":")[1]);

    //         valid = startDate < currentDate && endDate > currentDate
    //         console.log(valid)
    //         if (valid == "True"){
    //             plage = ii
    //         }
    //     }
    // };
            
    // get_plage()

    let selector = `${plage}-${day_id_selector}`
    console.log(selector)

</script>

