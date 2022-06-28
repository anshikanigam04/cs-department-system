<?php
$con=mysqli_connect("localhost","root","","collegedatabase");

if(isset($_POST['submit'])){

    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $utype=$_POST['usertype'];
    $pword=$_POST['password'];
    
    $query="insert into user(firstname,lastname,email,usertype,password) values('$fname','$lname','$email','$utype','$pword')";

    $result=mysqli_query($con,$query);

    if($result)
    {
        echo "<script>alert('Registered Successfully')</script>";
        echo "<script>window.open('index.html','_self')</script>";
    }
    else{
        echo "<script>alert('form not submitted')</script>";
    }
}
?>