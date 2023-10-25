<?php
require "../scripts/check-login.php";
cookie_session();

?>
<!doctype html>
<!-- TODO expand this, with more data afterwards -->
<?php
    require "../scripts/import_db_array.php";   

    $link_value = $_GET['student'];

    $notes_keys = ["id", "note"];// to continue, working on the note system

    $sql_note = "SELECT id, note FROM note where id = " . $link_value;

    $note_result = import_arr($sql_note, $notes_keys);

    $id_note = $note_result[0][0];
    $note = $note_result[1][0];

    $student_keys = [ 
    "id",
    "first_name",
    "second_name",
    "iam",
    "class",
    "tuteur"
    ];
    

    $sql_student = "SELECT id, first_name, second_name, iam, class, tuteur FROM student where id = " . $link_value . "";

    $student_result = import_arr($sql_student,$student_keys);

    $id_student = $student_result[0];
    $first_name_student = $student_result[1];
    $second_name_student = $student_result[2];
    $iam_student = $student_result[3];
    $class_student = $student_result[4];
    $tuteur_student = $student_result[5];

    $tuteur_key = [
    "id",
    "first_name",
    "second_name",
    ];

    $sql_tuteur = "SELECT id, first_name, second_name FROM tuteur WHERE id = '" . $tuteur_student[0] . "';";

    $tuteur_result = import_arr($sql_tuteur, $tuteur_key);

    $id_tuteur = $tuteur_result[0];
    $first_name_tuteur = $tuteur_result[1];
    $second_name_tuteur = $tuteur_result[2];

    $sql_tuteur2 = "SELECT id, first_name, second_name FROM tuteur";

    $tuteur_result2 = import_arr($sql_tuteur2, $tuteur_key);

    $id_tuteur2 = $tuteur_result2[0];
    $first_name_tuteur2 = $tuteur_result2[1];
    $second_name_tuteur2 = $tuteur_result2[2];

    // get class

    $class_keys = [
    "id",
    "class_id",
    "house_id",

    ];

    $sql_class = "SELECT id, class_id, house_id FROM class WHERE id = " . $class_student[0] . ";";
    $class_result = import_arr($sql_class, $class_keys);


    $id_class = $class_result[0];
    $name_class = $class_result[1];
    $house_id = $class_result[2];


    $sql_class2 = "SELECT id, class_id, house_id FROM class";
    $class_result2 = import_arr($sql_class2, $class_keys);


    $id_class2 = $class_result2[0];
    $name_class2 = $class_result2[1];
    $house_id2 = $class_result2[2];


    // get house

    $house_keys = [
    "id",
    "name"
    ];

    $sql_houses = "SELECT id, name FROM house where id = " . $house_id[0] . "";

    $result_houses = import_arr($sql_houses, $house_keys);


    $id_houses = $result_houses[0];
    $name_houses = $result_houses[1];

    $sql_houses2 = "SELECT id, name FROM house";

    $result_houses2 = import_arr($sql_houses2, $house_keys);


    $id_houses2 = $result_houses2[0];
    $name_houses2 = $result_houses2[1];

    // import timeschedule from student

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

    $sql_student_entreprise = "SELECT * FROM entreprise_student WHERE id = " . $id_student[0] . ";";

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

    $id_entreprise = $result_entreprise[0];
    $name_entreprise = $result_entreprise[1];
    $ceo_entreprise = $result_entreprise[2];

    $salle_name_keys = [
        "id",
        "name",
        "entreprise",
     
     ];
     
     $sql_salle_name = "SELECT id, name, entreprise FROM salle;";
     $salle_name_result = import_arr($sql_salle_name, $salle_name_keys);
     
     
     $id_salle_name = $salle_name_result[0];
     $name_salle_name = $salle_name_result[1];
     $entreprise_salle = $salle_name_result[2];
     
     $student_salle_keys = [
        "id",
        "salle_1",
        "salle_2",
        "salle_3",
        "salle_4",
        "salle_5",
        "salle_6",
        "salle_7",
        "salle_8",
        
     ];
     
     $sql_student_salle = "SELECT * FROM entreprise_student WHERE id = " . $id_student[0] . ";";
     
     $result_student_salle = import_arr($sql_student_salle, $student_salle_keys);
     
     $salle_1 = $result_student_salle[1];
     $salle_2 = $result_student_salle[2];
     $salle_3 = $result_student_salle[3];
     $salle_4 = $result_student_salle[4];
     $salle_5 = $result_student_salle[5];
     $salle_6 = $result_student_salle[6];
     $salle_7 = $result_student_salle[7];
     $salle_8 = $result_student_salle[8];
     
     
?>
<html lang="en">
   
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>students</title>
      <!-- fontawesome -->
      <script src="https://kit.fontawesome.com/8765e29cc7.js" crossorigin="anonymous"></script>
      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
      <style>
         .txt {
         font-family: 'Inter', sans-serif;
         /* font-style: bold; */
         font-weight: 700;
         font-size: 24px;
         line-height: 150%;
         /* or 36px */
         display: flex;
         align-items: center;
         text-align: center;
         align-items: center;
         justify-content: center;
         letter-spacing: -0.019em;
         color: #000000;
         /* scale: 0.7 0.7; */
         }
         .header_tile {
    /* calendar cell */
    width: 200px;
    height: 70px;
    border-radius: 6px;
    /* background: #A4A3A3; */
    background: #737373;
    
    /* Inside auto layout */
    flex: none;
    /* order: 0; */
    /* flex-grow: 0; */
    left: 0%;
    right: 0%;
    top: 0%;
    bottom: 0%;
    }
    .big_tile {
    width: 200px;
    height: 140px;
    /* scale: 0.7 0.7; */
    }
    .liddle_tile {
    width: 200px;
    height: 70px;
    /* scale: 0.7 0.7; */
    }
    .dark_tile {
    background: #C9C9C9;
    border-radius: 6px;
    /* Inside auto layout */
    flex: none;
    flex-grow: 0;
    }
    .light_tile {
    background: #E6E6E6;
    border-radius: 6px;
    /* Inside auto layout */
    flex: none;
    flex-grow: 0;
    }

         .calendar {
         /* Auto layout */
         left: 0px;
         display: flex;
         /* position: relative; */
         flex-direction: column;
         /* align-items: flex-start; */
         padding-top: -100px;
         gap: 10px;
         /* width: 1250px; */
         /* height: 690px; */
         /* Inside auto layout */
         /* flex: none; */
         flex-grow: 0;
         }
         .big_box {
         /* Auto layout */
         display: flex;
         flex-direction: column;
         align-items: center;
         padding-top: -100px;
         /* gap: 49px; */
         width: auto;
         height: auto;
         /* background: #525252; */
         border-radius: 6px;
         /* Inside auto layout */
         /* flex: none; */
         /* order: 0; */
         /* flex-grow: 0; */
         /* overflow: auto; */
         }
         .row {
         /* Auto layout */
         flex-wrap: nowrap!important;
         display: flex;
         flex-direction: row;
         align-items: flex-start;
         padding: 0px;
         gap: 10px;
         width: 1250px;
         /* height: 140px; */
         /* Inside auto layout */
         flex: none;
         flex-grow: 0;
         }
         p {
         font-size: 17px;
         padding-right: 5px;
         color: black;
         }
         .container {
         display: flex; 
         margin-left: 0px;
         margin-right: 0px;
         /* flex-wrap: wrap; */
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
         /* overflow: hidden; */
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
         .info_sheet {
    margin-top: 10px;
    padding: 20px; 
    /* background: #525252; */
    background: #959595;

    
    width: auto;
    height: auto;
    border-radius: 10px;
    overflow: auto;
    }
         .first_textfield {
         list-style-type: none;
         font-size: 20px;
         padding-left: 30px; 
         }
         .no_link {
            font-size: 17px;

            text-decoration: none;
            color: black;
         }
      </style>    

<script>
    const dict = {
        1: "1-1",
        2: "2-1",
        3: "3-1",
        4: "4-1",
        5: "5-1",
        6: "6-1",
        7: "7-1",
        8: "1-2",
        9: "2-2",
        10: "3-2",
        11: "4-2",
        12: "5-2",
        13: "6-2",
        14: "7-2",
        15: "1-3",
        16: "2-3",
        17: "3-3",
        18: "4-3",
        19: "5-3",
        20: "6-3",
        21: "7-3",
        22: "1-4",
        23: "2-4",
        24: "3-4",
        25: "4-4",
        26: "5-4",
        27: "6-4",
        28: "7-4",
        29: "1-5",
        30: "2-5",
        31: "3-5",
        32: "4-5",
        33: "5-5",
        34: "6-5",
        35: "7-5",
    };
    const dict_num = [
        1,
        2,
        3,
        4,
        5,
        6,
        7,
        8,
        9,
        10,
        11,
        12,
        13,
        14,
        15,
        16,
        17,
        18,
        19,
        20,
        21,
        22,
        23,
        24,
        25,
        26,
        27,
        28,
        29,
        30,
        31,
        32,
        33,
        34,
        35,
    ];
    
    function check_double() {
        dict_num.forEach(combi => {
            let check_item = document.getElementById(`sched-${dict[combi]}`).children;
            let check_item_obj = document.getElementById(`sched-${dict[combi]}`);
            // console.log(check_item);
            if (check_item.length > 0) {
                check_item_obj.removeAttribute("ondrop")
                check_item_obj.removeAttribute("ondragover")
            }
            else {
                check_item_obj.setAttribute('ondrop', 'drop(event)');
                check_item_obj.setAttribute('ondragover', 'allowDrop(event)');
            }
            
        });
    }
    // const backup_drop = [];
    function allowDrop(ev) {
        ev.preventDefault();
    }
        
    function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
        // backup_drop.push(document.getElementById('calendar').textContent);

    }
    
    function drop(ev) {        
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        
        ev.target.appendChild(document.getElementById(data));

        check_double();

        // console.log(data);
    }
        
</script>
<body style="margin-bottom: 50px;">
      <div id="navbar"></div>
      <script src="/scripts/navbar.js"></script>
      <div class="container">
         <div id="body" class="container">
            <div id="main_box" class="containerr">
               <div id=info_sheet class="info_sheet">
                  <div class="first_textfield">

                    <form id="formm" action="submit-edit-student.php" method="post">
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td>
                                    <li id="first_name_field">
                                        <label for="first_name">Name:</label>
                                        <br>
                                    </li>
                                    
                                </td>
                                <td>
                                    <li id="second_name_field">
                                        <label for="second_name">Second Name:</label>
                                        <br>
                                    </li>
                               
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <li id="iam_field">
                                        <label for="iam">Iam:</label>
                                        <br>
                                    </li>                        
                                    
                                </td>
                                <td>
                                    <li id="class_field">
                                        <label for="class">Class:</label>
                                        <br>               
                                    </li>
                                        
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    
                                    <li  id="tuteur_field">
                                        <label for="tuteur">Tuteur:</label>
                                        <br>
                                        <!-- Tuteur: Alex Bara -->
                                    </li>
                                        
                                </td>
                                <td>
                                    <li  id="note_field">
                                        <label for="note">Note:</label>
                                        <br>
                                    
                                        <!-- Tuteur: Alex Bara -->
                                    </li>
                                    
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <b>Entreprises:</b>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    
                                    <li  id="entreprise_1_field">
                                        <label for="entreprise_1">1:</label>
                                    </li>
                                        
                                </td>
                                <td>
                                    <li  id="entreprise_2_field">
                                        <label for="entreprise_2">2:</label>
                                    </li>
                                       
                                </td>

                            </tr>

                            <tr>
                            <td>
                                    <li  id="entreprise_3_field">
                                        <label for="entreprise_3">3:</label>
                                    </li>
   
                                    </td>
                                <td>
                                    <li  id="entreprise_4_field">
                                        <label for="entreprise_4">4:</label>
                                    </li>
                                    
                                </td>
                            </tr>

                            <tr>
                            <td>
                                    <li  id="entreprise_5_field">
                                        <label for="entreprise_5">5:</label>
                                    </li>
   
                                    </td>
                                <td>
                                    <li  id="entreprise_6_field">
                                        <label for="entreprise_6">6:</label>
                                    </li>
                                    
                                </td>
                            </tr>

                            <tr>
                            <td>
                                    <li  id="entreprise_7_field">
                                        <label for="entreprise_7">7:</label>
                                    </li>
   
                                    </td>
                                <td>
                                    <li  id="entreprise_8_field">
                                        <label for="entreprise_8">8:</label>
                                    </li>
                                    
                                </td>
                            </tr>
                        </table>
                  </div>
                  
                  <script>

                              const id = <?php echo json_encode($id_student); ?>;
                              const first_name = <?php echo json_encode($first_name_student); ?>;
                              const second_name = <?php echo json_encode($second_name_student); ?>;
                              const iam = <?php echo json_encode($iam_student); ?>;

                              const classes = <?php echo json_encode($name_class); ?>;

                              const all_classes = <?php echo json_encode($name_class2); ?>;
                              const all_classes_id = <?php echo json_encode($id_class2); ?>;

                              const all_tuteures = <?php echo json_encode($id_tuteur2); ?>;
                              const all_tuteur_first_name = <?php echo json_encode($first_name_tuteur2); ?>;
                              const all_tuteur_second_name = <?php echo json_encode($second_name_tuteur2); ?>;

                              const note = <?php echo json_encode($note); ?>;

                              const id_tuteur = <?php echo json_encode($id_tuteur); ?>;
                              const second_name_tuteur = <?php echo json_encode($second_name_tuteur); ?>;

                              const first_name_field = document.getElementById("first_name_field");
                              const second_name_field = document.getElementById("second_name_field");
                              const iam_field = document.getElementById("iam_field");
                              const class_field = document.getElementById("class_field");
                            //   const units_field = document.getElementById("units_field");

                              
                              const note_field = document.getElementById("note_field");
                              const tuteur_field = document.getElementById("tuteur_field");

                              // insert links to class, house, and tuteur 

                              first_name_field.insertAdjacentHTML("beforeend", `<input name="first_name" placeholder="Name" value="${first_name[0]}" type="text"></input>`);
                              second_name_field.insertAdjacentHTML("beforeend", `<input name="second_name" placeholder="Second Name" value="${second_name[0]}" type="text"></input>`);

                              iam_field.insertAdjacentHTML("beforeend", `<input name="iam" placeholder="Iam" value="${iam[0]}" type="text"></input>`);

                              class_field.insertAdjacentHTML("beforeend", `<select name="class" id="class">  </select>`);
                              const class_select = document.getElementById("class");
                            //   console.log(classes[0]);
                              all_classes_id.forEach(classes_loop => {
                                //   console.log(classes_loop);

                                if (all_classes[classes_loop-1] === classes[0])
                              {
                                class_select.insertAdjacentHTML("beforeend", `<option value="${classes_loop}" selected>${all_classes[classes_loop-1]}</option>`);

                              }
                              else {
                                class_select.insertAdjacentHTML("beforeend", `<option value="${classes_loop}">${all_classes[classes_loop-1]}</option>`);
                            }
                              });

                              tuteur_field.insertAdjacentHTML("beforeend", `<select name="tuteur" id="tuteur">  </select>`);
                              const tuteur_select = document.getElementById("tuteur");
                            //   console.log(tuteures[0]);

                            all_tuteures.forEach(tuteur_loop => {
                                  console.log(tuteur_loop);

                                if (tuteur_loop === id_tuteur[0])
                              {
                                tuteur_select.insertAdjacentHTML("beforeend", `<option value="${tuteur_loop}" selected>${all_tuteur_first_name[tuteur_loop-1]} ${all_tuteur_second_name[tuteur_loop-1]}</option>`);

                              }
                              else {
                                tuteur_select.insertAdjacentHTML("beforeend", `<option value="${tuteur_loop}">${all_tuteur_first_name[tuteur_loop-1]} ${all_tuteur_second_name[tuteur_loop-1]}</option>`);
                            }
                              });

                              note_field.insertAdjacentHTML("beforeend", `<input name="note" placeholder="Note" value="${note}" type="text"></input>`);

                    

                  </script>

                  <!-- TODO make a timetable template, divs? or bootstrap -->
                  <div class="big_box" style="height:auto;">
                     <div style="scale: 0.8; margin-top: -50px; width: auto; heigth: auto;">
                        <div class="calendar" id="calendar">
                           <div class="row" style="order: 1;">
                              <div class="header_tile txt"></div>
                              <div class="header_tile txt">Lundi</div>
                              <div class="header_tile txt">Mardi</div>
                              <div class="header_tile txt">Mercredi</div>
                              <div class="header_tile txt">Jeudi</div>
                              <div class="header_tile txt">Mardi</div>
                           </div>

                           <div class="row" style="order: 2;">
                              <div class="dark_tile big_tile txt" id="sched-1-0">8:10 - 9:40</div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile big_tile txt" id="sched-1-1"><i class="fa-solid fa-xmark" style="scale: 2; color: red;"></i></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile big_tile txt" id="sched-1-2"><i class="fa-solid fa-xmark" style="scale: 2; color: red;"></i></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile big_tile txt" id="sched-1-3"><i class="fa-solid fa-xmark" style="scale: 2; color: red;"></i></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile big_tile txt" id="sched-1-4"><i class="fa-solid fa-xmark" style="scale: 2; color: red;"></i></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile big_tile txt" id="sched-1-5"><i class="fa-solid fa-xmark" style="scale: 2; color: red;"></i></div>
                           </div>

                           <div class="row" style="order: 3;">
                              <div class="light_tile big_tile txt" id="sched-2-0">10:10 - 11:40</div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="light_tile big_tile txt" id="sched-2-1"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="light_tile big_tile txt" id="sched-2-2"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="light_tile big_tile txt" id="sched-2-3"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="light_tile big_tile txt" id="sched-2-4"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="light_tile big_tile txt" id="sched-2-5"></div>
                           </div>

                           <div class="row" style="order: 4;">
                              <div class="dark_tile liddle_tile txt" id="sched-3-0">11:45 - 12:30</div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile liddle_tile txt" id="sched-3-1"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile liddle_tile txt" id="sched-3-2"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile liddle_tile txt" id="sched-3-3"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile liddle_tile txt" id="sched-3-4"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile liddle_tile txt" id="sched-3-5"></div>
                           </div>
                           
                           <div class="row" style="order: 5;">
                              <div class="light_tile liddle_tile txt" id="sched-4-0">12:30 - 13:15</div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="light_tile liddle_tile txt" id="sched-4-1"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="light_tile liddle_tile txt" id="sched-4-2"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="light_tile liddle_tile txt" id="sched-4-3"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="light_tile liddle_tile txt" id="sched-4-4"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="light_tile liddle_tile txt" id="sched-4-5"></div>
                           </div>
                           
                           <div class="row" style="order: 6;">
                              <div class="dark_tile liddle_tile txt" id="sched-5-0">13:15 - 14:00</div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile liddle_tile txt" id="sched-5-1"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile liddle_tile txt" id="sched-5-2"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile liddle_tile txt" id="sched-5-3"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile liddle_tile txt" id="sched-5-4"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile liddle_tile txt" id="sched-5-5"></div>
                           </div>
                           
                           <div class="row" style="order: 7;">
                              <div class="light_tile liddle_tile txt" id="sched-6-0">14:00 - 14:45</div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="light_tile liddle_tile txt" id="sched-6-1"><i class="fa-solid fa-xmark" style="scale: 2; color: red;"></i></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="light_tile liddle_tile txt" id="sched-6-2"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="light_tile liddle_tile txt" id="sched-6-3"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="light_tile liddle_tile txt" id="sched-6-4"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="light_tile liddle_tile txt" id="sched-6-5"></div>
                           </div>

                           <div class="row" style="order: 8;">
                              <div class="dark_tile big_tile txt" id="sched-7-0">14:50 - 16:20</div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile big_tile txt" id="sched-7-1"><i class="fa-solid fa-xmark" style="scale: 2; color: red;"></i></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile big_tile txt" id="sched-7-2"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile big_tile txt" id="sched-7-3"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile big_tile txt" id="sched-7-4"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile big_tile txt" id="sched-7-5"></div>


                           </div>
                           <div class="row" style="order: 9;">
                              <div class="dark_tile big_tile txt" id="sched-7-0">To hide here:</div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile big_tile txt" id="sched-0-0"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile big_tile txt" id="sched-0-0"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile big_tile txt" id="sched-0-0"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile big_tile txt" id="sched-0-0"></div>
                              <div ondrop="drop(event)" ondragover="allowDrop(event)" class="dark_tile big_tile txt" id="sched-0-0"></div>
                           </div>

                           <input  type="hidden" name="sched-1-1-hidden" id="sched-1-1-hidden"></input>
                           <input  type="hidden" name="sched-1-2-hidden" id="sched-1-2-hidden"></input>
                           <input  type="hidden" name="sched-1-3-hidden" id="sched-1-3-hidden"></input>
                           <input  type="hidden" name="sched-1-4-hidden" id="sched-1-4-hidden"></input>
                           <input  type="hidden" name="sched-1-5-hidden" id="sched-1-5-hidden"></input>

                           <input type="hidden" name="sched-2-1-hidden" id="sched-2-1-hidden"></input>
                           <input type="hidden" name="sched-2-2-hidden" id="sched-2-2-hidden"></input>
                           <input type="hidden" name="sched-2-3-hidden" id="sched-2-3-hidden"></input>
                           <input type="hidden" name="sched-2-4-hidden" id="sched-2-4-hidden"></input>
                           <input type="hidden" name="sched-2-5-hidden" id="sched-2-5-hidden"></input>

                           <input  type="hidden" name="sched-3-1-hidden" id="sched-3-1-hidden"></input>
                           <input  type="hidden" name="sched-3-2-hidden" id="sched-3-2-hidden"></input>
                           <input  type="hidden" name="sched-3-3-hidden" id="sched-3-3-hidden"></input>
                           <input  type="hidden" name="sched-3-4-hidden" id="sched-3-4-hidden"></input>
                           <input  type="hidden" name="sched-3-5-hidden" id="sched-3-5-hidden"></input>

                           <input  type="hidden" name="sched-4-1-hidden" id="sched-4-1-hidden"></input>
                           <input  type="hidden" name="sched-4-2-hidden" id="sched-4-2-hidden"></input>
                           <input  type="hidden" name="sched-4-3-hidden" id="sched-4-3-hidden"></input>
                           <input  type="hidden" name="sched-4-4-hidden" id="sched-4-4-hidden"></input>
                           <input  type="hidden" name="sched-4-5-hidden" id="sched-4-5-hidden"></input>

                           <input  type="hidden" name="sched-5-1-hidden" id="sched-5-1-hidden"></input>
                           <input  type="hidden" name="sched-5-2-hidden" id="sched-5-2-hidden"></input>
                           <input  type="hidden" name="sched-5-3-hidden" id="sched-5-3-hidden"></input>
                           <input  type="hidden" name="sched-5-4-hidden" id="sched-5-4-hidden"></input>
                           <input  type="hidden" name="sched-5-5-hidden" id="sched-5-5-hidden"></input>

                           <input  type="hidden" name="sched-6-1-hidden" id="sched-6-1-hidden"></input>
                           <input  type="hidden" name="sched-6-2-hidden" id="sched-6-2-hidden"></input>
                           <input  type="hidden" name="sched-6-3-hidden" id="sched-6-3-hidden"></input>
                           <input  type="hidden" name="sched-6-4-hidden" id="sched-6-4-hidden"></input>
                           <input  type="hidden" name="sched-6-5-hidden" id="sched-6-5-hidden"></input>

                           <input  type="hidden" name="sched-7-1-hidden" id="sched-7-1-hidden"></input>
                           <input  type="hidden" name="sched-7-2-hidden" id="sched-7-2-hidden"></input>
                           <input  type="hidden" name="sched-7-3-hidden" id="sched-7-3-hidden"></input>
                           <input  type="hidden" name="sched-7-4-hidden" id="sched-7-4-hidden"></input>
                           <input  type="hidden" name="sched-7-5-hidden" id="sched-7-5-hidden"></input>

                           <input  type="hidden" name="sched-0-0-hidden" id="sched-0-0-hidden"></input>
                           <input  type="hidden" name="sched-0-0-hidden" id="sched-0-0-hidden"></input>
                           <input  type="hidden" name="sched-0-0-hidden" id="sched-0-0-hidden"></input>
                           <input  type="hidden" name="sched-0-0-hidden" id="sched-0-0-hidden"></input>
                           <input  type="hidden" name="sched-0-0-hidden" id="sched-0-0-hidden"></input>



                           <input  type="hidden" name="student_id" id="student_id" value="<?php echo $_GET["student"]?>"></input>


                              <!-- <i class="fa-solid fa-check" style="scale: 2; color: #39FF14;"></i>
                                 this is for the chekmark -> should be present there
                                 -->
                              <!-- <i class="fa-solid fa-xmark" style="scale: 2; color: red;"></i> 
                                 this is for the dash -> not available 
                                 -->
                            <script>
                                
                              const id_student_entreprise = <?php echo json_encode($id_student_entreprise); ?>;
                              const id_entreprise = <?php echo json_encode($id_entreprise); ?>;

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
                              
                              const combined = [plage_1_entreprise, plage_2_entreprise, plage_3_entreprise, plage_4_entreprise, plage_5_entreprise, plage_6_entreprise, plage_7_entreprise, plage_8_entreprise];
                              
                              const entreprise_1_obj = document.getElementById("entreprise_1_field");
                              const entreprise_2_obj = document.getElementById("entreprise_2_field");
                              const entreprise_3_obj = document.getElementById("entreprise_3_field");
                              const entreprise_4_obj = document.getElementById("entreprise_4_field");
                              const entreprise_5_obj = document.getElementById("entreprise_5_field");
                              const entreprise_6_obj = document.getElementById("entreprise_6_field");
                              const entreprise_7_obj = document.getElementById("entreprise_7_field");
                              const entreprise_8_obj = document.getElementById("entreprise_8_field");
                              const entreprise_field_list = [entreprise_1_obj, entreprise_2_obj, entreprise_3_obj, entreprise_4_obj, entreprise_5_obj, entreprise_6_obj, entreprise_7_obj, entreprise_8_obj];
                              const plage_arr = [plage_1, plage_2, plage_3, plage_4, plage_5, plage_6, plage_7, plage_8];
                              
                              let ent_index = 1;
                              combined.forEach(entreprise => {
                                
                                  entreprise_field_list[ent_index-1].insertAdjacentHTML("beforeend", `<select onchange="update_entreprise(${ent_index})" name="entreprise_${ent_index}" id="entreprise_${ent_index}">  </select>`);

                                  let ent_select = document.getElementById(`entreprise_${ent_index}`);
                                  //   console.log(classes[0]);
                                  id_entreprise.forEach(ent_loop => {


                                      if (Number(ent_loop) === Number(entreprise[0])){
                                          ent_select.insertAdjacentHTML("beforeend", `<option value="${ent_loop}" selected>${entreprises[ent_loop-1]}</option>`);
                                }
                                else {
                                    ent_select.insertAdjacentHTML("beforeend", `<option value="${ent_loop}">${entreprises[ent_loop-1]}</option>`);
                                }
                            });
                            ent_index = ent_index + 1; 
                        });
                                  
                            function update_entreprise(id) {
                                let entreprise_select = document.getElementById(`entreprise_${id}`);
                                // console.log(entreprise_select.value);
                                // combined[id-1] = entreprise_select.value;
                                var cell = document.getElementById(id);
                                cell.innerHTML = "";

                                cell.insertAdjacentHTML("afterbegin", `<b id="${id}" draggable="true"  ondragstart="drag(event)" style=" font-family: sans-serif; font-weigth: normal;">${id} ${entreprises[entreprise_select.value-1]}</b>`)
                                
                                console.log(cell);
                            };



                              function display_entreprises() {


                                    
                                    var index = 0;
                                    
                                    for (var element of plage_arr) {
                                        let current_entreprise = combined[index];
                                        //  console.log(dict[element]);
                                        
                                        var cell = document.getElementById(`sched-${dict[element]}`);
                                        cell.insertAdjacentHTML("afterbegin", `<b id="${index+1}" draggable="true"  ondragstart="drag(event)" style=" font-family: sans-serif; font-weigth: normal;">${index+1} ${entreprises[current_entreprise-1]}</b>`);
                                        
                                        index ++;

                                    };
                                }
                            
                            display_entreprises();
                            
                            </script>
</div>

                    

<script>
                    
                        
                            let sched_0_0_hidden = document.getElementById("sched-0-0-hidden");
                            let sched_1_1_hidden = document.getElementById("sched-1-1-hidden");
                            let sched_1_2_hidden = document.getElementById("sched-1-2-hidden");
                            let sched_1_3_hidden = document.getElementById("sched-1-3-hidden");
                            let sched_1_4_hidden = document.getElementById("sched-1-4-hidden");
                            let sched_1_5_hidden = document.getElementById("sched-1-5-hidden");
                            let sched_2_1_hidden = document.getElementById("sched-2-1-hidden");
                            let sched_2_2_hidden = document.getElementById("sched-2-2-hidden");
                            let sched_2_3_hidden = document.getElementById("sched-2-3-hidden");
                            let sched_2_4_hidden = document.getElementById("sched-2-4-hidden");
                            let sched_2_5_hidden = document.getElementById("sched-2-5-hidden");
                            let sched_3_1_hidden = document.getElementById("sched-3-1-hidden");
                            let sched_3_2_hidden = document.getElementById("sched-3-2-hidden");
                            let sched_3_3_hidden = document.getElementById("sched-3-3-hidden");
                            let sched_3_4_hidden = document.getElementById("sched-3-4-hidden");
                            let sched_3_5_hidden = document.getElementById("sched-3-5-hidden");
                            let sched_4_1_hidden = document.getElementById("sched-4-1-hidden");
                            let sched_4_2_hidden = document.getElementById("sched-4-2-hidden");
                            let sched_4_3_hidden = document.getElementById("sched-4-3-hidden");
                            let sched_4_4_hidden = document.getElementById("sched-4-4-hidden");
                            let sched_4_5_hidden = document.getElementById("sched-4-5-hidden");
                            let sched_5_1_hidden = document.getElementById("sched-5-1-hidden");
                            let sched_5_2_hidden = document.getElementById("sched-5-2-hidden");
                            let sched_5_3_hidden = document.getElementById("sched-5-3-hidden");
                            let sched_5_4_hidden = document.getElementById("sched-5-4-hidden");
                            let sched_5_5_hidden = document.getElementById("sched-5-5-hidden");
                            let sched_6_1_hidden = document.getElementById("sched-6-1-hidden");
                            let sched_6_2_hidden = document.getElementById("sched-6-2-hidden");
                            let sched_6_3_hidden = document.getElementById("sched-6-3-hidden");
                            let sched_6_4_hidden = document.getElementById("sched-6-4-hidden");
                            let sched_6_5_hidden = document.getElementById("sched-6-5-hidden");
                            let sched_7_1_hidden = document.getElementById("sched-7-1-hidden");
                            let sched_7_2_hidden = document.getElementById("sched-7-2-hidden");
                            let sched_7_3_hidden = document.getElementById("sched-7-3-hidden");
                            let sched_7_4_hidden = document.getElementById("sched-7-4-hidden");
                            let sched_7_5_hidden = document.getElementById("sched-7-5-hidden");
                            
                            let combined_hidden = [sched_0_0, sched_1_1_hidden, sched_1_2_hidden, sched_1_3_hidden, sched_1_4_hidden, sched_1_5_hidden, sched_2_1_hidden, sched_2_2_hidden, sched_2_3_hidden, sched_2_4_hidden, sched_2_5_hidden, sched_3_1_hidden, sched_3_2_hidden, sched_3_3_hidden, sched_3_4_hidden, sched_3_5_hidden, sched_4_1_hidden, sched_4_2_hidden, sched_4_3_hidden, sched_4_4_hidden, sched_4_5_hidden, sched_5_1_hidden, sched_5_2_hidden, sched_5_3_hidden, sched_5_4_hidden, sched_5_5_hidden, sched_6_1_hidden, sched_6_2_hidden, sched_6_3_hidden, sched_6_4_hidden, sched_6_5_hidden, sched_7_1_hidden, sched_7_2_hidden, sched_7_3_hidden, sched_7_4_hidden, sched_7_5_hidden];
                            
                            let sched_0_0 = document.getElementById("sched-0-0");
                            let sched_1_1 = document.getElementById("sched-1-1");
                            let sched_1_2 = document.getElementById("sched-1-2");
                            let sched_1_3 = document.getElementById("sched-1-3");
                            let sched_1_4 = document.getElementById("sched-1-4");
                            let sched_1_5 = document.getElementById("sched-1-5");
                            let sched_2_1 = document.getElementById("sched-2-1");
                            let sched_2_2 = document.getElementById("sched-2-2");
                            let sched_2_3 = document.getElementById("sched-2-3");
                            let sched_2_4 = document.getElementById("sched-2-4");
                            let sched_2_5 = document.getElementById("sched-2-5");
                            let sched_3_1 = document.getElementById("sched-3-1");
                            let sched_3_2 = document.getElementById("sched-3-2");
                            let sched_3_3 = document.getElementById("sched-3-3");
                            let sched_3_4 = document.getElementById("sched-3-4");
                            let sched_3_5 = document.getElementById("sched-3-5");
                            let sched_4_1 = document.getElementById("sched-4-1");
                            let sched_4_2 = document.getElementById("sched-4-2");
                            let sched_4_3 = document.getElementById("sched-4-3");
                            let sched_4_4 = document.getElementById("sched-4-4");
                            let sched_4_5 = document.getElementById("sched-4-5");
                            let sched_5_1 = document.getElementById("sched-5-1");
                            let sched_5_2 = document.getElementById("sched-5-2");
                            let sched_5_3 = document.getElementById("sched-5-3");
                            let sched_5_4 = document.getElementById("sched-5-4");
                            let sched_5_5 = document.getElementById("sched-5-5");
                            let sched_6_1 = document.getElementById("sched-6-1");
                            let sched_6_2 = document.getElementById("sched-6-2");
                            let sched_6_3 = document.getElementById("sched-6-3");
                            let sched_6_4 = document.getElementById("sched-6-4");
                            let sched_6_5 = document.getElementById("sched-6-5");
                            let sched_7_1 = document.getElementById("sched-7-1");
                            let sched_7_2 = document.getElementById("sched-7-2");
                            let sched_7_3 = document.getElementById("sched-7-3");
                            let sched_7_4 = document.getElementById("sched-7-4");
                            let sched_7_5 = document.getElementById("sched-7-5");
                            
                            let combined_normal = [sched_0_0, sched_1_1, sched_1_2, sched_1_3, sched_1_4, sched_1_5, sched_2_1, sched_2_2, sched_2_3, sched_2_4, sched_2_5, sched_3_1, sched_3_2, sched_3_3, sched_3_4, sched_3_5, sched_4_1, sched_4_2, sched_4_3, sched_4_4, sched_4_5, sched_5_1, sched_5_2, sched_5_3, sched_5_4, sched_5_5, sched_6_1, sched_6_2, sched_6_3, sched_6_4, sched_6_5, sched_7_1, sched_7_2, sched_7_3, sched_7_4, sched_7_5];
                            
                            let index_hidden = 0;
                            
                            combined_hidden.forEach(hidden => {
                                hidden.value = combined_normal[index_hidden].textContent;
                                index_hidden = index_hidden + 1;
                            });
                            
                            function submit_edit() {
                                
                                let index_hidden = 0;
                                let form = document.getElementById("formm");
                            
                                combined_hidden.forEach(hidden => {
                                    hidden.value = combined_normal[index_hidden].textContent;
                                    index_hidden = index_hidden + 1;
                                    
                                });
                                form.submit();
                            }
                    check_double();

                        </script>


                        <div id="edit_button" style="">
                        <button class="btn btn-lg btn-primary btn-block" onclick="submit_edit()" style="font-size: 18px; margin-top: 25px; heigth: auto; width: 20%;">Submit</button>
                     </div>
                     </div>
                    </form>
                  </div>


               </div>
            </div>
         </div>
      
        </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
   </body>
</html>
