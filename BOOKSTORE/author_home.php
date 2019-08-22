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
<title>Book Store Management System</title>


<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
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
	background:url("b0.jpg") center center no-repeat;
	background-size:cover;
}
</style>
 <body class="bg"> 




</head>
<body  background="bg17.jpg" >

  <tr>
    <td><table width="1400"  border="3" cellspacing="0" cellpadding="0">
        <tr>
          <td bgcolor="#333333"><ul>
       <li><a href="author_view_details.php"class="style5711">AUTHOR INFO</a></li>
             <li><a href="author_insert_book.php"class="style5711">INSERT BOOK</a></li>
           <li><a href="author_book_view.php" class="style5711">VIEW BOOKS</a></li>
 <li><a href="author_update.php"class="style5711">UPDATE INFO</a></li>
  <li><a href="author_password.php"class="style5711">RESET PASSWORD</a></li>
    <li><a href="author_book_search.php"class="style5711">SEARCH BOOK</a></li>
	    
		  <li><a href="author_buy.php"class="style5711">BUY BOOK</a></li>
		  
   <li><a href="logout_author.php"class="style5711">LOGOUT</a></li></ul></td>

  
   
   

        </tr>
    </table></td> 
  </tr>





</body>
</html>