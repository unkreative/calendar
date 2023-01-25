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

$sql_selector_classes_free_hours = "SELECT `id`, `class_id`, `free_hour1`, `free_hour2` FROM classes_free_hours";

$result_classes_free_hours = import_arr($sql_selector_classes_free_hours, $arr_classes_free_hours);

$id = $result_classes_free_hours[0][1];
$class_id = $result_classes_free_hours[1][1];
$free_hour1 = $result_classes_free_hours[2][1];
$free_hour2 = $result_classes_free_hours[3][1];