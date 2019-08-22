
<style type='text/css'>
body { 
background : url("fsrc.jpg");
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
    height: 550px;
    width: 450px;
	position:absolute;
    top: 80px;
    right: 750px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    
    padding: 20px;
}

</style>



<div>
<body background="bg17.jpg" >
<form action="book_search.php" method="get"><br/><br/>

<b>Search for the Product here: </b><input type="text" name="value" placeholder="Search here" style="width:150px;height:35px;font:bold 15px Times New Roman;">&nbsp &nbsp
<input type="submit" name="search" value="Search Now" style="width:100px;height:35px;font:bold 15px Times New Roman;"></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="customer_home.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="customer_home.php"; } </script></br>
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
$query="select * from detail_of_books where btitle like '$search_value%'";
?>

<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   <th> b_id </th>
   <th>btitle</th>
   <th>book_price</th>
   </tr>
<?php

$run=mysql_query($query);

while($row=mysql_fetch_array($run))
{
$b_id=$row[0];
$btitle=$row[1];
$book_price=$row[5];

?>


<tr align='center' bgcolor='pink'>
<td>   <?php echo $b_id; ?></td>
<td>   <?php echo $btitle; ?> </td>
<td>   <?php echo $book_price; ?> </td>

</tr>

<?php

}
}
?>
</html>
