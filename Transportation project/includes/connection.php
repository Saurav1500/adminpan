<?php
$conn=new mysqli('localhost','root', '','yatayat');
if ($conn->connect_error) {
    echo 'Connection error'.$conn->connect_error;
}

?>