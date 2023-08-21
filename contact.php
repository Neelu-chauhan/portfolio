<?php 
$location="localhost";
$server="root";
$password="";
$con=mysqli_connect($location,$server,$password);
if($con)
{
    //echo "connected";
    $tbl="create database if not exists portfolio";
    $data=mysqli_query($con,$tbl);
    if($data)
    {
        $con=mysqli_connect($location,$server,$password,'portfolio');
        //echo"db created";
        $tbl1="create table if not exists contact(
        id int(20) AUTO_INCREMENT primary key,
        name varchar(50) not null,
        email varchar(50) not null,
        phone varchar(20) not null,
        massege varhcar(100) not null 
        )";
       $data1=mysqli_query($con,$tbl1);
        if($data1)
        {
            echo"tbl created";
        }
        else
        {
            echo"tbl failed to create";
        }
    }
  
//If you’d like to chat about a project or just have question, please fill in the form below. I aim to get back within 2 days

    else
    {
        echo"db failed";
    }
}
else
{
    echo "check again";
}

 ?>
 <?php 
 if(isset($_POST['submit'])) 
 {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];
$insert="INSERT INTO `contact`(`name`, `email`, `phone`, `massege`)VALUES('$name','$email','$phone','$msg')";
$data=sqli_query($con,$insert);
if($data)
{
    echo"data inserted";
}
else
{
    echo"data failed to insert";
}
 }






 ?>
