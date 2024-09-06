<?php 
require_once 'connection.php';
if(isset($_POST['bus_number']))
{
$bus_number=$_POST['bus_number'];
$sql="Insert into buses(bus_number) values('$bus_number')";
if($conn->query($sql)==True){
    echo "bus added sucessfully";
}
}?>