<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=ul, initial-scale=1.0" />
    <meta name="author" content="Peter, Jordan" />
    <meta name="keywords" content="appetizers, menu, Eater" />
    <meta name="description" content="This is the appetizers page for Eater website." />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Eater | Appetizers</title>
</head>
<body id="product_page">
<?php include 'navigation.php';?>
	
    <article id="appetizers" class="content">
        <button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>
        <div class="header-menu">
            <h1>Appetizers</h1>
        </div>
        <div class="product">
            <div class="menu-content">
				<div class="info-left">
                    <!--Info link: https://www.tasteofhome.com/recipes/beer-dip/ -->
                    <p><span class="product_name">Beer Dip</span><br/><br/>Ranch dressing mix flavors this easy dip packed with shredded cheese. It's perfect paired with pretzels. Be forewarned, though—it's hard to stop eating once you've started! The beer cheese dip can be made with any type of beer, including nonalcoholic. I've taken it to many parties and I am always asked for the recipe.</p>
                    <br/>
                    <p class="price">RM12</p>
                    <br/>
                    <button onclick="autofill('Beer Dip')">Enquire this product</button>
                </div>
                <div class="image-right">
                    <!--Image link: https://www.tasteofhome.com/wp-content/uploads/2018/01/Beer-Dip_EXPS_THSO18_33049_D01_25_8b-696x696.jpg -->
                    <img src="images/beer_dip.jpg" alt="Beer Dip" />
                </div>
            </div>
        </div>
        <div class="product">
            <div class="menu-content">
                <div class="image-left">
                    <!--Image link: https://www.tasteofhome.com/wp-content/uploads/2018/01/Homemade-Guacamole_EXPS_THJJ18_38391_D01_31_3b-7-696x696.jpg -->
                    <img src="images/homemade_guacamole.jpg" alt="homemade_guacamole" />
                </div>
                <div class="info-right">
                    <!--Info Link: https://www.tasteofhome.com/recipes/homemade-guacamole/ -->
                    <p><span class="product_name">Homemade Guacamole</span><br/><br/>Ever wonder how to make guacamole? Just whip together this delicious blend of your favorite fresh ingredients.</p>
                    <br/>
                    <p class="price">RM10</p>
                    <br/>
                    <button onclick="autofill('Homemade Guacamole')">Enquire this product</button>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="menu-content">
                <div class="info-left">
                    <!--Info Link: https://www.tasteofhome.com/recipes/pastrami-roll-ups/ -->
                    <p><span class="product_name">Pastrami Roll-Ups</span><br/><br/>For a book club event, I created pastrami roll-ups with cream cheese and a pickle. Those tasty bites quickly pulled a disappearing act.</p>
                    <br/>
                    <p class="price">RM15</p>
                    <br/>
                    <button onclick="autofill('Pastrami Roll-Ups')">Enquire this product</button>
                </div>
                <div class="image-right">
                    <!--Image link: https://www.tasteofhome.com/wp-content/uploads/2018/01/Pastrami-Roll-Ups_exps152508_TH143190D09_25_6b_RMS-696x696.jpg -->
                    <img src="images/pastrami_roll-ups.jpg" alt="pastrami_roll-ups" />
                </div>
            </div>
        </div>
        <div class="product">
            <div class="menu-content">
                <div class="image-left">
                    <!--Image link: https://www.tasteofhome.com/wp-content/uploads/2018/01/Tomato-Goat-Cheese-Spread_EXPS_HCA17_120621_C10_20_4b-696x696.jpg -->
                    <img src="images/tomato-goat_cheese_spread.jpg" alt="tomato-goat_cheese_spread" />
                </div>
                <div class="info-right">
                    <!--Info link: https://www.tasteofhome.com/recipes/tomato-goat-cheese-spread/ -->
                    <p><span class="product_name">Tomato-Goat Cheese Spread</span><br/><br/>A good friend shared this recipe with me. It is super easy and so delicious. Guests will love it! It's best served with crackers that aren't strongly seasoned.</p>
                    <br/>
                    <p class="price">RM15</p>
                    <br/>
                    <button onclick="autofill('Tomato-Goat Cheese Spread')">Enquire this product</button>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="menu-content">
                <div class="info-left">
                    <!-- https://www.tasteofhome.com/recipes/strawberry-salsa/ -->
                    <p><span class="product_name">Strawberry Salsa</span><br/><br/>This deliciously different salsa is versatile, fresh-tasting and colorful. People are surprised to see a salsa made with strawberries, but it's excellent over grilled chicken and pork and as a dip with corn chips.</p>
                    <br/>
                    <p class="price">RM8</p>
                    <br/>
                    <button onclick="autofill('Strawberry Salsa')">Enquire this product</button>
                </div>
                <div class="image-right">
                    <!--Image link: https://www.tasteofhome.com/recipes/strawberry-salsa/ -->
                    <img src="images/strawberry_salsa.jpg" alt="strawberry_salsa" />
                </div>
            </div>
        </div>
    </article>
	
    <?php include 'footer.php';?>
    <script src="js/nav.js"></script>
    <script src="js/transfer.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
	<script src="js/buttontop.js"></script>

</body>
</html>