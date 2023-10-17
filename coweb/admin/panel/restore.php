<?php
include('config.php');

$user_id = $_GET['id'];

$restore = "UPDATE `user` SET status = '1' where id = '$user_id' ";
$sqlconn = mysqli_query($connection, $restore);
if($sqlconn){
    
    header('location: viewuser.php');
}
else{
    echo "query failed";
}
?>


?>