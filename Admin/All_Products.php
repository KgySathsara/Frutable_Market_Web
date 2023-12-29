<?php
include('../includes/connection.php');

if(isset($_POST['insert_items']))
{
    $p_name = $_POST['product_name'];
    $p_description = $_POST['product_description'];
    $p_keyword = $_POST['product_keyword'];
    $p_vegitable = $_POST['product_vegitable'];
    $p_fruit = $_POST['product_fruit'];
    $p_meat = $_POST['product_meat'];
    $p_organic = $_POST['product_organic'];
    $p_price = $_POST['product_price'];
    $p_status = 'true';

    // Accessing Product Images
    $productImage1 = $_FILES['productImage1']['name'];

    // Access Image Temp
    $tmp_product_Image_1 = $_FILES['productImage1']['tmp_name'];

    //Move Image to the Product_image
    move_uploaded_file($tmp_product_Image_1, "./product_image/$productImage1");

    //Insert query
    $insert_products_query = "INSERT INTO `all_products_tb`(`product_name`, `product_keyword`, `veg_id`, `fruit_id`, `meat_id`, `organic_id`, 
    `product_image`, `product_price`, `date`, `status`,`product_description`) VALUES
    ('$p_name','$p_keyword','$p_vegitable','$p_fruit','$p_meat','$p_organic','$productImage1','$p_price','NOW()','$p_status',' $p_description')";

    $run_query = mysqli_query($conn, $insert_products_query);
    if($run_query)
    {
        echo "<script>alert('New Product Insert Successes !')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panal</title>
    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Font Awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Insert Product</h1>
        <!--insert product form area-->
        <form action=""  method="POST" enctype="multipart/form-data">
            <!--Product Title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label class="form-label">Product Name :</label>
                <input type="text" class="form-control " name="product_name" id="product_name" placeholder="Insert Product Name" require="require" >
            </div>

            <!--Product Discription -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label class="form-label">Product Description :</label>
                <input type="text" class="form-control " name="product_description" id="product_description" placeholder="Insert Product Name" require="require" >
            </div>

            <!--Product Keyword -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label class="form-label">Product Keyword :</label>
                <input type="text" class="form-control " name="product_keyword" id="product_keyword" placeholder="Insert Product Name" require="require" >
            </div>

            <!--Product Category-->
            <div class="form-outline mb-4 w-50 m-auto ">
                <select name="product_vegitable" id="product_vegitable" class="form-select ">
                    <option >Select Vegitables</option>
                    <?php
                        $select_category_query = "SELECT * FROM `vegitables_tb`";
                        $run_query = mysqli_query($conn, $select_category_query);

                        while($row = mysqli_fetch_assoc($run_query))
                        {
                            $vegitable_id = $row['veg_id'];
                            $vegitable_name = $row['veg_name'];

                            echo "<option value='$vegitable_id'>$vegitable_name</option>";
                        }
                    ?>
                </select>
            </div>

            <!--Product Brand-->
            <div class="form-outline mb-4 w-50 m-auto ">
                <select name="product_fruit" id="product_fruit" class="form-select ">
                    <option >Select Fruits</option>
                    <?php
                        $select_category_query = "SELECT * FROM `fruit_tb`";
                        $run_query = mysqli_query($conn, $select_category_query);

                        while($row = mysqli_fetch_assoc($run_query))
                        {
                            $fruit_id = $row['fruit_id'];
                            $fruit_name = $row['fruit_name'];

                            echo "<option value='$fruit_id'>$fruit_name</option>";
                        }
                    ?>
                </select>
            </div>

            <!--Product Brand-->
            <div class="form-outline mb-4 w-50 m-auto ">
                <select name="product_meat" id="product_meat" class="form-select ">
                    <option >Select Meats & Fish</option>
                    <?php
                        $select_category_query = "SELECT * FROM `meat_&_fishes_tb`";
                        $run_query = mysqli_query($conn, $select_category_query);

                        while($row = mysqli_fetch_assoc($run_query))
                        {
                            $meat_id = $row['meat_id'];
                            $meat_name = $row['meat_name'];

                            echo "<option value='$meat_id'>$meat_name</option>";
                        }
                    ?>
                </select>
            </div>

            <!--Product Brand-->
            <div class="form-outline mb-4 w-50 m-auto ">
                <select name="product_organic" id="product_organic" class="form-select ">
                    <option >Select Organic Products</option>
                    <?php
                        $select_category_query = "SELECT * FROM `organic_products_tb`";
                        $run_query = mysqli_query($conn, $select_category_query);

                        while($row = mysqli_fetch_assoc($run_query))
                        {
                            $organic_id = $row['organic_id'];
                            $organic_name = $row['product_name'];

                            echo "<option value='$organic_id'>$organic_name</option>";
                        }
                    ?>
                </select>
            </div>

            <!--Product Image 1-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="productImage1" class="form-label">Product Image 1 :</label>
                <input type="file" class="form-control" name="productImage1" id="productImage1" require="require" >
            </div>

            <!--Product Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label class="form-label">Product Price :</label>
                <input type="text" class="form-control " name="product_price" id="product_price" placeholder="Insert Product Price" require="require" >
            </div>

            <!--Submit-->
            <div class="form-outline mb-4 w-50 m-auto">
                <button class="bg-info " name="insert_items">Submit</button>
            </div>

        </form>
    </div>

<!--Boostrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>