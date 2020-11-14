<!-- login & sign in option -->
<!-- login window -->
<div class="bg-modal">
    <div class="loginbox">
        <div class="close-btn1">+</div>
        <img src="/Final/Home_page/img/pgreen.webp">
        <h1>Login here</h1>
        <form action="/Final/Home_page/index.php" method="post">
            <p>Phone number</p>
            <input type="text" placeholder="Enter your phone number">
            <p>Password</p>
            <input type="password" placeholder="Enter password">
            <input type="submit" value="Login"><br>
            <a href="#">Forget password?</a><br>
            <a id="sign_up" href="#">Sign up for an account</a>
        </form>
    </div>
</div>
<!-- login window end-->
<!-- sign in window -->
<div class="bg-modal2">
    <div class="signinbox">
        <div class="close-btn2">+</div>
        <h1>Sign in here</h1>
        <form action="/Final/Home_page/db/signup_db.php" method="POST">
            <p>Name</p>
            <input type="text" id="name" name="name" placeholder="Enter your name">
            <p>Phone number</p>
            <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number">
            <p>Password</p>
            <input type="password" id="pasword" name="password" placeholder="Enter password">
            <!-- <p>Confirm Password</p>
            <input type="cpassword" name="cpassword"placeholder="Re-type your password"> -->
            <input type="submit" value="Register"><br>
        </form>
    </div>
</div>
<!-- sign in window end-->


<!-- voucher modal starts-->
<div class="bg-modal3">
    <div class="coupon_box">
        <h1>Available voucher/coupon codes</h1>
        <p>
            use NAOH for winter discount (5%)<br>
            use NAOH for winter discount (5%)<br>
            use NAOH for winter discount (5%)<br>
            use NAOH for winter discount (5%)
        </p>
        <a class="close-btn3">OK</a>
    </div>
</div>
<!-- voucher modal ends-->






<!-- script for all modals -->
<script>
    //for showing login box
    document.getElementById('log_in').addEventListener('click', function() {
        document.querySelector('.bg-modal').style.display = 'flex';
    });
    //for showing login box from sign up option
    document.getElementById('sign_up').addEventListener('click', function() {
        document.querySelector('.bg-modal').style.display = 'none';
    });
    //for closing login box
    document.querySelector('.close-btn1').addEventListener('click', function() {
        document.querySelector('.bg-modal').style.display = 'none';
    });

    //for showing signing box from login box
    document.getElementById('sign_up').addEventListener('click', function() {
        document.querySelector('.bg-modal2').style.display = 'flex';
    });
    //for closing signin box
    document.querySelector('.close-btn2').addEventListener('click', function() {
        document.querySelector('.bg-modal2').style.display = 'none';
    });

    //for showing voucher code
    document.getElementById('voucher').addEventListener('click', function() {
        document.querySelector('.bg-modal3').style.display = 'flex';
    });
    document.querySelector('.close-btn3').addEventListener('click', function() {
        document.querySelector('.bg-modal3').style.display = 'none';
    });
</script>