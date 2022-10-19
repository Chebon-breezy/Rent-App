<?php
echo "<body class=\"w3-black\">
<nav class=\"w3-sidebar w3-bar-block w3-hide-small w3-center\">

    <a href=\"index.html\" class=\"w3-bar-item w3-button w3-padding-large w3-hover-black\">
        <i class=\"fa fa-home w3-xxlarge\"></i>
        <p>HOME</p>
    </a>
    <a href=\"addproperty.html\" class=\"w3-bar-item w3-button w3-padding-large w3-black\">
        <i class=\"fa fa-building w3-xxlarge\"></i>
        <p>Add a Property</p>
    </a>
    <a href=\"properties.html\" class=\"w3-bar-item w3-button w3-padding-large w3-hover-black\">
        <i class=\"fa fa-building-o w3-xxlarge\"></i>
        <p>Properties</p>
    </a>
    <a href=\"sellers.html\" class=\"w3-bar-item w3-button w3-padding-large w3-hover-black\">
        <i class=\"fa fa-male w3-xxlarge\"></i>
        <p>Sellers</p>
    </a>
    <a href=\"login.html\" class=\"w3-bar-item w3-button w3-padding-large w3-hover-black\">
        <i class=\"fa fa-sign-in w3-xxlarge\"></i>
        <p>Log In</p>
    </a>
    <a href=\"contactus.html\" class=\"w3-bar-item w3-button w3-padding-large w3-hover-black\">
        <i class=\"fa fa-phone w3-xxlarge\"></i>
        <p>Contact Us</p>
    </a>
</nav>


<div>
    <!-- Header/Home -->
    <header class=\"w3-container w3-padding-32 w3-center w3-black\">
        <h1 class=\"w3-jumbo\">Real Estate</h1>
        <h2>Buy Rent or Sell</h2>
    </header>
</div>
<br><br>


</body>";
include "connect.php";

$id = $_POST['pid'];
$purpose = $_POST['purpose'];
$title = $_POST['ptitle'];
$desc = $_POST['pdesc'];
$location = $_POST['location'];
$length = $_POST['length'];
$width = $_POST['width'];
$area = $_POST['area'];
$price = $_POST['price'];
$type = $_POST['ptype'];

$sql = "INSERT INTO property_listing(propertyId, purpose, propertyTitle, propertyDescription, location, length, width, area, price, propertyType) VALUES ('$id','$purpose','$title','$desc','$location','$length','$width','$area','$price','$type')";
if ($conn->query($sql)) {
    echo "<div ><h1 style='text-align: center'>Inserted Successfully</h1></div>>";
} else
    echo "<div style='margin-left: 120px'><h1 style='text-align: center'> Unable to Insert "  . $conn->error ."</h1></div>";
echo "<div>
    <!-- Header/Home -->
    <header class='w3-container w3-padding-32 w3-center w3-black'>
        <h2>To go back to add property click <a href='addproperty.html' style='color: white;'>here</a></h2>
    </header>
</div>";
?>


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
          crossorigin="anonymous">
    <style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
        .w3-row-padding img {margin-bottom: 12px}
        /* Set the width of the sidebar to 120px */
        .w3-sidebar {width: 120px;background: #222;}
        /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
        #main {margin-left: 120px}
        /* Remove margins from "page content" on small screens */
        @media only screen and (max-width: 600px) {#main {margin-left: 0}}
        </style>