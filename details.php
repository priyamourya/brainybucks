<?php
include 'connection.php';

if(isset($_POST['submit']))
{
	$from=$_POST['from'];
	$to=$_POST['to'];
	$amount=$_POST['amount'];
   
     if($from=='None' || $to=="None" || empty($amount))
    {
    	echo '<script>alert("Please enter all the details")</script>'; 
    }
    elseif($from==$to)
    {
    	echo '<script>alert("Please choose a different user")</script>'; 
    }
    elseif($amount<0)
    {
    	echo '<script>alert("Please enter a positive amount")</script>'; 
    }
    else
    {
    	$quer1="SELECT id,amount from usertable where name='$from'";
    	$ans1=mysqli_query($n, $quer1);
    	$row1=mysqli_fetch_assoc($ans1);
    	$quer2="SELECT id,amount from usertable where name='$to'";
    	$ans2=mysqli_query($n, $quer2);
    	$row2=mysqli_fetch_assoc($ans2);
    	$p1=$row1['amount'];
    	$p2=$row2['amount'];

    	if($amount>$p1)
    	{
    		echo'<script>alert("Bank balance not sufficent")</script>';
    	}
    	else
    	{
    		$p2=$p1+$amount;
    		$p1=$p1-$amount;
    		$quer3="UPDATE usertable SET amount='$p1' Where name='$from'";
    		$ans3=mysqli_query($n, $quer3);
    		$quer4="UPDATE usertable SET amount='$p2' Where name='$to'";
    		$ans4=mysqli_query($n, $quer4);
    		// date_default_timezone_set('Asia/Kolkata');
    		// $time=date("Y-m-d H:i:s");
    		$quer5="INSERT INTO historytable(`pfrom`,`pto`,`pamount`) values('$from','$to','$amount')";
    		$ans5=mysqli_query($n, $quer5);

    		 echo '<script>alert("Transaction sucessful!")</script>'; 
    	}

    }
}
?>

