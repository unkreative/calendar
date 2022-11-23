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

  // echo 'Success: A proper connection to MySQL was made.';
  // echo '<br>';
  // echo 'Host information: '.$mysqli->host_info;
  // echo '<br>';
  // echo 'Protocol version: '.$mysqli->protocol_version;

  $id = array();
  $first_name = array();
  $second_name = array();
  $iam = array();
  $schoolyear = array();

  $sql = "SELECT id, first_name, second_name, iam, schoolyear FROM students";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      array_push($id, $row["id"]);
      array_push($first_name, $row["first_name"]);
      array_push($second_name, $row["second_name"]);
      array_push($iam, $row["iam"]);
      array_push($schoolyear, $row["schoolyear"]);

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
      <a href="" class="filterDiv Maisons">Ansenbourg</a>
      <a href="" class="filterDiv Maisons">Hollenfels</a>
      <a href="" class="filterDiv Maisons">Koerich</a>
      <a href="" class="filterDiv Maisons">Simmern</a>
      <a href="" class="filterDiv Maisons">Schoenfels</a>
      <a href="/pages/houses/larochette_classes.html" class="filterDiv Maisons">Larochette</a>
      <a href="" class="filterDiv Maisons">Mersch</a>

      <!-- classes -->
            
      <a href="" class="filterDiv Classes">7G1</a>
      <a href="" class="filterDiv Classes">7C2</a>
      <a href="" class="filterDiv Classes">7C3</a>
      <a href="" class="filterDiv Classes">7P4</a>
      <a href="" class="filterDiv Classes">7C5</a>
      <a href="" class="filterDiv Classes">7C6</a>
      <a href="" class="filterDiv Classes">7G6</a>
      <a href="" class="filterDiv Classes">6C1</a>
      <a href="" class="filterDiv Classes">6P2</a>
      <a href="" class="filterDiv Classes">6G2</a>
      <a href="" class="filterDiv Classes">6G3</a>
      <a href="" class="filterDiv Classes">6C4</a>
      <a href="" class="filterDiv Classes">6C5</a>
      <a href="" class="filterDiv Classes">6C6</a>
      <a href="" class="filterDiv Classes">5C1</a>
      <a href="" class="filterDiv Classes">5G1</a>
      <a href="" class="filterDiv Classes">5C3</a>
      <a href="" class="filterDiv Classes">5C4</a>
      <a href="" class="filterDiv Classes">5G4</a>
      <a href="" class="filterDiv Classes">5C5</a>
      <a href="" class="filterDiv Classes">5PR05</a>
      <a href="" class="filterDiv Classes">4C2</a>
      <a href="" class="filterDiv Classes">4C3</a>
      <a href="" class="filterDiv Classes">4C6</a>
      <a href="" class="filterDiv Classes">3CB</a>
      <a href="" class="filterDiv Classes">3CC</a>
      <a href="" class="filterDiv Classes">3CD</a>
      <a href="" class="filterDiv Classes">3CG</a>
      <a href="" class="filterDiv Classes">2B</a>
      <a href="" class="filterDiv Classes">2C</a>
      <a href="" class="filterDiv Classes">2D</a>
      <a href="" class="filterDiv Classes">2G</a>
      <a href="" class="filterDiv Classes">1B</a>
      <a href="" class="filterDiv Classes">1C</a>
      <a href="" class="filterDiv Classes">1D</a>
      <a href="/content/1G" class="filterDiv Classes">1G</a>
      
      <script>

        var id = <?php echo json_encode($id); ?>;
        var first_name = <?php echo json_encode($first_name); ?>;
        var second_name = <?php echo json_encode($second_name); ?>;
        var iam = <?php echo json_encode($iam); ?>;
        var schoolyear = <?php echo json_encode($schoolyear); ?>;

        //  for id, write name in main_box div
        






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