
<html>
<head>
<title>User Feedback Form</title>

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
    right: 450px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
   
    padding: 20px;
}
	.bg{
	background:url("fee.png") center center no-repeat;
	background-size:cover;
}
</style>
 <body class="bg"> 

<body>


<div>
<form method="post" action=""><span class="text-Italic" style="color:white" >
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>USER&nbsp&nbspFEEDBACK&nbsp&nbspFORM</b></u></label><br><br>

<label for="name"><b>NAME:</b></label> 
<input placeholder="Enter your NAME" type="text" name="name" /></br>

<label for="comment"><b>FEEDBACK:</b></label> 
<input placeholder="Enter your feedback" type="text" name="comment" /></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="start.html"; } </script></br>

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
$comment=$_POST['comment'];
if($name =='')
{
echo "<script> alert('Please enter your name')</script>";
exit();
}

if($comment =='')
{
echo "<script> alert('Please enter comment')</script>";
exit();
}
 
$sql= " CALL InsertData('".$_POST["name"]."','".$_POST["comment"]."')";
if(mysql_query($sql))
{
	echo "<script> alert('successfully inserted a feedback via stored procedure')</script>";
	
}
}



?>
