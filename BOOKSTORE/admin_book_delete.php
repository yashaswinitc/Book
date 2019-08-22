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
<title>delete/update book Information</title>
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
    height: 450px;
    width: 350px;
	position:absolute;
    top: 80px;
    right: 700px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    
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

<div>
<form method="post" action="">
<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   <th>Bid</th>
   <th>Book name</th>
  
	 
	 <th>Byear</th>
	 <th>Aname</th>
   <th>publisher</th>
   <th>book price</th>


</tr>

</br>




<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>BOOK_DELETE&nbsp&nbspUPDATE&nbsp&nbspFORM</b></u></label><br><br>



<label for="bid"><b>Book ID</b></label> 
<input placeholder="Enter book ID" type="text" name="bid"/></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<br></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.php"; } </script></br>

</div>
</form>

</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("bookstore") or die("cannot connect to the database");
$query="select * from details_of_books ";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$bid=$row[0];
$btitle=$row[1];
$byear=$row[2];
$aname=$row[3];

$publisher=$row[4];
$bprice=$row[5];


?>

<tr align='center' bgcolor='pink'>
<td>   <?php echo $bid; ?></td>
<td>   <?php echo $btitle; ?> </td>
<td>   <?php echo $byear; ?> </td>
<td>   <?php echo $aname; ?> </td>
<td>   <?php echo $publisher; ?> </td>
<td>   <?php echo $bprice; ?> </td>



</tr>





<?php  }


if(isset($_POST['submit']))
{
$bid=$_POST['bid'];


$q="select * from details_of_books where bid='$bid' ";
$check=mysql_query($q);


$checkrows=mysql_num_rows($check);

if($checkrows>0){
	
$query="delete from details_of_books where bid='$bid'";
if(mysql_query($query))
{
echo "<script> alert('deleted Successfully') </script>";
echo "<br>";
echo " <a href='admin_book_delete.php'>View result</a>"; 
} 
}

else { 
echo "<script> alert('Result not found!!!') </script>"; 
} 
}

?> 
 
</html>