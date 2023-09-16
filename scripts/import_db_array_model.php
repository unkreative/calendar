<?php
<<<<<<< HEAD:www/scripts/import_db_array_model.php
require "scripts/import_db_array";
=======
require "../scripts/import_db_array";
>>>>>>> 8f441ba631609df0567588f10043583fc6268dd6:scripts/import_db_array_model.php

// $sql_selector = sql query
// $keys_arrays = array(
//     array($array, $key)
// )

// $arr = array("a");
// $key = "interval";
// $combined = array($key, $arr);

// $key_array = array($combined);

test_connection();

$arr       = array();
$arr1      = array();
$arr2      = array();
$key_array = array(
    array(
        "id",
        $arr
    ),
    array(
        "interval",
        $arr
    ),
    array(
        "day_id",
        $arr
    )
);

$sql_selectorr = "SELECT `id`, `interval`, `day_id` FROM `timetable`";

$result = import_arr($sql_selectorr, $key_array);

$arr  = $result[0][1];
$arr1 = $result[1][1];
$arr2 = $result[2][1];

echo "<br>";
echo "<br>";
print_r($arr);
echo "<br>";
echo "<br>";

print_r($arr1);
echo "<br>";
echo "<br>";

print_r($arr2);
echo "<br>";
echo "<br>";