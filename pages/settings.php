
<?php
require "../scripts/check-login.php";
cookie_session();

?>
<?php

require "../scripts/import_db_array.php";

?>

<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Settings</title>

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
    <div class="center">

      <p>settings are coming soon</p>
      
      
      
    </div>
    <div class="center">
      <p>bei froen einfach un lou@sergonne.lu schreiwen oder mech perseinlech froen</p>

    </div>
    <div class="center">

    <form action="end-session.php" method="post">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log out</button>
    </form>
    </div>
