<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Reseau social pour developpeur">
    <meta name="author" content="mohamed hamidat">


    <title>
        <?=
        isset($title)? $title.'-'. WEBSITE_NAME :
            WEBSITE_NAME." simple speed and effecient";

        ?>
    </title>

    <!-- Bootstrap core CSS -->

    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cerulean/bootstrap.min.css" rel="stylesheet" integrity="sha384-fUMURLTdEcpeYHly3PAwggI3l2UvdHNg/I+8LRph7hLDcAZm77YfDx3Tjum9d3vK" crossorigin="anonymous">    <link rel="stylesheet" href="assets\css\main.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<?php include('partials/_nav.php');?>
<?php include ('partials/_flash.php');?>

