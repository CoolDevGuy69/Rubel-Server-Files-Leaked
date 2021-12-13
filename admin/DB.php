<?php
//api url filter
if(strpos($_SERVER['REQUEST_URI'],"DB.php")){
    require_once 'Utils.php';
    PlainDie();
}

$conn = new mysqli("localhost", "id18075991_dead_noob1", "Ogd_?!NyUhf<5Mvc", "id18075991_dead_noob");
if($conn->connect_error != null){
    die($conn->connect_error);
}
