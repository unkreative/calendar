
<?php

require "../scripts/check-login.php";
cookie_session();

require "../scripts/import_db_array.php";

?>

<?php

$entreprise_id = $_GET["entreprise"];

// get entreprise names

$entreprise_keys = [
    "id",
    "name",
    "ceo",
 ];
 
 $sql_entreprise = "SELECT * FROM entreprise WHERE id = ".$entreprise_id;

 $result_entreprise = import_arr($sql_entreprise, $entreprise_keys);
 
 $id_entrerprise_one = $result_entreprise[0];
 $name_entreprise_one = $result_entreprise[1];
 $ceo_entreprise_one = $result_entreprise[2];
 
 

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
$entreprise_id = $id_entrerprise_one[0];
$sql_student_entreprise = "SELECT * FROM entreprise_student WHERE entreprise_1 = " . $entreprise_id . " OR entreprise_2 = " . $entreprise_id . " OR entreprise_3 = " . $entreprise_id . " OR entreprise_4 = " . $entreprise_id . " OR entreprise_5 = " . $entreprise_id . " OR entreprise_6 = " . $entreprise_id . " OR entreprise_7 = " . $entreprise_id . " OR entreprise_8 = " . $entreprise_id . ";";
// echo $sql_student_entreprise;
$result_student_entreprise = import_arr($sql_student_entreprise, $student_entreprise_keys);

$id_student_entreprise = $result_student_entreprise[0];

$student_keys = [ 
    "id",
    "first_name",
    "second_name",
    "iam",
    "class",
    "tuteur"
  ];
  
 
 $sql_student = "SELECT id, first_name, second_name, iam, class, tuteur FROM student";
 
 $student_result = import_arr($sql_student,$student_keys);
 
 $id_student = $student_result[0];
 $first_name_student = $student_result[1];
 $second_name_student = $student_result[2];
 $iam_student = $student_result[3];
 $class_student = $student_result[4];
 $tuteur_student = $student_result[5];
 


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

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Search</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="/css/main.css" rel="stylesheet">
    <head>

    <body style="margin-bottom: 50px;">
    <style>
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
    </style>

    <div id="navbar"></div>
<script src="/scripts/navbar.js"></script>

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


<div class="big_box">
    <div class="calendar" id="clear_box">

<select style="width: 10%;" onchange="change_entreprise()" name="class" id="selector">
<option value="none">change enterprise</option>
<option value="1">Académie Beauté</option>
<option value="2">Arts & Metiers</option>
<option value="3">Atelier des Gourmets</option>
<option value="4">BAM</option>
<option value="5">C.A.D.E</option>
<option value="6">Chelsea</option>
<option value="7">Circles</option>
<option value="8">LEM.SCIENCE</option>
<option value="9">Dragons</option>
<option value="10">Lemur</option>
<option value="11">LITE</option>
<option value="12">Natter</option>
<option value="13">Sätzwierk</option>
<option value="14">Seefood</option>
<option value="15">Growlight Company</option>
<option value="16">Waves</option>
</select>



    <div id="entreprise_insert"></div>
    <div id="ceo_insert"></div>
        <div class="row" style="order: 1;">
                              <div style="padding-top: 7px;" class="header_tile txt"></div>
                              <div style="padding-top: 7px;" class="header_tile txt">Lundi</div>
                              <div style="padding-top: 7px;" class="header_tile txt">Mardi</div>
                              <div style="padding-top: 7px;" class="header_tile txt">Mercredi</div>
                              <div style="padding-top: 7px;" class="header_tile txt">Jeudi</div>
                              <div style="padding-top: 7px;" class="header_tile txt">Vendredi</div>
                           </div>

                           <div class="row" style="order: 2;">
                              <div style=" padding-top: 0px;" class="dark_tile big_tile tile txt" id="sched-1-0">8:10 - 9:40</div>
                              <div class="dark_tile big_tile tile txt" id="sched-1-1"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-1-2"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-1-3"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-1-4"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-1-5"></div>
                           </div>

                           <div class="row" style="order: 3;">
                              <div style=" padding-top: 0px;" class="light_tile big_tile tile txt" id="sched-2-0">10:10 - 11:40</div>
                              <div class="light_tile big_tile tile txt" id="sched-2-1"></div>
                              <div class="light_tile big_tile tile txt" id="sched-2-2"></div>
                              <div class="light_tile big_tile tile txt" id="sched-2-3"></div>
                              <div class="light_tile big_tile tile txt" id="sched-2-4"></div>
                              <div class="light_tile big_tile tile txt" id="sched-2-5"></div>
                           </div>

                           <div class="row" style="order: 4;">
                              <div style="padding-top: 7px;" class="dark_tile liddle_tile tile txt" id="sched-3-0">11:45 - 12:30</div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-3-1"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-3-2"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-3-3"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-3-4"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-3-5"></div>
                           </div>
                           
                           <div class="row" style="order: 5;">
                              <div style="padding-top: 7px;" class="light_tile liddle_tile tile txt" id="sched-4-0">12:30 - 13:15</div>
                              <div class="light_tile liddle_tile tile txt" id="sched-4-1"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-4-2"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-4-3"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-4-4"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-4-5"></div>
                           </div>
                           
                           <div class="row" style="order: 6;">
                              <div style="padding-top: 7px;" class="dark_tile liddle_tile tile txt" id="sched-5-0">13:15 - 14:00</div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-5-1"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-5-2"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-5-3"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-5-4"></div>
                              <div class="dark_tile liddle_tile tile txt" id="sched-5-5"></div>
                           </div>
                           
                           <div class="row" style="order: 7;">
                              <div style="padding-top: 7px;" class="light_tile liddle_tile tile txt" id="sched-6-0">14:00 - 14:45</div>
                              <div class="light_tile liddle_tile tile txt" id="sched-6-1"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-6-2"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-6-3"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-6-4"></div>
                              <div class="light_tile liddle_tile tile txt" id="sched-6-5"></div>
                           </div>

                           <div class="row" style="order: 8;">
                              <div style=" padding-top: 0px;" class="dark_tile big_tile tile txt" id="sched-7-0">14:50 - 16:20</div>
                              <div class="dark_tile big_tile tile txt" id="sched-7-1"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-7-2"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-7-3"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-7-4"></div>
                              <div class="dark_tile big_tile tile txt" id="sched-7-5"></div>
                           </div>
                        </div>

                        <script>
const id_entreprise = <?php echo json_encode($id_entrerprise); ?>;
const name_entreprise = <?php echo json_encode($name_entreprise); ?>;
const ceo_entreprise = <?php echo json_encode($ceo_entreprise); ?>;

let entreprise_insert = document.getElementById("entreprise_insert");
let ceo_insert = document.getElementById("ceo_insert");

ceo_insert.insertAdjacentHTML("beforeend", `<p>Ceo: ${ceo_entreprise[<?php echo $_GET["entreprise"];?>-1]}</p>`);
entreprise_insert.insertAdjacentHTML("beforeend", `<p>Entreprise: ${name_entreprise[<?php echo $_GET["entreprise"];?>-1]}</p>`);

</script>

<script>

// function to change entreprise on change in select
const select =  document.getElementById("selector");

function change_entreprise() {
    console.log(select.value);
    window.location.assign(`http://sergonnelou.ddns.net:85/pages/entreprise.php?entreprise=${select.value}`);
};


const entreprise_input = <?php echo $_GET["entreprise"];?>;
function display_output() {
    
    student_dict.forEach(student => {
        let array_entreprise = [student.entreprise_1, student.entreprise_2, student.entreprise_3, student.entreprise_4, student.entreprise_5, student.entreprise_6, student.entreprise_7, student.entreprise_8];
        let array_entreprise_plage = [student.entreprise_1_plage, student.entreprise_2_plage, student.entreprise_3_plage, student.entreprise_4_plage, student.entreprise_5_plage, student.entreprise_6_plage, student.entreprise_7_plage, student.entreprise_8_plage];
        let array_truth = [false, false, false, false, false, false, false, false];
        let index = 0;

        array_entreprise.forEach(entreprise => {
            if (entreprise == entreprise_input) {

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
        
                var cell = document.getElementById(`sched-${dict[array_entreprise_plage[index]]}`);
                    
                cell.insertAdjacentHTML("afterbegin", `<a href="student.php?student=${student.id+1}" title="${student.first_name} ${student.second_name}" style=" font-family: sans-serif; font-weigth: normal;">${student.first_name.split(' ')[0]} ${student.second_name.charAt(0)}.</a><br>`);
                    
                };
                index = index + 1;
            });
            })

        };

        
        display_output();


</script>
