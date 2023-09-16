<?php

function import_arr($sql_selector, $keys_arrays)
{
    $mysqli = new mysqli('localhost', 'root', 'root', 'schedule');

    if ($mysqli->connect_error) {
        die('Connection error: ' . $mysqli->connect_error);
    }

    $result = $mysqli->query($sql_selector);

    while ($row = $result->fetch_assoc()) {
        foreach ($keys_arrays as &$keyCache) {
            $keyCache[1][] = $row[$keyCache[0]];
        }
    }

    $mysqli->close();
    return $keys_arrays;
}

?>
