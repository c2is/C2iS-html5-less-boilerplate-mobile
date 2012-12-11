<?php include('functions.php');?>
<!doctype html>
<html class="js-false" lang="fr">
<head>
    <meta charset="utf-8">
    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Set Apple icons for when prototype is saved to home screen -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/touch-icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/touch-icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../images/touch-icons/apple-touch-icon-57x57.png">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title ?></title>

    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="../css/screen.css">

    <script src="../js/libs/head.extended.js"></script><!--Version etendue de head.js avec + d options : syntaxe legerement differente -->

    <script>
        // déclarations des variables statiques à la façon Drupal
        var settingsGlobal = settingsGlobal|| {
            sTemplatePath : '../' // chemin du template en absolue
        }
    </script>

    <!-- Intro paragraph styles. Delete once you start using this page -->
    <style type="text/css">
        .welcome {
          line-height: 1.5;
          color: #555;
        }
    </style>
</head>
<body>