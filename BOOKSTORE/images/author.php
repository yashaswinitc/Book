
<html>
<head>
<title>author Register Form</title>

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
    width: 80%;
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
	
div {
    height: 550px;
    width: 300px;
	position:absolute;
    top: 100px;
    right: 600px;
	border-radius: 10px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body background="12.jpg" >

</body>
<body>
<?php include 'header.php';?>

<div>
<form method="post" action="">
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>AUTHOR&nbsp&nbspREGISTRATION&nbsp&nbspFORM</b></u></label><br><br>

<label for="name"><b>Name:</b></label> 
<input placeholder="Enter your name" type="text" name="name"/></br>

<label for="address"><b>Address:</b></label> 
<input placeholder="Enter your address" type="text" name="address"/></br>

<label for="email"><b>Email:</b></label> 
<input placeholder="Enter your email" type="email" name="email"/></br>

<label for="phno"><b>Phone Number:</b></label> 
<input placeholder="Enter your phone number" type="number" name="phno"/></br>

<label for="username"><b>username:</b></label> 
<input placeholder="Enter your username" type="text" name="username"/></br>

<label for="password"><b>Password:</b></label> 
<input placeholder="Enter your password" type="password" name="password"/></br>

     


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT" /> 
<p>Click here for<a href="user_login.php" font face="verdana">User Login</a></p>
<p>Click here for<a href="admin_login.php" font face="verdana">Admin Login</a></p>

</form>
</div>
</body>


</html>


<?php

session_start();
$con=mysqli_connect("localhost","root","1234");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

if(isset($_POST['submit']))
{
 
 $name=$_POST['name'];
 $address=$_POST['address'];
 $email=$_POST['email'];
 $phno=$_POST['phno'];
 $name=$_POST['name'];
 $username=$_POST['username'];
 $password=$_POST['password'];

 //$bank=$_POST['bank'];
 //$accnum=$_POST['accnum'];
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

if($email =='')
{
echo "<script> alert('Please enter your email')</script>";
exit();
}

if($phno == ''  )
{
echo "<script> alert('Please enter valid phone number')</script>";
exit();
}

if (strlen($phno)!=10)
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

//$check_email="select * from  customer_detailswhere email='$email'";

//$run=mysqli_query($con,$check_email);

//if(mysqli_num_rows($run)>0)
//{
//echo "<script> alert('Email already exists') </script>";
//exit();
//}
//$check_accnum="select * from customer_details where accnum='$accnum'";

//$go=mysqli_query($con,$check_accnum);

//if(mysqli_num_rows($go)>0)
//{
//echo "<script> alert('Account number already exists') </script>";
//exit();
//}

$query= "insert into author(aut_name,aut_address,aut_email,aut_phone,username,password) values ('$name','$address','$email','$phno','$username','$password')";

if(mysqli_query($query))
{
$_SESSION['name']=$name;
echo "<script> alert('User is Succussfully registered')</script>";

}


}
mysqli_close($con);

?>
