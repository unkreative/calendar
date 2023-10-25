<?php
require "../scripts/check-login.php";
cookie_session();

?>
<!doctype html>
<!-- TODO expand this, with more data afterwards -->
<?php
require "../scripts/import_db_array.php";   
$link_value = $_GET['student'];

$notes_keys = ["id", "note"];// to continue, working on the note system

$sql_note = "SELECT id, note FROM note where id = " . $link_value;

$note_result = import_arr($sql_note, $notes_keys);

$id_note = $note_result[0][0];
$note = $note_result[1][0];

$student_keys = [ 
   "id",
   "first_name",
   "second_name",
   "iam",
   "class",
   "tuteur"
 ];
 

$sql_student = "SELECT id, first_name, second_name, iam, class, tuteur FROM student where id = " . $link_value . "";

$student_result = import_arr($sql_student,$student_keys);

$id_student = $student_result[0];
$first_name_student = $student_result[1];
$second_name_student = $student_result[2];
$iam_student = $student_result[3];
$class_student = $student_result[4];
$tuteur_student = $student_result[5];

$tuteur_key = [
   "id",
   "first_name",
   "second_name",
];

$sql_tuteur = "SELECT id, first_name, second_name FROM tuteur WHERE id = '" . $tuteur_student[0] . "';";

$tuteur_result = import_arr($sql_tuteur, $tuteur_key);

$id_tuteur = $tuteur_result[0];
$first_name_tuteur = $tuteur_result[1];
$second_name_tuteur = $tuteur_result[2];


// get class

$class_keys = [
   "id",
   "class_id",
   "house_id",

];

$sql_class = "SELECT id, class_id, house_id FROM class WHERE id = " . $class_student[0] . ";";
$class_result = import_arr($sql_class, $class_keys);


$id_class = $class_result[0];
$name_class = $class_result[1];
$house_id = $class_result[2];


// get house

$house_keys = [
   "id",
   "name"
];

$sql_houses = "SELECT id, name FROM house where id = " . $house_id[0] . "";

$result_houses = import_arr($sql_houses, $house_keys);


$id_houses = $result_houses[0];
$name_houses = $result_houses[1];

// import timeschedule from student
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

$sql_student_entreprise = "SELECT * FROM entreprise_student WHERE id = " . $id_student[0] . ";";

$result_student_entreprise = import_arr($sql_student_entreprise, $student_entreprise_keys);

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


// get entreprise names
$entreprise_keys = [
   "id",
   "name",
   "ceo",
];

$sql_entreprise = "SELECT * FROM entreprise";
$result_entreprise = import_arr($sql_entreprise, $entreprise_keys);

$id_entrerprise = $result_entreprise[0];
$name_entreprise = $result_entreprise[1];
$ceo_entreprise = $result_entreprise[2];


   ?>
<html lang="en">
   
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>students</title>
      <!-- fontawesome -->
      <script src="https://kit.fontawesome.com/8765e29cc7.js" crossorigin="anonymous"></script>
      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
      <!-- <link href="/css/main.css" rel="stylesheet"> -->
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
    /* background: #A4A3A3; */
    background: #737373;
    
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
    /* background: #525252; */
    background: #959595;

    
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
                     <li id="salle_fields">
                        <!-- Salles: 1:  -->

                     
     
                     <li id="units_field">
                        <!-- Units: 4, chelsea; 4 lite = OK -->
                     </li>
                     <li  id="tuteur_field">
                        <!-- Tuteur: Alex Bara -->
                     </li>
                     <li  id="note_field">
                        <!-- Tuteur: Alex Bara -->
                     </li>
                  </div>
                  
                  <script>

                              const id = <?php echo json_encode($id_student); ?>;
                              const first_name = <?php echo json_encode($first_name_student); ?>;
                              const second_name = <?php echo json_encode($second_name_student); ?>;
                              const iam = <?php echo json_encode($iam_student); ?>;
                              const house = <?php echo json_encode($name_houses); ?>;
                              const classes = <?php echo json_encode($name_class); ?>;

                              const note = <?php echo json_encode($note); ?>;

                              const first_name_tuteur = <?php echo json_encode($first_name_tuteur); ?>;
                              const second_name_tuteur = <?php echo json_encode($second_name_tuteur); ?>;

                              const name_field = document.getElementById("name_field");
                              const iam_field = document.getElementById("iam_field");
                              const class_field = document.getElementById("class_field");
                              const house_field = document.getElementById("house_field");
                              const units_field = document.getElementById("units_field");
                              const tuteur_field = document.getElementById("tuteur_field");
                              const note_field = document.getElementById("note_field");

                              // insert links to class, house, and tuteur 

                              name_field.insertAdjacentHTML("afterbegin", `<p>Name: ${first_name[0]} ${second_name[0]}</p>`);
                              iam_field.insertAdjacentHTML("afterbegin", `<p>IAM: ${iam[0]}</p>`);
                              class_field.insertAdjacentHTML("afterbegin", `<a class="no_link" href="/pages/classes.php?class=${<?php echo $id_class[0] ?>}">Class: ${classes[0]}</p>`);
                              house_field.insertAdjacentHTML("afterbegin", `<p>House: ${house[0]}</p>`);
                              note_field.insertAdjacentHTML("afterbegin", `<p>Note: ${note}</p>`);

                              tuteur_field.insertAdjacentHTML("afterbegin", `<p>Tuteur: ${first_name_tuteur[0]} ${second_name_tuteur[0]}</p>`)


                  </script>

                  <!-- TODO make a timetable template, divs? or bootstrap -->
                  <div class="big_box" style="height:750px;">
                     <div style="scale: 0.8; margin-top: -50px; width: auto; heigth: auto;">
                        <div class="calendar">
                           <div class="row" style="order: 1;">
                              <div class="header_tile txt"></div>
                              <div class="header_tile txt">Lundi</div>
                              <div class="header_tile txt">Mardi</div>
                              <div class="header_tile txt">Mercredi</div>
                              <div class="header_tile txt">Jeudi</div>
                              <div class="header_tile txt">Vendredi</div>
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
                                
                              const id_student_entreprise = <?php echo json_encode($id_student_entreprise); ?>;

                              const plage_1_entreprise = <?php echo json_encode($entreprise_1); ?>;
                              const plage_2_entreprise = <?php echo json_encode($entreprise_2); ?>;
                              const plage_3_entreprise = <?php echo json_encode($entreprise_4); ?>;
                              const plage_4_entreprise = <?php echo json_encode($entreprise_3); ?>;
                              const plage_5_entreprise = <?php echo json_encode($entreprise_5); ?>;
                              const plage_6_entreprise = <?php echo json_encode($entreprise_6); ?>;
                              const plage_7_entreprise = <?php echo json_encode($entreprise_7); ?>;
                              const plage_8_entreprise = <?php echo json_encode($entreprise_8); ?>;

                              const plage_1 = <?php echo json_encode($entreprise_1_plage[0]); ?>;
                              const plage_2 = <?php echo json_encode($entreprise_2_plage[0]); ?>;
                              const plage_3 = <?php echo json_encode($entreprise_4_plage[0]); ?>;
                              const plage_4 = <?php echo json_encode($entreprise_3_plage[0]); ?>;
                              const plage_5 = <?php echo json_encode($entreprise_5_plage[0]); ?>;
                              const plage_6 = <?php echo json_encode($entreprise_6_plage[0]); ?>;
                              const plage_7 = <?php echo json_encode($entreprise_7_plage[0]); ?>;
                              const plage_8 = <?php echo json_encode($entreprise_8_plage[0]); ?>;

                              const salle_1 = <?php echo json_encode($salle_1[0]); ?>;
                              const salle_2 = <?php echo json_encode($salle_2[0]); ?>;
                              const salle_3 = <?php echo json_encode($salle_4[0]); ?>;
                              const salle_4 = <?php echo json_encode($salle_3[0]); ?>;
                              const salle_5 = <?php echo json_encode($salle_5[0]); ?>;
                              const salle_6 = <?php echo json_encode($salle_6[0]); ?>;
                              const salle_7 = <?php echo json_encode($salle_7[0]); ?>;
                              const salle_8 = <?php echo json_encode($salle_8[0]); ?>;
                              
                              const entreprises = <?php echo json_encode($name_entreprise); ?>;
                              
                              const combined = [plage_1_entreprise, plage_2_entreprise, plage_3_entreprise, plage_4_entreprise, plage_5_entreprise, plage_6_entreprise, plage_7_entreprise, plage_8_entreprise];

                              var units_present = 0;

                              const count = {};

                              for (const element of combined) {
                              if (count[element]) {
                                 count[element] += 1;
                              } else {
                                 count[element] = 1;
                              }
                              }
                              // console.log(Object.keys(count).length);
                              // console.log(count);


                              var text_display = "Entreprise(s): ";
                              var index = 0;

                              for (var prop in count) {

                                 let cache_entreprise = Object.values(prop)[0];
                                 
                                 let cache_plages = Object.values(count);
                                 
                                 if (index == 1) {
                                    text_display = text_display + ", ";
                                 }
                                 text_display = text_display + `${entreprises[cache_entreprise-1]} (${cache_plages[index]})`;

                                 index = index + 1; 
                              }
                              console.log(text_display);
                              units_field.insertAdjacentHTML("afterbegin", `<p>${text_display}</p>`);
                              

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
                              // console.log(plage_1);
                              // console.log(plage_2);
                              // console.log(plage_3);
                              // console.log(plage_4);
                              // console.log(plage_5);
                              // console.log(plage_6);
                              // console.log(plage_7);
                              // console.log(plage_8);

                              var plage_arr = [plage_1, plage_2, plage_3, plage_4, plage_5, plage_6, plage_7, plage_8];
                             
                              
                              var index = 0;
                              for (var element of plage_arr) {
                                 let current_entreprise = combined[index];
                                 console.log(dict[element]);

                                 var cell = document.getElementById(`sched-${dict[element]}`);
                                 cell.insertAdjacentHTML("afterbegin", `<b style=" font-family: sans-serif; font-weigth: normal;">${entreprises[current_entreprise-1]}</b>`);


                              index ++;
                           
                           };

                           const id_salle = <?php echo json_encode($id_salle_name); ?>;
                           const name_salle = <?php echo json_encode($name_salle_name); ?>;
                           const entreprise_salle = <?php echo json_encode($entreprise_salle); ?>;
                           
                           let insert_salle = `</p>Salle: </p> 
                           <table style=" width: 100%;"><tr>
                                 <td id="salle_1">1: ${name_salle[id_salle[salle_1]]}</td>
                                 <td id="salle_2">2: ${name_salle[id_salle[salle_2]]}</td>
                                 <td id="salle_3">3: ${name_salle[id_salle[salle_3]]}</td>
                                 <td id="salle_4">4: ${name_salle[id_salle[salle_4]]}</td>
                                 <td id="salle_5">5: ${name_salle[id_salle[salle_5]]}</td>
                                 <td id="salle_6">6: ${name_salle[id_salle[salle_6]]}</td>
                                 <td id="salle_7">7: ${name_salle[id_salle[salle_7]]}</td>
                                 <td id="salle_8">8: ${name_salle[id_salle[salle_8]]}</td>
                           </tr></table></li>`
                           let insertobj_salle = document.getElementById("salle_fields")
                           insertobj_salle.insertAdjacentHTML("afterbegin", insert_salle);


                           </script>

</div>
</div>
</div>
<div id="edit_button" style="">
   <a href="/pages/edit_student.php?student=<?php echo $_GET["student"]?>" class="btn btn-lg btn-primary btn-block" style="font-size: 15px; margin-left: 25px; width: 13%;" class="button">Edit</a>
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
