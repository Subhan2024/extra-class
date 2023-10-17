<?php
include('config.php');
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');


$user_id = $_GET['id']; 
die();
$query = "select * from `user` where id = '{$user_id}'";

$retl = mysqli_query($connection , $query);

if(!$retl){
    die("query fail");
}

if (mysqli_num_rows($retl) > 0 ) {
     while($row = mysqli_fetch_assoc($retl)) {
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

<hr>

<form action="update.php" class="form-group" method ="post">

<label for="Name"></label>
<input type="hidden" name="id" class="form-control "value = "<?php echo $row['Id']?>">
<br>
<label for="Name">First Name</label>
<input type="text" name="fname" class="form-control" value = "<?php echo $row['fname']?>">
<br>
<label for="Name">Last Name</label>
<input type="number" name="lname" class="form-control" value = "<?php echo $row['lname']?>">
<br>
<label for="Name">Email</label>
<input type="email" name="email" class="form-control" value = "<?php echo $row['email']?>">
<br>
<input type="submit" name="submit" class="btn btn-dark">

</form>
</div>
<?php

};
};


?>

</html>
</body>
<?php
include('admin/includes/footer.php');

?>