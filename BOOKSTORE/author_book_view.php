
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
<title>Author Book Details Form</title>

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
	}

.bg{
	background:url("vie.jpeg") center center no-repeat;
	background-size:cover;
}
</style>
 <body class="bg">
</style>
<body background="bg17.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="" method="post">
<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   <th>BOOK TITLE</th>
   <th>BOOK YEAR</th>
   <th>AUTHOR NAME</th>
   <th>PUBLISHER</th>
    <th>BPRICE</th>
<th>CATEGORY</th>


</tr>
<div>
<body background="bg17.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
Click here for &nbsp&nbsp

<input type="button" color="black"  value="BACK" onclick="fun1()"/>
<script> function fun1() { window.location="author_home.php"; } </script></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOGOUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout_author.php"; } </script></br>

</form>
</div>
</body>







<body background="13.jpg" ></body>

<?php
mysql_connect("localhost","root","");
mysql_select_db("bookstore") or die("cannot connect to the database");

$query="select * from details_of_books";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{

$btitle=$row[1];
$byear=$row[2];
$aname=$row[3];
$pname=$row[4];
$bprice=$row[5];
$category=$row[6];
?>

<tr align='center' bgcolor='pink'>

<td>   <?php echo $btitle; ?> </td>
<td>   <?php echo $byear; ?> </td>
<td>   <?php echo $aname; ?> </td>
<td>   <?php echo $pname; ?> </td>
<td>   <?php echo $bprice; ?> </td>
<td>   <?php echo $category; ?> </td>
</tr>

<?php  }
?>
</html>