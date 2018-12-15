<?php

$db['db_host'] = 'db4free.net';
$db['db_user'] = 'disease';
$db['db_pass'] = 'jicdisease';
$db['db_name'] = 'disease';
//server is db4free.net and the port is 3306
foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

?>
