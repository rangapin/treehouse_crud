<?php 

try {
$db = new PDO("sqlite:".__DIR__."/database.db");
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
