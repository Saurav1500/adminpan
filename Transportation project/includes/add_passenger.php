<form method="POST" action="#" name="add_passenger">
    Name:<input type="text" name="name">
    <br>Contact:<input type="tel" name="contact">
<br>     <input type="submit" name="submit" value="submit">
</form>
<?php
require_once 'connection.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $contact=$_POST['contact'];
$sql="Insert into passengers(
name,contact) values('$name','$contact')";
if($conn->query($sql)){
    echo "Added passenger succesfully";//header lagaune tei page ma aune rw alert jasto dekhaune
}
}




?>