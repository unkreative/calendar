<?php
function import_arr($sql_selector, $keys_arrays)
{
    // format of the input
    // $sql_selector = sql query
    // $keys_arrays = array(
    //     array($array, $key)
    // )
    
    // connect to database
    $db_host     = 'localhost';
    $db_user     = 'root';
    $db_password = 'root';
    $db_db       = 'schedule';
    
    $mysqli = @new mysqli($db_host, $db_user, $db_password, $db_db);
    
    if ($mysqli->connect_error) {
        echo 'Errno: ' . $mysqli->connect_errno;
        echo '<br>';
        echo 'Error: ' . $mysqli->connect_error;
        exit();
    }
    ;
    
    // execute the query
    $result = $mysqli->query($sql_selector);
    
    // for testing purposes
    // echo $keys_arrays[0][0],"<br>";
    // echo $keys_arrays[0][1],"<br>";
    // echo count($keys_arrays);
    // echo count($keys_arrays);
    // echo "<br>";


        // print_r($key);
        // print_r($keys_arrays);
        // echo "<br>";
        // print_r($cache);
        // print_r($key);
        // echo "key cache<br>";

        if ($result->num_rows > 0) {
            // $num = 0;
            while ($row = $result->fetch_assoc()) {
                foreach ($keys_arrays as $key => $cache) {
                    $arr_cache = array();
                    // echo $num . " ";
                    // $num = $num + 1;
                    
                    // array_push($keys_arrays[$key][1], $row[$keys_arrays[$key][0]]);
                    array_push($arr_cache, $row[$keys_arrays[$key][0]]);
                    // print_r($row);
                    // echo "<br>";
                    foreach ($arr_cache as $variable) {
                        // print_r($variable);
                        // echo "<br>";
                        // print_r($keys_arrays[$key][1]);
                        // echo "<br>";
                        array_push($keys_arrays[$key][1], $variable);
                    }
                    // echo "<br>";
                    // print_r($keys_arrays);
                
            
                }
            }
        }
        else {
            // echo "0 results";
        }
        // echo "<br><br><br><br><br><br><br><br><br>checkpoint<br><br><br><br><br><br><br>";
        // push the cached array into keys
        
    return $keys_arrays;

}
;

function test_connection()
{
    echo "Connection successfull<br>";
}
;

?>