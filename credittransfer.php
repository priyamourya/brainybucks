<?php
include 'connection.php';
$u="select * from usertable";
$rr=mysqli_query($n,$u);
$r=mysqli_query($n,$u);

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to credit transfer</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
 
</head>

<body>
<?php
include 'headernavbar.php';
?> 
<div class="jumbotron big-banner" style="height: 700px;padding-top:10px ">
  <h2>Transfer Credit</h2>
  <p>Enter all the details to transfer the credits</p>
	

  <form  method="POST" >
      <label >Transfer From:</label>
      <select name="from" class="custom-select custom-select-lg mb-3" >
      <option value="None" selected >None </option>
      <?php
    
	while($rwc=mysqli_fetch_array($rr))
	{
      	?>
      	 <option value="<?php echo $rwc['name']; ?>"><?php echo $rwc['name'];?> </option>
      	 <?php
      }
      ?>
  
  </select><br><br>
     <label >Transfer To:</label>
      <select name="to" class="custom-select custom-select-lg mb-3" >
      <option value="None" selected >None </option>
      <?php
    
	while($rw=mysqli_fetch_array($r))
	{
      	?>
      	 <option value="<?php echo $rw['name']; ?>"><?php echo $rw['name'];?> </option>
      	 <?php
      }
      ?>
         </select><br><br>
      <input type="text" class="form-control"id="amount" placeholder="Enter Amount" name="amount" required>
     <!--   <?php
      //mysqli_free_results($rs);
      ?>  -->
     <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
       I agree to pay this amount.
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <br><br>
  <button type="submit" name='submit' value="submit" class="btn btn-primary btn-lg">Transfer</button>
 
    </form>
    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
  
 <?php
 include 'details.php';
 ?>


</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

