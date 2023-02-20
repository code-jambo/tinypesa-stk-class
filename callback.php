<?php
header("Content-Type: application/json");

$stkResponse = file_get_contents('php://input');
$logFile = "tinypesa.json";
$log = fopen($logFile, "a");
fwrite($log, $stkResponse);
fclose($log);
$stkResponse = json_decode($stkResponse);




