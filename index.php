<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="author" content="Jean-André Santoni, Morgane Alonso, Zacharie Juillard" />
  <meta name="keywords" content="" />
  <meta name="description" content="Lakka is a lightweight Linux distribution that transforms a credit card sized computer called Raspberry Pi into a full blown emulation console." />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Asap:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  <link rel="shortcut icon" href="favicon/fav64.ico" />
  <link rel="icon" type="image/x-icon" href="favicon/fav64.ico" />
  <link rel="icon" type="image/jpg" href="favicon/fav64.jpg" />
  <link rel="icon" type="image/png" href="favicon/fav64.png" />
  <link rel="icon" type="image/gif" href="favicon/fav64.gif" />
  <link rel="apple-touch-icon" href="favicon/fav64.png" />
  
  <title>Lakka - The DIY retro emulation console</title>
  
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>
 
<?php
  $page = isset($_GET['page']) ? $_GET['page'] : "home.php";
  $class = str_replace(".php", "", $page);
?>

<body class="<?php echo $class;?>">
  <div id="menubar">
    <h1><a href="/"><img src="images/lakka-logo.png" alt="Lakka's logo, represent a berry : the cloudberry" /></a></h1>
    <nav>
      <ul>
        <!--<li><a href="">News</a></li>
        <li><a href="">Documentation</a></li>
        <li><a href="">Support</a></li>-->
        <li><a href="/contact">Contact</a></li>
      </ul>
    </nav>
  </div>

  <?php
    include($page);
  ?>

</body>
</html>
