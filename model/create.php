<?php

if ( !empty($_POST)) {
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
    $basic = null;
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
    $vmboB = $_POST['vmboB'];
    $vmboK = $_POST['vmboK'];
    $vmboT = $_POST['vmboT'];
    $havo = $_POST['havo'];
    $vwo = $_POST['vwo'];
    $gymnasium = $_POST['gymnasium'];
    $basic = $_POST['basic'];
    $art = $_POST['art'];

    // validate input
    $valid = true;
    if (empty($name)) {
        $nameError = 'Please enter Name';
        $valid = false;
    }

    if (empty($email)) {
        $emailError = 'Please enter Email Address';
        $valid = false;
    }

    if (empty($mobile)) {
        $mobileError = 'Please enter Mobile Number';
        $valid = false;
    }

    // insert data
    if ($valid) {
        $query = "INSERT INTO customers (name,email,mobile) values(?, ?, ?)";
        $mysqli->query($query);
        header("Location: index.php");
    }
}
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
            <h3>Create new school</h3>
        </div>

        <form class="form-horizontal" action="create.php" method="post">
            <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                <label class="control-label">Name</label>
                <div class="controls">
                    <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                    <?php if (!empty($nameError)): ?>
                        <span class="help-inline"><?php echo $nameError;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                <label class="control-label">Email Address</label>
                <div class="controls">
                    <input name="email" type="text" placeholder="Email Address" value="<?php echo !empty($email)?$email:'';?>">
                    <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                    <?php endif;?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($mobileError)?'error':'';?>">
                <label class="control-label">Mobile Number</label>
                <div class="controls">
                    <input name="mobile" type="text"  placeholder="Mobile Number" value="<?php echo !empty($mobile)?$mobile:'';?>">
                    <?php if (!empty($mobileError)): ?>
                        <span class="help-inline"><?php echo $mobileError;?></span>
                    <?php endif;?>
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Create</button>
                <a class="btn" href="index.php">Back</a>
            </div>
        </form>
    </div>

</div> <!-- /container -->
</body>
</html>