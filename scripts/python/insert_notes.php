<?php
$db_host = 'database';
$db_user = 'root';
$db_password = 'xens';
$db_db = 'schedule';

try {
    // Connect to the database
    $connection = new mysqli($db_host, $db_user, $db_password, $db_db);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    echo "Connected to the database.<br>";


    // SQL query for insertion
    for ($i = 1; $i <= 700; $i++) {
        echo $i . "<br>";
    $insert_query = "INSERT INTO note (id, note) VALUES (NULL, '" .$i ."`s note')";

    if ($connection->query($insert_query) === TRUE) {
        echo "Data inserted successfully.";

    } else {
        echo "Error: " . $insert_query . "<br>" . $connection->error;
    }
}

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$connection->close();
?>
