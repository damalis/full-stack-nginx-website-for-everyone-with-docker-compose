<?php

$link = mysqli_connect( 'database', 'DB_USER', 'DB_PASSWORD', 'DB_NAME' );

//if connection is not successful you will see text error
if ( !$link ) {
       die( '<center>Could not connect: ' . mysql_error() . '</center>' );
}

//if connection is successfully you will see message below
echo '<center>Database connected successfully</center>';
echo "<center>Database host information: " . mysqli_get_host_info( $link ) . PHP_EOL . "</center>";
 
mysqli_close( $link );

echo "<br>";

//Connecting to Redis server on localhost 
$redis = new Redis(); 
$redis->connect('redis', 6379); 
echo "<center>Connection to Redis Server sucessfully</center>"; 
//check whether server is running or not 
echo "<center>Server is running: " . $redis->ping('pong') . "</center>";

echo "<br>";

/*
$args = array(
    VARNISH_CONFIG_HOST    => "varnish",
    VARNISH_CONFIG_PORT    => 8080,
    VARNISH_CONFIG_SECRET  => "",
    VARNISH_CONFIG_TIMEOUT => 300,
);

//Connecting to Varnish server
$va = new VarnishAdmin($args);

try {
    if(!$va->connect()) {
        throw new VarnishException("Connection failed\n");
    }   
} catch (VarnishException $e) {
    echo $e->getMessage();
    exit(3);
}

try {
    if(!$va->auth()) {
        throw new VarnishException("Auth failed\n");
    }   
} catch (VarnishException $e) {
    echo $e->getMessage();
    exit(3);
}

try {
    $status = $va->ban('req.url ~ "^/$"');
    if (VARNISH_STATUS_OK != $status) {
        throw new VarnishException("Ban method returned $status status\n");
    }
} catch (VarnishException $e) {
    echo $e->getMessage();
    exit(3);
}
*/

phpinfo();

?>