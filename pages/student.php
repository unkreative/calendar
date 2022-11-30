<!doctype html>
<!-- TODO expand this, with more data afterwards -->
<?php
   $db_host = 'localhost';
   $db_user = 'root';
   $db_password = 'root';
   $db_db = 'schedule';
   
   $mysqli = @new mysqli(
     $db_host,
     $db_user,
     $db_password,
     $db_db
   );
   
   if ($mysqli->connect_error) {
     echo 'Errno: '.$mysqli->connect_errno;
     echo '<br>';
     echo 'Error: '.$mysqli->connect_error;
     exit();
   }
   
   $link_value = $_GET['student_id'];
   echo $link_value;

   // echo 'Success: A proper connection to MySQL was made.';
   // echo '<br>';
   // echo 'Host information: '.$mysqli->host_info;
   // echo '<br>';
   // echo 'Protocol version: '.$mysqli->protocol_version;
   
   $id = array();
   $first_name = array();
   $second_name = array();
   $iam = array();
   // timetable
   $schoolyear = array();
   
   $sql = "SELECT id, first_name, second_name, iam, schoolyear FROM students where id = " . $link_value . "";
   echo $sql;
   $result = $mysqli->query($sql);
   
   if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
       array_push($id, $row["id"]);
       array_push($first_name, $row["first_name"]);
       array_push($second_name, $row["second_name"]);
       array_push($iam, $row["iam"]);
       array_push($schoolyear, $row["schoolyear"]);
   
       // echo "id: " . $row["id"]. " - First Name: " . $row["first_name"]. "- Last name" . $row["second_name"]. "- iam" . $row["iam"]. "- schoolyear". $row["schoolyear"]. "<br>";
     }
   } else {
     echo "0 results";
   }

   // $id_tuteur_selector = array();
   // $tuteur_id = array();

   
   // $sql_tuteur_selector = "SELECT id, student_id, tuteur_id, schoolyear FROM tuteur_student where student_id = " . $link_value . "";
   // $result_tuteur_selector = $mysqli->query($sql_tuteur_selector);
   
   // if ($result_tuteur_selector->num_rows > 0) {
   //    while($row = $result_tuteur_selector->fetch_assoc()) {
   
   //       array_push($id_tuteur_selector, $row["id"]);
   //       array_push($tuteur_id, $row["tuteur_id"]);
   //    }
   // } else {
   //   echo "0 results";
   // }
   
   // $id_tuteur = array();
   // $first_name_tuteur = array();
   // $second_name_tuteur = array();
   // $schoolyear = array();


   // $sql_tuteur = "SELECT id, first_name, second_name, house, entreprise, schoolyear FROM tuteur where id = " . $tuteur_id_selector . "";
   // $result_tuteur = $mysqli->query($sql_tuteur);

   // if ($result_tuteur->num_rows > 0) {
   //    while($row = $result_tuteur->fetch_assoc()) {
   
   //       array_push($id_tuteur, $row["id"]);
   //       array_push($first_name_tuteur, $row["first_name"]);
   //       array_push($second_name_tuteur, $row["second_name"]);
   //       array_push($schoolyear, $row["schoolyear"]);
   //    }
   // } else {
   //   echo "0 results";
   // }


   $id_class_selector = array();
   $class_id_selector = array();

   
   $sql_class_selector = "SELECT id, student_id, classes_id FROM students_classes where student_id = " . $link_value . "";
   $result_class_selector = $mysqli->query($sql_class_selector);
   
   if ($result_class_selector->num_rows > 0) {
      while($row = $result_class_selector->fetch_assoc()) {
   
         array_push($id_class_selector, $row["id"]);
         array_push($class_id_selector, $row["classes_id"]);
      }
   } else {
     echo "0 results";
   }
   
   $id_class = array();
   $name_class = array();
   
   echo "<br>";
   echo $class_id_selector[0];
   echo "<br>";
   $sql_class = "SELECT id, name, schoolyear FROM classes where id = " . $class_id_selector[0] . "";

   $result_class = $mysqli->query($sql_class);

   if ($result_class->num_rows > 0) {
      while($row = $result_class->fetch_assoc()) {
   
         array_push($id_class, $row["id"]);
         array_push($name_class, $row["name"]);
      }
   } else {
     echo "0 results";
   }

// select house
   $id_houses_selector = array();
   $houses_id_selector = array();

   
   $sql_houses_selector = "SELECT id, classes_id, house_id FROM classes_houses where house_id = " . $link_value . "";
   $result_houses_selector = $mysqli->query($sql_houses_selector);
   
   if ($result_houses_selector->num_rows > 0) {
      while($row = $result_houses_selector->fetch_assoc()) {
   
         array_push($id_houses_selector, $row["id"]);
         array_push($houses_id_selector, $row["house_id"]);
      }
   } else {
     echo "0 results";
   }
   
   $id_houses = array();
   $name_houses = array();
   
   $sql_houses = "SELECT id, name, schoolyear FROM houses where id = " . $houses_id_selector[0] . "";

   $result_houses = $mysqli->query($sql_houses);

   if ($result_houses->num_rows > 0) {
      while($row = $result_houses->fetch_assoc()) {
   
         array_push($id_houses, $row["id"]);
         array_push($name_houses, $row["name"]);
      }
   } else {
     echo "0 results";
   }

   $id_timetable  = array();
   $student_id = array();
   $entreprise_id = array();

   $plage_1 = array();
   $plage_2 = array();
   $plage_3 = array();
   $plage_4 = array();
   $plage_5 = array();
   $plage_6 = array();
   $plage_7 = array();
   $plage_8 = array();

   $schoolyear_timetable = array();


   $sql_timetable = "SELECT id, student_id, entreprise_id, plage_1, plage_2, plage_3, plage_4, plage_5, plage_6, plage_7, plage_8, schoolyear FROM student_entreprise where student_id = " . $link_value . "";
   $result_timetable = $mysqli->query($sql_timetable);

   if ($result_timetable->num_rows > 0) {
     // output data of each row
     while($row = $result_timetable->fetch_assoc()) {
       array_push($id_timetable, $row["id"]);
       array_push($student_id, $row["student_id"]);
       array_push($entreprise_id, $row["entreprise_id"]);

       array_push($plage_1, $row["plage_1"]);
       array_push($plage_2, $row["plage_2"]);
       array_push($plage_3, $row["plage_3"]);
       array_push($plage_4, $row["plage_4"]);
       array_push($plage_5, $row["plage_5"]);
       array_push($plage_6, $row["plage_6"]);
       array_push($plage_7, $row["plage_7"]);
       array_push($plage_8, $row["plage_8"]);

       array_push($schoolyear_timetable, $row["schoolyear"]);
   
       // echo "id: " . $row["id"]. " - First Name: " . $row["first_name"]. "- Last name" . $row["second_name"]. "- iam" . $row["iam"]. "- schoolyear". $row["schoolyear"]. "<br>";
     }
   } else {
     echo "0 results";
   }
   $timetable_dates = array();

   $mysqli->close();
   ?>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Bootstrap 101 Template</title>
      <!-- fontawesome -->
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
      </style>
   <body style="margin-bottom: 50px;">
      <div id="navbar"></div>
      <script src="/scripts/navbar.js"></script>
      <div class="container">
         <div id="body" class="container">
            <div id="main_box" class="containerr">
               <div id=info_sheet class="info_sheet">
                  <div class="first_textfield">
                     <li id="name_field">
                        <!-- Name: Lou Sergonne -->
                     </li>
                     <li id="iam_field">
                        <!-- iam: -->
                     </li>
                     <li id="class_field">
                        <!-- Class: 4C2 -->
                     </li>
                     <li id="house_field">
                        <!-- House: Larochette -->
                     </li>
                     <li id="units_field">
                        <!-- Units: 4, chelsea; 4 lite = OK -->
                     </li>
                     <li  id="tuteur_field">
                        <!-- Tuteur: Alex Bara -->
                     </li>
                  </div>
                  
                  <script>

                              const id = <?php echo json_encode($student_id); ?>;
                              const first_name = <?php echo json_encode($first_name); ?>;
                              const second_name = <?php echo json_encode($second_name); ?>;
                              const iam = <?php echo json_encode($iam); ?>;
                              const house = <?php echo json_encode($name_houses); ?>;
                              const classes = <?php echo json_encode($name_class); ?>;
// // import class
//                               const first_name_tuteur = <?php // echo json_encode($first_name_tuteur); ?>;
                              // const second_name_tuteur = <?php // echo json_encode($second_name_tuteur); ?>;

                              const name_field = document.getElementById("name_field");
                              const iam_field = document.getElementById("iam_field");
                              const class_field = document.getElementById("class_field");
                              const house_field = document.getElementById("house_field");
                              const units_field = document.getElementById("units_field");
                              const tuteur_field = document.getElementById("tuteur_field");

                              // insert links to class, house, and tuteur 

                              name_field.insertAdjacentHTML("afterbegin", `<p>Name: ${first_name[0]} ${second_name[0]}</p>`)
                              iam_field.insertAdjacentHTML("afterbegin", `<p>IAM: ${iam[0]}</p>`)
                              class_field.insertAdjacentHTML("afterbegin", `<a>class: ${classes[0]}</p>`)
                              house_field.insertAdjacentHTML("afterbegin", `<p>house: ${house[0]}</p>`)
                              // units_field.insertAdjacentHTML("afterbegin", `<p>${units_field}</p>`)
                              // tuteur_field.insertAdjacentHTML("afterbegin", `<p>tuteur: ${first_name_tuteur} ${second_name_tuteur}</p>`)




                              

                  </script>

                  <!-- TODO make a timetable template, divs? or bootstrap -->
                  <div class="big_box">
                     <div style="scale: 0.8; margin-top: -50px; width: auto; heigth: auto;">
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
                              <div class="dark_tile big_tile txt" id="sched-1-1"><i class="fa-solid fa-xmark" style="scale: 2; color: red;"></i></div>
                              <div class="dark_tile big_tile txt" id="sched-1-2"><i class="fa-solid fa-xmark" style="scale: 2; color: red;"></i></div>
                              <div class="dark_tile big_tile txt" id="sched-1-3"><i class="fa-solid fa-xmark" style="scale: 2; color: red;"></i></div>
                              <div class="dark_tile big_tile txt" id="sched-1-4"><i class="fa-solid fa-xmark" style="scale: 2; color: red;"></i></div>
                              <div class="dark_tile big_tile txt" id="sched-1-5"><i class="fa-solid fa-xmark" style="scale: 2; color: red;"></i></div>
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
                              <div class="light_tile liddle_tile txt" id="sched-6-1"><i class="fa-solid fa-xmark" style="scale: 2; color: red;"></i></div>
                              <div class="light_tile liddle_tile txt" id="sched-6-2"></div>
                              <div class="light_tile liddle_tile txt" id="sched-6-3"></div>
                              <div class="light_tile liddle_tile txt" id="sched-6-4"></div>
                              <div class="light_tile liddle_tile txt" id="sched-6-5"></div>
                           </div>

                           <div class="row" style="order: 8;">
                              <div class="dark_tile big_tile txt" id="sched-7-0">14:50 - 16:20</div>
                              <div class="dark_tile big_tile txt" id="sched-7-1"><i class="fa-solid fa-xmark" style="scale: 2; color: red;"></i></div>
                              <div class="dark_tile big_tile txt" id="sched-7-2"></div>
                              <div class="dark_tile big_tile txt" id="sched-7-3"></div>
                              <div class="dark_tile big_tile txt" id="sched-7-4"></div>
                              <div class="dark_tile big_tile txt" id="sched-7-5"></div>
                           </div>

                              <!-- <i class="fa-solid fa-check" style="scale: 2; color: #39FF14;"></i>
                                 this is for the chekmark -> should be present there
                                 -->
                              <!-- <i class="fa-solid fa-xmark" style="scale: 2; color: red;"></i> 
                                 this is for the dash -> not available 
                                 -->
                            <script>
                                
                              const id_timetable = <?php echo json_encode($id_timetable); ?>;
                              const student_id = <?php echo json_encode($student_id); ?>;
                              const entreprise_id = <?php echo json_encode($entreprise_id); ?>;

                              const plage_1 = <?php echo json_encode($plage_1); ?>;
                              const plage_2 = <?php echo json_encode($plage_2); ?>;
                              const plage_3 = <?php echo json_encode($plage_4); ?>;
                              const plage_4 = <?php echo json_encode($plage_3); ?>;
                              const plage_5 = <?php echo json_encode($plage_5); ?>;
                              const plage_6 = <?php echo json_encode($plage_6); ?>;
                              const plage_7 = <?php echo json_encode($plage_7); ?>;
                              const plage_8 = <?php echo json_encode($plage_8); ?>;
                              
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
                              
                              const timetable = <?php echo json_encode($timetable_dates); ?>;
                              

                              // console.log(plage_1);
                              // console.log(plage_2);
                              // console.log(plage_3);
                              // console.log(plage_4);
                              // console.log(plage_5);
                              // console.log(plage_6);
                              // console.log(plage_7);
                              // console.log(plage_8);

                              var plage_arr = [plage_1, plage_2, plage_3, plage_4, plage_5, plage_6, plage_7, plage_8];
                              var plage_arr_day = [plage_1_day, plage_2_day, plage_3_day, plage_4_day, plage_5_day, plage_6_day, plage_7_day, plage_8_day];
                              var plage_arr_plage = [plage_1_plage, plage_2_plage, plage_3_plage, plage_4_plage, plage_5_plage, plage_6_plage, plage_7_plage, plage_8_day];
                              console.log(plage_arr);

                              var index = 0;
                              for (const element of plage_arr) {
                                 
                                 let day = plage_arr_day[index];
                                 let plage = plage_arr_plage[index];
                                 console.log(plage);
                                 console.log(day);

                                 // current fix for test data 
                                 if (day > 5){
                                    day = day-5;
                                 };     

                                 if (plage > 7){
                                    plage = plage-5;
                                    console.log(plage);
                                 };           
                                 
                                 if (plage == 1){
                                    console.log("skip");
                                    console.log(plage);
                                    
                                 }
                                 else if (plage == 0){
                                    console.log("skip");
                                    console.log(plage);
                                 }
                                 else if (day == 0){
                                    console.log("skip");
                                    console.log(plage);
                                 }
                                 else if (plage == 7 && day == 1){
                                    console.log("skip");
                                    console.log(plage);
                                 }
                                 else if (plage == 6 && day == 1){
                                    console.log("skip");
                                    console.log(plage);
                                 }
                                 else {
                                 console.log("else");

                                 var cell = document.getElementById(`sched-${plage}-${day}`);
                                 console.log(`sched-${day}-${plage}`)

                                 // let cell = document.getelementbyid(`sched-${day}-${plage}`);

                                 cell.insertAdjacentHTML("afterbegin", `<i class="fa-solid fa-check" style="scale: 2; color: #39FF14;"></i>`);
                                 console.log(element, index);
                              };
                              index ++;
                           
                           };

                  </script>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      
        </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
   </body>
</html>