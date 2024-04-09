<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/resetcss.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="header">
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="currency text-center text-sm-left"> <!-- Căn giữa và căn trái cho phần currency -->
                            <p style="font-size: 14px; padding: 5px;">Currency: GBP <i class="fa-solid fa-angle-down"></i></p> <!-- Giảm kích thước chữ và padding -->
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="header-btn text-center text-sm-right"> <!-- Căn giữa và căn phải cho phần nút -->
                            <a href="../View/SignUp.php" class="btn register" style="padding: 8px 16px; font-size: 14px;">Register</a> <!-- Giảm padding và kích thước cho phù hợp -->
                            <a href="../View/SignUp.php" class="btn signin" style="padding: 8px 16px; font-size: 14px;">Sign In</a> <!-- Giảm padding và kích thước cho phù hợp -->
                            <a href="#" class="btn cart" style="padding: 8px 16px; font-size: 14px;"> <!-- Giảm padding và kích thước cho phù hợp -->
                                <i class="fa-solid fa-cart-shopping"></i> empty <i class="fa-solid fa-angle-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand logo" href="Home.php"><strong>AVENUE</strong>
            <span>FASHION</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-4">
                <li class="nav-item active dropdown">
                    <a class="nav-link btn dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MENS<span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu sub-nav p-3" aria-labelledby="navbarDropdown">
                        <div class="row px-3">
                            <div class="col-md-6">
                                <h2>CASUALS</h2>
                                <ul>
                                    <li><a class="dropdown-item" href="#">Jackets</a></li>
                                    <li><a class="dropdown-item" href="#">Hoodies & Sweatshirts</a></li>
                                    <li><a class="dropdown-item" href="#">Polo Shirts</a></li>
                                    <li><a class="dropdown-item" href="#">Sportswear</a></li>
                                    <li><a class="dropdown-item" href="#">Trousers & Chinos</a></li>
                                    <li><a class="dropdown-item" href="#">T-Shirts</a></li>
                                </ul>

                            </div>
                            <div class="col-md-6">
                                <h2>FORMAL</h2>
                                <ul>
                                    <li><a class="dropdown-item" href="#">Jackets</a></li>
                                    <li><a class="dropdown-item" href="#">Shirts</a></li>
                                    <li><a class="dropdown-item" href="#">Suits</a></li>
                                    <li><a class="dropdown-item" href="#">Trousers</a></li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <div class="banner">
                                    <b>Autumn sale!</b>
                                    up to 50% off
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link btn dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WOMENS<span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu sub-nav p-3" aria-labelledby="navbarDropdown">
                        <div class="row px-3">
                            <div class="col-md-6">
                                <h2>CASUALS</h2>
                                <ul>
                                    <li><a class="dropdown-item" href="#">Jackets</a></li>
                                    <li><a class="dropdown-item" href="#">Hoodies & Sweatshirts</a></li>
                                    <li><a class="dropdown-item" href="#">Polo Shirts</a></li>
                                    <li><a class="dropdown-item" href="#">Sportswear</a></li>
                                    <li><a class="dropdown-item" href="#">Trousers & Chinos</a></li>
                                    <li><a class="dropdown-item" href="#">T-Shirts</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h2>FORMAL</h2>
                                <ul>
                                    <li><a class="dropdown-item" href="#">Jackets</a></li>
                                    <li><a class="dropdown-item" href="#">Shirts</a></li>
                                    <li><a class="dropdown-item" href="#">Suits</a></li>
                                    <li><a class="dropdown-item" href="#">Trousers</a></li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <div class="banner">
                                    <b>Autumn sale!</b>
                                    up to 50% off
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn" href="Brand.php">THE BRAND</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn" href="Local.php">LOCAL STORES</a>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link btn dropdown-toggle" href="Lookbook.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LOOKBOOK<span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu sub-nav p-2" aria-labelledby="navbarDropdown">
                        <div class="row px-3">
                            <div class="col-md-6">
                                <h2 class="text-upcase">Our Lookbooks</h2>
                                <ul>
                                    <li><a class="dropdown-item" href="#">Latest Posts (mixed)</a></li>
                                    <li><a class="dropdown-item" href="#">Men’s Lookbook</a></li>
                                    <li><a class="dropdown-item" href="#">Women’s Lookbook</a></li>
                                </ul>

                            </div>
                            <div class="col-md-6">
                                <h2 class="text-upcase">Your Lookbook</h2>
                                <ul>
                                    <li><a class="dropdown-item" href="#">View and Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <div class="banner">
                                    <b>Autumn sale!</b>
                                    up to 50% off
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="search-form">
                <input type="search" placeholder="Search..." class="search-form form-control search-input">
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
            </div>
        </div>
    </nav>