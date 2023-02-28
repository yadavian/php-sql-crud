<?php

$con = new mysqli("localhost", 'root', '', 'php_sql_crud');

// if ($con) {
//     echo 'Connected';
// } else {
//     echo 'Not connected';
//     die(mysqli_error($con));
// }

if (!$con) {
    die(mysqli_error($con));
}

?>