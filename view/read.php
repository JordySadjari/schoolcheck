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
$id = $_REQUEST['id'];


$query="SELECT * FROM schoolcheck WHERE id = $id";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <h1>School check CRUD</h1>


        <h2><?php foreach ($mysqli->query($query) as $row){echo $row['schoolname'];}?></h2>
    <div class="row">


        <table class="table table-striped table-bordered" style="margin-bottom: 0;">
            <thead>
            <tr>
                <th>Address</th>
                <th>Zip code</th>
                <th>District</th>
                <th>Mobile number</th>
                <th>E-mail</th>
                <th>Website</th>
                <th>Open day</th>
                <th>Open class</th>
                <th>Info night</th>
                <th>Private</th>
                <th>Levels</th>
                <th>Concept</th>
                <th>Specials</th>

            </tr>
            </thead>
            <tbody>
            <tr>
            </tr>                <?php



            foreach ($mysqli->query($query) as $row){
                echo '<td>'. $row['adress'] . '</td>';
                echo '<td>'. $row['zipcode'] . '</td>';
                echo '<td>'. $row['district'] . '</td>';
                echo '<td>'. $row['telnr'] . '</td>';
                echo '<td>'. $row['email'] . '</td>';
                echo '<td>'. $row['website'] . '</td>';
                echo '<td>'. $row['openday'] . '</td>';
                echo '<td>'. $row['openclass'] . '</td>';
                echo '<td>'. $row['infonight'] . '</td>';
                echo '<td>'. $row['private'] . '</td>';
                echo '<td>'. $row['levels'] . '</td>';
                echo '<td>'. $row['concept'] . '</td>';
                echo '<td>'. $row['specials'] . '</td>';
            }

            ?>

            </tbody>
        </table>

        <table class="table table-striped table-bordered" style="border-top: solid black 2px; corner-rad">
            <thead><tr>
        <th>TTO</th>
        <th>Sports</th>
        <th>Tech</th>
        <th>Spanish</th>
        <th>VSO</th>
        <th>VMBO-B</th>
        <th>VMBO-K</th>
        <th>VMBO-T</th>
        <th>HAVO</th>
        <th>VWO</th>
        <th>Gymnasium</th>
        <th>Basic</th>
        <th>Art</th>
        </tr>
            </thead>
            <tbody><tr></tr>
        <?php
        foreach ($mysqli->query($query) as $row){
            echo '<td>'. $row['tto'] . '</td>';
            echo '<td>'. $row['sports'] . '</td>';
            echo '<td>'. $row['tech'] . '</td>';
            echo '<td>'. $row['spanish'] . '</td>';
            echo '<td>'. $row['vso'] . '</td>';
            echo '<td>'. $row['vmbob'] . '</td>';
            echo '<td>'. $row['vmbok'] . '</td>';
            echo '<td>'. $row['vmbot'] . '</td>';
            echo '<td>'. $row['havo'] . '</td>';
            echo '<td>'. $row['vwo'] . '</td>';
            echo '<td>'. $row['gymnasium'] . '</td>';
            echo '<td>'. $row['basis'] . '</td>';
            echo '<td>'. $row['art'] . '</td>';
        } ?></tbody>
            </table>
    </div>
    <a href="?action=home">Back</a>
</div>
</body>
</html>