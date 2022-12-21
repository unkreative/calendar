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
// houses

$sql_houses = "SELECT id, name, house_number, schoolyear FROM houses";
// echo "<Br>";
// echo $sql_student;
$result_houses = $mysqli->query($sql_houses);

$id_houses = array();
$name_houses = array();
$number_houses = array();
$schoolyear_houses = array();


if ($result_houses->num_rows > 0) {
  // output data of each row
  while($row = $result_houses->fetch_assoc()) {
    array_push($id_houses, $row["id"]);
    array_push($name_houses, $row["name"]);
    array_push($number_houses, $row["house_number"]);
    array_push($schoolyear_houses, $row["schoolyear"]);

    // echo "id: " . $row["id"]. " - First Name: " . $row["first_name"]. "- Last name" . $row["second_name"]. "- iam" . $row["iam"]. "- schoolyear". $row["schoolyear"]. "<br>";
  }
} else {
  echo "0 results";
}

  // echo 'Success: A proper connection to MySQL was made.';
  // echo '<br>';
  // echo 'Host information: '.$mysqli->host_info;
  // echo '<br>';
  // echo 'Protocol version: '.$mysqli->protocol_version;
  $id_classes = array();
  $name_classes = array();
  $schoolyear_classes = array();


  $sql_classes = "SELECT id, name, schoolyear FROM classes";
  $result_classes = $mysqli->query($sql_classes);

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




  $id_student = array();
  $first_name_student = array();
  $second_name_student = array();
  $iam_student = array();
  $schoolyear_student = array();

  $sql_student = "SELECT id, first_name, second_name, iam, schoolyear FROM students";
  $result_student = $mysqli->query($sql_student);

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

  <!-- <div class="container"> -->

    <div id="body" class="container">
    
      <div id="myBtnContainer">  
        <!-- <button class="btnn active" onclick="filterSelection('all')"> Show all</button> -->

        <button class="btnn active" onclick="filterSelection('Maisons')"> Maisons</button>
        <button class="btnn" onclick="filterSelection('Classes')"> Classes</button>
        <button class="btnn" onclick="filterSelection('eleves')"> eleves</button>

      </div>
      
    <div id="main_box" class="containerr">

      <!-- houses -->
      <script>

      var id_houses = <?php echo json_encode($id_houses); ?>;
      var name_houses = <?php echo json_encode($name_houses); ?>;
      var number_houses = <?php echo json_encode($number_houses); ?>;
      var schoolyear_houses = <?php echo json_encode($schoolyear_classes); ?>;

      //  for id, write name in main_box div
      const main_box = document.getElementById("main_box")
      for (let i = 0; i < id_houses.length; i++) {
        main_box.insertAdjacentHTML("afterbegin",`      <a href="classes.php?classes_id=${id_houses[i]}" class="filterDiv Maisons">${name_houses[i]}`)
      }
      </script>
      <!-- classes -->
      <script>

      var id_classes = <?php echo json_encode($id_classes); ?>;
      var name_classes = <?php echo json_encode($name_classes); ?>;
      var schoolyear_classes = <?php echo json_encode($schoolyear_classes); ?>;

      //  for id, write name in main_box div
      for (let i = 0; i < id_classes.length; i++) {
        main_box.insertAdjacentHTML("afterbegin",`      <a href="classes.php?classes_id=${id_classes[i]}" class="filterDiv Classes">${name_classes[i]}`);
        console.log(i);
      }
      </script>

      <script>
        var id_student = <?php echo json_encode($id_student); ?>;
        var first_name_student = <?php echo json_encode($first_name_student); ?>;
        var second_name_student = <?php echo json_encode($second_name_student); ?>;
        var iam_student = <?php echo json_encode($iam_student); ?>;
        var schoolyear_student = <?php echo json_encode($schoolyear_student); ?>;

        //  for id, write name in main_box div
        for (let i = 0; i < id_student.length; i++) {
          main_box.insertAdjacentHTML("afterbegin",`      <a href="student.php?student=${id_student[i]}" class="filterDiv eleves">${first_name_student[i]} ${second_name_student[i]}</a>`)
        }

      </script>
    </div>
      <!--  -->
</div>
    </div>
  </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


    <script>
      filterSelection("Maisons")
      function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
          console.log(c);
          w3RemoveClass(x[i], "show");
          if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
      }
      
      function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
      }
      
      function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);     
          }
        }
        element.className = arr1.join(" ");
      }
      
      // Add active class to the current button (highlight it)
      var btnContainer = document.getElementById("myBtnContainer");
      var btns = btnContainer.getElementsByClassName("btnn");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
      }
      </script>
      
      

</body>

</html>