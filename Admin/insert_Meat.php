<?php
include('../includes/connection.php');

if(isset($_POST['insert_meat_&_fishes'])){
    $category_name = $_POST['meat_&_fishes_name'];

    $search_query = "SELECT * FROM `meat_&_fishes_tb` WHERE meat_name = '$category_name'";
    $run_search_query = mysqli_query($conn, $search_query);
    $search_row = mysqli_num_rows($run_search_query);
    if($search_row>0){
        echo "<script> alert(' Meats & Fishes already Exists')</script>";
    }else{
        $insert_query = "INSERT INTO `meat_&_fishes_tb`(`meat_name`) VALUES ('$category_name')"; 
        $run_insert_query = mysqli_query($conn, $insert_query);
            if ($run_insert_query){
            echo "<script>alert('New Meats & Fishes Inserted')</script>";
        }
    }
}   
?>

<h2 class="text-center p-0">Insert Meats & Fishes</h2>
<form action="" method="POST">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-slack"></i></span>
        <input type="text" class="form-control" placeholder="Insert Meats & Fishes Name"  name=" meat_&_fishes_name">
    </div>

    <div class="input-group mb-3 ">
        <button class="bg-info" name="insert_meat_&_fishes">Insert New Products</button>
    </div>
</form>  