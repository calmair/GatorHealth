<?php

// THIS IS A CONFIGURATION FILE. PLEASE, DON'T PUSH THIS FILE IF YOU NEED TO PUT A REAL PASSWORD IN CONSTANT DB_PASSWORD. ALWAYS KEEP A LOCAL VERSION OF THIS FILE


define("DB_HOST", "localhost");
<<<<<<< HEAD
<<<<<<< HEAD
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
<<<<<<< HEAD
define("DATABASE", "GatorHealthDB");
=======
define("DATABASE", "searchResults");
<<<<<<< HEAD
=======
define("DB_USERNAME", "Stuart");
define("DB_PASSWORD", "maple1714");
define("DATABASE", "GatorHealthDB");
=======
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DATABASE", "searchResults");
>>>>>>> 76ff6481ee674124053476d28c9884ee5abcf55d
=======
>>>>>>> a69738f9354ddcc47ec4e92d8ba25a3e38a5f074
>>>>>>> ad7faf9f1f66808f32592ea0e92de34c967d9e3a

>>>>>>> e765bf9db7ec059c88a966548eafe354677fb151

//mysqli_connect(DB_HOST , DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE) or die("Connection error to database:  ".mysqli_error());
// mysqli_connect("localhost", "root", "YES") or die("Connection error to database:  ".mysqli_error());

//mysqli_select_db("searchResults") or die(mysqli_error());

//$con = mysqli_connect("127.0.0.1","root","pass","your_database");
/* solution for fatal error from https://stackoverflow.com/questions/10615436/fatal-error-call-to-undefined-function-mysql-connect */
?>