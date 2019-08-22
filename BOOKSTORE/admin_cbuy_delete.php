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
<title>Update Customer Buy Information</title>
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
    color: grey;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color: white;
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
    width: 450px;
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


</body>
<body>

<div>
<form method="post" action="">
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

</br>




<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>CUSTOMER BUY_DETAILS&nbsp&nbspUPDATE&nbsp&nbspFORM</b></u></label><br><br>



<label for="cbuyid"><b>buy Id</b></label> 
<input placeholder="Enter buy id" type="number" name="cbuyid"/></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<br></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.php"; } </script></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout_admin.php"; } </script></br>
</div>
</form>

</body>
</html>

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


if(isset($_POST['submit']))
{
$cbuyid=$_POST['cbuyid'];


$q="select * from cbuy where cbuyid='$cbuyid' ";
$check=mysql_query($q);


$checkrows=mysql_num_rows($check);

if($checkrows>0){
	
$query="delete from cbuy where cbuyid='$cbuyid'";
if(mysql_query($query))
{
echo "<script> alert('deleted Successfully') </script>";
echo "<br>";
echo " <a href='admin_cbuy_delete.php'>View result</a>"; 
} 
}

else { 
echo "<script> alert('Result not found!!!') </script>"; 
} 
}

?> 


</html>