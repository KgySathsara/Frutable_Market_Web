<?php
include('../includes/connection.php');

if(isset($_POST['insert_vegitables'])){
    $category_name = $_POST['vegitables_name'];

    $search_query = "SELECT * FROM `vegitables_tb` WHERE veg_name = '$category_name'";
    $run_search_query = mysqli_query($conn, $search_query);
    $search_row = mysqli_num_rows($run_search_query);
    if ($search_row>0) {
        echo "<script> alert('Vegitables already Exists')</script>";
    }else {
        $insert_query = "INSERT INTO `vegitables_tb`(`veg_name`) VALUES ('$category_name')"; 
        $run_insert_query = mysqli_query($conn, $insert_query);
        if ($run_insert_query){
            echo "<script>alert('New Vegitables Inserted')</script>";
        }
    }
}
?>

<h2 class="text-center p-0">Insert Vegitables</h2>
<form action="" method="POST">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-slack"></i></span>
        <input type="text" class="form-control" placeholder="Insert Vegitables Name"  name=" vegitables_name">
    </div>

    <div class="input-group mb-3 ">
        <button class="bg-info" name="insert_vegitables">Insert New Products</button>
    </div>
</form>  