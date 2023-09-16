<?php
require "../scripts/check-login.php";
cookie_session();

?>
<?php

require "../scripts/import_db_array.php";

// echo 'Success: A proper connection to MySQL was made.';
// echo '<br>';
// echo 'Host information: '.$mysqli->host_info;
// echo '<br>';
// echo 'Protocol version: '.$mysqli->protocol_version;

$link_value = $_GET['class'];
// echo $link_value;



// get student data
$student_keys = [
  "id",
  "first_name",
  "second_name",
  "iam",
  "class",
  "tuteur"
];

$sql_student = "SELECT id, first_name, second_name, iam, class, tuteur FROM student WHERE class = '" . $link_value ."';";

  $student_result = import_arr($sql_student,$student_keys);

  $id_student = $student_result[0];
  $first_name_student = $student_result[1];
  $second_name_student = $student_result[2];
  $iam_student = $student_result[3];
  $class_student = $student_result[4];
  $tuteur_student = $student_result[5];

// get entreprise
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
 
 // get timetable data
 
 
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
 
   

// tuteur
$sql_tuteur = "SELECT first_name, second_name FROM tuteur";
$tuteur_keys = [
  "first_name", 
  "second_name"
];
$result_tuteur = import_arr($sql_tuteur, $tuteur_keys);

$first_name_tuteur = $result_tuteur[0];
$second_name_tuteur = $result_tuteur[1];


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>classes</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <style>
      p {
        font-size: 17px;
        padding-right: 5px;
      }
      .container2 {
        display: flex; 
        margin-left: 12.5% !important;
        margin-right: 12.5% !important;
        flex-wrap: wrap;
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
        margin: 10px;
        text-decoration: none; 
        font-size: 13px;
        width: 200px;
        height: 130px;
        border-radius: 16px;
        background-color: #E6E6E6;
        display: flex;
        align-items: center;
        justify-content: center;
        /* display: none; Hidden by default */
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
        overflow: hidden;
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

      .hide_a {
        text-decoration: none;
        color: black;
      }
    </style>
<body style="margin-bottom: 50px;">
    
    <div id="navbar"></div>
    <script src="/scripts/navbar.js"></script>


    <!-- <div id="body" class="container2"> -->
    

    <div id="main_box" class="containerr">

      <!-- classes -->

<table class="table h-100 w-100" style="font-size: 2rem;" id="main_box">
        
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Entreprise(s)</th>
            <th scope="col">iam</th>
            <th scope="col">tuteur</th>
          </tr>
        </thead>
        <tbody id="inp">

      </tbody>
      </table>
</div>
    </div>
  </div>
  <script>

var id_student = <?php echo json_encode($id_student); ?>;
var first_name_student = <?php echo json_encode($first_name_student); ?>;
var second_name_student = <?php echo json_encode($second_name_student); ?>;
var iam_student = <?php echo json_encode($iam_student); ?>;        
var class_student = <?php echo json_encode($class_student); ?>;
var tuteur_first_name = <?php echo json_encode($first_name_tuteur); ?>;
var tuteur_second_name = <?php echo json_encode($second_name_tuteur); ?>;

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

const entreprises = <?php echo json_encode($name_entreprise); ?>;


//  for id, write name in main_box div

// TODO; ENTREPRISE CORRECTLY
const main_box = document.getElementById("inp")
for (let i = 0; i < id_student.length; i++) {
console.log(i);
let Arr  = [plage_1_entreprise[i], plage_2_entreprise[i], plage_3_entreprise[i], plage_4_entreprise[i], plage_5_entreprise[i], plage_6_entreprise[i], plage_7_entreprise[i], plage_8_entreprise[i]];
function onlyUnique(value, index, array) {
  return array.indexOf(value) === index;
};


let entreprises_string = Arr.filter(onlyUnique);
console.log(entreprises_string);
let string_entreprise = "";

let index_e = 0;
entreprises_string.forEach(entreprise => {
  if (index_e != 0) {
    string_entreprise = string_entreprise + ", ";
  };
  string_entreprise = string_entreprise + entreprises[entreprise];
  index_e = index_e + 1;
});

  main_box.insertAdjacentHTML("afterbegin",`     <tr>
    <th scope="row">${id_student[i]}</th>
    <td><a class="hide_a" href="student.php?student=${id_student[i]}">${second_name_student[i]} ${first_name_student[i]}</a></td>
    <td>${string_entreprise}</td>
    <td>${iam_student[i]}</td>
    <td>${tuteur_first_name[i]} ${tuteur_second_name[i]}</td>
  </tr>

  `)
}

</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</body>

</html>