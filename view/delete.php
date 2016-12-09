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

    $sql = "SELECT * FROM schoolcheck WHERE id = $id";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">

    <div class="span10 offset1">
        <div class="row">
            <h3>Delete <?php

                foreach ($mysqli->query($sql) as $row){ echo $row['schoolname'];}
                ?></h3>
        </div>

        <form class="form-horizontal" action="model/delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>"/>
            <p class="alert alert-error">Are you sure want to delete ?</p>
            <div class="form-actions">
                <button type="submit" class="btn btn-danger">Yes</button>
                <a class="btn" href="index.php">No</a>
            </div>
        </form>
    </div>

</div> <!-- /container -->
</body>
</html>