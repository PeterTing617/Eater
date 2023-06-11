<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=ul, initial-scale=1.0" />
    <meta name="author" content="Peter" />
    <meta name="keywords" content="manage, Eater" />
    <meta name="description" content="This is the manage page for Eater website." />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Eater | Manage</title>
</head>
<body id="manage_page">
    <?php include 'navigation.php';?>

    <article>
        <?php echo "<p class='welcomeuser'>Welcome back, " . $_SESSION['useruid']?>
        <div class="manage_btn_menu">
            <button onclick="location.href='manage_view_enquiries.php'" class="non_active_user">View Enquiries</button>
            <button onclick="location.href='manage_change_password.php'" class="active_user">Change Users Password</button>
            <button onclick="location.href='manage_users.php'" class="non_active_user">Manage Users Account</button>
        </div>
        <div class="change-password-form">
            <h2>Change Password</h2>
            <form action="includes/changepass.inc.php" method="post">
                <input type="password" name="old_pass" placeholder="Old Password" />
                <input type="password" name="new_pass" placeholder="New Password" />
                <input type="password" name="new_pass_repeat" placeholder="Repeat New Password" /> 
                <button type="submit" name="change_pass">Change Password</button>
            </form>
            <?php
                if (isset($_GET["error"])){
                    if ($_GET["error"] == "emptyinput"){
                        echo "<p>Fill in all fields!</p>";
                    }
                    else if ($_GET["error"] == "wrongoldpassword"){
                        echo "<p>Wrong old password!</p>";
                    }
                    else if ($_GET["error"] == "passwordmatchold"){
                        echo "<p>New password is the same as the old password!</p>";
                    }
                    else if ($_GET["error"] == "passwordnotsame"){
                        echo "<p>Password do not match!</p>";
                    }
                    else if ($_GET["error"] == "stmtfailed"){
                        echo "<p>Something went wrong, try again!</p>";
                    }
                    else if ($_GET["error"] == "none"){
                        echo "<p>Password Changed!</p>";
                    }
                } 
            ?>
        </div>


    </article>
	

    <?php include 'footer.php';?>

    <script src="js/nav.js"></script>
    <script src="js/manage.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
</body>
</html>