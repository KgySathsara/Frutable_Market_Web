<?php
include('../includes/connection.php');

if(isset($_POST['insert_products'])){
    $category_name = $_POST['products_name'];

    $search_query = "SELECT * FROM `organic_products_tb` WHERE product_name = '$category_name'";
    $run_search_query = mysqli_query($conn, $search_query);
    $search_row = mysqli_num_rows($run_search_query);
    if ($search_row>0) {
        echo "<script> alert('Organic Products already Exists')</script>";
    }else {
        $insert_query = "INSERT INTO `organic_products_tb`(`product_name`) VALUES ('$category_name')"; 
        $run_insert_query = mysqli_query($conn, $insert_query);
        if ($run_insert_query){
            echo "<script>alert('New Organic Products Inserted')</script>";
        }
    }
}
?>

<h2 class="text-center p-0">Insert Organic Products</h2>
<form action="" method="POST">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-slack"></i></span>
        <input type="text" class="form-control" placeholder="Insert Products Name"  name=" products_name">
    </div>

    <div class="input-group mb-3 ">
        <button class="bg-info" name="insert_products">Insert New Products</button>
    </div>
</form>  