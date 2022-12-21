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

// echo 'Success: A proper connection to MySQL was made.';
// echo '<br>';
// echo 'Host information: '.$mysqli->host_info;
// echo '<br>';
// echo 'Protocol version: '.$mysqli->protocol_version;

$link_value = $_GET['classes_id'];
// echo $link_value;


$id = array();
$class_id = array();
$student_id = array();


$sql_selector = "SELECT id, student_id, classes_id FROM students_classes WHERE classes_id = " . $link_value . "";

$result_selector = $mysqli->query($sql_selector);

// echo $result_selector;
if ($result_selector->num_rows > 0) {
  // output data of each row
  while($row = $result_selector->fetch_assoc()) {
    array_push($id, $row["id"]);
    array_push($student_id, $row["student_id"]);
    array_push($class_id, $row["classes_id"]);

    // echo "id: " . $row["id"]. " - First Name: " . $row["first_name"]. "- Last name" . $row["second_name"]. "- iam" . $row["iam"]. "- schoolyear". $row["schoolyear"]. "<br>";
  }
} else {
  echo "0 results";
}

$student_id_txt = "";

foreach ($student_id as $key => $value) {

  $student_id_txt = $student_id_txt . " " .  $value . ",";
  # code...
}
// echo "<Br>";
$student_id_txt = substr_replace($student_id_txt, "", -1);

// echo $student_id_txt;
$sql_student = "SELECT id, first_name, second_name, iam, schoolyear FROM students WHERE id IN (" . $student_id_txt . ")";
// echo "<Br>";
// echo $sql_student;
$result_student = $mysqli->query($sql_student);

$id_student = array();
$first_name_student = array();
$second_name_student = array();
$iam_student = array();
$schoolyear_student = array();


if ($result_student->num_rows > 0) {
  // output data of each row
  while($row = $result_student->fetch_assoc()) {
    array_push($id_student, $row["id"]);
    array_push($first_name_student, $row["first_name"]);
    array_push($second_name_student, $row["second_name"]);
    array_push($iam_student, $row["iam"]);
    array_push($schoolyear_student, $row["schoolyear"]);


    // echo "id: " . $row["id"]. " - First Name: " . $row["first_name"]. "- Last name" . $row["second_name"]. "- iam" . $row["iam"]. "- schoolyear". $row["schoolyear"]. "<br>";
  }
} else {
  echo "0 results";
}
// echo $first_name_student[0];

// TODO input rooms, and entreprises
$sql_student = "SELECT id, first_name, second_name, iam, schoolyear FROM students WHERE id IN (" . $student_id_txt . ")";

$result_student = $mysqli->query($sql_student);

$id_student = array();
$first_name_student = array();
$second_name_student = array();
$iam_student = array();
$schoolyear_student = array();


if ($result_student->num_rows > 0) {
  // output data of each row
  while($row = $result_student->fetch_assoc()) {
    array_push($id_student, $row["id"]);
    array_push($first_name_student, $row["first_name"]);
    array_push($second_name_student, $row["second_name"]);
    array_push($iam_student, $row["iam"]);
    array_push($schoolyear_student, $row["schoolyear"]);


    // echo "id: " . $row["id"]. " - First Name: " . $row["first_name"]. "- Last name" . $row["second_name"]. "- iam" . $row["iam"]. "- schoolyear". $row["schoolyear"]. "<br>";
  }
} else {
  echo "0 results";
}


$mysqli->close();


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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


    <div id="body" class="container2">
    

    <div id="main_box" class="containerr">

      <!-- classes -->

<table class="table h-100 w-100" style="font-size: 2rem;" id="main_box">
        
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Entreprise</th>
            <th scope="col">iam</th>
            <th scope="col">salle</th>
          </tr>
        </thead>
        <tbody id="inp">
          <tr>
            <th scope="row">1</th>
            <td>Sergonne Lou</td>
            <td>chelsea, lite</td>
            <td>serlo966</td>
            <td>B.1.11</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Sven bordez</td>
            <td>Chelsea, Dragons</td>
            <td>borsv123</td>
            <td>B.1.11</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>José Santos</td>
            <td>Dragons</td>
            <td>sanjo456</td>
            <td>B1.11</td>
          </tr>
        </tbody>
      </table>
</div>
    </div>
  </div>
  <script>

var id = <?php echo json_encode($id_student); ?>;
var first_name = <?php echo json_encode($first_name_student); ?>;
var second_name = <?php echo json_encode($second_name_student); ?>;
var iam = <?php echo json_encode($iam_student); ?>;
var schoolyear = <?php echo json_encode($schoolyear_student); ?>;

//  for id, write name in main_box div
const main_box = document.getElementById("inp")
for (let i = 0; i < id.length; i++) {
  main_box.insertAdjacentHTML("afterbegin",`     <tr>
    <th scope="row">${id[i]}</th>
    <td><a class="hide_a" href="student.php?student_id=${id[i]}">${second_name[i]} ${first_name[i]}</a></td>
    <td>to be done</td>
    <td>${iam[i]}</td>
    <td>to be done</td>
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