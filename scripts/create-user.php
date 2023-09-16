
<?php

require "../scripts/import_db_array.php";
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

 ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
  <form class="form-signin" action="/scripts/create-user-submit.php" method="post">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    
                    <label for="uname" class="sr-only">Username</label>
                    <input type="text" id="uname" name="uname" class="form-control" placeholder="Username" required autofocus>
                    
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    
                    <label for="access_level">access level: </label>
  <select name="access_level" id="access_level">
    <option value="1">1; admin</option>
    <option value="2">2; privileged user</option>
    <option value="3">3; user</option>
    <option value="4">4; restricted user</option>
  </select>
  <br>
  <br>

  <label for="entreprise">entreprise: </label>

  <select name="entreprise" id="entreprise">
  </select>

  <br>
  <br>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Register User 
                    
                    </button>
                </form>
  </body>
</html>
<script>
    const entreprises = <?php echo json_encode($name_entreprise); ?>;
    const entreprises_id = <?php echo json_encode($id_entrerprise); ?>;

    const entreprise_insert = document.getElementById("entreprise");
    let index = 0;
    entreprises.forEach(entreprise => {

        entreprise_insert.insertAdjacentHTML("afterbegin", `<option value="${entreprises_id[index]}">${entreprise}</option>`);
        index = index +1;
    });

</script>