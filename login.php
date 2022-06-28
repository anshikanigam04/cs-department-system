<?php
$con=mysqli_connect("localhost","root","","collegedatabase");

if(isset($_POST['submit'])){

    $email=$_POST['email'];

    $pword=$_POST['password'];
    
    $query="select * from user where email='$email' AND password='$pword'";

    $result=mysqli_query($con,$query);

    if($result)
    {
        echo "<script>alert('Login Successfully')</script>";
        echo "<script>window.open('index.html','_self')</script>";
    }
    else{
        echo "<script>alert('form not submitted')</script>";
    }
}
?>