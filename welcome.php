<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<html>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/x-icon" href="Logo_quick-a-holic.ico">

<head>
    <title>Quick-a-holic!</title>
</head>

<body>
    <div id="toolbar">
        <img src="Logo+name.png" height="70px" width="auto" style="padding-left: 2%;">
        <input name="walletButton" type="image" src="wallet.png" height="6%" width="auto"
            style="padding:1%; margin-left: 53%;">
        <input name="accountButton" type="image" src="account.png" height="6%" width="auto"
            style="padding:1%; border-right: 5px solid; color: lightgray;">
        <input name="menuOptionButton" type="image" src="menu_bar.png" height="6%" width="auto"
            style="padding:1%; margin-left: 2%;">
    </div>
    <div class="serviceContainer">
        <div id="plumbing" class="serviceBox">
            <div id="plumbingTitleContainer" class="titleContainer">
                <div id="plumbingTitle" class="title">Plumbing</div>
                <button type="submit" class="bookNowButton">Book Now!</button>
            </div>
        </div>
    </div>
    <div class="serviceContainer">
        <div id="cleaning" class="serviceBox">
            <div id="cleaningTitleContainer" class="titleContainer">
                <div id="cleaningTitle" class="title">Cleaning</div>
                <button type="submit" class="bookNowButton">Book Now!</button>
            </div>
        </div>
    </div>
    <div class="serviceContainer">
        <div id="babysitting" class="serviceBox">
            <div id="babysittingTitleContainer" class="titleContainer">
                <div id="babysittingTitle" class="title">Babysitting</div>
                <button type="submit" class="bookNowButton">Book Now!</button>
            </div>
        </div>
    </div>
    <div class="serviceContainer">
        <div id="laundry" class="serviceBox">
            <div id="laundryTitleContainer" class="titleContainer">
                <div id="laundryTitle" class="title">Laundry</div>
                <button type="submit" class="bookNowButton">Book Now!</button>
            </div>
        </div>
    </div>
    <div class="serviceContainer">
        <div id="chefCook" class="serviceBox">
            <div id="chefCookTitleContainer" class="titleContainer">
                <div id="chefCookTitle" class="title">Chef/Cook</div>
                <button type="submit" class="bookNowButton">Book Now!</button>
            </div>
        </div>
    </div>
    <div class="serviceContainer">
        <div id="electrician" class="serviceBox">
            <div id="electricianTitleContainer" class="titleContainer">
                <div id="electricianTitle" class="title">Electrician</div>
                <button type="submit" class="bookNowButton">Book Now!</button>
            </div>
        </div>
    </div>
    <div id="dashboardFooter" class="footer">
        <div id="copyrightInfo">
            Copyright © The Super Seven, 2022
        </div>
        <div id="dashboardFooterButtons">
            <button type="submit" class="footerButtons">Help</button>
            <button type="submit" class="footerButtons">Contact Us</button>
            <button type="submit" class="footerButtons">About</button>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>

</html>