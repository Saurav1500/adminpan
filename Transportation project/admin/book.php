<?php

?>
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
        <!-- aside section end -->

        <!-- main section -->

        <main>

            <div class="logout">
                <h2>Welcome,
                    <span class="admin_name" name="admin_name"></span>
                    <a href="#"><span class="material-symbols-outlined">logout</span>
                    </a>
                </h2><br><br>
                <h4>Booking Status</h4><br>
                <button id="add_booking"> Add Booking + </button>
            </div><br />
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Bus</th>
                        <th>Seat</th>
                        <th>Amount</th>
                        <th>Departure</th>
                        <th>Booked</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tableBody">

                    <!-------------------------------
                                                     Data will be inserted here
                                                 ------------------------------->

                </tbody>



            </table>
    </div>



    </main>
</body>

</html>