<?php
include('../includes/connection.php');
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
                <select name="product_category" id="product_category" class="form-select ">
                    <option >Select Vegitables</option>
                </select>
            </div>

            <!--Product Brand-->
            <div class="form-outline mb-4 w-50 m-auto ">
                <select name="product_brand" id="product_brand" class="form-select ">
                    <option >Select Fruits</option>
                </select>
            </div>

            <!--Product Brand-->
            <div class="form-outline mb-4 w-50 m-auto ">
                <select name="product_brand" id="product_brand" class="form-select ">
                    <option >Select Meats & Fish</option>
                </select>
            </div>

            <!--Product Brand-->
            <div class="form-outline mb-4 w-50 m-auto ">
                <select name="product_brand" id="product_brand" class="form-select ">
                    <option >Select Organic Products</option>
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
                <button class="bg-info " name="insert_product">Submit</button>
            </div>

        </form>
    </div>

<!--Boostrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>