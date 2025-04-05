<?php
include('includes/deleteForm.inc.php');
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>
  </body>
</html>

<?php include('insertForm.inc.php');?>
<?php include('deleteForm.inc.php');?>
<?php include('updateForm.inc.php');?>

<?php
mysqli_close($conn);
?>