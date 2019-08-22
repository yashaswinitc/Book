<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['username']))
{
header("location: Author_login.php");
}
?>
<html>
<head>
<title> Book Insert Form</title>

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
    right: 900px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
   
    padding: 20px;
}

.bg{
	background:url("in.jpg") center center no-repeat;
	background-size:cover;
}
</style>
 <body class="bg"> 



<body>


<div>
<form method="post" action="">
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><span class="text-Italic" style="color:white" ><b>AUTHOR&nbsp&nbspBOOK INSERT&nbsp&nbspFORM</b></u></label><br><br>

<label for="name"><span class="text-Italic" style="color:white" ><b>Name:</b></label> 
<input placeholder="Enter Book name" type="text" name="name" /></br>

<label for="year"><span class="text-Italic" style="color:white" ><b>Year:</b></label> 
<input placeholder="Enter Book year" type="text" name="year" /></br>

<label for="aname"><span class="text-Italic" style="color:white" ><b>Aname:</b></label> 
<input placeholder="Enter Author name" type="text" name="aname" /></br>

<label for="pname"><span class="text-Italic" style="color:white" ><b>Pname:</b></label> 
<input placeholder="Enter publisher name" type="text" name="pname" /></br>

<label for="bprice"><span class="text-Italic" style="color:white" ><b>bprice:</b></label> 
<input placeholder="Enter book price" type="text" name="bprice" /></br>

<label for="category"><span class="text-Italic" style="color:white" ><b>category:</b></label> 
<input placeholder="Enter book category" type="text" name="category" /></br>

<span class="text-Italic" style="color:white" >
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>
Click here for &nbsp&nbsp
<input type="button" color="black"  value="BACK" onclick="fun2()"/>
<script> function fun2() { window.location="author_home.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOGOUT" onclick="fun3()"/>
<script> function fun3() { window.location="LOgout_author.php"; } </script></br>






</form>
</div>
</body>


</html>





<?php


mysql_connect("localhost","root","");
mysql_select_db("bookstore") or die("cannot connect to the database");


if(isset($_POST['submit']))

{
 
 $name=$_POST['name'];
  $year=$_POST['year'];
  $aname=$_POST['aname'];
  $pname=$_POST['pname'];
  $bprice=$_POST['bprice'];
  $category=$_POST['category'];


if($name =='')
{
echo "<script> alert('Please enter your name')</script>";
exit();
}

if($year =='')
{
echo "<script> alert('Please enter book year')</script>";
exit();
}
if($aname =='')
{
echo "<script> alert('Please enter book author name')</script>";
exit();
}
if($pname =='')
{
echo "<script> alert('Please enter book publisher name')</script>";
exit();
}

if($bprice =='')
{
echo "<script> alert('Please enter book price')</script>";
exit();
}

if($category =='')
{
echo "<script> alert('Please enter book category')</script>";
exit();
}


$query= "insert into details_of_books(btitle,byear,aname,publisher,book_price,category) values ('$name','$year','$aname','$pname','$bprice','$category')";


if(mysql_query($query))
{

echo "<script> alert('inserted Successfully') </script>";
echo "<br>";
echo " <a href='author_book_view.php'>View result</a>"; 
} 

else { 
echo "ERROR"; 

}



}
?>