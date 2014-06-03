<?php
require 'Main.php';
require_once 'Main2.php';
require_once  'remote/jsonrpcphp/includes/jsonRPCServer.php';
use MSISDN\Tool\Main;

$main = new Main();

jsonRPCServer::handle($main);
