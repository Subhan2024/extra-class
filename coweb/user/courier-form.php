<?php
include('header.php');
include('../config.php');

if(isset($_POST['btn'])){
    $company = $_POST['company'];
    $agent = $_POST['agent'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];

    $insert = "INSERT INTO `form` (`Company`, `Agent`, `Email`, `Phone`, `City`) VALUES ('$company', '$agent', '$email', '$phone', '$city')";
    $result = mysqli_query($connection , $insert);
    if ($result) {
        echo '<script>alert("Courier form Register")</script>';
    } else {
        echo "Error: " . mysqli_error($connection);
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   
</head>
<body>
    <div class="main-parent">
        <div class="form-wrap">
            <form action="" method="post">
                <h1><span>Courier</span> Form</h1>
                <div class="single-input">
                    <input required type="text" id="fname" name="company" placeholder="Company Name" autocomplete="off">
                
                </div>
                <div class="single-input">
                    <input required type="text" id="lname" name="agent" placeholder="Agent Name" autocomplete="off">
                    <span id="lastError"></span>
                </div>
                <div class="single-input">
                    <input required type="email" id="email" name="email" placeholder="Email Address" autocomplete="off">
                  
                </div>
                <div class="single-input">
                    <input required type="number" id="pass" name="phone" placeholder="Phone Number" autocomplete="off">
                    
                   
                </div>
                <div class="single-input">
                    <input required type="text" id="cpass" name="city" placeholder="City" autocomplete="off">
                    
                </div>
                <div class="submit-button">
                   <button class="button" name="btn"> Submit </button>
                </div>
                <!-- <div class="account-have">
                    <a href="#">Forget Password</a>
                    <a href="#">Have an account please login</a>

                </div> -->
            </form>
        </div>
    </div>
    <?php
    include('../footer.php');
    ?>
    <script src="./sweettalnt.js"></script>
    <script src="./app.js"></script>













    
</body>
</html>