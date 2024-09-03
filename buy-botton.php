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



<form action="viewtickets.php" method="post">
	
<h4>
<p>Name: <input class="input" type="text" name="fname" required></p>
<p>Email(Tickets will be send to this email): <input class="input" type="text" name="femail"  required></p>
<p>Phone Number: <input class="input" type="number" name="phone"  required></p>
<p>Aadhar Number: <input class="input" type="number"
name="aadhar"  required></p>
<input class="submit" type="submit"></h4>
</form>




</body>
</html>