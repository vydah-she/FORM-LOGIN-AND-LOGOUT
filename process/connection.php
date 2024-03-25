<?php
$conn = new mysqli('localhost', 'root', '', 'crude');

if(!$conn){
    echo 'Connection error';
}