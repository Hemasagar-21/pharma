<?php 
  $manid=$_POST['manid'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email_id'];
    $password=$_POST['password'];
    $rpassword=$_POST['rpassword'];
    
    //database connection


   $con=new mysqli("localhost","root","","webdb");
   if($con->connect_error)
   {
    die('failed to connect:'.$con->connect_error);
   }
   else{
    $stmt=$con->prepare("insert into msignupdb (manid,firstname,lastname,email_id,password,rpassword)
        values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$manid,$firstname,$lastname,$email,$password,$rpassword);
    $stmt->execute();
    echo "registration sucessfull ";
    $stmt->close();
    $con->close();
   }
 ?>