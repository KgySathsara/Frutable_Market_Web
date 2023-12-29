<?php
include "./includes/connection.php";
include "./function/commen_function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container-fluid p-0">
        <!-- nav Bar -->
        <nav class="navbar navbar-expand-lg navbar-primary bg-dark">
            <div class="container-fluid">
                <a class="nav-link text-light" href="./Admin/index.php"><h3>Kgy Sathsara</h3></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./index.php">Shop </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link text-light dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop Details</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./Shop_Details/Vegitable.php">Vegitables</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="./Shop_Details/Furit.php">Furits</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="./Shop_Details/Meat_&_Fish.php">Meats & Fish</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="./Shop_Details/Organic_product.php">Organic Products</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link disabled"><i class="fa fa-cart-plus" aria-hidden="true"></i><sup><?php cart_items();?></sup></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-light "><h7>Total : <?php total_cart_price(); ?> Rs</h7></a>
                        </li>
                    </ul>
                    <form class="d-flex" action="search_product.php" method="GET">
                        <input class="form-control me-2" type="search" name="search_data" placeholder="Search" aria-label="Search">
                        <input type="submit" name="search_data_button" value="search" class="btn btn-outline-success">
                    </form>
                </div>
            </div>
        </nav>
        <!-- Nav Bar End -->
        <hr class="dropdown-divider">
        <!--Header Section-->
        <div class="bg-dark p-1">
            <h3 class="text-center  text-light ">Frutable-Market</h3>
            <p class="text-center  text-light">100% Organic and Fresh Fruit & Vegetables For You.</p>
        </div>
        <!--Header Section End-->
        <hr class="dropdown-divider">
        <!--Content Section -->
        <div class="row">
            <div class="bg-ligh col-md-10 ">
                <div class="row">
                    <?php
                        search_product();
                        get_unique_Vegetables();
                        get_unique_fruits();
                        get_unique_meats();
                        get_unique_organic();
                    ?>
                </div>
            </div>

            <div class="col-md-2 bg-secondary p-0 bg-dark">
                <!--list 1-->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-secondary">
                        <a class="nav-link text-light" href="#"><h4>Vegetables</h4></a>
                    </li>
                    <?php
                        getvegetables();
                    ?>
                </ul>

                <!--list -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-secondary">
                        <a class="nav-link text-light " href="#"><h4>Fruits</h4></a>
                    </li>
                    <?php
                        getfruits();
                    ?>
                </ul>

                <!--list 1-->
                <ul class="navbar-nav me-auto text-center ">
                    <li class="nav-item bg-secondary">
                        <a class="nav-link text-light" href="#"><h4>Meats</h4></a>
                    </li>
                    <?php
                        getmeats();
                    ?>
                </ul>

                <!--list 1-->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item  bg-secondary">
                        <a class="nav-link text-light" href="#"><h4>Organic</h4></a>
                    </li>
                    <?php
                        get_organicproducts();
                    ?>
                </ul>
            </div>
        </div>
        <!--Content Section End-->
        
        <!-- footer Start-->
        <div class="navbar-light bg-dark p-1 text-center"> 
            <p class="bg-light p-1"><i class="fa fa-copyright p-1" ></i>All right reserved Designed by KgySathsara</p>
        </div>
        <!--Footer End-->
    </div>
    
    <!--Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html> 