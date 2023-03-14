// import students classes
$id_classes_students = array();
$student_id_classes_students = array();
$classes_id_classes_students = array();

$classes_students_arr = array(
  array("id", $id_classes_students),
  array("student_id", $student_id_classes_students),
  array("classes_id", $classes_id_classes_students)
);

$sql_classes_students = "SELECT id, student_id, classes_id FROM students_classes";

$result_classes_students = import_arr($sql_classes_students, $classes_students_arr);

$id_classes_students = $result_classes_students[0][1];
$student_id_classes_students = $result_classes_students[1][1];
$classes_id_classes_students = $result_classes_students[2][1];