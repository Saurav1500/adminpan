<?php
session_start();
unset($_SESSION['ID']);
unset($_SESSION['Email']);
session_destroy();
header('Location:login.php?success=User logged out successfully');
exit();

?>