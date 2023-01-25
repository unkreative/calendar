// student
$id_student = array();
$first_name_student = array();
$second_name_student = array();
$iam_student = array();
$schoolyear_student = array();

$student_arr = array(
  array("id", $id_student),
  array("first_name", $first_name_student), 
  array("second_name", $second_name_student), 
  array("iam", $iam_student), 
  array("schoolyear", $schoolyear_student)
);

$sql_student = "SELECT id, first_name, second_name, iam, schoolyear FROM students";

$reuslt_student = import_arr($sql_student, $student_arr);

$id_student = $reuslt_student[0][1];
$first_name_student = $reuslt_student[1][1];
$second_name_student = $reuslt_student[2][1];
$iam_student = $reuslt_student[3][1];
$schoolyear_student = $reuslt_student[4][1];