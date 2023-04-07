<?php
include('session.php');
?>
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
    <?php
    include("navigation-bar1.php");
    ?>
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
