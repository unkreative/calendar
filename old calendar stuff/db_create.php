<?php
$servername='sql381.your-server.de';
$username='lemaco_lou';
$password='fzivu28GGa8PFS49';
$dbname = "calendar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE student1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

lundi_1 VARCHAR(100) DEFAULT '<td></td>',
lundi_2 VARCHAR(100) DEFAULT '<td></td>',
lundi_3 VARCHAR(100) DEFAULT '<td></td>',
lundi_4 VARCHAR(100) DEFAULT '<td></td>',
lundi_5 VARCHAR(100) DEFAULT '<td></td>',
lundi_6 VARCHAR(100) DEFAULT '<td></td>',
lundi_7 VARCHAR(100) DEFAULT '<td></td>',
lundi_8 VARCHAR(100) DEFAULT '<td></td>',

mardi_1 VARCHAR(100) DEFAULT '<td></td>',
mardi_2 VARCHAR(100) DEFAULT '<td></td>',
mardi_3 VARCHAR(100) DEFAULT '<td></td>',
mardi_4 VARCHAR(100) DEFAULT '<td></td>',
mardi_5 VARCHAR(100) DEFAULT '<td></td>',
mardi_6 VARCHAR(100) DEFAULT '<td></td>',
mardi_7 VARCHAR(100) DEFAULT '<td></td>',
mardi_8 VARCHAR(100) DEFAULT '<td></td>',

mercredi_1 VARCHAR(100) DEFAULT '<td></td>',
mercredi_2 VARCHAR(100) DEFAULT '<td></td>',
mercredi_3 VARCHAR(100) DEFAULT '<td></td>',
mercredi_4 VARCHAR(100) DEFAULT '<td></td>',
mercredi_5 VARCHAR(100) DEFAULT '<td></td>',
mercredi_6 VARCHAR(100) DEFAULT '<td></td>',
mercredi_7 VARCHAR(100) DEFAULT '<td></td>',
mercredi_8 VARCHAR(100) DEFAULT '<td></td>',

jeudi_1 VARCHAR(100) DEFAULT '<td></td>',
jeudi_2 VARCHAR(100) DEFAULT '<td></td>',
jeudi_3 VARCHAR(100) DEFAULT '<td></td>',
jeudi_4 VARCHAR(100) DEFAULT '<td></td>',
jeudi_5 VARCHAR(100) DEFAULT '<td></td>',
jeudi_6 VARCHAR(100) DEFAULT '<td></td>',
jeudi_7 VARCHAR(100) DEFAULT '<td></td>',
jeudi_8 VARCHAR(100) DEFAULT '<td></td>',

vendredi_1 VARCHAR(100) DEFAULT '<td></td>',
vendredi_2 VARCHAR(100) DEFAULT '<td></td>',
vendredi_3 VARCHAR(100) DEFAULT '<td></td>',
vendredi_4 VARCHAR(100) DEFAULT '<td></td>',
vendredi_5 VARCHAR(100) DEFAULT '<td></td>',
vendredi_6 VARCHAR(100) DEFAULT '<td></td>',
vendredi_7 VARCHAR(100) DEFAULT '<td></td>',
vendredi_8 VARCHAR(100) DEFAULT '<td></td>'
)";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>