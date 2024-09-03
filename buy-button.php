<!DOCTYPE HTML>
<html>
<head>
<style>
form{
width: 40%;
margin: auto;
margin-top: 20vh;
box-shadow:10px 10px 10px 10px ;
padding: 5px;
}
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
.pay
{
margin-left: 7%;
}
</style>
</head>
<body>
<br><br>
<b>BOOK YOUR TICKETS</b>

<form action="buy-button1.php" method="post">
	
<h4>

<p>Name: <input class="input" type="text" name="name" required></p>
<p>Email: <input class="input" type="text" name="email"  required></p>
<p>Phone Number: <input class="input" type="number" name="phone"  required></p>
<p>Aadhar Number: <input class="input" type="number" name="aadhar"  required></p>
<p>From Date: <input class="input" type="date" name="fdate"  required></p>
<p>To Date: <input class="input" type="date" name="tdate"  required></p>
<p>Total no of tickets: <input class="input" type="number" name="tnumber"  required></p>
<input class="pay" type="button" value="PAY">
<p>Tickets will be send to the above email</p>
<input class="submit" type="submit" name="Buy tickets"></h4>
</form>




</body>
</html>