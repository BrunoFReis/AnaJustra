<?php
$jsonurl = "http://api.wipmania.com/json";
$json = file_get_contents($jsonurl);
//var_dump(json_decode($json));
    foreach ( json_decode($json) as $key => $value ) {
        echo "llave: ".$key."- Valor:".$value."<br />";
    }
?>