<?php

$db = [
    "user" => "root",
    "password" => "",
    "host" => "localhost",
    "name" => "notlaravel",
    "table"=>"users"
];

$mysqli = new mysqli($db['host'],$db['user'],$db['password'],$db['name']);

if ($mysqli->connect_error) {
    die('error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
} else {
    echo 'success';
}

?>

