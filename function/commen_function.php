<?php
include "./includes/connection.php";

function getproducts()
{
    global $conn;

    if(!isset($_GET['Vegetables'])){
        if(!isset($_GET['Fruits'])){
            if(!isset($_GET['Meats'])){
                if(!isset($_GET['Organic'])){

                $select_product_query = "SELECT * FROM `all_products_tb`";
                $run_query = mysqli_query($conn, $select_product_query);

                while ($row = mysqli_fetch_assoc($run_query)) {
                    $product_id = $row["product_id"];
                    $p_name = $row["product_name"];
                    $p_descrioption = $row["product_description"];
                    $product_image1 = $row["product_image"];
                    $p_price = $row["product_price"];
                    $veg_id = $row["veg_id"];
                    $fruit_id = $row["fruit_id"];
                    $meat_id = $row["meat_id"];
                    $organic_id = $row["organic_id"];

                        echo "<div class='col-md-4 p-1'>
                                <div class='card nav-item  bg-dark'>
                                <img src='./Admin/product_image/$product_image1 ' class='card-img-top p-1' alt='...'>
                                <div class='card-body nav-link text-light'>
                                    <h5 class='card-title'>$p_name</h5>
                                    <p class='card-text'>$p_descrioption </p>
                                    <h6 class='card-text'>$p_price</h6>
                                    <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add To Cart</a>
                                </div>
                            </div>
                        </div>";
                    }
                }
            }
        }
    }
}

//Getting unique Vegetable
function get_unique_Vegetables()
{
    global $conn;

    if (isset($_GET["vegetables"])) {
        //Condition to check if isset or not
        $vegetable_id = $_GET["vegetables"];
        $select_product_query = "SELECT * FROM `all_products_tb` WHERE veg_id = $vegetable_id ";
        $run_query = mysqli_query($conn, $select_product_query);

        //Count Numbers of Rows in the run query
        $num_of_rows = mysqli_num_rows($run_query);
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>No Stocks of this Category Available !</h2>";
        }

        while ($row = mysqli_fetch_assoc($run_query)) {
            $product_id = $row["product_id"];
            $p_name = $row["product_name"];
            $p_descrioption = $row["product_description"];
            $product_image1 = $row["product_image"];
            $p_price = $row["product_price"];
            $veg_id = $row["veg_id"];
            $fruit_id = $row["fruit_id"];
            $meat_id = $row["meat_id"];
            $organic_id = $row["organic_id"];

            echo "<div class='col-md-4 p-1'>
            <div class='card nav-item  bg-dark'>
            <img src='./Admin/product_image/$product_image1 ' class='card-img-top p-1' alt='...'>
                    <div class='card-body nav-link text-light'>
                        <h5 class='card-title'>$p_name</h5>
                        <p class='card-text'>$p_descrioption </p>
                        <h6 class='card-text'>$p_price</h6>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add To Cart</a>
                    </div>
                </div>
            </div>";
        }
    }
}

//Getting unique fruits
function get_unique_fruits()
{
    global $conn;

    if (isset($_GET["Fruits"])) {
        //Condition to check if isset or not
        $brand_id = $_GET["Fruits"];
        $select_product_query = "SELECT * FROM `all_products_tb` WHERE fruit_id = $brand_id";
        $run_query = mysqli_query($conn, $select_product_query);

        //Count Numbers of Rows in the run query
        $num_of_rows = mysqli_num_rows($run_query);
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>No Stocks of this Brand Available !</h2>";
        }

        while ($row = mysqli_fetch_assoc($run_query)) {
            $product_id = $row["product_id"];
            $p_name = $row["product_name"];
            $p_descrioption = $row["product_description"];
            $product_image1 = $row["product_image"];
            $p_price = $row["product_price"];
            $veg_id = $row["veg_id"];
            $fruit_id = $row["fruit_id"];
            $meat_id = $row["meat_id"];
            $organic_id = $row["organic_id"];

            echo "<div class='col-md-4 '>
                <div class='card'>
                <img src='./admin/product_image/$product_image1' class='card-img-top' alt='...'>
                <div class='card-body'>
                <h5 class='card-title'>$product_name</h5>
                <p class='card-text'>$product_descrioption</p>
                <h6 class='card-text'>$product_price</h6>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Card</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>View Details</a>
                </div>
                </div>
            </div>";
        }
    }
}

//Getting unique fruits
function get_unique_meats()
{
    global $conn;

    if (isset($_GET["Meats"])) {
        //Condition to check if isset or not
        $brand_id = $_GET["Meats"];
        $select_product_query = "SELECT * FROM `all_products_tb` WHERE meat_id = $brand_id";
        $run_query = mysqli_query($conn, $select_product_query);

        //Count Numbers of Rows in the run query
        $num_of_rows = mysqli_num_rows($run_query);
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>No Stocks of this Brand Available !</h2>";
        }

        while ($row = mysqli_fetch_assoc($run_query)) {
            $product_id = $row["product_id"];
            $p_name = $row["product_name"];
            $p_descrioption = $row["product_description"];
            $product_image1 = $row["product_image"];
            $p_price = $row["product_price"];
            $veg_id = $row["veg_id"];
            $fruit_id = $row["fruit_id"];
            $meat_id = $row["meat_id"];
            $organic_id = $row["organic_id"];

            echo "<div class='col-md-4 '>
                <div class='card'>
                <img src='./admin/product_image/$product_image1' class='card-img-top' alt='...'>
                <div class='card-body'>
                <h5 class='card-title'>$product_name</h5>
                <p class='card-text'>$product_descrioption</p>
                <h6 class='card-text'>$product_price</h6>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Card</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>View Details</a>
                </div>
                </div>
            </div>";
        }
    }
}

//Getting unique fruits
function get_unique_organic()
{
    global $conn;

    if (isset($_GET["Organic"])) {
        //Condition to check if isset or not
        $brand_id = $_GET["product_id"];
        $select_product_query = "SELECT * FROM `all_products_tb` WHERE organic_id = $brand_id";
        $run_query = mysqli_query($conn, $select_product_query);

        //Count Numbers of Rows in the run query
        $num_of_rows = mysqli_num_rows($run_query);
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>No Stocks of this Brand Available !</h2>";
        }

        while ($row = mysqli_fetch_assoc($run_query)) {
            $product_id = $row["product_id"];
            $p_name = $row["product_name"];
            $p_descrioption = $row["product_description"];
            $product_image1 = $row["product_image"];
            $p_price = $row["product_price"];
            $veg_id = $row["veg_id"];
            $fruit_id = $row["fruit_id"];
            $meat_id = $row["meat_id"];
            $organic_id = $row["organic_id"];

            echo "<div class='col-md-4  '>
                <div class='card'>
                    <img src='./admin/product_image/$product_image1' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_name</h5>
                        <p class='card-text'>$product_descrioption</p>
                        <h6 class='card-text'>$product_price</h6>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Card</a>
                        <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>View Details</a>
                    </div>
                </div>
            </div>";
        }
    }
}


function getvegetables()
{
    global $conn;
    $select_veg = "SELECT * FROM `vegitables_tb`";
    $run_select_veg = mysqli_query($conn, $select_veg);
    while ($row_data = mysqli_fetch_assoc($run_select_veg)) {
        $veg_id = $row_data["veg_id"];
        $veg_name = $row_data["veg_name"];

        // Display the brand list
        echo "<li class='nav-item bg-dark'>
        <a class='nav-link text-light' href='index.php?veg=$veg_id'>$veg_name</a>
        </li>";
    }
}

function getfruits()
{
    global $conn;
    $select_fruit = "SELECT * FROM `fruit_tb`";
    $run_select_fruit = mysqli_query($conn, $select_fruit);
    while ($row_data = mysqli_fetch_assoc($run_select_fruit)) {
        $fruit_id = $row_data["fruit_id"];
        $fruit_name = $row_data["fruit_name"];

        // Display the category
        echo " <li class='nav-item bg-dark'>
        <a class='nav-link text-light' href='index.php?fruit=$fruit_id'>$fruit_name</a>
        </li>";
    }
}

function getmeats()
{
    global $conn;
    $select_meat = "SELECT * FROM `meat_&_fishes_tb`";
    $run_select_meat = mysqli_query($conn, $select_meat);
    while ($row_data = mysqli_fetch_assoc($run_select_meat)) {
        $meat_id = $row_data["meat_id"];
        $meat_name = $row_data["meat_name"];

        // Display the category
        echo " <li class='nav-item bg-dark'>
        <a class='nav-link text-light' href='index.php?meat=$meat_id'>$meat_name</a>
        </li>";
    }
}

function get_organicproducts()
{
    global $conn;
    $select_organic_products = "SELECT * FROM `organic_products_tb`";
    $run_select_organic_products = mysqli_query($conn, $select_organic_products);
    while ($row_data = mysqli_fetch_assoc($run_select_organic_products)) {
        $organic_id = $row_data["organic_id"];
        $product_name = $row_data["product_name"];

        // Display the category
        echo " <li class='nav-item bg-dark'>
        <a class='nav-link text-light' href='index.php?organic_products=$organic_id'> $product_name</a>
        </li>";
    }
}

// search function
function search_product()
{
    global $conn;
    if(isset($_GET['search_data_button']))
    {
        $search_data_value = $_GET['search_data'];

        $select_product_query = "SELECT * FROM `all_products_tb` WHERE product_keyword LIKE '%$search_data_value%'";
        $run_query = mysqli_query($conn, $select_product_query);

        while ($row = mysqli_fetch_assoc($run_query)) {
            $product_id = $row["product_id"];
            $p_name = $row["product_name"];
            $p_descrioption = $row["product_description"];
            $product_image1 = $row["product_image"];
            $p_price = $row["product_price"];
            $veg_id = $row["veg_id"];
            $fruit_id = $row["fruit_id"];
            $meat_id = $row["meat_id"];
            $organic_id = $row["organic_id"];

            echo "<div class='col-md-4 p-1'>
            <div class='card nav-item  bg-dark'>
            <img src='./Admin/product_image/$product_image1 ' class='card-img-top p-1' alt='...'>
            <div class='card-body nav-link text-light'>
                <h5 class='card-title'>$p_name</h5>
                <p class='card-text'>$p_descrioption </p>
                <h6 class='card-text'>$p_price</h6>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add To Cart</a>
            </div>
        </div>
    </div>";
        }
    }
}

//Get Ip Address

function getIPAddress()
    {  
    //whether ip is from the share internet  
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
    //whether ip is from the remote address  
    else{  
            $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
}  
    //$ip = getIPAddress();  
    //echo 'User Real IP Address - '.$ip;

// Cart Funtions
function cart()
{
    if(isset($_GET['add_to_cart']))
    {
        global $conn;
        $ip = getIPAddress(); 
        $get_product_id = $_GET['add_to_cart'];

        $seleect_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip' AND product_id = '$get_product_id'";
        $run_query = mysqli_query($conn, $seleect_query);

        $num_of_rows = mysqli_num_rows($run_query);
        if ($num_of_rows > 0) {
            echo "<script>alert('This item is already in the Cart')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
        else{
            $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES($get_product_id, '$ip', 0)";
            $run_query = mysqli_query($conn,  $insert_query);

            echo "<script>alert('Your Item Added')</script>";
        }
    }
}

//get cart item count show
function cart_items()
{
    if(isset($_GET['add_to_cart']))
    {
        global $conn;
        $ip = getIPAddress(); 

        $seleect_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip'";
        $run_query = mysqli_query($conn, $seleect_query);

        $count_cart_items = mysqli_num_rows($run_query);
    }
    else
    {
        global $conn;
        $ip = getIPAddress(); 

        $seleect_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip'";
        $run_query = mysqli_query($conn, $seleect_query);

        $count_cart_items = mysqli_num_rows($run_query);
    }

    echo $count_cart_items;
}

//Total Prices
function total_cart_price()
{
    global $conn;
    $ip = getIPAddress(); 
    $total = 0;
    $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip'";
    $run_query = mysqli_query($conn, $select_query);

    while ($row=mysqli_fetch_array($run_query)) {
        # code...
        $product_id = $row['product_id'];
        $select_query_product = "SELECT * FROM `all_products_tb` WHERE product_id = '$product_id'";
        $run_query_product = mysqli_query($conn, $select_query_product);

        while ($row_product_price = mysqli_fetch_array($run_query_product)) {
            # code...
            $product_price = array($row_product_price['product_price']);
            $product_total = array_sum($product_price);
            $total = $total + $product_total;
        }
    }
    echo $total;
}
?>