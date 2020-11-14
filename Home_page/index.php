<?php require 'partials/_nav.php' ?>
<?php require 'partials/_login.php' ?>

<body>
    <!-- home middle section -->
    <div class="display_body">
        <section id="home">
            <h1 class="h-primary">Welcome to our website</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>At veritatis repudiandae,
            praesentium culpa odit a quasi vel illum! <br>
            Veniam saepe sit recusandae id fugiat soluta dolor qui libero repellendus odio.</p>
            <!-- <button class="btn" id="button">Order now</button> -->
        </section>


        <!-- Products display section -->
        <section id="services-container" class="category_container">
            <h1 class="h-primary center">Categories</h1>
            <div id="categories1">
                <div class="box">
                    <img src="\Final\Home_page\img\rice.webp" alt="">
                    <h2 class="h-secondary center"><a href="\Final\Home_page\cooking.php">Cooking essentials</a></h2>
                    <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                        Veniam distinctio magni culpa nobis adipisci.</p>
                    <button class="btn" id="button">View products</button>
                </div>
                <div class="box">
                    <img src="/Final/Home_page/img/vegetables.jpg" alt="">
                    <h2 class="h-secondary center"><a href="/Final/category/vegetables.html">Fruits & Vegetables</a>
                    </h2>
                    <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                        Veniam distinctio magni culpa nobis adipisci.</p>
                    <button class="btn" id="button">View products</button>
                </div>
                <div class="box">
                    <img src="/Final/Home_page/img/fish.jpg" alt="">
                    <h2 class="h-secondary center"><a href="/Final/category/spices.html">Meat and Fish</a></h2>
                    <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                        Veniam distinctio magni culpa nobis adipisci.</p>
                    <button class="btn" id="button">View products</button>
                </div>
                <div class="box">
                    <img src="/Final/Home_page/img/spices.webp" alt="">
                    <h2 class="h-secondary center"><a href="/Final/category/vegetables.html">Spices</a>
                    </h2>
                    <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                        Veniam distinctio magni culpa nobis adipisci.</p>
                    <button class="btn" id="button">View products</button>
                </div>
            </div>
            <!-- </section id="services-container1"> -->
            <div id="categories2">
                <div class="box">
                    <img src="/Final/Home_page/img/dairy.jpg" alt="">
                    <h2 class="h-secondary center"><a href="/Final/category/dairy.html">Milk & dairy products</a></h2>
                    <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                        Veniam distinctio magni culpa nobis adipisci.</p>
                    <button class="btn" id="button">View products</button>
                </div>
                <div class="box">
                    <img src="/Final/Home_page/img/snacks.jpg" alt="">
                    <h2 class="h-secondary center"><a href="/Final/category/snacks.html">Sancks</a></h2>
                    <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                        Veniam distinctio magni culpa nobis adipisci.</p>
                    <button class="btn" id="button">View products</button>
                </div>
                <div class="box">
                    <img src="/Final/Home_page/img/breads.webp" alt="">
                    <h2 class="h-secondary center"><a href="/Final/category/bakery.html">Breads & Bakery</a></h2>
                    <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                        Veniam distinctio magni culpa nobis adipisci.</p>
                    <button class="btn" id="button">View products</button>
                </div>
                <div class="box">
                    <img src="/Final/Home_page/img/soft-drinks.webp" alt="">
                    <h2 class="h-secondary center"><a href="/Final/category/drinks.html">Drinks</a></h2>
                    <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                        Veniam distinctio magni culpa nobis adipisci.</p>
                    <button class="btn" id="button">View products</button>
                </div>
            </div>
        </section>

        <!-- Offer section -->
        <section id="Offers-section">
            <h1 class="h-primary center">Offers</h1>
            <div id="offer">
                <div class="offer-item">
                    <img src="/Final/Home_page/img/offer(4).png" alt="">
                </div>
                <div class="offer-item">
                    <img src="/Final/Home_page/img/offer(4).png" alt="">
                </div>
                <div class="offer-item">
                    <img src="/Final/Home_page/img/offer(4).png" alt="">
                </div>

            </div>
        </section>
        <!-- Offer section ends -->

        <!-- Feedback section -->
        <!-- <section id="contact">
            <h1 class="h-primary center">Give us feedback</h1>
        </section> -->

        <!-- contact section -->
        <section id="contact">
            <h1 class="h-primary center">Contact Us</h1>
            <div id="contact-box">
                <form action="">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" name="name" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number: </label>
                        <input type="phone" name="name" id="phone" placeholder="Enter your phone">
                    </div>
                </form>
            </div>
        </section>
        <!-- contact section ends -->
    </div>



    <footer>
        <div class="center">
            Copyright &copy; groceryshop.atlassian.net. All rights reserved!
        </div>
    </footer>
</body>