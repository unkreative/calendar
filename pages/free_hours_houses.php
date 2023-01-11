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

$link_value = $_GET['house_id'];
// echo $link_value;


$id = array();
$class_id = array();
$house_id = array();


$sql_selector = "SELECT id, house_id, classes_id FROM classes_houses WHERE house_id = " . $link_value . "";

$result_selector = $mysqli->query($sql_selector);

// echo $result_selector;
if ($result_selector->num_rows > 0) {
  // output data of each row
  while($row = $result_selector->fetch_assoc()) {
    array_push($id, $row["id"]);
    array_push($house_id, $row["house_id"]);
    array_push($class_id, $row["classes_id"]);

    // echo "id: " . $row["id"]. " - First Name: " . $row["first_name"]. "- Last name" . $row["second_name"]. "- iam" . $row["iam"]. "- schoolyear". $row["schoolyear"]. "<br>";
  }
} else {
  echo "0 results";
}

$house_id_txt = "";

foreach ($house_id as $key => $value) {

  $house_id_txt = $house_id_txt . " " .  $value . ",";
  # code...
}
// echo "<Br>";
$house_id_txt = substr_replace($house_id_txt, "", -1);

// echo $student_id_txt;
$sql_classes = "SELECT id, name, schoolyear FROM classes WHERE id IN (" . $house_id_txt . ")";
// echo "<Br>";
// echo $sql_student;
$result_classes = $mysqli->query($sql_classes);

$id_classes = array();
$name_classes = array();
$schoolyear_classes = array();


if ($result_classes->num_rows > 0) {
  // output data of each row
  while($row = $result_classes->fetch_assoc()) {
    array_push($id_classes, $row["id"]);
    array_push($name_classes, $row["name"]);
    array_push($schoolyear_classes, $row["schoolyear"]);

    // echo "id: " . $row["id"]. " - First Name: " . $row["first_name"]. "- Last name" . $row["second_name"]. "- iam" . $row["iam"]. "- schoolyear". $row["schoolyear"]. "<br>";
  }
} else {
  echo "0 results";
}
// echo $first_name_student[0];
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
.container {
  display: flex; 
  margin-left: 0px;
  margin-right: 0px;
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

</style>

<body style="margin-bottom: 50px;">
    
    <div id="navbar"></div>
    <script src="/scripts/navbar.js"></script>

    <div id="body" class="container">

    <div id="main_box" class="containerr">

  </div>
  <script>

var id_classes = <?php echo json_encode($id_classes); ?>;
var name_classes = <?php echo json_encode($name_classes); ?>;
var schoolyear = <?php echo json_encode($schoolyear_classes); ?>;

//  for id, write name in main_box div
const main_box = document.getElementById("main_box")
for (let i = 0; i < id_classes.length; i++) {
  main_box.insertAdjacentHTML("afterbegin",`      <a class="filterDiv" href="free_hours_continue.php?classes_id=${id_classes[i]}">${name_classes[i]}</a>`);
}

</script>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</body>

</html>