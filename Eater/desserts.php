<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=ul, initial-scale=1.0" />
    <meta name="author" content="Peter, Jordan" />
    <meta name="keywords" content="desserts, menu, Eater" />
    <meta name="description" content="This is the desserts page for Eater website." />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Eater | Desserts</title>
</head>
<body id="product_page">
<?php include 'navigation.php';?>
	
    <article id="desserts" class="content">
        <button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>
        <div class="header-menu">
            <h1>Desserts</h1>
        </div>
        <div class="product">
            <div class="menu-content">
				<!--Info link: https://www.tasteofhome.com/recipes/chocolate-chip-cookie-delight/ -->
				<div class="info-left">
                    <p><span class="product_name">Chocolate Chip Cookie Delight</span><br/><br/>Italian and exceptional, this dessert recipe slashes the calories and is too good to be true. Top it off with cream, sprinkle with bitter chocolate, cocoa powder and voila! Your guilt-free dessert is ready to be devoured.</p>
                    <br/>
                    <p class="price">RM16</p>
                    <br/>
                    <button onclick="autofill('Chocolate Chip Cookie Delight')">Enquire this product</button>
                </div>
                <!--Image link: https://www.tasteofhome.com/wp-content/uploads/2018/01/Chocolate-Chip-Cookie-Delight_EXPS_SCMBZ19_36007_C01_24_6b-3-696x696.jpg -->
				<div class="image-right">
                    <img src="images/chocolate_chip_cookie_delight.jpg" alt="chocolate_chip_cookie_delight" />
                </div>
            </div>
        </div>
        <div class="product">
            <div class="menu-content">
				<!--Image link: https://www.tasteofhome.com/wp-content/uploads/2018/01/Whipped-Shortbread_EXPS_HCCBZ19_2523_E05_23_3b-3-696x696.jpg -->
                <div class="image-left">
                    <img src="images/whipped_shortbread.jpg" alt="whipped_shortbread" />
                </div>
				<!--Info link: https://www.tasteofhome.com/recipes/whipped-shortbread/ -->
                <div class="info-right">
                    <p><span class="product_name">Whipped Shortbread</span><br/><br/>First up: This almond malai kulfi is like happiness condensed in a matki. To make it extra special, top it off with dry fruits and make sure it is absolutely chilled before serving. So creamy, so simple - it hits all the right notes.</p>
                    <br/>
                    <p class="price">RM20</p>
                    <br/>
                    <button onclick="autofill('Whipped Shortbread')">Enquire this product</button>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="menu-content">
				<!--Info link: https://www.tasteofhome.com/recipes/frosted-banana-bars/ -->
                <div class="info-left">
                    <p><span class="product_name">Frosted Banana Bars</span><br/><br/>Sinful, rich and creamy, this recipe is the perfect finish to a meal. Tip: Make the lemon tart a day ahead, and store it in the refrigerator. Spruce it up with lemon rind, and trust us - this indulgent dessert really is as yummy as it looks.</p>
                    <br/>
                    <p class="price">RM18</p>
                    <br/>
                    <button onclick="autofill('Frosted Banana Bars')">Enquire this product</button>
                </div>
                <!--Image link: https://www.tasteofhome.com/wp-content/uploads/2018/01/Frosted-Banana-Bars_EXPS_DIYD19_1063_B05_15_3b-2-696x696.jpg -->
				<div class="image-right">
                    <img src="images/frosted_banana_bars.jpg" alt="frosted_banana_bars" />
                </div>
            </div>
        </div>
        <div class="product">
            <div class="menu-content">
				<!--Image link: https://www.tasteofhome.com/wp-content/uploads/2018/01/Frosted-Banana-Bars_EXPS_DIYD19_1063_B05_15_3b-2-696x696.jpg -->
                <div class="image-left">
                    <img src="images/no_bake_chocolate_chip_cannoli_cheesecake.jpg" alt="no_bake_chocolate_chip_cannoli_cheesecake" />
                </div>
				<!--Info link: https://www.tasteofhome.com/recipes/frosted-banana-bars/ -->
                <div class="info-right">
                    <p><span class="product_name">No-Bake Chocolate Chip Cannoli Cheesecake</span><br/><br/>Flavoured with elaichi and pista, take phirni to a whole new level with this exquisite recipe. Serve chilled in mitti ke kasore for a festive occasion and bask in the glory. This phirni is made of sugar and love.</p>
                    <br/>
                    <p class="price">RM15</p>
                    <br/>
                    <button onclick="autofill('No-Bake Chocolate Chip Cannoli Cheesecake')">Enquire this product</button>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="menu-content">
				<!--Info link: https://www.tasteofhome.com/recipes/triple-chocolate-cheesecake-bars/ -->
                <div class="info-left">
                    <p><span class="product_name">Triple-Chocolate Cheesecake Bars</span><br/><br/>What could be better than a brownie crust layered with chocolate cheesecake and topped with chocolate ganache? These cheesecake bars will satisfy even the biggest chocolate lovers out there.</p>
                    <br/>
                    <p class="price">RM24</p>
                    <br/>
                    <button onclick="autofill('Triple-Chocolate Cheesecake Bars')">Enquire this product</button>
                </div>
                <!--Image link: https://www.tasteofhome.com/wp-content/uploads/2019/08/Triple-Chocolate-Cheesecake-Bars_EXPS_TOHON19_217977_E06_12_2b-696x696.jpg -->
				<div class="image-right">
                    <img src="images/triple_chocolate_cheesecake_bars.jpg" alt="triple_chocolate_cheesecake_bars" />
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