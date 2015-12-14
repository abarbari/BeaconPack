<?php
/***** Connection Information to MySQL Server *****/
$host 		=	''; // Hostname
$login_name	=	''; // Login Name
$password 	=	''; // Password
$database	=	''; // Selected Database (Optional)

/*****  Connection to Server w/o Database   *****/
/* Better if you would like to switch between 
 * multiple MySQL Databases during your complete
 * program and its configuration
 */

$con = new mysqli($host, $login_name, $password);

/* Commented sections used to help determine if
 * the server connection is being tested
 */
//echo "Server connection attempted. <br>"; 

if($con->connect_error)
{
	echo "Server Connect Error: (" . $con->connect_errno . ") " . $con->connect_error . "<br>";
}
/*else
{
	echo "Server connection successful. <br>";
}
*/

/*****   Connection to Server w/ Database   *****/
/* Better if you would like to stay in one 
 * specific MySQL Databases during your complete
 * program and its configuration
 */
$db_con = new mysqli($host, $login_name, $password, $database);

/* Commented sections used to help determine if
 * the server connection is being tested
 */
echo "Database connection attempted. <br>";

if($db_con->connect_error)
{
	echo "Database Connect Error: (" . $db_con->connect_errno . ") " . $db_con->connect_error . "<br>";
}
/*
else
{
	echo "Database connection successful. <br>";
}
*/

?>