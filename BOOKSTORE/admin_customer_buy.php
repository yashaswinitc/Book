
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


<head>
<title>BUY DETAILS</title>
</head>


<style>

input[type=text], select {
    width: 20%;
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
    width: 20%;
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
    width: 20%;
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
    width: 20%;
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
	
div {
    height: 350px;
    width: 400px;
	position:absolute;
    top: 80px;
    right: 750px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
  ;
    padding: 20px;
}
.bg{
	background:url("bg17.jpg") center center no-repeat;
	background-size:cover;
}
</style>
 <body class="bg"> 
</body>
<body>
<form method="post" action="">




<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>&nbspBUY BOOK DETAIL&nbsp&nbsp</b></u></label><br><br>

<label for="bid"><b>Bid:</b></label> 
<input placeholder="Enter BID" type="number" name="bid"/></br>

<label for="cus_id"><b>Customer id:</b></label> 
<input placeholder="Enter your id" type="number" name="cus_id"/></br>

<label for="cname"><b>Customer name:</b></label> 
<input placeholder="Enter your name" type="text" name="cname"/></br>

<label for="bname"><b>Book name:</b></label> 
<input placeholder="enter book name" type="text" name="bname"/></br>


<label for="phone"><b>phone no:</b></label> 
<input placeholder="enter you phone no" type="text" name="phone"/></br>



<label for="quantity"><b>Quantity:</b></label> 
<input placeholder="Enter book quantity" type="number" name="quantity"/></br>

<label for="price"><b>Book price:</b></label> 
<input placeholder="Enter book price" type="number" name="price"/></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>
<br></br>


<input type="button" color="black"  value="CUSTOMER DETAILS" onclick="fun1()"/>
<script> function fun1() { window.location="admin_customer_view_details.php"; } </script></br>



<input type="button" color="black"  value="HOME PAGE" onclick="fun2()"/>
<script> function fun2() { window.location="admin_home.php"; } </script></br>





</div>
</form>


</div>
</form>

</body>
</html>




<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("bookstore") or die("cannot connect to the database");

if(isset($_POST['submit']))
{

   $bid=$_POST['bid'];
   $cus_id=$_POST['cus_id'];
    $cname=$_POST['cname'];

  $bname=$_POST['bname'];
  $phone=$_POST['phone'];
  $quantity=$_POST['quantity'];
  $price=$_POST['price'];

if($bid =='')
{
echo "<script> alert('Please enter your bid')</script>";
exit();
}

if($cus_id =='')
{
echo "<script> alert('Please enter your cus_id')</script>";
exit();
}


if($cname =='')
{
echo "<script> alert('Please enter your name')</script>";
exit();
}

if($bname =='')
{
echo "<script> alert('Please enter your book name')</script>";
exit();
}

if($phone =='')
{
echo "<script> alert('Please enter valid phone number')</script>";
exit();
}


if(strlen($phone)!=10)
{
echo "<script> alert('Please enter 10digit valid phone number')</script>";
exit();
}

if($quantity =='')
{
echo "<script> alert('Please enter your quantity')</script>";
exit();
}

if($price =='')
{
echo "<script> alert('Please enter your price')</script>";
exit();
}



$query= "insert into cbuy(bid,cus_id,cname,bname,phone,quantity,price) values ('$bid','$cus_id','$cname','$bname','$phone','$quantity','$price')";

if(mysql_query($query))
{

echo "<script> alert('Thankyou for buying book')</script>";

}


}



mysql_connect("localhost","root","");
mysql_select_db("bookstore") or die("cannot connect to the database");

$query="select * from details_of_books";
$run=mysql_query($query);



while ($row=mysql_fetch_array($run))
{
$bid=$row[0];
$btitle=$row[1];
$byear=$row[2];
$aname=$row[3];
$pname=$row[4];
$bprice=$row[5];
?>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBOOK DETAIL&nbsp&nbsp
<table width='800' align='center border='5'>

<tr align='center' bgcolor='white'>
<td>   <?php echo $bid; ?> </td>
<td>   <?php echo $btitle; ?> </td>
<td>   <?php echo $byear; ?> </td>
<td>   <?php echo $aname; ?> </td>
<td>   <?php echo $pname; ?> </td>
<td>   <?php echo $bprice; ?> </td>
</tr>
</table></br>
<?php }
