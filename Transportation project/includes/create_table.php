<?php
require_once('connection.php');
$booking="Create table booking(
        name varchar(30) NOT NULL,
        contact varchar(10)  NOT NULL,
        bus varchar(10) NOT NULL,
        route varchar(30) NOT NULL,
        seat varchar(2) NOT NULL,
        amount varchar(6) NOT NULL,
        departure varchar(30) NOT NULL,
        booked varchar(30) NOT NULL)";
 $buses="Create table buses(
            id int(3) auto_increment NOT NULL primary key,
            bus_number varchar(30) NOT NULL
            )";
 $passengers="Create table passengers(
          id int(8) auto_increment NOT NULL primary key,
          name varchar(30) NOT NULL,
          contact varch+ar(10)  NOT NULL
 )";
 $route="Create table route(
 bus varchar(10) NOT NULL,
 from_destination varchar(30) NOT NULL,
 to_destination varchar(30) NOT NULL,
 departure_date varchar(15) NOT NULL,
 departure_time varchar(15) NOT NULL,
 cost varchar(6) NOT NULL
 )";
 if($conn->query($booking)==True && $conn->query($buses)==True && $conn->query($passengers)==True && $conn->query($route)==True){
    echo "Table created succesfully";
 }
 else{
    echo $conn->connect_error;
 }
?>