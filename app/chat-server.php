<?php
require 'vendor/autoload.php';

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use MyApp\Chat;

// Creation of a WebSocket server
$server = IoServer::factory(    // In- & Output server
    new HttpServer(             // HTTP Server
        new WsServer(           // WS Server
            new Chat()          // Our implementation for WS communication
        )
    ),
    8080                        // Server Port
);

echo 'Server started'.PHP_EOL;
$server->run();                 // Run the server