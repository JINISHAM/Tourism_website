<!DOCTYPE HTML>
<html>
<head>
<style>
form{
width: 40%;
margin: auto;
margin-top: 30vh;
box-shadow:10px 10px 10px 10px ;
padding: 10px;}
body{
background-image: url("bgimg.jpg");
	background-size: cover;
}
.input
{
width: 50%;
float: right;
margin-right: 6%;
}
p{
margin-left: 6%;
font-size: 20px;
}
.submit
{
margin-left: 7%;
}
    </style>
</head>
<body>
<form action="verify.php" method="post">
<h4><b>
	<p><b>LOGIN</b></p>
<p>Name: <input class="input" type="text" name="fname" required></p>
<p>Email: <input class="input" type="text" name="femail" required></p>
<p>Password: <input class="input" type="text" name="pwd1" required></p>
<input class="submit" type="submit"></h4></b>
<p>Not have an Account?</p>
<p><a href="register.php">Sign Up Here</a></p>
</form>

</body>
</html>