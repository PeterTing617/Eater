<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=ul, initial-scale=1.0" />
    <meta name="author" content="Peter" />
    <meta name="keywords" content="signup, Eater" />
    <meta name="description" content="This is the sign up for Eater website." />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Eater | Sign Up</title>
</head>
<body id="signup_page">
    <?php include 'navigation.php';?>
	
    <article>
        <section class="signup_section">
                <div class="signup_container">
                    <div class="user">
                        <div class="formBx">
                            <form action="includes/signup.inc.php" method="post">
                                <h2>Sign Up</h2>
                                <input type="text" name="signup_name" placeholder="Full Name" />
                                <input type="text" name="signup_email" placeholder="Email" />
                                <input type="text" name="signup_username" placeholder="Username" />
                                <input type="password" name="signup_password" placeholder="Password" />
                                <input type="password" name="signup_password_repeat" placeholder="Repeat password"/>
                                <button type="submit" name="submit">Sign Up</button>
                                <p class="login_txt">Have an account? <a href="login.php">Login</a></p>
                                <?php
                                    if (isset($_GET["error"])){
                                        if ($_GET["error"] == "emptyinput"){
                                            echo "<p class='errormsg'>Fill in all fields!</p>";
                                        }
                                        else if ($_GET["error"] == "invaliduid"){
                                            echo "<p class='errormsg'>Choose a proper username!</p>";
                                        }
                                        else if ($_GET["error"] == "invalidemail"){
                                            echo "<p class='errormsg'>Choose a proper email!</p>";
                                        }
                                        else if ($_GET["error"] == "passwordsdontmatch"){
                                            echo "<p class='errormsg'>Passwords doesn't match!</p>";
                                        }
                                        else if ($_GET["error"] == "stmtfailed"){
                                            echo "<p class='errormsg'>Something went wrong, try again!</p>";
                                        }
                                        else if ($_GET["error"] == "usernametaken"){
                                            echo "<p class='errormsg'>Username already taken!</p>";
                                        }
                                        else if ($_GET["error"] == "none"){
                                            echo "<p class='errormsg'>Signed up successfully!</p>";
                                        }
                                    } 
                                ?>
                            </form>
                        </div>
                        <div class="imgBx">
                            <!--https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.incurt.org%2F2019%2Fthe-process-of-dry-food.htm&psig=AOvVaw29iSIDMNvxRt-b6_hu4Hsj&ust=1605946503178000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCJi70ZnXkO0CFQAAAAAdAAAAABAD-->
                            <img src="images/signup.jpg" alt="Background">
                        </div>
                    </div>
                </div>
            </section>
    </article>

    <?php include_once 'footer.php';?>

    <script src="js/nav.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
</body>
</html>