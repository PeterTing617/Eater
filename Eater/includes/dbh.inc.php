<?php
function checkConnection($conn){
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    };
}

function createDatabase($conn){
    $sql = "CREATE DATABASE IF NOT EXISTS eaterdb";
    mysqli_query($conn, $sql);
}

function createTableUsers($conn){
    $sql = "CREATE TABLE IF NOT EXISTS users (
        usersId INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        usersName VARCHAR(128) NOT NULL,
        usersEmail VARCHAR(128) NOT NULL,
        usersUid VARCHAR(128) NOT NULL,
        usersPwd VARCHAR(128) NOT NULL,
        regDate TIMESTAMP
    )";
    
    mysqli_query($conn, $sql);
}

function createTableEnquiry($conn){
    $sql = "CREATE TABLE IF NOT EXISTS enquiry (
        enquiryId INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        enquiryFirstName VARCHAR(128) NOT NULL,
        enquiryLastName VARCHAR(128) NOT NULL,
        enquiryEmail VARCHAR(128) NOT NULL,
        enquiryPhone VARCHAR(128) NOT NULL,
        enquiryStreetAddress VARCHAR(128) NOT NULL,
        enquiryCity VARCHAR(128) NOT NULL,
        enquiryState VARCHAR(128) NOT NULL,
        enquiryPostcode VARCHAR(128) NOT NULL,
        enquirySubject VARCHAR(128) NOT NULL,
        enquiryProducts VARCHAR(128) NOT NULL,
        enquiryComments VARCHAR(128) NOT NULL,
        enquiryDate TIMESTAMP
    )";
    
    mysqli_query($conn, $sql);
}

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "eaterdb";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword);
checkConnection($conn);

createDatabase($conn);

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
checkConnection($conn);

createTableUsers($conn);
createTableEnquiry($conn);