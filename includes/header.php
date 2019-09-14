<?php include("../utilities/render.php") ?>

<!DOCTYPE HTML>
<html lang="en">

<head>
  <!-- Bootstrap & Fontawesome for easy styling -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link href="../css/prism.css" rel="stylesheet">
  <link href="../css/global-styles.css" rel="stylesheet">

  <title><?= (isset($title) ? "{$title} - COMP-1006" : "COMP-1006") ?></title>
</head>

<body>
  <!-- This is a Bootstrap container. Get more info at http://getbootstrap.com/ -->
  <div class="container mt-3">