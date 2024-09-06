<?php
// session_start();
// if (!isset($_SESSION['ID'])) {
//     header('Location:login.php');
//     exit();
// }
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

        <main>

            <div class="logout">
                <h2>Welcome,
                    <span class="admin_name" name="admin_name"></span>
                    <a href="logout.php"><span class="material-symbols-outlined">logout</span>
                    </a>
                </h2><br><br>
                <h4>Passenger Status</h4><br>
                <button id="add_passenger"> Add Passenger + </button>
            </div><br />
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once ("../includes/connection.php");
                    $sql = "select * from passengers";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $i = 1;
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $i; ?>
                                </td>
                                <td>
                                    <?php echo $row['name'];?>
                                </td>
                                <td>
                                    <?php echo $row['contact']; ?>
                                </td>
                                <td>
                                    <a class="edit">Edit</a>
                                    <a class="delete" onclick="return confirm('Are you sure you want to delete')">Delete</a>
                                </td>
                            </tr>


                            <?php
                            $i++;
                        }
                    }
                    ?>
                </tbody>
            </table>

            <div></div>
        </main>
        <script src="../assets/JS/script.js"> </script>"