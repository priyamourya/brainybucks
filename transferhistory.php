<?php
include 'connection.php';
  	$sq="select * from historytable  order by time desc";
   	$q=mysqli_query($n,$sq);

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to transfer history!</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="style15.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
</head>


<body>
<?php
include 'headernavbar.php';
?> 
 <div class="jumbotron big-banner" style="height: 700px;padding-top:10px "> 
   <div class="index3">
<div class="table-responsive">
	<table class="table table-striped table-dark">
		<thead>
			<tr>
			
				<th>From</th>
				<th>To</th>
				<th>Credit Amount</th>
				<th>Date and Time</th>
			</tr>
		</thead>
		<?php
		while($rees=mysqli_fetch_assoc($q))
		{ ?>
			<tbody>
				<tr>
					
					<td> <?php echo $rees['pfrom'];?></td>
					<td> <?php echo $rees['pto'];?></td>
					<td> <?php echo $rees['pamount'];?></td>
					<td> <?php echo $rees['time'];?></td>
				</tr>
			</tbody>
			<?php }
			?>

	
	</table>

</div>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
