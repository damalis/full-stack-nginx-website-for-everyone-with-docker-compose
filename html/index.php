<?php

//Connecting to Redis server on localhost 
$redis = new Redis(); 
$redis->connect('redis', 6379); 
echo "Connection to server sucessfully"; 
//check whether server is running or not 
echo "Server is running: " . $redis->ping(); 

phpinfo();

/*
$link = mysqli_connect( 'database', 'DB_USER', 'DB_PASSWORD', 'DB_NAME' );

//if connection is not successful you will see text error
if ( !$link ) {
       die( 'Could not connect: ' . mysql_error() );
}

//if connection is successfully you will see message below
echo 'Connected successfully';
echo "Host information: " . mysqli_get_host_info( $link ) . PHP_EOL;
 
mysqli_close( $link );
*/

?>
