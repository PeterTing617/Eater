<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=ul, initial-scale=1.0" />
    <meta name="author" content="Peter" />
    <meta name="keywords" content="login, Eater" />
    <meta name="description" content="This is the login page for Eater website." />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Eater | Login</title>
</head>
<body id="login_page">
    <?php include 'navigation.php';?>
	
    <article>
        <section class="login_section">
            <div class="login_container">
                <div class="user">
                    <div class="imgBx">
                        <!--https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.goodhousekeeping.com%2Ffood-recipes%2Fg605%2Ffamily-style-recipes%2F&psig=AOvVaw29iSIDMNvxRt-b6_hu4Hsj&ust=1605946503178000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCJi70ZnXkO0CFQAAAAAdAAAAABA0-->
                        <img src="images/login.jpg" alt="Background">
                    </div>
                    <div class="formBx">
                        <form action="includes/login.inc.php" method="post">
                            <h2>Login</h2>
                            <input type="text" name="login_name" placeholder="Username/Email" />
                            <input type="password" name="login_password" placeholder="Password" />
                            <button type="submit" name="submit">Login</button>
                            <p class="signup_txt">Don't have an account? <a href="signup.php">Sign Up</a></p>
                            <?php
                            if (isset($_GET["error"])){
                                if ($_GET["error"] == "emptyinput"){
                                    echo "<p class='errormsg'>Fill in all fields!</p>";
                                }
                                else if ($_GET["error"] == "wronglogin"){
                                    echo "<p class='errormsg'>Incorrect login information!</p>";
                                }
                            } 
                        ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </article>

    <?php include 'footer.php';?>

    <script src="js/nav.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
</body>
</html>