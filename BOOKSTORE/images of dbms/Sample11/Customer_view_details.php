



<html>
<head>
<title>User Register Form</title>

</head>

<style>

div {
    height: 550px;
    width: 550px;
	position:absolute;
    top: 300px;
    right: 750px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #f2f2f2;
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

</style>
<form action="" method="post">
<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   <th> Customer Id </th>
   <th>Customer Name</th>
   <th>Address</th>
   <th>Phone number</th>
   <th>User Name</th>
   <th>Password</th>
   <th>Email</th>

</tr>
<div>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="Customer_home.php"; } </script></br>


Click here for &nbsp&nbsp
<input type="button" color="black"  value="UPDATE DETAILS" onclick="fun2()"/>
<script> function fun2() { window.location="Customer_update.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout_customer.php"; } </script></br>

</form>
</div>
</body>







<body background="13.jpg" ></body>

<?php
mysql_connect("localhost","root","");
mysql_select_db("bank") or die("cannot connect to the database");

$query="select * from customer";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$id=$row[0];
$name=$row[1];
$address=$row[2];
$phno=$row[3];
$username=$row[4];
$password=$row[5];
$email=$row[6];
?>

<tr align='center' bgcolor='yellow'>
<td>   <?php echo $id; ?></td>
<td>   <?php echo $name; ?> </td>
<td>   <?php echo $address; ?> </td>
<td>   <?php echo $phno; ?> </td>
<td>   <?php echo $username; ?> </td>
<td>   <?php echo $password; ?> </td>
<td>   <?php echo $email; ?> </td>



</tr>

<?php  }
?>
</html>