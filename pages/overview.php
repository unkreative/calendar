<?php
require "../scripts/import_db_array.php";

// import timetable
$id = array();
$interval = array();
$day_id = array();
$schoolyear = array();

$id_cache = array("id",$id);
$interval_cache = array("interval",$interval);
$day_id_cache = array("day_id",$day_id);
$schoolyear_cache = array("schoolyear",$schoolyear);

$timetable_arr = array($id_cache, $interval_cache, $day_id_cache, $schoolyear_cache);

$sql_selector = "SELECT `id`, `interval`, `day_id`, `schoolyear` FROM timetable";

$result_timetable = import_arr($sql_selector, $timetable_arr);

$id = $result_timetable[0][1];
$interval = $result_timetable[1][1];
$day_id = $result_timetable[2][1];
$schoolyear = $result_timetable[3][1];

// import class
$id_class = array();
$name_class = array();

$arr_class = array(
    array("id", $id),
    array("name", $name_class)
);

$sql_class = "SELECT id, name FROM classes WHERE id = " . $link_value . "";

$result_class = import_arr($sql_class, $arr_class);

$id_class = $result_class[0][1];
$name_class = $result_class[1][1];

// import class free hours data
$id = array();
$class_id = array();
$free_hour1 = array();
$free_hour2 = array();

$arr_classes_free_hours = array(
    array("id", $id ),
    array("class_id", $class_id),
    array("free_hour1", $free_hour1),
    array("free_hour2", $free_hour2)
);

$sql_selector_classes_free_hours = "SELECT `id`, `class_id`, `free_hour1`, `free_hour2` FROM classes_free_hours WHERE class_id = " . $link_value . "";

$result_classes_free_hours = import_arr($sql_selector_classes_free_hours, $arr_classes_free_hours);

$id = $result_classes_free_hours[0][1];
$class_id = $result_classes_free_hours[1][1];
$free_hour1 = $result_classes_free_hours[2][1];
$free_hour2 = $result_classes_free_hours[3][1];

// import student


?>