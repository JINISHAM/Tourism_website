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



<form action="registerdata.php" method="post">
	<p><b>CREATE NEW ACCOUNT</b></p>
<h4>
<p>Name: <input class="input" type="text" name="fname" required></p>
<p>Email: <input class="input" type="text" name="femail"  required></p>
<p>Password: <input class="input" type="text" name="pwd1"  required></p>
<p>Confirm Password: <input class="input" type="text"
name="pwd2"  required></p>
<input class="submit" type="submit"></h4>
</form>




</body>
</html>