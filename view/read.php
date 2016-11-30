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

    <div class="row">
        <p>
            <a href="?action=create" class="btn btn-succes">Create</a>
        </p>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>school</th>
                <th>adress</th>
                <th>zipcode</th>
                <th>district</th>
                <th>mobile number</th>
                <th>email</th>
                <th>website</th>
                <th>openday</th>
                <th>openclass</th>
                <th>infonight</th>
                <th>private</th>
                <th>level</th>
                <th>concept</th>
                <th>specials</th>
                <th>tto</th>
                <th>sports</th>
                <th>tech</th>
                <th>spanish</th>
                <th>vso</th>
                <th>vmbo-b</th>
                <th>vmbo-k</th>
                <th>vmbo-t</th>
                <th>havo</th>
                <th>vwo</th>
                <th>gymnasium</th>
                <th>basic</th>
                <th>art</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php


                $query="SELECT * FROM schoolcheck";

                foreach ($mysqli->query($query) as $row){
                    echo '<td>'. $row['schoolname'] . '</td>';
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
                    echo '<td>'. $row['level'] . '</td>';
                    echo '<td>'. $row['concept'] . '</td>';
                    echo '<td>'. $row['specials'] . '</td>';
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

                    echo '<td width=250>';
                    echo '<a class="btn" href="read.php?id='.$row['id'].'">Read</a>';
                    echo '&nbsp;';
                    echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
                    echo '&nbsp;';
                    echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
                    echo '</td>';
                }

                ?>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>