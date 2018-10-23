<?php
// initialize application from bootstrap file
$app = require("bootstrap/app.php");
$dotenv = new Dotenv\Dotenv( __DIR__ );
$dotenv->load();
require("routes/web.php");
//require('bootstrap/bootstrap.php');
$app->run();
