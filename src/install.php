<!--
All eode is under the GNU GENERAL PUBLIC LICENSE Version 3, 29 June 2007.
-->

<?php
include ("config.php");

// connect to the mysql server
echo "a";
$link = mysqli_connect($db_host, $db_user, $db_pass)
or die ("Could not connect to mysql because ".mysqli_error());

// select the database
mysqli_select_db($db_name)
or die ("Could not select database because ".mysqli_error());

// create table on database
$create = "create table $db_table (
id smallint(5) NOT NULL auto_increment,
username varchar(30) NOT NULL,
password varchar(32) NOT NULL,
email varchar(200) NOT NULL,
PRIMARY KEY (id),
UNIQUE KEY username (username)
);";

mysqli_query($create)
or die ("Could not create tables because ".mysqli_error());
echo "Complete.";
?>
