<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=ul, initial-scale=1.0" />
    <meta name="author" content="Peter" />
    <meta name="keywords" content="enquiry, Eater" />
    <meta name="description" content="This is an enquiry page for Eater website." />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Eater | Enquiry</title>
</head>

<body id="enquiry_page">
<?php include 'navigation.php';?>
    <article id="enquiry" class="content">
    <button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>
        <div class="header-enquiry">
            <h1>Enquiries</h1>
        </div>
        <p class="intro-enquiry">Please fill in the form to enquire us!</p>
        <form action="enquiry_process.php" method="POST" class="enquiryform" id="enquiryform">
            <fieldset>
                <legend>Personal Information</legend>
                <table>
                    <tr>
                        <td><label for="first_name">First Name:</label></td>
                    </tr>
                    <tr>
                        <td class="form-control">
                            <input type="text" name="first_name" id="first_name" maxlength="25"/>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="last_name">Last Name:</label></td>
                    </tr>
                    <tr>
                        <td class="form-control">
                            <input type="text" name="last_name" id="last_name" maxlength="25"/>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">Email:</label></td>
                    </tr>
                    <tr>
                        <td class="form-control">
                            <input type="text" name="email" id="email"/>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="phone">Phone Number:</label></td>
                    </tr>
                    <tr>
                        <td class="form-control">
                            <input type="text" id="phone" name="phone" placeholder="(XXX)-(XXX)-(XXXX)" maxlength="10"/>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <fieldset>
                <legend>Address</legend>
                <table>
                    <tr>
                        <td><label for="street">Street Address:</label></td>
                    </tr>
                    <tr>
                        <td class="form-control">
                            <input type="text" name="street" id="street" maxlength="40"/>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="city">City / Town:</label></td>
                    </tr>
                    <tr>
                        <td class="form-control">
                            <input type="text" name="city" id="city" maxlength="20"/>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="state">State:</label></td>
                    </tr>
                    <tr>
                        <td class="form-control">
                            <select name="state" id="state">
                                <option value="">Select</option>
                                <option value="Johor">Johor</option>
                                <option value="Kedah">Kedah</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="KualaLumpur">Kuala Lumpur</option>
                                <option value="Labuan">Labuan</option>
                                <option value="Malacca">Malacca</option>
                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                <option value="Pahang">Pahang</option>
                                <option value="Penang">Penang</option>
                                <option value="Perak">Perak</option>
                                <option value="Perlis">Perlis</option>
                                <option value="Putrajaya">Putrajaya</option>
                                <option value="Sabah">Sabah</option>
                                <option value="Sarawak">Sarawak</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Terengganu">Terengganu</option>
                            </select>
                            <i class="fas fa-check-circle selection"></i>
                            <i class="fas fa-exclamation-circle selection"></i>
                            <small>Error Message</small>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="postcode">Postcode:</label></td>
                    </tr>
                    <tr>
                        <td class="form-control">
                            <input type="text" name="postcode" id="postcode" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <fieldset>
                <legend>Enquiries</legend>
                <table>
                    <tr>
                        <td><label for="subject">Subject:</label></td>
                    </tr>
                    <tr>
                        <td class="form-control">
                            <input type="text" id="subject" name="subject" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="products">Products:</label></td>
                    </tr>
                    <tr>
                        <td class="form-control">
                            <select name="products" id="products" size="1">
                                <option value="">Select</option>
                                <optgroup label="Appetizers">
                                    <option value="Beer Dip">Beer Dip</option>
                                    <option value="Homemade Guacamole">Homemade Guacamole</option>
                                    <option value="Pastrami Roll-Ups">Pastrami Roll-Ups</option>
                                    <option value="Tomato-Goat Cheese Spread">Tomato-Goat Cheese Spread</option>
                                    <option value="Strawberry Salsa">Strawberry Salsa</option>
                                </optgroup> 
                                <optgroup label="Entree">
                                    <option value="Shishito and Shrimp Skewers with Chimichurri">Shishito and Shrimp Skewers with Chimichurri</option>
                                    <option value="Cheesesteak Burgers with Pickled Peppers, Onions, and Cucumber">Cheesesteak Burgers with Pickled Peppers, Onions, and Cucumber</option>
                                    <option value="Yakitori">Yakitori</option>
                                    <option value="Mango Rice Salad with Grilled Shrimp">Mango Rice Salad with Grilled Shrimp</option>
                                    <option value="Curry Chicken Wraps with Nectarine Chutney">Curry Chicken Wraps with Nectarine Chutney</option>
                                </optgroup>
                                <optgroup label="Desserts">
                                    <option value="Chocolate Chip Cookie Delight">Chocolate Chip Cookie Delight</option>
                                    <option value="Whipped Shortbread">Whipped Shortbread</option>
                                    <option value="Frosted Banana Bars">Frosted Banana Bars</option>
                                    <option value="No-Bake Chocolate Chip Cannoli Cheesecake">No-Bake Chocolate Chip Cannoli Cheesecake</option>
                                    <option value="Triple-Chocolate Cheesecake Bars">Triple-Chocolate Cheesecake Bars</option>
                                </optgroup>
                                <optgroup label="Beverage">
                                    <option value="Glow Water">Glow Water</option>
                                    <option value="Dole Whip Lemonade">Dole Whip Lemonade</option>
                                    <option value="Mermaid Lemonade">Mermaid Lemonade</option>
                                    <option value="Blushing Arnold Palmer">Blushing Arnold Palmer</option>
                                    <option value="Ginger-Peach Soda">Ginger-Peach Soda</option>
                                </optgroup>
                            </select>
                            <br/>
                            <i class="fas fa-check-circle selection"></i>
                            <i class="fas fa-exclamation-circle selection"></i>
                            <small>Error Message</small>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="comments">Comments:</label></td>
                    </tr>
                    <tr>
                        <td class="form-control">
                            <textarea name="comments" id="comments" rows="10"></textarea>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </td>
                    </tr>
                </table>
            </fieldset>

            <div class="buttons">
                <input type="submit" />
                <input type="reset" />
            </div>
        </form>
    </article>
    <?php include 'footer.php';?>
    <script src="js/nav.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/transfer.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
	<script src="js/buttontop.js"></script>
	
</body>
</html>