<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:signinsignup.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistry</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>" >
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <h1>Artistry</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="products.php">All Products</a></li>
                    <!-- <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li> -->
                    <li><a href="signinsignup.php">Account</a></li>
                </ul>
            </nav>
            <img src="images/cart.png" width="30px" height="30px">
        </div>

    </div>


    <!-- Featured Products -->
    <div class="small-container">
        
        <div class="row">
            <h2 class="title">All Products</h2>
        </div>
        <div class="row">
                <div class="col-4" >
                    <a href="productdetails1.php"><img src="Img/product-1.jpg"></a>
                    <h4>Painting 01</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>$100</p>
                </div>
            
            <div class="col-4">
                <a href="productdetails2.php"><img src="Img/product-2.jpg"></a>
                <h4>Painting 02</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <a href="productdetails3.php"><img src="Img/product-3.jpg"></a>
                <h4>Painting 03</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <a href="productdetails4.php"><img src="Img/product-4.jpg"></a>
                <h4>Painting 04</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <a href="productdetails5.php"><img src="Img/product-5.jpg"></a>
                <h4>Painting 05</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <a href="productdetails6.php"><img src="Img/product-6.jpg"></a>
                <h4>Painting 06</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <a href="productdetails7.php"><img src="Img/product-7.jpg"></a>
                <h4>Painting 07</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <a href="productdetails8.php"><img src="Img/product-8.jpg"></a>
                <h4>Painting 08</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <a href="productdetails9.php"><img src="Img/product-9.jpg"></a>
                <h4>Painting 09</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <a href="productdetails10.php"><img src="Img/product-10.jpg"></a>
                <h4>Painting 10</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <a href="productdetails11.php"><img src="Img/product-11.jpg"></a>
                <h4>Painting 11</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <a href="productdetails12.php"><img src="Img/product-12.jpg"></a>
                <h4>Painting 12</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
        </div>
        <div class="page-btn">
            <a href="products.php"><span>1</span></a>
            <a href="products1.php"><span>2</span></a>
            <!-- <span>3</span> -->
            <!-- <span>&#8594;</span> -->
        </div>
    </div>
</html>

</body>