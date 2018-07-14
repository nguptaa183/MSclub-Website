<?php ob_start(); ?>
<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "tqcNfNgxcSWQAfqL";
$db['db_name'] = "MSclubBlog";

foreach($db as $key => $value) {
  define(strtoupper($key), $value);
}

$connection=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connection){
  die("Sorry something went wrong");
}


?>
