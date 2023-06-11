<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=ul, initial-scale=1.0" />
    <meta name="author" content="Ravin" />
    <meta name="keywords" content="home, Eater" />
    <meta name="description" content="This is the home page for Eater website." />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Eater | Home</title>
</head>
<body id="home_page">
    <?php include 'navigation.php';?>
	
    <article class="content">
        <button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>
        <div class="header-home">
            <h1>Welcome to Eater</h1>
            <p>Where Your Taste Meets Your Wants</p>
        </div>

        <div class="home-text">
            <h2><i class="fas fa-info-circle"></i>ABOUT EATER RESTAURANT</h2>
            <br/>
            <p>"Eater" restaurant was founded in Kuching, Sarawak by a group of young adults, Fantastic Four 2020.A family-like indoor and outdoor environment where your taste meets your wants. We believe that a great restaurant which serve decent food and drinks, based on their customer's high standard can earn their customers'loyalty and love towards the restaurant. We encourage our beloved "eater" to send us feedback if there's any requirement we did not reached.</p>
            <br/>
            <blockquote>Quote: There is no sincere love than the love of food.<cite> - George Bernard Shaw</cite></blockquote>
        </div>

        <div class="slide">
            <img src="images/one.jpg" alt="Slideshow" id="slide" />
        </div>

        <div class= "home-text">
            <p><i class="fas fa-clock"></i>Open from 8am - 10pm everyday for breakfast, lunch, and dinner.</p>
			<p><i class="fas fa-truck"></i>Free food delivery service.</p>   
        </div>

        <div class="location">
            <h2><i class="fas fa-map-marked-alt"></i> LOCATION</h2>
            <br/>
            <div class="location-image">
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.101043506151!2d110.34465129592665!3d1.5587980474870147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba7ee43bed737%3A0x68abfa096f4ac9d9!2sKuching%20Old%20Courthouse!5e0!3m2!1sen!2smy!4v1604507897310!5m2!1sen!2smy" width="600" height="450"  style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
            </div>
            <div class="home-text">
                <p>Our restaurant location is inside Kuching Old Courthouse.</p>
                <i class="fas fa-phone-volume"></i><a href="tel:+6082318980"> Contact us for reservation +6082 318980 </a>
            </div>
        </div>	
		
        <div class="special-section">
            <h2><i class="fas fa-percentage"></i> SPECIAL DEAL</h2>
            <figure>
                <!--https://www.google.com/search?q=celebration&tbm=isch&ved=2ahUKEwir4qDyguvsAhUNDbcAHWixDbEQ2-cCegQIABAA&oq=celebration&gs_lcp=CgNpbWcQAzIECCMQJzIFCAAQsQMyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIAFDBLFjBLGCkLmgAcAB4AIABrAGIAawBkgEDMC4xmAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=tryjX6uvII2a3LUP6OK2iAs&bih=712&biw=500&rlz=1C1CHBF_enMY877MY877#imgrc=C1ZEGbViF97s8M-->
                <img src="images/celebration.jpeg" alt="celebration"/>
            </figure>
            <p>To celebrate the opening of Eater's website, all visitors are applicable to get a 20% disount voucher by submitting your email address. The voucher will be sent within 24 hours.<br/>(Duration: 5/11/2020 - 5/12/2020)</p>
            <p><button class="modal-btn">Click Now</button></p>
        </div>
    
        <div class="modal-bg">
            <div class="modal">
                <p><strong>Enter your email to get the vouchers.</strong></p>
                <div class="email">
                    <label for="vouchers">Email: </label>
                    <input type="email" placeholder="Enter your email here*" name="email" id="vouchers"/>
                    <button>Submit</button>
                </div>
                <div class="modal-close">X</div>
                <br/>
                <div class="modal-note"><p>Note: By submitting, you will be receiving your voucher in your e-mail within 24 hours.</p></div>
            </div>
		</div>
    </article>
    <?php
        if (isset($_GET["error"])){
            if ($_GET["error"] == "none"){
                echo "<script>alert('User deleted successfully.')</script>";
            }
        }
    ?>

    <?php include 'footer.php';?>

    <script src="js/nav.js"></script>
    <script src="js/slide.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
    <script src="js/modal.js"></script>
	<script src="js/buttontop.js"></script>
</body>
</html>