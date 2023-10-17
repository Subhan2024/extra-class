<?php
include('header1.php');
include('config.php');

?>
 
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Courier website</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>
<body>

    <div class="row g-4">
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item p-4">
                <div class="overflow-hidden mb-4">
                   <img class="img-fluid" src="img/admin.jpg" alt="">
                </div>
                        <h4 class="mb-3">Admin</h4>
                        <p>Admin sign up / login here</p>
                        <a class="btn-slide mt-2" href="admin/login.php"><i class="fa fa-arrow-right"></i><span>Login</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/agent.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Agent</h4>
                        <p>Agent sign up / login here</p>
                        <a class="btn-slide mt-2" href="agent/login.php"><i class="fa fa-arrow-right"></i><span>Login</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/user.png" alt="">
                        </div>
                        <h4 class="mb-3">User</h4>
                        <p>User sign up / login here</p>
                        <a class="btn-slide mt-2" href="user/sign.php"><i class="fa fa-arrow-right"></i><span>SignUp /Login</span></a>
                    </div>
                </div>    
</body>

</html>
<?php
include('footer.php');
?>