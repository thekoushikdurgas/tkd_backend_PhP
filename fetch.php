// $host = "106.75.214.152";
// $port = 8080;

// set_time_limit(0);

// $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket");

// $result = socket_connect($socket, $host, $port);


// $response = socket_read($socket, 2048) or die("Failed reading data");
// echo $response;
<?php
header('Access-Control-Allow-Origin: http://localhost:3000');
$user = $_POST['name'];
echo ("Hello from server: $user");
?>