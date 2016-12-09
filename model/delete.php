<?php

const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'schoolcheck';

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_errno) {
    echo "<p>MySQL error no ($mysqli->connect_errno) : ($mysqli->connect_error)</p>";
    exit();
}

$id = 0;

if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if ( !empty($_POST)) {
    // keep track post values
    $id = $_POST['id'];

    // delete data
    $sql = "DELETE FROM schoolcheck WHERE id = $id";
    if($mysqli -> query($sql) === TRUE) {
        echo "<br>update succesvol</br>";
        echo $sql;
    }else{
        echo "<br>Error: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli -> close();


}

?>
