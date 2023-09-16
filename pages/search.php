<?php
require "../scripts/check-login.php";
cookie_session();

?>
<!doctype html>
<?php
require "../scripts/import_db_array.php";
// get the search input
$link_value = $_GET['search'];

// houses
$sql_houses = "SELECT id, name FROM house";

$house_keys = [
  "id",
  "name"
];

  $house_result = import_arr($sql_houses, $house_keys);
  
  $id_houses = $house_result[0];
  $name_houses = $house_result[1];

// import class
  $class_keys = [
    "id",
    "class_id",
    "house_id"
  ];

  $sql_classes = "SELECT id, class_id, house_id FROM class";

  $class_result = import_arr($sql_classes, $class_keys);

  $id_classes = $class_result[0];
  $name_classes = $class_result[1];
  $house_id_classes = $class_result[2];

// import student
$student_keys = [
  "id",
  "first_name",
  "second_name",
  "iam",
  "class",
  "tuteur"
];

  $sql_student = "SELECT id, first_name, second_name, iam, class, tuteur FROM student";

  $student_result = import_arr($sql_student,$student_keys);

  $id_student = $student_result[0];
  $first_name_student = $student_result[1];
  $second_name_student = $student_result[2];
  $iam_student = $student_result[3];
  $class_student = $student_result[4];
  $tuteur_student = $student_result[5];
  
  // import notes
  $notes_keys = ["id", "note"];

  $sql_note = "SELECT id, note FROM note";
  
  $note_result = import_arr($sql_note, $notes_keys);
  
  $id_note = $note_result[0];
  $note = $note_result[1];
  

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

$sql_student_entreprise = "SELECT * FROM entreprise_student;";

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


// get entreprise names
$entreprise_keys = [
  "id",
  "name",
  "ceo",
];

$sql_entreprise = "SELECT * FROM entreprise";
$result_entreprise = import_arr($sql_entreprise, $entreprise_keys);

$id_entrerprise = $result_entreprise[0];
$name_entreprise = $result_entreprise[1];
$ceo_entreprise = $result_entreprise[2];

// get tuteur informations
$tuteur_key = [
  "id",
  "first_name",
  "second_name",
];

$sql_tuteur = "SELECT id, first_name, second_name FROM tuteur";

$tuteur_result = import_arr($sql_tuteur, $tuteur_key);

$id_tuteur = $tuteur_result[0];
$first_name_tuteur = $tuteur_result[1];
$second_name_tuteur = $tuteur_result[2];


?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Search</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="/css/main.css" rel="stylesheet">
    <head>


    <body style="margin-bottom: 50px;">
    
    <div id="navbar"></div>
    <script src="/scripts/navbar.js"></script>
    
    <table class="table h-100 w-100" style="font-size: 2rem;" id="main_box">
<tbody id="main">

  </tbody>
  </table>

    <script>
const id_houses = <?php echo json_encode($id_houses); ?>;
const name_houses = <?php echo json_encode($name_houses); ?>;

const id_classes = <?php echo json_encode($id_classes); ?>;
const name_classes = <?php echo json_encode($name_classes); ?>;
const house_id_classes = <?php echo json_encode($house_id_classes); ?>;

const id_student = <?php echo json_encode($id_student); ?>;
const first_name_student = <?php echo json_encode($first_name_student); ?>;
const second_name_student = <?php echo json_encode($second_name_student); ?>;
const iam_student = <?php echo json_encode($iam_student); ?>;
const class_student = <?php echo json_encode($class_student); ?>;
const tuteur_student = <?php echo json_encode($tuteur_student); ?>;

const id_note = <?php echo json_encode($id_note); ?>;
const note = <?php echo json_encode($note); ?>;

const id_student_entreprise = <?php echo json_encode($id_student_entreprise); ?>;
const entreprise_1 = <?php echo json_encode($entreprise_1); ?>;
const entreprise_1_plage = <?php echo json_encode($entreprise_1_plage); ?>;
const entreprise_2 = <?php echo json_encode($entreprise_2); ?>;
const entreprise_2_plage = <?php echo json_encode($entreprise_2_plage); ?>;
const entreprise_3 = <?php echo json_encode($entreprise_3); ?>;
const entreprise_3_plage = <?php echo json_encode($entreprise_3_plage); ?>;
const entreprise_4 = <?php echo json_encode($entreprise_4); ?>;
const entreprise_4_plage = <?php echo json_encode($entreprise_4_plage); ?>;
const entreprise_5 = <?php echo json_encode($entreprise_5); ?>;
const entreprise_5_plage = <?php echo json_encode($entreprise_5_plage); ?>;
const entreprise_6 = <?php echo json_encode($entreprise_6); ?>;
const entreprise_6_plage = <?php echo json_encode($entreprise_6_plage); ?>;
const entreprise_7 = <?php echo json_encode($entreprise_7); ?>;
const entreprise_7_plage = <?php echo json_encode($entreprise_7_plage); ?>;
const entreprise_8 = <?php echo json_encode($entreprise_8); ?>;
const entreprise_8_plage = <?php echo json_encode($entreprise_8_plage); ?>;

const id_entrerprise = <?php echo json_encode($id_entrerprise); ?>;
const name_entreprise = <?php echo json_encode($name_entreprise); ?>;
const ceo_entreprise = <?php echo json_encode($ceo_entreprise); ?>;

const id_tuteur = <?php echo json_encode($id_tuteur); ?>;
const first_name_tuteur = <?php echo json_encode($first_name_tuteur); ?>;
const second_name_tuteur = <?php echo json_encode($second_name_tuteur); ?>;

const variables = [
  { name: "id_houses", array: id_houses, region: "houses"},
  { name: "name_houses", array: name_houses, region: "houses" },
  { name: "id_classes", array: id_classes, region: "classes" },
  { name: "name_classes", array: name_classes, region: "classes" },
  { name: "house_id_classes", array: house_id_classes, region: "classes" },
  { name: "id_student", array: id_student, region: "student" },
  { name: "first_name_student", array: first_name_student, region: "student" },
  { name: "second_name_student", array: second_name_student, region: "student" },
  { name: "iam_student", array: iam_student, region: "student" },
  { name: "class_student", array: class_student, region: "student" },
  { name: "tuteur_student", array: tuteur_student, region: "student" },
  { name: "id_note", array: id_note, region: "student" },
  { name: "note", array: note, region: "student" },
  { name: "id_student_entreprise", array: id_student_entreprise, region: "student" },
  { name: "entreprise_1", array: entreprise_1, region:  "student"},
  { name: "entreprise_1_plage", array: entreprise_1_plage, region:  "student"},
  { name: "entreprise_2", array: entreprise_2, region:  "student"},
  { name: "entreprise_2_plage", array: entreprise_2_plage, region:  "student"},
  { name: "entreprise_3", array: entreprise_3, region:  "student"},
  { name: "entreprise_3_plage", array: entreprise_3_plage, region:  "student"},
  { name: "entreprise_4", array: entreprise_4, region:  "student"},
  { name: "entreprise_4_plage", array: entreprise_4_plage, region:  "student"},
  { name: "entreprise_5", array: entreprise_5, region:  "student"},
  { name: "entreprise_5_plage", array: entreprise_5_plage, region:  "student"},
  { name: "entreprise_6", array: entreprise_6, region:  "student"},
  { name: "entreprise_6_plage", array: entreprise_6_plage, region:  "student"},
  { name: "entreprise_7", array: entreprise_7, region:  "student"},
  { name: "entreprise_7_plage", array: entreprise_7_plage, region:  "student"},
  { name: "entreprise_8", array: entreprise_8, region:  "student"},
  { name: "entreprise_8_plage", array: entreprise_8_plage, region:  "student"},
  { name: "id_entrerprise", array: id_entrerprise, region: "entreprise" },
  { name: "name_entreprise", array: name_entreprise, region: "entreprise" },
  { name: "ceo_entreprise", array: ceo_entreprise, region: "entreprise" },
  { name: "id_tuteur", array: id_tuteur, region: "tuteur" },
  { name: "first_name_tuteur", array: first_name_tuteur, region: "tuteur" },
  { name: "second_name_tuteur", array: second_name_tuteur, region: "tuteur" },
];

const main = document.getElementById("main");
function searchArray(array, keyword) {
  const results = [];
  for (let i = 0; i < array.length; i++) {
    if (array[i].toLowerCase().includes(keyword.toLowerCase())) {
      results.push({ value: array[i], index: i });
    }
  }
  return results;
}

const keywordToSearch = "<?php echo $_GET["search"]?>";

console.log(keywordToSearch);
if (keywordToSearch != null && keywordToSearch != ""){
const searchResults = [];

for (const variable of variables) {
  const results = searchArray(variable.array, keywordToSearch);
  if (results.length > 0) {
    for (const result of results) {
      searchResults.push({ value: result.value, location: variable.name, index: result.index});
    }
  }
}

if (searchResults.length > 0) {
  console.log("Search results:");
  for (const result of searchResults) {
    console.log(`Value: ${result.value}, Location: ${result.location}`);
  }
} else {
  console.log("No results found.");
  main.insertAdjacentHTML("afterbegin" ,`<h1>No results found</h1>`);
  
}

console.log(searchResults);

searchResults.forEach(result_search => {
  let value = result_search.value;
  let location = result_search.location;
  let index = result_search.index;

  console.log(value);
  console.log(location);
  console.log(index);

  if (location == "id_student" || location == "first_name_student" || location == "second_name_student" || location == "iam_student" || location == "class_student" || location == "tuteur_student" || location == "id_note" || location == "note" || location == "id_student_entreprise") {
    main.insertAdjacentHTML("afterbegin" ,`<tr><td><a class="hide_a" href="student.php?student=${index+1}">Student: ${first_name_student[index]} ${second_name_student[index]} <br></td></tr>`);
  }
  if (location == "name_entreprise" || location == "ceo_entreprise" || location == "id_entreprise")
  {
    main.insertAdjacentHTML("afterbegin" ,`<tr><td>Entreprise: ${name_entreprise[index]}, Ceo: ${ceo_entreprise[index]} <br></td></tr>`);
  }

});
};
</script>

    </body>

</html>