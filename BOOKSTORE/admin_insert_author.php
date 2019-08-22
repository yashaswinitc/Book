
<html>
<head>
<title>Insert  Form</title>

</head>

<style>
input[type=text], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=text]:focus {
    border: 1px solid #555;
}
input[type=email], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=email]:focus {
    border: 1px solid #555;
}

input[type=password], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=password]:focus {
    border: 1px solid #555;
}

input[type=number], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=number]:focus {
    border: 1px solid #555;
}
input[type=submit] {
    width: 60%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color: grey;
    border: none;
    color: black;
	}
	input[type=button] {
    width: 30%;
	position:right;
	font-weight:bold;
    background-color: grey;
    color: white;
    padding: 5px 10px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}
	
	input[type=button]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}
	
div {
    height: 550px;
    width: 400px;
	position:absolute;
    top: 80px;
    right: 750px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
   
    padding: 20px;
}.bg{
	background:url("bg17.jpg") center center no-repeat;
	background-size:cover;
}
</style>
 <body class="bg">
</style>
 <body background="bg17.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

</body>
<body>


<div>
<form method="post" action="">
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>AUTHOR&nbsp&nbspINSERT&nbsp&nbspFORM</b></u></label><br><br>

<label for="name"><b>Name:</b></label> 
<input placeholder="Enter your name" type="text" name="name" /></br>

<label for="address"><b>Address:</b></label> 
<input placeholder="Enter your address" type="text" name="address" /></br>

<label for="email"><b>Email:</b></label> 
<input placeholder="Enter your email" type="email" name="email" /></br>

<label for="phno"><b>Phone Number:</b></label> 
<input placeholder="Enter your phone number" type="number" name="phno" /></br>

<label for="phno"><b>User name:</b></label> 
<input placeholder="Enter your user name" type="text" name="username" /></br>

<label for="password"><b>Password:</b></label> 
<input placeholder="Enter your password" type="password" name="password"/></br>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.php"; } </script></br>


</form>
</div>
</body>


</html>


<?php

session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("bookstore") or die("cannot connect to the database");

if(isset($_POST['submit']))
{
 
 $name=$_POST['name'];
  $address=$_POST['address'];
  $phno=$_POST['phno'];
  $username=$_POST['username'];
  $password=$_POST['password'];
 $email=$_POST['email'];


if($name =='')
{
echo "<script> alert('Please enter your name')</script>";
exit();
}

if($address =='')
{
echo "<script> alert('Please enter your address')</script>";
exit();
}

if($phno =='')
{
echo "<script> alert('Please enter valid phone number')</script>";
exit();
}

if($email =='')
{
echo "<script> alert('Please enter your email')</script>";
exit();
}

$check_email="select * from author where aut_email='$email'";

$run=mysql_query($check_email);

if(mysql_num_rows($run)>0)
{
echo "<script> alert('Email already exists') </script>";
exit();
}

if(strlen($phno)!=10)
{
echo "<script> alert('Please enter 10digit valid phone number')</script>";
exit();
}

if($username =='')
{
echo "<script> alert('Please enter your username')</script>";
exit();
}

if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}



$query= "insert into author(aut_name,aut_address,aut_email,aut_phone,username,password) values ('$name','$address','$email','$phno','$username','$password')";

if(mysql_query($query))
{

echo "<script> alert('Author is Succussfully inserted')</script>";

}


}


?>
