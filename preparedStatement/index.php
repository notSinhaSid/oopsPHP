<?php
include('includes/dbconnection.inc.php');
?>

<?php include('includes/header.inc.php');?>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-6">
      <?php include('includes/edit.inc.php');?>
      <form action="" method="POST" class="form-group">
        <label for="Name" class="form-lable">Name</label>
        <input type="text" name="sName" id="" class="form-control" value="<?php if(isset($sName)){echo $sName;}?>">

        <label for="Roll" class="form-label">Roll</label>
        <input type="number" name="sRoll" id="" value="<?php if(isset($sRoll)){echo $sRoll;}?>" class="form-control">

        <label for="City" class="form-label">City</label>
        <input type="text" name="sCity" id="" class="form-control" value="<?php if(isset($sCity)){echo $sCity;}?>">

        <button type="submit" name="submit" class="btn btn-sm btn-success mt-3">Submit</button>
        <input type="hidden" name="Id" value="<?php if(isset($Id)){echo $Id;}?>">
        <button type="submit" name="update" class="btn btn-sm btn-light mt-3 ml-3">Update</button>
      </form>
    </div>
    <div class="col-lg-4 offset-lg-2">
        <?php include('includes/selectStmtForm.inc.php');?>
    </div>
  </div>
</div>


<?php include('includes/footer.inc.php');?>