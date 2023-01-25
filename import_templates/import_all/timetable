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