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
text-align: center;
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
<br><br><br>
<b> VIEW YOUR TICKETS</b>

<form action="viewtickets1.php" method="post">
<h4>

<p>Enter Name: <input class="input" type="text" name="name"></p>
<p>Enter Phone number: <input class="input" type="text" name="phone"></p>
<input class="submit" type="submit"></h4>
</form>
</body>
</html>