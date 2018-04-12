<?php
$conn=mysqli_connect('localhost','root','');
if(!$conn)
{
    die("connection closed");
}
else {
    $db=mysqli_select_db($conn,'mvisum');
}

?>