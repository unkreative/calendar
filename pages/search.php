<!doctype html>
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
// get the search input
$link_value = $_GET['search'];

$sql = "SELECT * FROM classes,classes_houses,entreprise,entreprise_staff,houses,house_staff,staff,students,students_classes,student_entreprise,timetable,tuteur,tuteur_house,tuteur_student where `". $link_value . "` in (id,name,schoolyear,id,house_id,classes_id,schoolyear,id,name,CEO,schoolyear,id,staff_id,entreprise_id,post,schoolyear,id,name,house_number,schoolyear,id,house_id,staff_id,function,schoolyear,id,first_name,second_name,schoolyear,id,first_name,second_name,iam,schoolyear,id,student_id,classes_id,schoolyear,id,student_id,entreprise_id,plage_1,plage_2,plage_3,plage_4,plage_5,plage_6,plage_7,plage_8,schoolyear,id,interval,day_idNo,schoolyear,id,first_name,second_name,house,entreprise,schoolyear,id,house_id,tuteur_id,schoolyear,id,student_id,tuteur_id,schoolyear)";
$sql = "SELECT * FROM classes,classes_houses,entreprise,entreprise_staff,houses,house_staff,staff,students,students_classes,student_entreprise,timetable,tuteur,tuteur_house,tuteur_student where `". $link_value . "` IN (`id`,`name`,`schoolyear`,`house_id`,`classes_id`,`schoolyear`,`name`,`CEO`,`schoolyear`,`staff_id`,`entreprise_id`,`post`,`schoolyear`,`name`,`house_number`,`schoolyear`,`house_id`,`staff_id`,`schoolyear`,`first_name`,`second_name`,`schoolyear`,`first_name`,`second_name`,`iam`,`schoolyear`,`student_id`,`classes_id`,`schoolyear`,`student_id`,`entreprise_id`,`plage_1`,`plage_2`,`plage_3`,`plage_4`,`plage_5`,`plage_6`,`plage_7`,`plage_8`,`schoolyear`,`interval`,`day_i`,`schoolyear`,`first_name`,`second_name`,`house`,`entreprise`,`schoolyear`,`house_id`,`tuteur_id`,`schoolyear`,`student_id`,`tuteur_id`,`schoolyear`)";
echo $sql;
$sql_result = $mysqli->query($sql);
echo $sql_result;
if ($sql_result->num_rows > 0) {
    // output data of each row
    while($row = $sql_result->fetch_assoc()) {
    echo $row;
    
    }}  


// echo $link_value;


?>

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

    </body>

</html>