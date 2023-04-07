<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | Pure Fusion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/skincare/styles.css">
        <link rel="shortcut icon" type="image/png" href="/skincare/img/favicon.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="animation.js" async></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <header>
        <nav class="navbar">
            <div class="left">
                <div id="icon" >
                    <a href="/skincare/main-page.php"><i class="fa fa-heart"></i> Pure Fusion </a>
                </div>
                <div class="flex-item dropdown">
                    <button class="dropbtn">Shop</button>
                    <div class="shop dropdown-content">
                        <div class="col1">
                            <img src="/skincare/img/skin-products.png">
                            <h4>Skincare</h4>
                            <a href="/skincare/body-mist.php">Face Wash</a>
                            <a href="/skincare/body-mist.php">Serum</a>
                            <a href="/skincare/body-wash.php">Body Wash</a>
                            <a href="/skincare/body-butter.php">Body Butter</a>
                        </div>
                        <div class="col1">
                            <img src="/skincare/img/hair-products1.png">
                            <h4>Haircare</h4>
                            <a href="/skincare/shampoo.php">Shampoo</a>
                            <a href="/skincare/conditioner.php">Conditioner</a>
                        </div>
                        <div class="col1">
                            <img src="/skincare/img/rose-fragrance.png">
                            <h4>Fragrance</h4>
                            <a href="/skincare/body-mist.php">Perfume</a>
                            <a href="/skincare/body-mist.php">Body Mist</a>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="right">
                <div id="sign-in" class="flex-item">
                    <a href="/skincare/login.php">Sign In</a>
                </div>
                <div id="cart-sym" class="flex-item">
                    <button><a href="#gt"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></button>
                </div>
            </div>
        </nav>
    </header>
    <body>
        <div class="container" style="margin-top: 4.5%;">
            <img class="banner" src="/skincare/img/skincare-banner.png">
            <img class="banner" src="/skincare/img/haircare-banner.png">
            <img class="banner" src="/skincare/img/fragrance-banner.png">
        </div>
        <div class="container" id="ad-container">
            <div class="ad-left left">
                <div class="ad-box right">
                    <h4 class="ad-label">Get Healthy Looking Skin</h4>
                    <button class="ad-btn">Shop Now</button>
                </div>
            </div>
            <div class="ad-right right">
                <img class="ad-image" src="/skincare/img/skin-model1.png">
            </div>
        </div>
        <div class="container" id="new-collection">
            <div class="new-collection left">
                <img src="/skincare/img/more-products1.png">
            </div>
            <div class="right">
                <div class="ad-box">
                    <h4 class="ad-label">GET READY FOR SUMMER</h4>
                    <button class="ad-btn">Shop Now</button>
                </div>
            </div>
        </div>
        <?php
            include('subscribe-form.php');
        ?>
    </body>
    <?php
     include('footer.php');
    ?>
</html>