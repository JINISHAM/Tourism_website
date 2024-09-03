<?php     
    session_start(); 
    if (isset($_GET['logout'])) 
    {
        session_destroy();
        unset($_SESSION['name']);
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en" class="js csstransitions">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Website</title>
    <link rel="stylesheet" href="proj1.css">
</head>
<body>
<div id="header">
<div id="mainmenu">
<header>
<nav>
<ul><b>
<?php if (!isset($_SESSION['name'])){?>
    <li><a href="login.php">LOGIN HERE</a></li>
<?php }?>
<?php if (!isset($_SESSION['name']))
{?>
<li><a href="index.php">HOME</a></li>
<li><a href="package.php">PACKAGES</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="contact.php">CONTACT</a></li>
<?php }?>
</ul></b>
</nav>
</header>
</div>
</div>
<div id="pagewrapper">
<div id="topbg"></div>
<div id="systemName">
<h1><b>READY TO EXPLORE THE WORLD!</b></h1>
<h1><b>WELCOME TO SHA'S TOURISM</b></h1>
<p><h2>"Discover amazing destinations and plan your next adventure!"</p></h2>
</div>
<div class="content">
<!-- notification message -->
<?php if (isset($_SESSION['success'])) {?>
<div class="error success" >
<h3 style="color: green;">
<?php
echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3></div>
<?php } ?>
</div>
</div>
</body>
</html>
