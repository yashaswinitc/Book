
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
<title>Author Details Form</title>

</head>

<style>

div {
    height: 550px;
    width: 550px;
	position:absolute;
    top: 300px;
    right: 600px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    
    padding: 20px;
}
th {
	display: table-cell;
	font-weight:bold;
	text-align:center;
	color:white;
   }
td {
	display: table-cell;
	font-weight:bold;
	text-align:center;
	color:black;
   }
   
   input[type=button] {
    width: 30%;
	position:right;
	font-weight:bold;
    background-color: green;
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
.bg{
	background:url("det.jpeg") center center no-repeat;
	background-size:cover;
}
</style>
 <body class="bg"> 



<body background="bg17.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="" method="post">
<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   
   <th>Author Name</th>
   <th>Address</th>
   <th>Email</th>
<th>phone</th>


</tr>
<div>
<span class="text-Italic" style="color:white" >
Click here for &nbsp&nbsp

<input type="button" color="black"  value="BACK" onclick="fun1()"/>
<script> function fun1() { window.location="author_home.php"; } </script></br>


Click here for &nbsp&nbsp
<input type="button" color="black"  value="UPDATE DETAILS" onclick="fun2()"/>
<script> function fun2() { window.location="author_update.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOGOUT" onclick="fun3()"/>
<script> function fun3() { window.location="logout_author.php"; } </script></br>

</form>
</div>
</body>







<body background="13.jpg" ></body>

<?php
mysql_connect("localhost","root","");
mysql_select_db("bookstore") or die("cannot connect to the database");

$query="select * from author";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{

$name=$row[1];
$address=$row[2];
$email=$row[3];
$phone=$row[4];
?>

<tr align='center' bgcolor='pink'>

<td>   <?php echo $name; ?> </td>
<td>   <?php echo $address; ?> </td>
<td>   <?php echo $email; ?> </td>

<td>   <?php echo $phone; ?></td>

</tr>

<?php  }
?>
</html>