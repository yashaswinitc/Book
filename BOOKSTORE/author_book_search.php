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
<style type='text/css'>
body { 
background : url("26.jpg");
background-repeat:no-repeat;
 background-size: 100%;

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
    height: 800px;
    width: 350px;
	position:absolute;
    top: 80px;
    right: 800px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    
    padding: 20px;
}

</style>



<div>


<form action="author_book_search.php" method="get"><br/><br/>

<b><span class="text-Italic" style="color:white" >Search the book here: </b><input type="text" name="value" placeholder="Search here" style="width:150px;height:35px;font:bold 15px Times New Roman;">&nbsp &nbsp
<input type="submit" name="search" value="Search Now" style="width:100px;height:35px;font:bold 15px Times New Roman;"></br>

<span class="text-Italic" style="color:white" >Click here for &nbsp&nbsp
<input type="button" color="black"  value="BACK" onclick="fun1()"/>
<script> function fun1() { window.location="author_home.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOGOUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout_author.php"; } </script></br>
</div>



</form>




</body>
</html>



<?php

mysql_connect("localhost","root","");
mysql_select_db("bookstore") or die("cannot connect to the database");

if(isset($_GET['search']))
{
$search_value=$_GET['value'];
$query=mysql_query("select * from details_of_books where btitle like '$search_value%'") or die (mysql_error());

if(mysql_num_rows($query)>0)

{
?>
<table width='800' align='center border='5'>
<tr bgcolor ='grey'>
   <th> BOOK Id </th>
   <th>BOOK TITLE</th>
  <th>BOOK year</th>
  <th>BOOK author</th>
  <th>BOOK publisher</th>
  <th>BOOK cost</th>
   </tr>
<?php
//$run=mysql_query($query);
while($row=mysql_fetch_array($query))
{
$bid=$row[0];
$btitle=$row[1];
$byear=$row[2];
$aname=$row[3];
$pname=$row[4];
$bprice=$row[5];
?>

<tr align='center' bgcolor='pink'>
<td>   <?php echo $bid; ?> </td>
<td>   <?php echo $btitle; ?> </td>
<td>   <?php echo $byear; ?> </td>
<td>   <?php echo $aname; ?> </td>
<td>   <?php echo $pname; ?> </td>
<td>   <?php echo $bprice; ?> </td>
</tr>
</tr>
<?php
}
}
else
{
	echo "<script>alert('Result Not Found !!!')</script>";
}
}	
?>
</body>
</html>
