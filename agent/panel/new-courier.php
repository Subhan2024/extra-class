<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');

$limit = 3;
if(isset($_GET['page'])){
  
  $getpgno = $_GET['page'];
}else{
  $getpgno = 1;
}
$offset = ($getpgno - 1) * $limit;

$fetch = "SELECT * FROM `form` where status = '1' order by id desc limit {$offset}, {$limit}";

$data = mysqli_query($connection, $fetch);
?>
 <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>New Courier</h2>
                <hr>
            <table class="table table-warning">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company</th>
                    <th scope="col">Agent Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">City</th>
                    <th scope="col">Accept</th>
                    <th scope="col">Reject</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($data)) {
                     ?>
                    <tr>
                    <td><?php echo $row ['id']?></td>
                    <td><?php echo $row ['Company']?></td>
                    <td><?php echo $row ['Agent']?></td>
                    <td><?php echo $row ['Email']?></td>
                    <td><?php echo $row ['Phone']?></td>
                    <td><?php echo $row ['City']?></td>
                    <td ><a href="updatedata.php" class="btn btn-success">Accept</a></td>
                    <td ><a href="trash.php" class="btn btn-danger">Reject</a></td>  
                </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>

<?php
$fetchpage = "SELECT * from form";
$query = mysqli_query($connection, $fetchpage);

  if(mysqli_num_rows($query) > 0){
    $totalRecords = mysqli_num_rows($query);
    $totalpages = ceil($totalRecords / $limit);
    echo '<ul class="pagination">';
    if($getpgno > 1){
      echo '<li class="page-item"><a class="page-link" href="viewuser.php?page='.($getpgno - 1).'">prev</a></li>';

    }
    for($i = 1; $i <= $totalpages; $i++){
      $active = $i == $getpgno? "active" : "";
      echo '<li class="'.$active.' page-item"><a class="page-link" href="viewuser.php?page='.$i.'">'.$i.'</a></li>';
    }
    if($getpgno < $totalpages){
      echo '<li class="page-item"><a class="page-link" href="viewuser.php?page='.($getpgno + 1).'">next</a></li>';

    }

  }
  ?>
            </div>

        </div>

    </div>


</body>

</html>

<?php
include('admin/includes/footer.php');


?>