<?php
require "../scripts/check-login.php";
cookie_session();

?>
<?php
require "../scripts/import_db_array.php";   

$link_value = $_GET["house"];
// houses
$sql_houses = "SELECT id, name FROM house WHERE id = " . $link_value;
// echo "<Br>";
// echo $sql_student;

$house_keys = [
    "id",
    "name"
    ];

  $house_result = import_arr($sql_houses, $house_keys);
  
  $id_houses = $house_result[0];
  $name_houses = $house_result[1];

// import class
  $class_keys = [
    "id",
    "class_id",
    "house_id"
  ];

  $sql_classes = "SELECT id, class_id, house_id FROM class WHERE house_id = " . $id_houses[0] . ";";

  $class_result = import_arr($sql_classes, $class_keys);

  $id_classes = $class_result[0];
  $name_classes = $class_result[1];
  $house_id_classes = $class_result[2];




?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>houses</title>

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
var house_id = <?php echo json_encode($house_id_classes); ?>;

//  for id, write name in main_box div
const main_box = document.getElementById("main_box")
for (let i = 0; i < id_classes.length; i++) {
  main_box.insertAdjacentHTML("afterbegin",`      <a class="filterDiv" href="classes.php?class=${id_classes[i]}">${name_classes[i]}</a>`);
}

</script>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</body>

</html>