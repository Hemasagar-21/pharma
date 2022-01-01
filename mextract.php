<?php
	$mafid=$_POST['manid'];
	$password=$_POST['password'];
 	

 	//database connecction
 	 $con=new mysqli("localhost","root","","webdb");
 	 if($con->connect_error)
     {
   	     die('failed to connect:'.$con->connect_error);
     }
     else
     {
     	$stmt=$con->prepare("select * from msignupdb where manid=?");
     	$stmt->bind_param("s",$mafid);
     	$stmt->execute();
     	$stmt_result=$stmt->get_result();
     	if($stmt_result->num_rows>0)
     	{
     		$data=$stmt_result->fetch_assoc();
     		if($data['password']===$password)
     		{
     			echo "<h2>login successfull</h2>";
     			
     		}
     		else{
     			echo "<h2>Invalid password</h2>";
     	    }
     	}	
     	else
     	{
     		echo "<h2>Invalid ID or password</h2>";
     	}
     }
?>
