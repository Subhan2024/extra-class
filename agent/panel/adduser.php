<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');

if(isset($_POST['register'])){
    $company = $_POST['company'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Password = $_POST['password'];
    $rpass = $_POST['rpassword'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];

    if($Password == $rpass){
    $hashpass = password_hash($Password, PASSWORD_BCRYPT);

        $check_email = "SELECT * from `add`  where email = '$email' ";
        $run_email = mysqli_query($connection, $check_email);
        if(mysqli_num_rows($run_email) > 0){
            echo "Email already exist";
        }else{
            $insert = "INSERT INTO `add` (`company`, `name`, `email`, `password`, `phone`, `city`) VALUES ( '$company', '$name', '$email', '$hashpass', '$phone', '$city')
            ";
        $connect_insert = mysqli_query($connection, $insert);
        if($connect_insert){
            echo "registration successful";
        }else{
            echo "registration failed";
        }
        
        }
    }else{
        echo "Password not matched";
    }

}

?>


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Add Agent</h2>
                <hr>
        <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Company name" name="company" required>
                </div>
                <div class="col-sm-6">
                    <input type="name" class="form-control form-control-user"
                        id="exampleRepeatPassword" placeholder="name" name="name" required>
                </div>
            </div>
            <div class="form-group">
                    <input type="email" class="form-control form-control-user"
                        id="exampleEmail" placeholder="email" name="email" required>
                </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="pass" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="password" name="password" required>
                </div>
                <div class="col-sm-6">
                    <input type="pass" class="form-control form-control-user"
                        id="exampleRepeatPassword" placeholder="confirm password" name="rpassword" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="phone" name="phone" required>
                </div>
                <div class="col-sm-6">
                    <input type="city" class="form-control form-control-user"
                        id="exampleRepeatPassword" placeholder="city" name="city" required>
                </div>
            </div>
            <!-- <a class="btn btn-primary btn-user btn-block" name="register">
                Register Account
            </a> -->
            <input type="submit" class="btn btn-primary btn-user btn-block" name="register" >
            <hr>
            <a href="login.php" class="btn btn-google btn-user btn-block">
               </i>Already have an Acount?Login Here
            </a>
                                
        </form>

            </div>

        </div>

    </div>


</body>

</html>
<?php
include('admin/includes/footer.php');


?>