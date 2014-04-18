<!DOCTYPE html>
<!--
  OGPP by Heuzef (heuzef.com)
  Powered by Bootply : http://s.bootply.com/render/85850
  https://github.com/heuzef/ogpp
-->
<html lang="fr">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
  <title>OGPP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="./css/bootstrap.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
  <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-toggle"></span></button>
        <a href="index.php"><img id="logo" src="./img/pharaon_icon_hd.png" alt="logo"><span id="text_logo">OGPP</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Rechercher ...">
              </div>
            </form>
          </li>
          <li>
            <a href="#"><i class="glyphicon glyphicon-user"></i> Root</a>
          </li>
          <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Déconnection</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <?php include "menu.php" ?>
      <div class="col-md-9">  
        <div class="row">
<!-- content -->
