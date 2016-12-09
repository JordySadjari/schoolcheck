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

$query ="SELECT * FROM schoolcheck WHERE id = $id";

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
            <h3>update <?php foreach ($mysqli->query($query) as $row){
                    echo $row['schoolname'];
                }?> </h3>
        </div>

        <form class="form-horizontal" action="model/update.php" method="post">

            <div class="control-group <?php echo !empty($schoolError)?'error':'';?>">
                <label class="control-label">Schoolname</label>
                <div class="controls">
                    <input name="schoolname" type="text"  placeholder="Name" value="<?php foreach ($mysqli->query($query) as $row){
                        echo $row['schoolname'];
                    }?>">
                    <?php if (!empty($schoolError)): ?>
                        <span class="help-inline"><?php echo $schoolError;?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($adress)?'error':'';?>">
                <label class="control-label">School adress</label>
                <div class="controls">
                    <input name="adress" type="text"  placeholder="School adress" value="<?php foreach ($mysqli->query($query) as $row){
                        echo $row['adress'];
                    }?>">
                    <?php if (!empty($adressError)): ?>
                        <span class="help-inline"><?php echo $adressError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($zipcodeError)?'error':'';?>">
                <label class="control-label">Zipcode</label>
                <div class="controls">
                    <input name="zipcode" type="text" placeholder="zipcode" value="<?php foreach ($mysqli->query($query) as $row){
                        echo $row['zipcode'];
                    }?>">
                    <?php if (!empty($zipcodeError)): ?>
                        <span class="help-inline"><?php echo $zipcodeError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($district)?'error':'';?>">
                <label class="control-label">District</label>
                <div class="controls">
                    <input name="district" type="text"  placeholder="district" value="<?php foreach ($mysqli->query($query) as $row){
                        echo $row['district'];
                    }?>">
                    <?php if (!empty($districtError)): ?>
                        <span class="help-inline"><?php echo $districtError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($mobileError)?'error':'';?>">
                <label class="control-label">School Mobile Number</label>
                <div class="controls">
                    <input name="number" type="text"  placeholder="School Mobile Number" value="<?php foreach ($mysqli->query($query) as $row){
                        echo $row['telnr'];
                    }?>">
                    <?php if (!empty($mobileError)): ?>
                        <span class="help-inline"><?php echo $mobileError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                <label class="control-label">School's Email</label>
                <div class="controls">
                    <input name="email" type="text"  placeholder="email" value="<?php foreach ($mysqli->query($query) as $row){
                        echo $row['email'];
                    }?>">
                    <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($websiteError)?'error':'';?>">
                <label class="control-label">School site</label>
                <div class="controls">
                    <input name="website" type="text"  placeholder="Website" value="<?php foreach ($mysqli->query($query) as $row){
                        echo $row['website'];
                    }?>">
                    <?php if (!empty($websiteError)): ?>
                        <span class="help-inline"><?php echo $websiteError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($opendaysError)?'error':'';?>">
                <label class="control-label">Open days</label>
                <div class="controls">
                    <input name="opendays" type="text"  placeholder="Open days" value="<?php foreach ($mysqli->query($query) as $row){
                        echo $row['openday'];
                    }?>">
                    <?php if (!empty($opendaysError)): ?>
                        <span class="help-inline"><?php echo $opendaysError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($openclassError)?'error':'';?>">
                <label class="control-label">Open Classes</label>
                <div class="controls">
                    <input name="openclass" type="text"  placeholder="Open Classes" value="<?php foreach ($mysqli->query($query) as $row){
                        echo $row['openclass'];
                    }?>">
                    <?php if (!empty($openclassError)): ?>
                        <span class="help-inline"><?php echo $openclassError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($infonightError)?'error':'';?>">
                <label class="control-label">Info Nights</label>
                <div class="controls">
                    <input name="infonight" type="text"  placeholder="Info Nights" value="<?php foreach ($mysqli->query($query) as $row){
                        echo $row['infonight'];
                    }?>">
                    <?php if (!empty($infonightError)): ?>
                        <span class="help-inline"><?php echo $infonightError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <?php
            foreach ($mysqli->query($query) as $row){
                if ($row['private'] == 'y'){
                    echo '
                        <div class="control-group">
                <label class="control-label">Private school?</label>
                <div class="controls">
                    <input name="private" type="radio" value="y" checked>yes
                    <input name="private" type="radio" value="n"> no
                </div>
            </div>
                    ';
                }

                if ($row['private'] == 'n'){
                    echo '
                        <div class="control-group">
                <label class="control-label">Private school?</label>
                <div class="controls">
                    <input name="private" type="radio" value="y">yes
                    <input name="private" type="radio" value="n"checked> no
                </div>
            </div>
                    ';
                }
            }
            ?>


            <div class="control-group <?php echo !empty($level)?'error':'';?>">
                <label class="control-label">levels</label>
                <div class="controls">
                    <input name="level" type="text"  placeholder="levels" value="<?php foreach ($mysqli->query($query) as $row){
                        echo $row['levels'];
                    }?>">
                    <?php if (!empty($levelError)): ?>
                        <span class="help-inline"><?php echo $levelError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($conceptError)?'error':'';?>">
                <label class="control-label">concepts</label>
                <div class="controls">
                    <input name="concept" type="text"  placeholder="Concepts" value="<?php foreach ($mysqli->query($query) as $row){
                        echo $row['concept'];
                    }?>">
                    <?php if (!empty($conceptError)): ?>
                        <span class="help-inline"><?php echo $conceptError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($specialsError)?'error':'';?>">
                <label class="control-label">specials</label>
                <div class="controls">
                    <input name="specials" type="text"  placeholder="Specials" value="<?php foreach ($mysqli->query($query) as $row){
                        echo $row['specials'];
                    }?>">
                    <?php if (!empty($specialsError)): ?>
                        <span class="help-inline"><?php echo $specialsError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <?php
            foreach ($mysqli->query($query) as $row){
                if ($row['tto'] == 'y'){
                    echo '
                        <div class="control-group">
                <label class="control-label">tto</label>
                <div class="controls">
                    <input name="tto" type="radio" value="y" checked>yes
                    <input name="tto" type="radio" value="n"> no
                </div>
            </div>
                    ';
                }
                else {
                    echo '
                        <div class="control-group">
                <label class="control-label">tto</label>
                <div class="controls">
                    <input name="tto" type="radio" value="y">yes
                    <input name="tto" type="radio" value="n"checked> no
                </div>
            </div>
                    ';
                }
            }
            ?>

            <?php
            foreach ($mysqli->query($query) as $row){
                if ($row['sports'] == 'y'){
                    echo '
                        <div class="control-group">
                <label class="control-label">sports</label>
                <div class="controls">
                    <input name="sports" type="radio" value="y" checked>yes
                    <input name="sports" type="radio" value="n"> no
                </div>
            </div>
                    ';
                }else {
                    echo '
                        <div class="control-group">
                <label class="control-label">sports</label>
                <div class="controls">
                    <input name="sports" type="radio" value="y">yes
                    <input name="sports" type="radio" value="n"checked> no
                </div>
            </div>
                    ';
                }
            }
            ?>

            <?php
            foreach ($mysqli->query($query) as $row){
                if ($row['tech'] == 'y'){
                    echo '
                        <div class="control-group">
                <label class="control-label">tech</label>
                <div class="controls">
                    <input name="tech" type="radio" value="y" checked>yes
                    <input name="tech" type="radio" value="n"> no
                </div>
            </div>
                    ';
                }else {
                    echo '
                        <div class="control-group">
                <label class="control-label">tech</label>
                <div class="controls">
                    <input name="tech" type="radio" value="y">yes
                    <input name="tech" type="radio" value="n"checked> no
                </div>
            </div>
                    ';
                }
            }
            ?>

            <?php
            foreach ($mysqli->query($query) as $row){
                if ($row['spanish'] == 'y'){
                    echo '
                        <div class="control-group">
                <label class="control-label">spanish</label>
                <div class="controls">
                    <input name="spanish" type="radio" value="y" checked>yes
                    <input name="spanish" type="radio" value="n">no
                </div>
            </div>
                    ';
                }else {
                    echo '
                        <div class="control-group">
                <label class="control-label">spanish</label>
                <div class="controls">
                    <input name="spanish" type="radio" value="y">yes
                    <input name="spanish" type="radio" value="n"checked> no
                </div>
            </div>
                    ';
                }
            }
            ?>

            <?php
            foreach ($mysqli->query($query) as $row){
                if ($row['vso'] == 'y'){
                    echo '
                        <div class="control-group">
                <label class="control-label">vso</label>
                <div class="controls">
                    <input name="vso" type="radio" value="y" checked>yes
                    <input name="vso" type="radio" value="n"> no
                </div>
            </div>
                    ';
                }else {
                    echo '
                        <div class="control-group">
                <label class="control-label">vso</label>
                <div class="controls">
                    <input name="vso" type="radio" value="y">yes
                    <input name="vso" type="radio" value="n"checked> no
                </div>
            </div>
                    ';
                }
            }
            ?>

            <?php
            foreach ($mysqli->query($query) as $row){
                if ($row['vmbob'] == 'y'){
                    echo '
                        <div class="control-group">
                <label class="control-label">vmbo-b</label>
                <div class="controls">
                    <input name="vmbob" type="radio" value="y" checked>yes
                    <input name="vmbob" type="radio" value="n"> no
                </div>
            </div>
                    ';
                }else {
                    echo '
                        <div class="control-group">
                <label class="control-label">vmbo-b</label>
                <div class="controls">
                    <input name="vmbob" type="radio" value="y">yes
                    <input name="vmbob" type="radio" value="n"checked> no
                </div>
            </div>
                    ';
                }
            }
            ?>

            <?php
            foreach ($mysqli->query($query) as $row){
                if ($row['vmbok'] == 'y'){
                    echo '
                        <div class="control-group">
                <label class="control-label">vmbo-k</label>
                <div class="controls">
                    <input name="vmbok" type="radio" value="y" checked>yes
                    <input name="vmbok" type="radio" value="n"> no
                </div>
            </div>
                    ';
                }else {
                    echo '
                        <div class="control-group">
                <label class="control-label">vmbo-k</label>
                <div class="controls">
                    <input name="vmbok" type="radio" value="y">yes
                    <input name="vmbok" type="radio" value="n"checked> no
                </div>
            </div>
                    ';
                }
            }
            ?>

            <?php
            foreach ($mysqli->query($query) as $row){
                if ($row['vmbot'] == 'y'){
                    echo '
                        <div class="control-group">
                <label class="control-label">vmbo-t</label>
                <div class="controls">
                    <input name="vmbot" type="radio" value="y" checked>yes
                    <input name="vmbot" type="radio" value="n"> no
                </div>
            </div>
                    ';
                }else {
                    echo '
                        <div class="control-group">
                <label class="control-label">vmbo-t</label>
                <div class="controls">
                    <input name="vmbot" type="radio" value="y">yes
                    <input name="vmbot" type="radio" value="n"checked> no
                </div>
            </div>
                    ';
                }
            }
            ?>

            <?php
            foreach ($mysqli->query($query) as $row){
                if ($row['havo'] == 'y'){
                    echo '
                        <div class="control-group">
                <label class="control-label">Havo</label>
                <div class="controls">
                    <input name="havo" type="radio" value="y" checked>yes
                    <input name="havo" type="radio" value="n"> no
                </div>
            </div>
                    ';
                }else {
                    echo '
                        <div class="control-group">
                <label class="control-label">Havo</label>
                <div class="controls">
                    <input name="havo" type="radio" value="y">yes
                    <input name="havo" type="radio" value="n"checked> no
                </div>
            </div>
                    ';
                }
            }
            ?>

            <?php
            foreach ($mysqli->query($query) as $row){
                if ($row['vwo'] == 'y'){
                    echo '
                        <div class="control-group">
                <label class="control-label">Vwo</label>
                <div class="controls">
                    <input name="vwo" type="radio" value="y" checked>yes
                    <input name="vwo" type="radio" value="n"> no
                </div>
            </div>
                    ';
                }else {
                    echo '
                        <div class="control-group">
                <label class="control-label">Vwo</label>
                <div class="controls">
                    <input name="vwo" type="radio" value="y">yes
                    <input name="vwo" type="radio" value="n"checked> no
                </div>
            </div>
                    ';
                }
            }
            ?>

            <?php
            foreach ($mysqli->query($query) as $row){
                if ($row['gymnasium'] == 'y'){
                    echo '
                        <div class="control-group">
                <label class="control-label">Gymnasium</label>
                <div class="controls">
                    <input name="gymnasium" type="radio" value="y" checked>yes
                    <input name="gymnasium" type="radio" value="n"> no
                </div>
            </div>
                    ';
                }else {
                    echo '
                        <div class="control-group">
                <label class="control-label">Gymnasium</label>
                <div class="controls">
                    <input name="gymnasium" type="radio" value="y">yes
                    <input name="gymnasium" type="radio" value="n"checked> no
                </div>
            </div>
                    ';
                }
            }
            ?>

            <div class="control-group <?php echo !empty($basis)?'error':'';?>">
                <label class="control-label">specials</label>
                <div class="controls">
                    <input name="basis" type="text"  placeholder="basis" value="<?php foreach ($mysqli->query($query) as $row){
                        echo $row['specials'];
                    }?>">
                    <?php if (!empty($basisError)): ?>
                        <span class="help-inline"><?php echo $basisError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <?php
            foreach ($mysqli->query($query) as $row){
                if ($row['art'] == 'y'){
                    echo '
                        <div class="control-group">
                <label class="control-label">Art</label>
                <div class="controls">
                    <input name="art" type="radio" value="y" checked>yes
                    <input name="art" type="radio" value="n"> no
                </div>
            </div>
                    ';
                }else {
                    echo '
                        <div class="control-group">
                <label class="control-label">Gymnasium</label>
                <div class="controls">
                    <input name="art" type="radio" value="y">yes
                    <input name="art" type="radio" value="n"checked> no
                </div>
            </div>
                    ';
                }
            }
            ?>

            <input type="hidden" name="id" value="<?php echo $id;   ?>">

            <div class="form-actions">
                <button type="submit" class="btn btn-success">Update</button>
                <a class="btn" href="index.php">Back</a>
            </div>
        </form>
    </div>

</div> <!-- /container -->
</body>
</html>