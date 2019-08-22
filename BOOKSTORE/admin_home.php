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
<title>HOME</title>
<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
</head>
<marquee behavior="scroll" direction="left"><font color="white" size="6"><b><strong>WELCOME TO THE ADMIN HOME PAGE..!</strong></b></font></marquee>

<style>

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
	background:url("adm.jpg") center center no-repeat;
	background-size:cover;
}
</style>



<body class="bg">


	
	

</head>


  <tr>
    <td> <table width="1400"  border="3" cellspacing="0" cellpadding="0" bgcolor="blue">
        <tr>
          <td bgcolor="#333333"><ul>

             <li><a href="admin_insert_customer.php"class="style5711">INSERT CUSTOMER</a></li>
   	    <li><a href="admin_Customer_view_details.php"class="style5711">VIEW CUSTOMER DETAIL</a></li>
		<li><a href="admin_customer_delete.php"class="style5711">DELETE CUSTOMER</a></li>

		<li><a href="admin_insert_author.php"class="style5711">INSERT AUTHOR</a></li>
		<li><a href="admin_author_view_details.php"class="style5711">VIEW AUTHOR DETAIL</a></li>
		<li><a href="admin_author_delete.php"class="style5711">DELETE AUTHOR</a></li>

		
               <li><a href="admin_insert_book.php"class="style5711">ADD BOOK</a></li>
               <li><a href="admin_book_view.php"class="style5711">VIEW BOOK</a></li>
               <li><a href="admin_book_search.php"class="style5711">SEARCH BOOK</a></li>			   
              <li><a href="admin_book_delete.php" class="style5711">DELETE BOOK</a></li>
			  
			  
              
				               <li><a href="admin_customer_buy.php"class="style5711">CUS BUY BOOK</a></li>
								               <li><a href="admin_author_buys.php"class="style5711">AUT BUY BOOK</a></li>
              
				<li><a href="admin_cbuy_details.php"class="style5711">VIEW CUS BUY TABLE</a></li>
								<li><a href="admin_abuy_details.php"class="style5711">VIEW AUT BUY TABLE</a></li>
				<li><a href="admin_abuy_delete.php"class="style5711">DELETE AUT BUY</a></li>
								<li><a href="admin_cbuy_delete.php"class="style5711">DELETE CUS BUY</a></li>
				<li><a href="triger_insert.php"class="style5711">CATEGORY INSERT</a></li>
				<li><a href="triger_delete.php"class="style5711">CATEGORY DELETE</a></li>
				   <li><a href="admin_feedback_details.php" class="style5711">FEEDBACK DETAILS</a></li>
  			    <li><a href="start.html"class="style5711">LOGOUT</a></li>


   

        </tr>
    </table></td> 
  </tr>

	
	
	
	
	
	
	



</div>
</body>
</html>
