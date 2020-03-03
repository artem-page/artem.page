<!DOCTYPE html>
<html lang="en">
  <head>
  	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/9745d137ba.js" crossorigin="anonymous"></script>

    <!-- Main Font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">

    <!-- Additional Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One&display=swap" rel="stylesheet">

    <title>
        <?= ($meta->title) ? $meta->title . " - Artem.page" : ( ($content->title) ? $content->title . " - Artem.page" : "Artem.page" ) ?>
    </title>

    <!--Custom CSS -->
    <style type="text/css">
        <?php require_once 'css/css-default.php' ?>
        <?php require_once 'css/css-sm.php' ?>
        <?php require_once 'css/css-md.php' ?>
        <?php require_once 'css/css-lg.php' ?>
        <?php require_once 'css/css-xl.php' ?>
    </style>
    
    <!-- SEO meta tags -->
    <meta name="description" content="<?= $meta->description ?>">


  </head>
  <body>