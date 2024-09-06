<?php
// // session_start();
// // if (!isset($_SESSION['ID'])) {
// //     header('Location:login.php');
// //     exit();
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
        <!-- aside section end -->

        <!-- main section -->

        <main>

            <div class="logout">
                <h2>Welcome,
                    <span class="admin_name" name="admin_name"></span>
                    <a href="logout.php"><span class="material-symbols-outlined">logout</span>
                    </a>
                </h2><br><br>
                <h4>Bus Status</h4><br>
                <butto-n id="add_bus"> Add Bus Details + </button>
            </div><br />
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Bus Number</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody id="tableBody">
                <?php
                    require_once ("../includes/connection.php");
                    $sql = "select * from buses";
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
                                    <?php echo $row['bus_number'];?>
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
                    else{ echo "<center><h2>No records<h2></center> <style>table{display:none;}</style>";}
                    ?>
                </tbody>



            </table>
    </div>



    </main>
</body>

</html>