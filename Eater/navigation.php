<?php
session_start();
echo "<nav>";
echo '<div class="logo">';
echo '<h4><a href="index.php">Eater</a></h4>';
echo '</div>';
echo '<ul class="nav-links">';
echo '<li><a href="index.php" class="position_home"><i class="fas fa-home"></i> Home</a></li>';
echo '<li><a href="menu.php" class="position_product"><i class="fas fa-utensils"></i> Menu</a></li>';
echo '<li><a href="enquiry.php" class="position_enquiry"><i class="fab fa-wpforms"></i> Enquiry</a></li>';
echo '<li><a href="profile.php" class="position_profile"><i class="fas fa-users"></i> Profiles</a>';
echo '<div class="sub-menu">';
echo '<ul>';
echo '<li><a href="aboutme1.php"><i class="fas fa-male"></i> Peter</a></li>';
echo '<li><a href="aboutme2.php"><i class="fas fa-female"></i> Yi Tong</a></li>';
echo '<li><a href="aboutme3.php"><i class="fas fa-male"></i> Jordan</a></li>';
echo '<li><a href="aboutme4.php"><i class="fas fa-male"></i> Ravin</a></li>';
echo '</ul>';
echo '</div>';
echo '</li>';
echo '<li><a href="disclaimer.php" class="position_disclaimer"><i class="fas fa-exclamation-triangle"></i> Disclaimer</a></li>';
echo '<li><a href="enhancements.php" class="position_enhancement"><i class="fas fa-dumbbell"></i> Enhancements</a></li>';
if (isset($_SESSION["useruid"])){
    echo '<li><a href="manage_view_enquiries.php" class="position_manage"><i class="fas fa-tasks"></i> Manage</a></li>';
    echo '<li><a href="includes/logout.inc.php"><i class="fas fa-sign-out-alt"></i> Log out</a></li>';
} else {
    echo '<li><a href="signup.php" class="position_signup"><i class="fas fa-user-plus"></i> Sign Up</a></li>';
    echo '<li><a href="login.php" class="position_login"><i class="fas fa-sign-in-alt"></i> Login</a></li>';
}
echo '</ul>';
echo '<div class="burger">';
echo "<div class='line1'></div>";
echo "<div class='line2'></div>";
echo "<div class='line3'></div>";
echo "</div>";
echo "</nav>";

?>