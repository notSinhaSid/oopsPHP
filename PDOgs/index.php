<?php
include('includes/database.inc.php');

// include('includes/retrive.inc.php');

// include('includes/insertData.inc.php');

include('includes/insertDataForm.inc.php');
?>

<?php include('includes/header.inc.php');?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4">
            <!-- <h3>This is the form section </h3> -->
             <form action="" method="POST" class="form-group">
                <label for="Name" class="form-label">Name</label>
                <input type="text" name="sName" placeholder="Your Name" class="form-control">

                <label for="Roll">Roll Number</label>
                <input type="number" name="sRoll" class="form-control">

                <label for="City">City</label>
                <input type="text" name="sCity" placeholder="Your city" class="form-control">

                <button type="submit" class="btn btn-sm btn-success mt-2" name="sRegister" value="">Register</button>
                <button type="submit" class="btn btn-sm btn-light mt-2 ml-2" name="sUpdate" value="">Update</button>
             </form>
             <?php if(isset($msg)){echo $msg;}?>
        </div>
        <div class="col-lg-4 offset-lg-2">
            <!-- <h3>This is for the response display</h3> -->
             <?php include('includes/retrivetable.inc.php');?>
    </div>
</div>

<?php
include('includes/footer.inc.php');
?>