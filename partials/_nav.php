<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- main for home page & menubar -->
    <link rel="stylesheet" href="/Final/Home_page/css/style.css">
    <!--for resposnsive-->
    <link rel="stylesheet" media="screen and (max-width: 1100px)" href="/Final/Home_page/css/phone.css">
    <!--for login modals-->
    <link rel="stylesheet" href="/Final/Home_page/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Kaushan+Script&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Wild Bees</title>
</head>

<body>
    <!-- navigation menu -->
    <nav id="navbar">
        <div id="logo">
            <img src="/Final/Home_page/img/logo.png" alt="">
            <a href="/Final/Home_page/index.php">Wild Bees</a>
            
        </div>
        <ul>
            <li>
                <form class="search_bar">
                    <input class="search_box" type="search" placeholder="Search products" aria-label="Search">
                    <!-- <button class="srch_btn" type="submit"></button> -->
                    <i class="fas fa-search" id="srch_btn"></i>
                </form>
            </li>
            <li class="item"><a href="\Final\Home_page\index.php">Home</a></li>
            <li class="item"><a href="#services-container">Categories</a></li>
            <li class="item"><a href="#Offers-section">Offers</a></li>
            <li class="item">
                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Cart</span>
                    <!-- <div class="badge qty">0</div> -->
                </a></li>
            <li class="item" id="log_in"><a href="#">Log in</a></li>
            <!-- cart -->
            <!-- <div class="item">

                <div class="cart-dropdown">
                    <div class="cart-list" id="cart_product">
                    </div>
                    <div class="cart-btns">
                        <a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i> edit cart</a>
                    </div>
                </div>
            </div> -->
            <!-- cart -->
        </ul>
    </nav>

    <!-- side menu-bar start-->
    <div class="title">Category</div>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-bars" id="cancel"></i>
    </label>
    <div class="category">
        <!-- <div class="title">Category</div> -->
        <ul>
            <li><a href="#">My favourite list</a></li>
            <li><a href="#">Offers</a></li>
            <li><a href="#">Popular</a></li>
            <li><a href="#">Flash sales</a></li>
            <li><a id="voucher" href="#">Voucher/Coupon</a></li>
            <li>
                <a class="sub_menu1">Cooking Essentials<span class="fas fa-caret-right item1"></span></a>
                <ul class="sub_menu1_show">
                    <li><a href="/Final/Home_page/rice.php">Rice</a></li>
                    <li><a href="#">Lentils</a></li>
                    <li><a href="#">Oil</a></li>
                    <li><a href="#">Flour & Semolina</a></li>
                    <li><a href="#">Salt & Sugar</a></li>
                    <li><a href="#">Piyaz, Aada, Roshun</a></li>
                    <li><a href="#">Spices</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="sub_menu2">Fruits & vegetables<span class="fas fa-caret-right item2"></span></a>
                <ul class="sub_menu2_show">
                    <li><a href="#">Vegetables</a></li>
                    <li><a href="#">Fruits</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="sub_menu3">Meat & Fish<span class="fas fa-caret-right item3"></span></a>
                <ul class="sub_menu3_show">
                    <li><a href="#">Meat</a></li>
                    <li><a href="#">Fish</a></li>
                </ul>
            </li>
            <li><a href="#" class="sub_menu4">Breads & Bakery<span class="fas fa-caret-right item4"></span></a>
                <ul class="sub_menu4_show">
                    <li><a href="#">Breads</a></li>
                    <li><a href="#">Cookies</a></li>
                    <li><a href="#">Cakes</a></li>
                </ul>
            </li>
            <li><a href="#" class="sub_menu5">Milk & dairy products<span class="fas fa-caret-right item5"></span></a>
                <ul class="sub_menu5_show">
                    <li><a href="#">Eggs</a></li>
                    <li><a href="#">Liquid & powder Milk</a></li>
                    <li><a href="#">Cheese</a></li>
                    <li><a href="#">Yogurt & Sweets</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="sub_menu6">Sancks & instant foods<span class="fas fa-caret-right item6"></span></a>
                <ul class="sub_menu6_show">
                    <li><a href="#">Noodles</a></li>
                    <li><a href="#">Soup</a></li>
                    <li><a href="#">Pasta</a></li>
                    <li><a href="#">Sauces</a></li>
                    <li><a href="#">Chips</a></li>
                </ul>
            </li>
            <li><a href="#" class="sub_menu7">Drinks<span class="fas fa-caret-right item7"></span></a>
                <ul class="sub_menu7_show">
                    <li><a href="#">Tea</a></li>
                    <li><a href="#">Coffee</a></li>
                    <li><a href="#">Soft drinks</a></li>
                </ul>
            </li>
            <li><a href="#" class="sub_menu8">Home & cleaning<span class="fas fa-caret-right item8"></span></a>
                <ul class="sub_menu8_show">
                    <li><a href="#">Air Fresheners</a></li>
                    <li><a href="#">Soaps & Detergents</a></li>
                    <li><a href="#">Kitchen Accessories</a></li>
                    <li><a href="#">Cleaning Accessories</a></li>
                </ul>
            </li>
            <li><a href="#" class="sub_menu9">Beauty & health<span class="fas fa-caret-right item9"></span></a>
                <ul class="sub_menu9_show">
                    <li><a href="#">Shampoo & Hair Care</a></li>
                    <li><a href="#">Shaving & Facial Care</a></li>
                    <li><a href="#">Deodorants/Body Sprays</a></li>
                    <li><a href="#">Skin Care</a></li>
                    <li><a href="#">Handwash, Sanitizers & Masks</a></li>
                </ul>
            </li>
            <li><a href="#" class="sub_menu10">Baby foods & care<span class="fas fa-caret-right item10"></span></a>
                <ul class="sub_menu10_show">
                    <li><a href="#">Baby Diapers & wipes</a></li>
                    <li><a href="#">Baby Food</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- side menu-bar end-->

    <!-- script for side-menu -->
    <!-- <script src="\Final\Home_page\js\side_menu.js"></script> -->
    <script>
        $('.sub_menu1').click(function() {
            $('.category ul .sub_menu1_show').toggleClass("show1");
            $('.category ul .item1').toggleClass("rotate");
        });
        $('.sub_menu2').click(function() {
            $('.category ul .sub_menu2_show').toggleClass("show2");
            $('.category ul .item2').toggleClass("rotate");
        });
        $('.sub_menu3').click(function() {
            $('.category ul .sub_menu3_show').toggleClass("show3");
            $('.category ul .item3').toggleClass("rotate");
        });
        $('.sub_menu4').click(function() {
            $('.category ul .sub_menu4_show').toggleClass("show4");
            $('.category ul .item4').toggleClass("rotate");
        });
        $('.sub_menu5').click(function() {
            $('.category ul .sub_menu5_show').toggleClass("show5");
            $('.category ul .item5').toggleClass("rotate");
        });
        $('.sub_menu6').click(function() {
            $('.category ul .sub_menu6_show').toggleClass("show6");
            $('.category ul .item6').toggleClass("rotate");
        });
        $('.sub_menu7').click(function() {
            $('.category ul .sub_menu7_show').toggleClass("show7");
            $('.category ul .item7').toggleClass("rotate");
        });
        $('.sub_menu8').click(function() {
            $('.category ul .sub_menu8_show').toggleClass("show8");
            $('.category ul .item8').toggleClass("rotate");
        });
        $('.sub_menu9').click(function() {
            $('.category ul .sub_menu9_show').toggleClass("show9");
            $('.category ul .item9').toggleClass("rotate");
        });
        $('.sub_menu10').click(function() {
            $('.category ul .sub_menu10_show').toggleClass("show10");
            $('.category ul .item10').toggleClass("rotate");
        });
        $('.category ul li').click(function() {
            $(this).addClass("active").siblings().removeClass("active");
        });
    </script>

</body>

</html>