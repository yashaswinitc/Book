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
<title>delete/update author Information</title>
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
   <th>Author id</th>
   <th>Author name</th>
     <th>author address</th>
	 
	 <th>Author email</th>
	 <th>phone</th>
   <th>username</th>
   <th>password</th>


</tr>

</br>




<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>Author_DELETE&nbsp&nbspUPDATE&nbsp&nbspFORM</b></u></label><br><br>



<label for="aut_id"><b>Author id</b></label> 
<input placeholder="Enter author id" type="text" name="aut_id"/></br>

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
$query="select * from author ";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$aut_id=$row[0];
$name=$row[1];
$address=$row[2];
$email=$row[3];

$phno=$row[4];
$username=$row[5];
$password=$row[6];

?>

<tr align='center' bgcolor='pink'>
<td>   <?php echo $aut_id; ?></td>
<td>   <?php echo $name; ?> </td>
<td>   <?php echo $address; ?> </td>
<td>   <?php echo $email; ?> </td>
<td>   <?php echo $phno; ?> </td>
<td>   <?php echo $username; ?> </td>
<td>   <?php echo $password; ?> </td>


</tr>








<?php  }


if(isset($_POST['submit']))
{
$aut_id=$_POST['aut_id'];


$q="select * from author where aut_id='$aut_id' ";
$check=mysql_query($q);


$checkrows=mysql_num_rows($check);

if($checkrows>0){
	
$query="delete from author where aut_id='$aut_id'";
if(mysql_query($query))
{
echo "<script> alert('deleted Successfully') </script>";
echo "<br>";
echo " <a href='admin_author_delete.php'>View result</a>"; 
} 
}

else { 
echo "<script> alert('Result not found!!!') </script>"; 
} 
}

?> 

















</html>