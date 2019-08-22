

<?php

$con=mysql_connect("localhost","root","");

if (!$con)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db("bookstore", $con);
print "<h2 align='center'>CREATION of MySQL Trigger In PHP</h2>";
print "<h4 align='center'>Book Table Content</h4>";
$result = mysql_query("select * from details_of_books");

echo "<table border='1' align='center'>

<tr>

<th>b_id</th>
<th>btitle</th>
<th>byear</th>
<th>aname</th>
<th>publisher</th>
<th>book_price</th>
<th>category</th>
</tr>";

while($row = mysql_fetch_array($result))

{

echo "<tr>";

echo "<td>" . $row['bid'] . "</td>";
echo "<td>" . $row['btitle'] . "</td>";
echo "<td>" . $row['byear'] . "</td>";
echo "<td>" . $row['aname'] . "</td>";
echo "<td>" . $row['publisher'] . "</td>";
echo "<td>" . $row['book_price'] . "</td>";
echo "<td>" . $row['category'] . "</td>";
echo "</tr>";

}

echo "</table>";
print "<h4 align='center'>Book Details Table Content</h4>";

$result1 = mysql_query("select * from category");

echo "<table border='1' align='center'>

<tr>



<th>category</th>

<th>No of books</th>

</tr>";

while($row = mysql_fetch_array($result1))

{

echo "<tr>";



echo "<td>" . $row['category'] . "</td>";
echo "<td>" . $row['no_of_books'] . "</td>";


echo "</tr>";

}

echo "</table>";

$sql = "CREATE TRIGGER MysqlTrigger1 AFTER INSERT ON details_of_books FOR EACH ROW UPDATE category SET no_of_books=no_of_books+1 WHERE category=NEW.category;";

mysql_query($sql,$con);

if( isset($_POST['submit']) )
	{

		$a = $_POST['btitle'];
		$b = $_POST['byear'];
		$c = $_POST['aname'];
		$d = $_POST['publisher'];
		$e = $_POST['book_price'];
	    $f = $_POST['category'];
		
		$qry = mysql_query("insert into details_of_books(btitle,byear,aname,publisher,book_price,category) values('$a','$b','$c','$d','$e','$f')");


mysql_query($qry,$con);
	}
	
 
?>
<style>

input[type=submit] {
    width: 10%;
	position:right;
    background-color: grey;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	font-weight:bold;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}
input[type=reset] {
    width: 10%;
	position:right;
    background-color: grey;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	font-weight:bold;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=reset]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}
 input[type=text], select {
    width: 20%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}	
	.bg{
	background:url("bg17.jpg") center center no-repeat;
	background-size:cover;
}
</style>
 <body class="bg">
	
</style>
<body background="bg9.jpg" >
</body>


<form method="post" action="">

<label for="btitle"><b>Book name:</b></label> &nbsp
<input placeholder="Enter Book name" type="text" name="btitle"/></br>

<label for="byear"><b>Book year:</b></label>  &nbsp
<input placeholder="Enter book year" type="text" name="byear"/></br>

<label for="aname"><b>Author name:</b></label>  &nbsp
<input placeholder="Enter the book author" type="text" name="aname"/></br>

<label for="publisher"><b>publisher:</b></label>  &nbsp
<input placeholder="Enter Book publisher" type="text" name="publisher"/></br>

<label for="book_price"><b>Book Price:</b></label>  &nbsp
<input placeholder="Enter book price" type="text" name="book_price"/></br>

<label for="category"><b>Book category:</b></label>  &nbsp
<input placeholder="Enter book category" type="text" name="category"/></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="reset" name="reset" value="RESET"  /> </br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.php"; } </script></br>
</form>

<?php


print "<h4 align='center'>Product Table Content</h4>";
$result = mysql_query("select * from details_of_books");

echo "<table border='1' align='center'>

<tr>

<th>b_id</th>
<th>btitle</th>
<th>byear</th>
<th>aname</th>
<th>publisher</th>
<th>book_price</th>
<th>category</th>

</tr>";

while($row = mysql_fetch_array($result))

{

echo "<tr>";

echo "<td>" . $row['bid'] . "</td>";
echo "<td>" . $row['btitle'] . "</td>";
echo "<td>" . $row['byear'] . "</td>";
echo "<td>" . $row['aname'] . "</td>";
echo "<td>" . $row['publisher'] . "</td>";
echo "<td>" . $row['book_price'] . "</td>";
echo "<td>" . $row['category'] . "</td>";


echo "</tr>";

}

echo "</table>";
print "<h4 align='center'>Book Details Table Content</h4>";

$result1 = mysql_query("select * from category");

echo "<table border='1' align='center'>

<tr>



<th>category</th>

<th>No of books</th>

</tr>";

while($row = mysql_fetch_array($result1))

{

echo "<tr>";


echo "<td>" . $row['category'] . "</td>";
echo "<td>" . $row['no_of_books'] . "</td>";

echo "</tr>";

}

echo "</table>";

mysql_close($con);
print "</body>";

?>
<a href="admin_home.php"><h1>Click here to Go Back</h1></a>