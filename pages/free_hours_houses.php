<?php

  $db_host = 'sergonnelou.ddns.net';
  $db_user = 'visitor';
  $db_password = 'visitor';
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
    
    <link rel="stylesheet" href="/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
      .navbar-light .navbar-nav .nav-link {
        
    color: rgba(0, 0, 0);
}
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="" style="margin-right: -5px; margin-left: 1px!important; padding-right: 1px!important; padding: 1px!important; font-size: 18px; color: rgb(0, 0, 0);" href="/">Hello Sergonne Lou/</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 0px; margin-bottom: -2px; font-size: 18px; color: rgb(0, 0, 0);" href="#">2022<span class="sr-only">(current)</span></a>
                <div style="scale:1.2;"class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">2021</a>
                    <a class="dropdown-item" href="#">2020</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/archive.php">archive</a>
                  </div>
            </li>

            <li class="nav-item" style="
            list-style-type:none;
            display:flex;
            justify-content: center;
            font-size: 16px;
            "
            >
              <a class="nav-link" href="/pages/all_students.php">students</a>
            </li>


            <li class="nav-item" style="  list-style-type:none;
            list-style-type:none;
            display:flex;
            justify-content: center;
            font-size: 16px;">
              <a class="nav-link" href="/pages/free_hours.php">free hours</a>
            </li>


            <li class="nav-item" style="  list-style-type:none;
            list-style-type:none;
            display:flex;
            justify-content: center;
            font-size: 16px;">
              <a class="nav-link" href="/pages/all_students.php">all students</a>
            </li>


          </ul>
          <form class="form-inline my-2 my-lg-0" action="/pages/search.php">
            <input class="form-control mr-sm-2" name="search" type="search" id="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" method="post" id="form" type="submit">Search</button>
          </form>
          
          <li class="nav-item dropdown" style="list-style:none; color: rgba(0,0,0,.5);">
            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 0px; font-size: 18px; vertical-align: auto;" href="#"><img src="data:image/png;base64,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" style="width: 30px; height: 30px; color: rgba(0,0,0,.5);" ></a>
            
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="scale: 1.2;">
                <a class="dropdown-item" style="color: rgba(0,0,0,.5);" href="/pages/settings.php">Settings</a>
                <a class="dropdown-item" style="color: rgba(0,0,0,.5);" href="/pages/logout.php">Logout</a>
            </div>  
            </li>
          
      </nav>

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