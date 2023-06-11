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
            <button onclick="location.href='manage_view_enquiries.php'" class="active_user">View Enquiries</button>
            <button onclick="location.href='manage_change_password.php'" class="non_active_user">Change Users Password</button>
            <button onclick="location.href='manage_users.php'" class="non_active_user">Manage Users Account</button>
        </div>

        <div>
            <?php
                require_once 'includes/dbh.inc.php';
                $sql = "SELECT enquiryFirstName, enquiryLastName, enquiryEmail, enquiryPhone, enquirySubject, enquiryProducts, enquiryComments, enquiryDate from enquiry";
                $result = $conn-> query($sql);
                echo "<table border='1'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Email</th>";
                echo "<th>Phone</th>";
                echo "<th>Subject</th>";
                echo "<th>Products</th>";
                echo "<th>Comments</th>";
                echo "<th>Date</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                if ($result-> num_rows > 0){
                    while ($row = $result-> fetch_assoc()){
                        echo "<tr>";
                        echo "<td>" . $row["enquiryFirstName"] . "</td>";
                        echo "<td>" . $row["enquiryLastName"] . "</td>";
                        echo "<td>" . $row["enquiryEmail"] . "</td>";
                        echo "<td>" . $row["enquiryPhone"] . "</td>";
                        echo "<td>" . $row["enquirySubject"] . "</td>";
                        echo "<td>" . $row["enquiryProducts"] . "</td>";
                        echo "<td>" . $row["enquiryComments"] . "</td>";
                        echo "<td>" . $row["enquiryDate"] . "</td>";
                        echo "</tr>";
                    }
                }
                echo "</tbody>";
                echo "</table>";


                $conn-> close();
            ?>
            
        </div>
    </article>
	

    <?php include 'footer.php';?>

    <script src="js/nav.js"></script>
    <script src="js/manage.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
</body>
</html>