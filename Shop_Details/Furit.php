<?php
include('./includes/connection.php');
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
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Shop </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop Details</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="Furit.php">Furits</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="Meat_&_Fish.php">Meats & Fish</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="Organic_product.php">Organic Products</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link disabled"><i class="fa fa-cart-plus" aria-hidden="true"></i><sup>3</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Total Price : 3000.00 Rs</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Nav Bar End -->

        <!--Header Section-->
        <div class="bg-light">
            <h3 class="text-center">Organic Furits</h3>
            <p class="text-center">100% Organic and Fresh Fruit & Vegitables For You.</p>
        </div>
        <!--Header Section End-->

        <!--Content Section -->
        <div class="row">
            <div class="col md-3">
                <div class="card">
                    <img src="../img/Basic_Veg/Tomato img 1.jpeg " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col md-3">
            <div class="card">
                    <img src="../img/Basic_Veg/Potatoes img 1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col md-3">
            <div class="card">
                    <img src="../img/Basic_Furit/Apple.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col md-3">
            <div class="card">
                    <img src="../img/Basic_Furit/Pineapple.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
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