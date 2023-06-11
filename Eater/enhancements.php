<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=ul, initial-scale=1.0" />
    <meta name="author" content="Peter" />
    <meta name="keywords" content="enhancements, Eater" />
    <meta name="description" content="This is a page listing all the enhancements made for Eater website." />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Eater | Enhancements</title>
</head>

<body id="enhancement_page">
<?php include 'navigation.php';?>

    <article id="enhancements" class="content">
        <h1>Assignment 1</h1>
        <div class="enhancement-container">
            <p class="enhancement-name">Enhancement 1: Drop-down Menu</p>
            <figure class="screenshot">
                <img src="images/drop-down.png" alt="Drop-down List" />
            </figure>
            <p class="enhancement-description">When hovering over the profile section, it will show 4 individual links where it will link to seperate profile pages. Initially it will not appear when the link is not being hovered. This is done by creating a sub-menu under profile link and making them disappear using display: none in the css file. When hovering the profile link, the sub-menu will become a block through display: block, thus it will appear on the screen.</p>
        </div>
        <div class="enhancement-container">
            <p class="enhancement-name">Enhancement 2: Menu animation</p>
            <figure class="screenshot">
                <img src="images/menu-animation.png" alt="Menu animation" />
            </figure>
            <p class="enhancement-description">At the <a href="menu.php">menu page</a>, there will be 4 sections of products to choose from which consist of appetizers, entree, desserts and beverage. When hovering over one of these sections, it will review a background image and the image will have an animation where it will slide to place by using the css transition attribute in the style.css file. Besides that, when hovering over one of those sections, the text for those sections will appear at the bottom so that it can be viewed easily. This is done by making the text disappear by using color: transparent and the text below will appear as it originally blended into the background before hovering.</p>
        </div>
        <h1>Assignment 2</h1>
        <div class="enhancement-container">
            <p class="enhancement-name">Enhancement 1: Back to top button with animation</p>
            <figure class="screenshot">
                <img src="images/backtotopanimation.png" alt="Back to top button with animation" />
            </figure>
            <p class="enhancement-description">At the <a href="index.php">Home page</a>, <a href="appetizers.php">Appetizers page</a>, <a href="entree.php">Entrée page</a>, <a href="dessert.php">Dessert page</a>, <a href="beverage.php">Beverage page</a> and <a href="enquiry.php">Enquiry page</a>, it will show the back to top button with an animation fading up for 3 seconds in the lower right corner of the page which the button itself is a double arrow in a circle,  When hovering over the back to top button ,the color of the button itself will change. When the back to top button is clicked, the page will scroll to the top of the page itself. </p>
        </div>
        <div class="enhancement-container">
            <p class="enhancement-name">Enhancement 2: Burger Navigation</p>
            <figure class="screenshot">
                <img src="images/BurgerNav.png" alt="Burger Navigation" />
            </figure>
            <p class="enhancement-description">As the screen size reaches 850px and the navigation bar cannot display the links properly, the links will be replaced with a burger which is the three lines shown above using the @media screen and (max-width: 850px) property and display none for the links and display block for the burger. The links are styled to align vertically with a background color then push out of the window screen using position absolute right 0px and the body overflow is hidden. When clicking on the burger button, it will listen to the burger click and then display the navigation links as shown in the right picture. Not only the burger will be transform into a cross using the transform method, the nav-links will also appear.</p>
        </div>
		<div class="enhancement-container">
            <p class="enhancement-name">Enhancement 3: Image Slideshow</p>
            <figure class="screenshot">
                <img src="images/imageslideshow.PNG" alt="Image slideshow" />
            </figure>
            <p class="enhancement-description">When the user scrolls down the homepage, there will be a slideshow which will show the viewer four pictures of the restaurant. The picture will change after every two seconds.</p>
        </div>
        <div class="enhancement-container">
            <p class="enhancement-name">Enhancement 4: Voucher Button</p>
            <figure class="screenshot">
                <img src="images/voucherbutton.png" alt="Voucher Button" />
            </figure>
            <p class="enhancement-description">At the very bottom of the page, there will be a button that says "Click Now" which when clicked, it will show another window which prompts the user for an input which is display: none. This can be done because when they clicked on the button, everything behind the pop-up window will become opaquer, it will change to back to become visible. Besides that, when click on the “X” cross at the top-right, it will revert back the window to non-visible as well as closing the window. </p>
        </div>
    </article>
    <?php include 'footer.php';?>
    <script src="js/nav.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
</body>
</html>