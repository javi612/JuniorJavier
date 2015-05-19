<!DOCTYPE HTML>
<?php
require_once("php/controller/create-db.php");
?>
<html>
    <head>
        <title>melonJS Template</title>
        <link rel="stylesheet" type="text/css" media="screen" href="index.css">
        <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link rel="apple-touch-icon" href="icons/touch-icon-iphone-60x60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="icons/touch-icon-ipad-76x76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="icons/touch-icon-iphone-retina-120x120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="icons/touch-icon-ipad-retina-152x152.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    </head>
    <body>
        <!-- Canvas placeholder -->
        <div id="screen"></div>

        <!-- melonJS Library -->
        <!-- build:js js/app.min.js -->
        <script type="text/javascript" src="lib/melonJS-1.1.0-min.js"></script>

        <!-- Plugin(s) -->
        <script type="text/javascript" src="lib/plugins/debugPanel.js"></script>

        <!-- Game Scripts -->
        <script type="text/javascript" src="js/game.js"></script>
        <script type="text/javascript" src="js/resources.js"></script>
        <script type="text/javascript" src="js/screens/mainmenu.js"></script>
        