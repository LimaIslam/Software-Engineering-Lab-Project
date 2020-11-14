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
    <title>Cooking Essentials</title>
</head>

<body>
    <?php require 'partials/_nav.php' ?>
    <?php require 'partials/_login.php' ?>

    <div class="display_body">

        <!-- Products display section -->
        <section id="services-container" class="category_container">
            <h1 class="h-primary center">Cooking essentials</h1>
            <div id="categories1">
                <div class="box">
                    <img src="\Final\Home_page\img\rice.webp" alt="">
                    <h2 class="h-secondary center"><a href="/Final/Home_page/rice.php">Rice</a></h2>
                </div>
                <div class="box">
                    <img src="/Final/Home_page/img/oil.gif" alt="">
                    <h2 class="h-secondary center"><a href="/Final/category/vegetables.html">Oil</a>
                    </h2>
                </div>
                <div class="box">
                    <img src="/Final/Home_page/img/dal.webp" alt="">
                    <h2 class="h-secondary center"><a href="/Final/category/spices.html">Lentils</a></h2>
                </div>
                <div class="box">
                    <img src="/Final/Home_page/img/eggs.webp" alt="">
                    <h2 class="h-secondary center"><a href="/Final/category/vegetables.html">Eggs</a>
                    </h2>
                </div>
            </div>
            <div id="categories2">
                <div class="box">
                    <img src="\Final\Home_page\img\flour.webp" alt="">
                    <h2 class="h-secondary center"><a href="\Final\Home_page\cooking.php">Flour & Semolina</a></h2>
                </div>
                <div class="box">
                    <img src="/Final/Home_page/img/salt-sugar.webp" alt="">
                    <h2 class="h-secondary center"><a href="/Final/category/vegetables.html">Salt & Sugar</a>
                    </h2>
                </div>
                <div class="box">
                    <img src="/Final/Home_page/img/sauces.webp" alt="">
                    <h2 class="h-secondary center"><a href="/Final/category/spices.html">Sauces</a></h2>
                </div>
                <div class="box">
                    <img src="/Final/Home_page/img/spices.webp" alt="">
                    <h2 class="h-secondary center"><a href="/Final/category/vegetables.html">Spices</a>
                    </h2>
                </div>
            </div>
        </section>
    </div>


    <!-- script for all modals -->
    <script src="\Final\Home_page\js\login_modal.js"></script>

</body>

</html>