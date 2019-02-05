<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e3drive";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

/*ini_set('display_errors', '0');         # don't show any errors...
error_reporting(E_ALL | E_STRICT);  */


//==========Query Builder Function==========//

// Call to build own query
function query($query) {
    // Build the query
    $sql = " {$query} ";
    $result = mysqli_query($con, $sql);

    // return query resource
    return $result;
}

// To fetch all value from a table
function fetchAll($table) {
    $sql = "SELECT * FROM $table ";
    $result = mysqli_query($con, $sql);

    // return query resource
    return $result;
}

// Call function if there is a where condition
function where($table, $where = array()) {
    if (count($where === 1)) {
        $field = $where[0];
        $operator = $where[1];
        $value = $where[2];

        // Build the query
        $sql = " SELECT * FROM {$table} WHERE {$field} {$operator} {$value}";
        $result = mysqli_query($con, $sql);

        // return query resource
         return $result;
    }
}
