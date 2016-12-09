<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <h1>School check CRUD</h1>

    <div class="row">
        <p>
            <a href="?action=create" class="btn btn-succes">Create</a>
        </p>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>School</th>
                <th>Address</th>
                <th>Zipcode</th>
                <th>District</th>
                <th>Mobile number</th>
                <th>E-mail</th>
                <th>Website</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
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


                $query="SELECT * FROM schoolcheck";

                foreach ($mysqli->query($query) as $row){
                    echo '<tr>';
                    echo '<td>'. $row['schoolname'] . '</td>';
                    echo '<td>'. $row['adress'] . '</td>';
                    echo '<td>'. $row['zipcode'] . '</td>';
                    echo '<td>'. $row['district'] . '</td>';
                    echo '<td>'. $row['telnr'] . '</td>';
                    echo '<td>'. $row['email'] . '</td>';
                    echo '<td>'. $row['website'] . '</td>';

                    echo '<td width=250>';
                    echo '<a class="btn" href="?action=read&id='.$row['id'].'">Read</a>';
                    echo '&nbsp;';
                    echo '<a class="btn btn-success" href="?action=update&id='.$row['id'].'">Update</a>';
                    echo '&nbsp;';
                    echo '<a class="btn btn-danger" href="?action=delete&id='.$row['id'].'">Delete</a>';
                    echo '</td>';
                    echo '</tr>';
                }

                ?>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>