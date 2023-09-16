<?php
require "../scripts/check-login.php";
cookie_session();

?>
<?php

require "../scripts/import_db_array.php";

// houses
$sql_houses = "SELECT id, name FROM house";
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

  $sql_classes = "SELECT id, class_id, house_id FROM class";

  $class_result = import_arr($sql_classes, $class_keys);

  $id_classes = $class_result[0];
  $name_classes = $class_result[1];
  $house_id_classes = $class_result[2];


// import student

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
  
?>

<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>all students</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <style>
p {
  font-size: 17px;
  padding-right: 5px;
}
.w100 {
  width:  75% !important;

}
.container2 {
  width:  75% !important;

  /* width:  100vw !important; */
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
  margin-top: 4px;
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
    
    <!-- navbar -->
    <div id="navbar"></div>
    <script src="/scripts/navbar.js"></script>

<!-- acutal content -->
    <div id="body" class="w100 container2">
    <!-- <div id="body"> -->
    
      <div id="myBtnContainer">  
        <!-- <button class="btnn active" onclick="filterSelection('all')"> Show all</button> -->

        <button class="btnn active" onclick="filterSelection('Maisons')"> Maisons</button>
        <button class="btnn" onclick="filterSelection('Classes')"> Classes</button>
        <button class="btnn" onclick="filterSelection('eleves')"> eleves</button>

      </div>
      
    <div id="main_box" class="containerr">
    <!-- <div id="main_box"> -->

      <!-- houses -->
      <script>

      var id_houses = <?php echo json_encode($id_houses); ?>;
      var name_houses = <?php echo json_encode($name_houses); ?>;

      //  for id, write name in main_box div
      const main_box = document.getElementById("main_box")
      for (let i = 0; i < id_houses.length; i++) {
        main_box.insertAdjacentHTML("afterbegin",`      <a href="houses.php?house=${id_houses[i]}" class="filterDiv Maisons">${name_houses[i]}`)
      } nd46
      </script>
      <!-- classes -->
      <script>

      var id_classes = <?php echo json_encode($id_classes); ?>;
      var name_classes = <?php echo json_encode($name_classes); ?>;
      var house_id_classes = <?php echo json_encode($house_id_classes); ?>;

      //  for id, write name in main_box div
      for (let i = 0; i < id_classes.length; i++) {
        main_box.insertAdjacentHTML("afterbegin",`      <a href="classes.php?class=${id_classes[i]}" class="filterDiv Classes">${name_classes[i]}`);
        console.log(i);
      }
      </script>

      <script>
        var id_student = <?php echo json_encode($id_student); ?>;
        var first_name_student = <?php echo json_encode($first_name_student); ?>;
        var second_name_student = <?php echo json_encode($second_name_student); ?>;
        var iam_student = <?php echo json_encode($iam_student); ?>;        
        var class_student = <?php echo json_encode($class_student); ?>;
        var tuteur_student = <?php echo json_encode($tuteur_student); ?>;


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