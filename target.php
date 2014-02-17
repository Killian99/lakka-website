<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="description" content="Lakka is a lightweight Linux distribution that transform a credit card sized computer called Raspberry Pi into a full blown emulation console." />
    <meta name="robots" content="index,follow" />
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
 
  <body>
    <!--<div id="corps">-->
    <header>
      <?php include("includes/menu.php"); ?>
    </header>

<?php if(isset($_POST) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
{
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message']))
	{
		$to = 'lakka+alonso.morgane@gmail.com';
		$subject = $_POST['subject'];
		
		$message = $_POST['message'];
		
		$headers = 'From : '.$_POST['name'].' <'.$_POST['email'].'>';

		if (mail($to, $subject, $message, $headers))
		{
			echo 'Email successfully sent!'; 
		} 
		else 
		{
		 	echo "Email delivery failed…";
		}
	}
	else
	{
		echo "error2";
	}
}

?>

    <footer>
      <!--<p><a href="mentions_legales.html">mentions légales</a></p>-->
    </footer>
      <!--</div>-->
  </body>
</html>