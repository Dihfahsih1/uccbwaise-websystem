<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'ucc'; 
/* End config */

/* Database config for ooowebhostapp*/
/*$db_host		= 'localhost';
$db_user		= 'id7532504_root';
$db_pass		= 'uccbwaise2018';
$db_database	= 'id7532504_ucc';
End config */
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
