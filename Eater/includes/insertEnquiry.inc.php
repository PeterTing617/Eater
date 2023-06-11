<?php

if (isset($_POST["confirm"])){

    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $postcode = $_POST["postcode"];
    $subject = $_POST["subject"];
    $products = $_POST["products"];
    $comments = $_POST["comments"];

    require_once 'dbh.inc.php';

    $sql = "INSERT INTO enquiry (enquiryFirstName, enquiryLastName, enquiryEmail, enquiryPhone, enquiryStreetAddress, enquiryCity, enquiryState, enquiryPostcode, enquirySubject, enquiryProducts, enquiryComments) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "sssssssssss", $fname, $lname, $email, $phone, $street, $city, $state, $postcode, $subject, $products, $comments);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../confirm.php");

} else {
    header("location: ../enquiry.php");
    exit();
}