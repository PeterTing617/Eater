<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=ul, initial-scale=1.0" />
    <meta name="author" content="Peter, Jordan" />
    <meta name="keywords" content="beverage, menu, Eater" />
    <meta name="description" content="This is the beverage page for Eater website." />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Eater | Beverages</title>
</head>
<body id="product_page">
<?php include 'navigation.php';?>
	
    <article id="beverage" class="content">
        <button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>
        <div class="header-menu">
            <h1>Beverages</h1>
        </div>
        <div class="product">
            <div class="menu-content">
				<!--Info link: https://www.womansday.com/food-recipes/food-drinks/g828/summer-drink-recipes/?slide=1 -->
				<div class="info-left">
                    <p><span class="product_name">Glow Water</span><br/><br/>This zero-calorie seltzer water mixes all your favorite refreshing flavors into one thirst-quenching summer drink.</p>
                    <br/>
                    <p class="price">RM5</p>
                    <br/>
                    <button onclick="autofill('Glow Water')">Enquire this product</button>
                </div>
                <!--Image link: https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gallery-1500073577-delish-glow-water-pin3-1558451622.jpg?crop=1.00xw:0.669xh;0,0.100xh&resize=768:* -->
				<div class="image-right">
                    <img src="images/glow_water.jpg" alt="glow_water" />
                </div>
            </div>
        </div>
        <div class="product">
            <div class="menu-content">
				<!--Image link: https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/delish-dole-whip-lemonade-pinterest-still002-1556141867.jpg?crop=1xw:0.9972862957937585xh;center,top&resize=768:* -->
                <div class="image-left">
                    <img src="images/dole_whip_lemonade.jpg" alt="dole_whip_lemonade" />
                </div>
				<!--Info link: https://www.womansday.com/food-recipes/food-drinks/g828/summer-drink-recipes/?slide=1 -->
                <div class="info-right">
                    <p><span class="product_name">Dole Whip Lemonade</span><br/><br/>Bring island vibes to your backyard with these tropical-flavored slushies, made with pineapple chunks, lemonade, and sweet coconut milk. Don't forget the cherry on top!</p>
                    <br/>
                    <p class="price">RM8</p>
                    <br/>
                    <button onclick="autofill('Dole Whip Lemonade')">Enquire this product</button>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="menu-content">
				<!--Info link: https://www.womansday.com/food-recipes/food-drinks/g828/summer-drink-recipes/?slide=1 -->
                <div class="info-left">
                    <p><span class="product_name">Mermaid Lemonade</span><br/><br/>Swap the rum for seltzer to make this brightly colored drink kid-friendly.</p>
                    <br/>
                    <p class="price">RM12</p>
                    <br/>
                    <button onclick="autofill('Mermaid Lemonade')">Enquire this product</button>
				</div>
				<!--Image link: https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/1520815840-mermaid-lemonade-horizontal-1-1558452627.jpg?crop=0.6666666666666666xw:1xh;center,top&resize=768:* -->
                <div class="image-right">
                    <img src="images/mermaid_lemonade.jpg" alt="mermaid_lemonade" />
                </div>
            </div>
        </div>
        <div class="product">
            <div class="menu-content">
				<!--Image link: https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/delish-lemonade-blushing-arnold-palmer-1558453218.jpg?crop=1.00xw:0.668xh;0,0.0288xh&resize=768:* -->
                <div class="image-left">
                    <img src="images/blushing_arnold_palmer.jpg" alt="blushing_arnold_palmer" />
                </div>
				<!--Info link: https://www.womansday.com/food-recipes/food-drinks/g828/summer-drink-recipes/?slide=1 -->
                <div class="info-right">
                    <p><span class="product_name">Blushing Arnold Palmer</span><br/><br/>A classic Arnold Palmer gets a makeover in this summer mocktail. Add a dash grenadine to your lemonade-iced tea mix for an extra sweet kick.</p>
                    <br/>
                    <p class="price">RM6</p>
                    <br/>
                    <button onclick="autofill('Blushing Arnold Palmer')">Enquire this product</button>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="menu-content">
				<!--Info link: https://www.womansday.com/food-recipes/food-drinks/g828/summer-drink-recipes/?slide=1 -->
                <div class="info-left">
                    <p><span class="product_name">Ginger-Peach Soda</span><br/><br/>This refresher is the perfect fruity and bubbly treat for a hot summer day.</p>
                    <br/>
                    <p class="price">RM10</p>
                    <br/>
                    <button onclick="autofill('Ginger-Peach Soda')">Enquire this product</button>
                </div>
                <!--Image link: https://hips.hearstapps.com/wdy.h-cdn.co/assets/17/20/1495037469-gallery-1464793480-clx0613110a.jpg?crop=1.00xw:0.668xh;0,0.106xh&resize=768:* -->
				<div class="image-right">
                    <img src="images/ginger_peach_soda.jpg" alt="ginger_peach_soda" />
                </div>
            </div>
        </div>
    </article>
	
    <?php include 'footer.php';?>
    <script src="js/nav.js"></script>
    <script src="js/transfer.js"></script>
    <script src="js/https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
	<script src="js/buttontop.js"></script>

</body>
</html>