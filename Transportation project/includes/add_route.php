<?php
require_once 'connection.php';
if(isset($_POST['submit'])){
    $bus=$_POST['bus'];
    $from_destination=$_POST['from_destination'];
    $to_destination=$_POST['to_destination'];
$departure_date=$_POST['departure_date'];
$departure_time=$_POST['departure_time'];
$cost=$_POST['cost'];
$sql="Insert into route($bus,$from_destination,$to_destination,$departure_date,$departure_time,$cost) values('$bus','$from_destination','$to_destination','$departure_date','$departure_time','$cost')";
if($conn->query($sql)==True){
    echo "Successfull";
}
}

?>