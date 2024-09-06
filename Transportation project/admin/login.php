<?php
// session_start();
require_once '../includes/connection.php';

// if (isset($_SESSION['ID'])) {
//     header('Location:main.php');
//     exit();
// }

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "Select * from admin where email='$email' and password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        header("Location:main.php? success=Login successful ");
        exit();
    } else {
        $error = "Invalid username or password";

    }
}

?>
<link rel="stylesheet" href="../assets/CSS/login.css">
<?php
if (isset($_GET['success'])) {
    echo '<div class="success">' . $_GET['success'] . '</div>';

}

if (isset($error)) {
    echo '<div class="error">' . $error . '</div>';

}

?>
<form class="login_container" method="post" action="" name="login">
    <div class="login_form"> <label>Username </label><input type="email" name="email"><br>
        <label>Password</label><input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    </div>

</form>