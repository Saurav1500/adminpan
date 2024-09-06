<!-- <?php
// session_start();
// if (!isset($_SESSION['ID'])) {
//     header('Location:login.php');
//     exit();
// }
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="../assets/CSS/style.css">
</head>

<body>
    <div class="container">

        <!-- aside section -->
        <?php include_once '../includes/dash.php'; ?>
        <!-- section end -->

        <!-- main section -->
        <main>
            <div class="logout">
                <h2>Welcome,
                    <span class="admin_name" name="admin_name"></span>
                    <a href="logout.php"><span class="material-symbols-outlined">logout</span>
                    </a>
                </h2>
            </div>
            <div class="boxes">
                <!-- Booking box -->
                <div class="book_box">
                    <h3>Booking</h3><br />
                    <div class="middle">
                        <h4>Total Booking</h4>
                        <span>        <?php 
                        require_once("../includes/connection.php");
                        $sql = "SELECT COUNT(booked) AS count FROM booking";
$result = $conn->query($sql);

// Fetch the result
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['count'];}
    else{
        echo '0';
    }?></span><br /><br>
                        <small><a href="book.php">View More →</a></small>
                    </div>
                </div>
                <!-- Booking box end -->

                <!-- Bus box -->
                <div class="bus_box">
                    <h3>Buses</h3><br>
                    <h4>Total Buses</h4>
                    <span> <?php 
                        require_once("../includes/connection.php");
                        $sql = "SELECT COUNT(bus_number) AS count FROM buses";
$result = $conn->query($sql);

// Fetch the result
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['count'];}
    else{
        echo '0';
    }?></span><br /><br>
                    <small><a href="bus.php">View More →</a></small>
                </div>
                <!--Bus box end -->

                <!-- Routes box -->
                <div class="route_box">
                    <h3>Routes</h3><br />
                    <h4>Total Routes</h4>
                    <span> <?php 
                        require_once("../includes/connection.php");
                        $sql = "SELECT COUNT(bus) AS count FROM route";
$result = $conn->query($sql);

// Fetch the result
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['count'];}
    else{
        echo '0';
    }?></span><br /><br>
                    <small><a href="route.php">View More →</a></small>
                </div>
                <!-- Routes box end -->

                <!-- Seats box -->
                <div class="seat_box">
                    <h3>Seats</h3><br />
                    <h4>Total Seats</h4>
                    <span> <?php 
                        require_once("../includes/connection.php");
                        $sql = "SELECT COUNT(seat) AS count FROM booking";
$result = $conn->query($sql);

// Fetch the result
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['count'];}
    else{
        echo '0';
    }?></span><br />
                    <br> <small><a href="seat.php">View More →</a></small>
                </div>
                <!-- Seats box end -->

                <!-- Passenger box -->
                <div class="passenger_box">
                    <h3>Passengers</h3><br />
                    <h4>Total Passengers</h4>
                    <span> <?php 
                        require_once("../includes/connection.php");
                        $sql = "SELECT COUNT(name) AS count FROM passengers";
$result = $conn->query($sql);

// Fetch the result
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['count'];}
    else{
        echo '0';
    }?></span><br /><br>
                    <small><a href="passenger.php">View More →</a></small>
                </div>
                <!-- Passenger box end -->
            </div>
        </main>



    </div>

</body>

</html>