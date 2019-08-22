


<html>
<head>
<title> CUSTOMER LOGIN FORM</title>
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
    width: 350px;
	position:absolute;
    top: 50px;
    right: 900px;
	border-radius: 10px;
 
    padding: 20px;
}
.bg{
	background:url("bg00.jpg") center center no-repeat;
	background-size:cover;
}
</style>


<body class="bg">

<div>
<form method="post" action="">
<label  for="reg"><span class="text-Italic" style="color:white" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>CUSTOMER&nbsp&nbspLOGIN&nbsp&nbspFORM</b></u></label><br><br>

<label for="name"><span class="text-Italic" style="color:white" ><b>User name:</b></label> 
<input placeholder="Enter your name" type="text" name="username" /></br>

<label for="address"><span class="text-Italic" style="color:white" ><b>Password:</b></label> 
<input placeholder="Enter your password" type="password" name="password" /></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

<span class="text-Italic" style="color:white" >
Click here for &nbsp&nbsp
<input type="button" color="black"  value="REGISTRATION PAGE" onclick="fun2()"/>
<script> function fun2() { window.location="Customer_reg.php"; } </script></br>


Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="start.html"; } </script></br>


</form>
</div>
</body>



<?php
session_start();
if(isset($_POST['submit']))
{
mysql_connect("localhost","root","");
mysql_select_db("bookstore") or die("cannot connect to the database");
$username=$_POST['username'];
 $password=$_POST['password'];
 

if($username =='')
{
echo "<script> alert('Please enter your name')</script>";
exit();
}

if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}


$query=mysql_query("select * from customer where username='$username' and password='$password'") or die(mysql_error());
   
   if(mysql_num_rows($query)>0)
   {
   $_SESSION['username']=$userrname;
   
    //echo "<script> window.open('customer_home.php','_self')</script>";
	header("location: Customer_home.php?id=".$username);
   }
   else
   {
    echo "<script> alert('Invalid Login')</script>";
   }
}

?>

</body>
</html>
