
<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['username']))
{
header("location: admin_login.php");
}
?>



<html>
<head>
<title>Customer Details Form</title>

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
    background-color:light green;
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
    background-color:green;
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
	}.bg{
	background:url("bg17.jpg") center center no-repeat;
	background-size:cover;
}
</style>
 <body class="bg">

</style>
<body background="bg17.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="" method="post">
<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
      <th>Customer ID</th>
   <th>Customer Name</th>
   <th>Address</th>
   <th>Email</th>
     <th>Phno</th>
   <th>Username</th>
      <th>password</th>

</tr>
<div>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.php"; } </script></br>


Click here for &nbsp&nbsp
<input type="button" color="black"  value="CUS BUY PAGE" onclick="fun2()"/>
<script> function fun2() { window.location="admin_customer_buy.php"; } </script></br>

</form>
</div>
</body>







<body background="13.jpg" ></body>

<?php
mysql_connect("localhost","root","");
mysql_select_db("bookstore") or die("cannot connect to the database");

$query="select * from customer";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
	$id=$row[0];

$name=$row[1];
$address=$row[2];
$email=$row[3];
$phone=$row[4];
$username=$row[5];
$password=$row[6];
?>

<tr align='center' bgcolor='lightpink'>
<td>   <?php echo $id; ?> </td>
<td>   <?php echo $name; ?> </td>
<td>   <?php echo $address; ?> </td>

<td>   <?php echo $email; ?> </td>
<td>   <?php echo $phone; ?></td>
<td>   <?php echo $username; ?> </td>
<td>   <?php echo $password; ?> </td>
</tr>

<?php  }
?>
</html>