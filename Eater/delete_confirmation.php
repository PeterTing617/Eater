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
            <button onclick="location.href='manage_change_password.php'" class="non_active_user">Change Users Password</button>
            <button onclick="location.href='manage_users.php'" class="active_user">Manage Users Account</button>
        </div>
        <div class="delete-form">
            <?php 
            $username = $_POST["selected_user_name"];

            echo "<p class='confirm-user'>Confirm delete user " . $username . "?</p>";
            echo "<p class='warning-delete'>Warning: this action cannot be undone!</p>";
            
            
            ?>
            <form action="includes/delete.inc.php" method="post">
                <input type="password" name="pass" placeholder="Password" />
                <input type="password" name="pass_repeat" placeholder="Repeat Password" /> 
                <?php
                $userID = $_POST["selected_user_id"];
                $username = $_POST["selected_user_name"];
                echo '<input type="hidden" name="selected_user_id" value="' . $userID . '"/>';
                echo '<input type="hidden" name="selected_user_name" value="' . $username . '"/>';
                ?>
                <button type="submit" name="delete">Delete</button>
                <button onclick="location.href='manage_users.php'">Return</button>
            </form>
        </div>
    </article>
	

    <?php include 'footer.php';?>

    <script src="js/nav.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
</body>
</html>