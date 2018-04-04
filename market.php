<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sharemarket";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

session_start();

if(!isset($_SESSION['id']))
{
	die("ERROR 000");
}

?>

<!DOCTYPE html>
<!-- saved from url=(0046)https://s.codepen.io/heypablete/fullpage/qdIsm -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  
  <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico">
  <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111">
  <title>Sharehere.com</title>
  
  
  
  
      <style>
      /*	
	Side Navigation Menu V2, RWD
	===================
	License:
	https://goo.gl/EaUPrt
	==================
	Author: @PableraShow

 */

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);


*{
	margin : 0px;
}

header
{
	width : 100%;
	height : 220px;
	background-color: white;
	background-image: url("headerbgpic.jpg");
	background-repeat: none;
	background-position: center;
}

header h1
{
	text-align : center;
	font-size : 100px;
	font-family : Arial;
	color : #95F1C8;
}

header h3 a
{
	text-align : left;
	font-size : 25px;
	font-family : Trebuchet MS;
	color : #57F2D8;
	background-color: white;
	padding: 2px;
}

header h3 a:hover
{
	color: #FFFFBC;
	background-color: #95F1C8;
}

nav
{
	width : 100%;
	height : 30px;
	background-color : #536B7A;
}

nav ul
{
	list-style : none;
	
}

nav ul li
{
	text-indent : 4%;
	float : left;
	font-family : Agency FB;
	font-size : 25px;
	font-weight : bold;
	color: #57F2D8;
	margin-top: 4px;
}

nav ul li:hover
{
	color: #E2F165;
}

.button {
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
    padding: 6px 26px;
}

.button:hover {
    background-color: #4CAF50; /* Green */
    color: white;
}

.inp{
    padding: 6px 26px;
}

section
{
	width : 70%;
	height : 440px;
	float : left;
}

section article
{
	width :80%;
	margin-left: 10%;
	margin-right: 10%;
}

#upperrightaside
{
	width : 30%;
	height : 440px;
	float : left;
	background-color: #8D8991;
}

footer
{
	width : 100%;
	text-align : center;
	font-size : 23px;
	font-family : Trebuchet MS;
	color : skyblue;
}

/*


section
{
	width : 70%;
	height : 1800px;
	background-color : grey;
	float : left;
}

section article
{
	width :80%;
	margin-left: 10%;
	margin-right: 10%;
	background-color: white;
}

section article h2
{
	margin: 5%;
}

section article img
{
	margin: 5%;
}

section article p
{
	margin: 5%;
}

section table tr td
{
	font-size: 30px;
}


#leftside
{
	margin-left: 5%;
}



#upperrightaside img
{
	margin: 20%;	
}




*/

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}


h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no">



	<header>
		<br>
		<h1>TRADE SHARES</h1>
		<br><br>
		<h3><a href="logout.php" style="float: right;margin-right: 20px;text-decoration: none;">LOGOUT</a></h3>
	</header>

	<nav>
		
		<ul>
			<a href="checklogin.php"><li>DASHBOARD</li></a>
			<a href="market.php"><li>BUY SHARES</li></a>
		</ul>
		
	</nav>

	
<!--
  <h1><span class="blue">&lt;</span>Table<span class="blue">&gt;</span> <span class="yellow">Responsive</span></h1>
<h2>Created with love by <a href="http://pablogarciafernandez.com/" target="_blank">Pablo García Fernández</a></h2>
-->

<section>

<article>
<br><br>

<h1>Shares you can BUY</h1>

<br><br>

<table class="container">
	<thead>
		<tr>
			<th><h1>share name</h1></th>
			<th><h1>Available Volume</h1></th>
			<th><h1>Buying Options</h1></th>
			<th><h1>Volume</h1></th>
		</tr>
	</thead>
	<tbody>
		<?php
		
		$idd = $_SESSION['id'];

		$sql = "select seller,share_name,volume from market where seller != '$idd' ";
		$result = mysqli_query($conn, $sql); 

		while($row = mysqli_fetch_array($result))
		{

			$seller = $row['seller'];
			$share_name = $row['share_name'];
			$volume = $row['volume'];

			print("<tr>");
			
			print("<td>");
			print($share_name);
			print("</td>");

			print("<td>");
			print($volume);
			print("</td>");

			print("<form action='checklogin.php' method='post'>");

			print("<td>");
			print('<input class="inp" type="number" name="numVol" min=1 max=');
			print($volume);
			print('>');
			print("</td>");

			print("<td>");
			print("<input type='submit' value='BUY' class='button' >");

			print("<input type='hidden' name='maxVol' value=");
			print($volume);
			print(">");

			print("<input type='hidden' name='share_name' value=");
			print($share_name);
			print(">");

			print("<input type='hidden' name='seller' value=");
			print($seller);
			print(">");

			print("</td>");

			print("</form>");

			print("</tr>");

		}

		?>
	</tbody>
</table>

</article>

</section>

<?php


$sql = "select balance from profile where id = '$idd' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$balance = $row['balance'];

?>

	<aside id="upperrightaside">
		

		<br><br><br>
		<article>
			<h1>Your BALANCE</h1>
			<br><br>
			<h1><b><?php print($balance); ?></b></h1>
		</article>


	</aside>

	<footer>
		Copyright &copy; sharehere.com
	</footer>


 </body></html>