<!DOCTYPE html>
<?php
$servername='sql381.your-server.de';
$username='lemaco_lou';
$password='fzivu28GGa8PFS49';
$dbname = "calendar";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
}

$sql_lundi = "SELECT lundi_1, lundi_2, lundi_3, lundi_4, lundi_5, lundi_6, lundi_7, lundi_8 FROM student1";
$sql_mardi = "SELECT mardi_1, mardi_2, mardi_3, mardi_4, mardi_5, mardi_6, mardi_7, mardi_8 FROM student1";
$sql_mercredi = "SELECT mercredi_1, mercredi_2, mercredi_3, mercredi_4, mercredi_5, mercredi_6, mercredi_7, mercredi_8 FROM student1";
$sql_jeudi = "SELECT jeudi_1, jeudi_2, jeudi_3, jeudi_4, jeudi_5, jeudi_6, jeudi_7, jeudi_8 FROM student1";
$sql_vendredi = "SELECT vendredi_1, vendredi_2, vendredi_3, vendredi_4, vendredi_5, vendredi_6, vendredi_7, vendredi_8 FROM student1";

$result_lundi = $conn->query($sql_lundi);

$arr_lundi_1 = [];
$arr_lundi_2 = [];
$arr_lundi_3 = [];
$arr_lundi_4 = [];
$arr_lundi_5 = [];
$arr_lundi_6 = [];
$arr_lundi_7 = [];
$arr_lundi_8 = [];


if ($result_lundi->num_rows > 0) {
    // output data of each row
    while($row = $result_lundi->fetch_assoc()) {
  
        array_push($arr_lundi_1, $row["lundi_1"]);

        array_push($arr_lundi_2, $row["lundi_2"]);

        array_push($arr_lundi_3, $row["lundi_3"]);

        array_push($arr_lundi_4, $row["lundi_4"]);

        array_push($arr_lundi_5, $row["lundi_5"]);

        array_push($arr_lundi_6, $row["lundi_6"]);

        array_push($arr_lundi_7, $row["lundi_7"]);

        array_push($arr_lundi_8, $row["lundi_8"]);
  }
}

$result_mardi = $conn->query($sql_mardi);

$arr_mardi_1 = [];
$arr_mardi_2 = [];
$arr_mardi_3 = [];
$arr_mardi_4 = [];
$arr_mardi_5 = [];
$arr_mardi_6 = [];
$arr_mardi_7 = [];
$arr_mardi_8 = [];


if ($result_mardi->num_rows > 0) {
    // output data of each row
    while($row = $result_mardi->fetch_assoc()) {

        array_push($arr_mardi_1, $row["mardi_1"]);

        array_push($arr_mardi_2, $row["mardi_2"]);

        array_push($arr_mardi_3, $row["mardi_3"]);

        array_push($arr_mardi_4, $row["mardi_4"]);

        array_push($arr_mardi_5, $row["mardi_5"]);

        array_push($arr_mardi_6, $row["mardi_6"]);

        array_push($arr_mardi_7, $row["mardi_7"]);

        array_push($arr_mardi_8, $row["mardi_8"]);
    }
}

$result_mercredi = $conn->query($sql_mercredi);

$arr_mercredi_1 = [];
$arr_mercredi_2 = [];
$arr_mercredi_3 = [];
$arr_mercredi_4 = [];
$arr_mercredi_5 = [];
$arr_mercredi_6 = [];
$arr_mercredi_7 = [];
$arr_mercredi_8 = [];


if ($result_mercredi->num_rows > 0) {
    // output data of each row
    while($row = $result_mercredi->fetch_assoc()) {
    
        array_push($arr_mercredi_1, $row["mercredi_1"]);

        array_push($arr_mercredi_2, $row["mercredi_2"]);

        array_push($arr_mercredi_3, $row["mercredi_3"]);

        array_push($arr_mercredi_4, $row["mercredi_4"]);

        array_push($arr_mercredi_5, $row["mercredi_5"]);

        array_push($arr_mercredi_6, $row["mercredi_6"]);

        array_push($arr_mercredi_7, $row["mercredi_7"]);

        array_push($arr_mercredi_8, $row["mercredi_8"]);
    }
}

$result_jeudi = $conn->query($sql_jeudi);

$arr_jeudi_1 = [];
$arr_jeudi_2 = [];
$arr_jeudi_3 = [];
$arr_jeudi_4 = [];
$arr_jeudi_5 = [];
$arr_jeudi_6 = [];
$arr_jeudi_7 = [];
$arr_jeudi_8 = [];
    
      
if ($result_jeudi->num_rows > 0) {
    // output data of each row
    while($row = $result_jeudi->fetch_assoc()) {

        array_push($arr_jeudi_1, $row["jeudi_1"]);

        array_push($arr_jeudi_2, $row["jeudi_2"]);

        array_push($arr_jeudi_3, $row["jeudi_3"]);

        array_push($arr_jeudi_4, $row["jeudi_4"]);

        array_push($arr_jeudi_5, $row["jeudi_5"]);

        array_push($arr_jeudi_6, $row["jeudi_6"]);

        array_push($arr_jeudi_7, $row["jeudi_7"]);

        array_push($arr_jeudi_8, $row["jeudi_8"]);
    }
}

$result_vendredi = $conn->query($sql_vendredi);

$arr_vendredi_1 = [];
$arr_vendredi_2 = [];
$arr_vendredi_3 = [];
$arr_vendredi_4 = [];
$arr_vendredi_5 = [];
$arr_vendredi_6 = [];
$arr_vendredi_7 = [];
$arr_vendredi_8 = [];


if ($result_vendredi->num_rows > 0) {
    // output data of each row
    while($row = $result_vendredi->fetch_assoc()) {
    
        array_push($arr_vendredi_1, $row["vendredi_1"]);

        array_push($arr_vendredi_2, $row["vendredi_2"]);

        array_push($arr_vendredi_3, $row["vendredi_3"]);

        array_push($arr_vendredi_4, $row["vendredi_4"]);

        array_push($arr_vendredi_5, $row["vendredi_5"]);

        array_push($arr_vendredi_6, $row["vendredi_6"]);

        array_push($arr_vendredi_7, $row["vendredi_7"]);

        array_push($arr_vendredi_8, $row["vendredi_8"]);
    }
}
                        
?>
<head>
    <title>calendar test</title>
    <style>
body {

}
table {
background-color: rgb(0, 0, 0);

}

th {
padding: 10px;
text-align: center;
}

tr {
background-color: rgb(255, 255, 255);
}
.lundi {
    /* background: #ccc; */
    float: none;
    overflow: hidden;
}
.things {
    background-color: rgb(255, 0, 0);
    text-align: center;
	border-radius:10px;
} 
.mathe {
    background-color: #0000FF;
    text-align: center;
	border-radius:10px;
} 
.paus {
    background-color: grey;
    text-align: center;
	border-radius:10px;
} 
.lite {
    background-color: yellow;
    text-align: center;
	border-radius:10px;
} 
.etude {
    background-color: orange;
    text-align: center;
	border-radius:10px;
} 

    </style>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <th class="a">Lundi</th>
            <th>Mardi</th>
            <th>Jeudi</th>
            <th>Mercredi</th>
            <th>Jeudi</th>
            <th>Vendredi</th>
        </tr>
        <tr class="lundi">
            <th>8:10 - 9:40</th>

            <?php echo $arr_lundi_1[0]?>
            <?php echo $arr_mardi_1[0]?>
            <?php echo $arr_mercredi_1[0]?>
            <?php echo $arr_jeudi_1[0]?>
            <?php echo $arr_vendredi_1[0]?>
            
        </tr>
        <tr>

            <th>9:40 - 10:10</th>

            <?php echo $arr_lundi_2[0]?>
            <?php echo $arr_mardi_2[0]?>
            <?php echo $arr_mercredi_2[0]?>
            <?php echo $arr_jeudi_2[0]?>
            <?php echo $arr_vendredi_2[0]?>
        </tr>
        <tr>
            <th>10:10 - 11:40</th>
            
            <?php echo $arr_lundi_3[0]?>
            <?php echo $arr_mardi_3[0]?>
            <?php echo $arr_mercredi_3[0]?>
            <?php echo $arr_jeudi_3[0]?>
            <?php echo $arr_vendredi_3[0]?>
        </tr>
        <tr>
            <th>11:45 - 12:30</th>
            
            <?php echo $arr_lundi_4[0]?>
            <?php echo $arr_mardi_4[0]?>
            <?php echo $arr_mercredi_4[0]?>
            <?php echo $arr_jeudi_4[0]?>
            <?php echo $arr_vendredi_4[0]?>
        </tr>
        <tr>
            <th>12:30 - 13:15</th>
            
            <?php echo $arr_lundi_5[0]?>
            <?php echo $arr_mardi_5[0]?>
            <?php echo $arr_mercredi_5[0]?>
            <?php echo $arr_jeudi_5[0]?>
            <?php echo $arr_vendredi_5[0]?>
        </tr>
        <tr>
            <th>13:15 - 14:00</th>
           
            <?php echo $arr_lundi_6[0]?>
            <?php echo $arr_mardi_6[0]?>
            <?php echo $arr_mercredi_6[0]?>
            <?php echo $arr_jeudi_6[0]?>
            <?php echo $arr_vendredi_6[0]?>
        </tr>
        <tr>
            <th>14:00 - 14:45</th>
            
            <?php echo $arr_lundi_7[0]?>
            <?php echo $arr_mardi_7[0]?>
            <?php echo $arr_mercredi_7[0]?>
            <?php echo $arr_jeudi_7[0]?>
            <?php echo $arr_vendredi_7[0]?>
        </tr>
        <tr>
            <th>14:50 - 16:20</th>
            
            <?php echo $arr_lundi_8[0]?>
            <?php echo $arr_mardi_8[0]?>
            <?php echo $arr_mercredi_8[0]?>
            <?php echo $arr_jeudi_8[0]?>
            <?php echo $arr_vendredi_8[0]?>
        </tr>

    </table>
</body>