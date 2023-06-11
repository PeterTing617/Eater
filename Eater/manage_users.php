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

        <div>
            <?php
                require_once 'includes/dbh.inc.php';
                $sql = "SELECT usersId, usersName, usersEmail, usersUid from users";
                $result = $conn-> query($sql);
                echo "<table class='user_table'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
                echo "<th>Email</th>";
                echo "<th>Username</th>";
                echo "<th>Delete</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                if ($result-> num_rows > 0){
                    while ($row = $result-> fetch_assoc()){
                        echo "<tr>";
                        echo "<td>" . $row["usersId"] . "</td>";
                        echo "<td>" . $row["usersName"] . "</td>";
                        echo "<td>" . $row["usersEmail"] . "</td>";
                        echo "<td>" . $row["usersUid"] . "</td>";
                        echo "<td>";
                        echo '<form action="delete_confirmation.php" method="post">';
                        echo '<input type="hidden" name="selected_user_id" value="' . $row["usersId"] . '"/>';
                        echo '<input type="hidden" name="selected_user_name" value="' . $row["usersUid"] . '"/>';
                        echo '<button type="submit" name="delete">Delete</button>';
                        echo '</form>';
                        echo "</td>";
                        echo "</tr>";
                    }
                }
                echo "</tbody>";
                echo "</table>";

                if (isset($_GET["error"])){
                    if ($_GET["error"] == "emptyfields"){
                        echo "<script>alert('Some areas are blank. Deletion unsuccessful.')</script>";
                    }
                    else if ($_GET["error"] == "passworderror"){
                        echo "<script>alert('Unrecognized password. Deletion unsuccessful.')</script>";
                    }
                    else if ($_GET["error"] == "passwordnotsame"){
                        echo "<script>alert('Password and repeated password not match. Deletion unsuccessful.')</script>";
                    }
                    else if ($_GET["error"] == "none"){
                        echo "<script>alert('User deleted successfully.')</script>";
                    }
                }


                $conn-> close();
            ?>
            
        </div>
    </article>
	

    <?php include 'footer.php';?>

    <script src="js/nav.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
</body>
</html>