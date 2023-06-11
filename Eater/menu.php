<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=ul, initial-scale=1.0" />
    <meta name="author" content="Peter" />
    <meta name="keywords" content="menu, Eater" />
    <meta name="description" content="This is a menu page where leads to individual product pages for Eater website." />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Eater | Menu</title>
</head>
<body id="product_page">
<?php include 'navigation.php';?>
    
    <article class="menu-nav">
        <a href="appetizers.php"><div class="container appetizers-container"><div class="container1"></div><div class="container2"><p class="description">Appetizers</p></div><div class="container3"><p class="hover-black">Appetizers</p></div>
        </div></a><a href="entree.php"><div class="container entree-container"><div class="container1"></div><div class="container2"><p class="description">Entree</p></div><div class="container3"><p class="hover-white">Entree</p></div>
        </div></a><a href="desserts.php"><div class="container desserts-container"><div class="container1"></div><div class="container2"><p class="description">Desserts</p></div><div class="container3"><p class="hover-black">Desserts</p></div>
        </div></a><a href="beverage.php"><div class="container beverage-container"><div class="container1"></div><div class="container2"><p class="description">Beverage</p></div><div class="container3"><p class="hover-white">Beverage</p></div></div></a>
    </article>
    
    <?php include 'footer.php';?>
    <script src="js/nav.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
</body>
</html>