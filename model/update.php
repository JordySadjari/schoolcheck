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





if ( !empty($_POST)) {

    $id = $_POST['id'];

    // keep track validation errors
    $school = null;
    $adress = null;
    $zipcode = null;
    $district = null;
    $mobileNumber = null;
    $email = null;
    $website = null;
    $opendays = null;
    $openclass = null;
    $infonight = null;
    $private = null;
    $level = null;
    $concept = null;
    $specials = null;
    $tto = null;
    $sports = null;
    $tech = null;
    $spanish = null;
    $vso = null;
    $vmboB = null;
    $vmboK = null;
    $vmboT = null;
    $havo = null;
    $vwo = null;
    $gymnasium = null;
    $basis = null;
    $art = null;

    // keep track post values
    $school = $_POST['schoolname'];
    $adress = $_POST['adress'];
    $zipcode = $_POST['zipcode'];
    $district = $_POST['district'];
    $mobileNumber = $_POST['number'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $opendays = $_POST['opendays'];
    $openclass = $_POST['openclass'];
    $infonight = $_POST['infonight'];
    $private = $_POST['private'];
    $level = $_POST['level'];
    $concept = $_POST['concept'];
    $specials = $_POST['specials'];
    $tto = $_POST['tto'];
    $sports = $_POST['sports'];
    $tech = $_POST['tech'];
    $spanish = $_POST['spanish'];
    $vso = $_POST['vso'];
    $vmboB = $_POST['vmbob'];
    $vmboK = $_POST['vmbok'];
    $vmboT = $_POST['vmbot'];
    $havo = $_POST['havo'];
    $vwo = $_POST['vwo'];
    $gymnasium = $_POST['gymnasium'];
    $basis = $_POST['basis'];
    $art = $_POST['art'];

    // validate input
    $valid = true;
    if (empty($school)) {
        $schoolError = 'Please enter your schoolname';
        $valid = false;
    }

    if (empty($adress)) {
        $adressError = 'Please enter school adress';
        $valid = false;
    }

    if (empty($zipcode)) {
        $zipcodeError = 'Please enter your zipcode';
        $valid = false;
    }

    if (empty($district)) {
        $districtError = 'Please enter your district';
        $valid = false;
    }

    if (empty($mobileNumber)) {
        $mobileError = 'Please enter school Mobile Number';
        $valid = false;
    }

    if (empty($email)) {
        $emailError = 'Please enter your email';
        $valid = false;
    }

    if (empty($website)) {
        $websiteError = 'Please enter your schoolsite';
        $valid = false;
    }

    if (empty($opendays)) {
        $opendaysError = 'Please enter your available opendays';
        $valid = false;
    }

    if (empty($openclass)) {
        $openclassError = 'Please enter your available openclasses';
        $valid = false;
    }

    if (empty($infonight)) {
        $infonightError = 'Please enter your available infonights';
        $valid = false;
    }

    if (empty($private)) {
        $valid = false;
    }

    if (empty($level)) {
        $levelError = 'Please enter available levels';
        $valid = false;
    }

    if (empty($concept)) {
        $conceptError = 'Please enter your school concept';
        $valid = false;
    }

    if (empty($specials)) {
        $specialsError = 'Please enter your school specials';
        $valid = false;
    }

    if (empty($tto)) {
        $valid = false;
    }

    if (empty($sports)) {
        $valid = false;
    }

    if (empty($tech)) {
        $valid = false;
    }

    if (empty($spanish)) {
        $valid = false;
    }

    if (empty($vso)) {
        $valid = false;
    }

    if (empty($vmboB)) {
        $valid = false;
    }

    if (empty($vmboK)) {
        $valid = false;
    }

    if (empty($vmboT)) {
        $valid = false;
    }

    if (empty($havo)) {
        $valid = false;
    }

    if (empty($vwo)) {
        $valid = false;
    }

    if (empty($gymnasium)) {
        $valid = false;
    }

    if (empty($basis)) {
        $basisError = 'Please enter your schools basis value';
        $valid = false;
    }

    if (empty($art)) {
        $valid = false;
    }




        // insert data
        $sql = " UPDATE schoolcheck SET 
                                schoolname='$school',
                                adress='$adress',
                                zipcode='$zipcode',
                                district='$district',
                                telnr='$mobileNumber',
                                email='$email',
                                website='$website',
                                openday='$opendays',
                                openclass='$openclass',
                                infonight='$infonight',
                                private='$private',
                                levels='$level',
                                concept='$concept',
                                specials='$concept',
                                tto='$tto',
                                sports='$sports',
                                tech='$tech',
                                spanish='$spanish',
                                vso='$vso',
                                vmbob='$vmboB',
                                vmbok='$vmboK',
                                vmbot='$vmboT',
                                havo='$havo',
                                vwo='$vwo',
                                gymnasium='$gymnasium',
                                basis='$basis',
                                art='$art' WHERE id= '$id' ";
        if ($mysqli->query($sql) === TRUE) {
            echo "<br>update succesvol</br>";

            //header("Location: ../index.php");
        } else {
            echo "<br>Error: " . $sql . "<br>" . $mysqli->error;
        }

        $mysqli->close();



}
    echo '<a href="../index.php">Back</a>';
?>
