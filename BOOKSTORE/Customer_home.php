<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['username']))
{
header("location: Customer_login.php");
}
?>


<html>
<head>
<title>HOME</title>
<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
</head>

<html>
<head>
<title>Book Store Management System</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript" src="menu-list.js"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>

<style type="text/css">{
size: 12px;
}

li a:link {
	text-decoration: none;
	color: #666;
}
li a:visited {
	text-decoration: none;
}
li a:hover {
	text-decoration: none;
}
li a:active {
	text-decoration: none;
	color: #666;
	font-size: 13px;
}

.style5711 {
	font-size: 12px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style571111 {font-size: 12px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

h{
color: blue; font-size:30px; }
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color:;
}
.bg{
	background:url("222.jpeg") center center no-repeat;
	background-size:cover;
}
</style>
 <body class="bg"> 


</head>


  <tr>
    <td><table width="1400"  border="3" cellspacing="0" cellpadding="0">
        <tr>
          <td bgcolor="#333333"><ul>
<li><a href="Customer_view_details.php"class="style5711">CUSTOMER INFO</a></li>
<li><a href="Customer_update.php"class="style5711">UPDATE CUSTOMER INFO</a></li>
<li><a href="Customer_password.php"class="style5711">RESET PASSWORD</a></li>
<li><a href="customer_book_search.php"class="style5711">SEARCH BOOK</a></li>
  <li><a href="customer_book_view.php" class="style5711">VIEW BOOKS</a></li>
  <li><a href="Customer_buy.php" class="style5711">BUY</a></li>
<li><a href="logout_customer.php"class="style5711">LOGOUT</a></li></ul></td>

  
   
   
  


</tr>

</body>
</html>


