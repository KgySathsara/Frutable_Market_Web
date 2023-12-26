<?php
include('../includes/connection.php');

if(isset($_POST['insert_fruit'])){
    $category_name = $_POST['fruit_name'];
    
    $search_query = "SELECT * FROM `fruit_tb` WHERE fruit_name = '$category_name'";
    $run_search_query = mysqli_query($conn, $search_query);
    $search_row = mysqli_num_rows($run_search_query);
    if ($search_row>0) {
        echo "<script> alert('Fruits already Exists')</script>";
    }else {
        $insert_query = "INSERT INTO `fruit_tb`(`fruit_name`) VALUES ('$category_name')"; 
        $run_insert_query = mysqli_query($conn, $insert_query);
        if ($run_insert_query){
            echo "<script>alert('New Fruits Inserted')</script>";
        }
    }
}   
?>

<h2 class="text-center p-0">Insert Fruits</h2>
<form action="" method="POST">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-slack"></i></span>
        <input type="text" class="form-control" placeholder="Insert Fruits Name"  name=" fruit_name">
    </div>

    <div class="input-group mb-3 ">
        <button class="bg-info" name="insert_fruit">Insert New Products</button>
    </div>
</form>  