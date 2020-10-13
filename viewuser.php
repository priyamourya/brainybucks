<?php
include_once 'connection.php';
$sqlquery="SELECT * FROM usertable";
$result=mysqli_query($n,$sqlquery);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to know about our users!</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style14.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
</head>
<body>
 
<?php
include 'headernavbar.php';
?> 
 <div class="jumbotron big-banner" style="height: 700px;padding-top:10px "> 
<div class="index2">
    <?php
    $selectquery="SELECT * FROM usertable ;";
    $q=mysqli_query($n,$selectquery);
    
    ?>
    <br>
  
<div class="table-responsive">
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>AMOUNT</th>
      </tr>
    </thead>
    <?php
    while($rees=mysqli_fetch_assoc($q))
    { ?>
      <tbody>
        <tr>
          <td> <?php echo $rees['id']?></td>
          <td> <?php echo $rees['name']?></td>
          <td> <?php echo $rees['email']?></td>
          <td> <?php echo $rees['amount']?></td>
        </tr>
      </tbody>
      <?php }
      ?>

  
  </table>

</div>
</div>
</div>

<footer><h3 class="p-3 bg-dark text-white">@credit transfer </h3></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>