<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
                <a class="navbar-brand" href="../index.php">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop Details</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Vegitables</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Furits</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Meats & Fish</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Organic Products</a></li>
                            </ul>
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
            <h1 class="text-center mt-1">Admin Dash Board</h1>
        </div>
        <!--Header Section End-->

        <!--Content Section-->
        <div class="row">
                <div class="col-md-12 bg-secondary p-2 d-flex align-items-center">
                    <div class="AdminImg">
                        <a href=""><img src="../img/Avatar.png" ></a>
                        <p class="text-center text-light">Admin</p>
                    </div>
                    <div class="button text-center p-1  ">
                        <button><a href="index.php?All_Products" class="nav-link text-light bg-info my-1">Insert All Products</a></button>
                        <button><a href="index.php?insert_Veg" class="nav-link text-light bg-info my-1">Insert Vegitables</a></button>
                        <button><a href="index.php?insert_Fruit" class="nav-link text-light bg-info my-1">Insert Fruits</a></button>
                        <button><a href="index.php?insert_Meat" class="nav-link text-light bg-info my-1">Insert Meats & Fishes</a></button>
                        <button><a href="index.php?insert_Products" class="nav-link text-light bg-info my-1">Insert Organic Products</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1">Orders</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1">Payments</a></button>                 
                    </div>
                </div>     
            </div>
        <!--Content End-->

        <!--Form Area-->
        <div class="container my-4">
                <?php
                if(isset($_GET['All_Products']))
                {
                    include('All_Products.php');
                }
                if(isset($_GET['insert_Veg']))
                {
                    include('insert_Veg.php');
                }
                if(isset($_GET['insert_Fruit']))
                {
                    include('insert_Fruit.php');
                }
                if(isset($_GET['insert_Meat']))
                {
                    include('insert_Meat.php');
                }
                if(isset($_GET['insert_Products']))
                {
                    include('insert_Products.php');
                }
                ?>
            </div>
        <!--Form End-->
    </div>
        
    <!--Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>