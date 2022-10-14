<?php

$data = file_get_contents('http://192.168.2.99:8008/users.json');
$data = json_decode($data);

foreach ($data as $value) {
    echo "name :".$value->name."<br>";  
    echo "username:".$value->username."<br>"; 
    echo "country:".$value->country."<br>"; 
    echo "website:".$value->website."<br>"; 
    echo "phone:".$value->phone."<br>"; 
    echo "total_post:".$value->total_post."<br>"; 
    echo "total_todo:".$value->total_todo."<br>"; 
    echo "total_album:".$value->total_album."<br>";
    echo "total_photo:".$value->total_photo."<br>"; 
}

?>