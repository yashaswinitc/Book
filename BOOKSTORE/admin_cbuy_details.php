

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
<title>BUY Details Form</title>

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
	}.bg{
	background:url("bg17.jpg") center center no-repeat;
	background-size:cover;
}
</style>
 <body class="bg">


<body background="bg17.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="" method="post">
CUSTOMER BUY DETAIL &nbsp&nbsp
<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
      <th>BUY ID</th>
	   <th>BOOK ID</th>
	<th>CUS ID</th>
	<th> CUS NAME</th>

  <th>BOOK NAME</th>
   <th>PHONE</th>
<th>QUANTITY</th>
<th>PRICE</th>


</tr>
<div>
<body background="bg17.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
Click here for &nbsp&nbsp

<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.php"; } </script></br>


Click here for &nbsp&nbsp
<input type="button" color="black"  value="CUSTOMER BUY" onclick="fun3()"/>
<script> function fun3() { window.location="admin_customer_buy.php"; } </script></br>

</form>
</div>
</body>







<body background="13.jpg" ></body>

<?php
mysql_connect("localhost","root","");
mysql_select_db("bookstore") or die("cannot connect to the database");

$query="select * from cbuy";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
	$cbuyid=$row[0];
	$bid=$row[1];
	$cus_id=$row[2];
$cname=$row[3];
//$aut_id=$row[4];
//$aname=$row[5];
$bname=$row[4];
$phone=$row[5];
$quantity=$row[6];
$price=$row[7];
?>

<tr align='center' bgcolor='pink'>
<td>   <?php echo $cbuyid; ?> </td>
<td>   <?php echo $bid; ?> </td>
<td>   <?php echo $cus_id; ?> </td>
<td>   <?php echo $cname; ?> </td>


<td>   <?php echo $bname; ?> </td>
<td>   <?php echo $phone; ?> </td>
<td>   <?php echo $quantity; ?> </td>
<td>   <?php echo $price; ?> </td>
</tr>

<?php  }
?>


</html>