<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "0"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0) {
    $DB_SERVER = "localhost:8889";
    $DB_NAME = "kanoStaff";
    $DB_USER = "root";
    $DB_PASS = "root";
}else{
    $DB_SERVER = "root";
    $DB_NAME = "root";
    $DB_USER = "root";
    $DB_PASS = "root";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);