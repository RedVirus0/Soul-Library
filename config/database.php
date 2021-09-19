<?php
// connect to database
$connect = new mysqli("localhost","root",'','soul');
if($connect->error){ // check if not connect to database
    echo $connect->error;
}