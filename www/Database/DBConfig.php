<?php

// THIS IS A CONFIGURATION FILE. PLEASE, DON'T PUSH THIS FILE IF YOU NEED TO PUT A REAL PASSWORD IN CONSTANT DB_PASSWORD. ALWAYS KEEP A LOCAL VERSION OF THIS FILE


define("DB_HOST", "localhost");
<<<<<<< HEAD
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DATABASE", "GatorHealthDB");
=======
define("DB_USERNAME", "Stuart");
define("DB_PASSWORD", "maple1714");
define("DATABASE", "GatorHealthDB");

>>>>>>> e765bf9db7ec059c88a966548eafe354677fb151

//mysqli_connect(DB_HOST , DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE) or die("Connection error to database:  ".mysqli_error());
// mysqli_connect("localhost", "root", "YES") or die("Connection error to database:  ".mysqli_error());

//mysqli_select_db("searchResults") or die(mysqli_error());

//$con = mysqli_connect("127.0.0.1","root","pass","your_database");
/* solution for fatal error from https://stackoverflow.com/questions/10615436/fatal-error-call-to-undefined-function-mysql-connect */

?>