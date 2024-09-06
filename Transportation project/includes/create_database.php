<?php
$host="localhost";
$username="root";
$password="";
$database="";
$conn=new MYSQLi($host,$username,$password);
$sql="Create database yatayat";
if($conn->query($sql)==True){
    echo "Database created";
}
?>