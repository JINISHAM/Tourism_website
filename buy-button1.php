<html>
<body>
<?php
$host= "localhost";//php mypage 
$username= "root";
$password = "";

$db_name = "tourism_register";

$conn = mysqli_connect($host, $username, $password, $db_name);//database established

if (!$conn)
{
echo "Connection failed!". "<br>";
}
else
{
echo "Connection Successful". "<br>";
}
$n=$_POST["name"];
$e=$_POST["email"];//if method = post means put post 
$p=$_POST["phone"];
$a=$_POST["aadhar"];
$fd=$_POST["fdate"];
$td=$_POST["tdate"];
$tn=$_POST["tnumber"];



$sql = "INSERT INTO viewtickets (Name,Email,Phone_number,Aadhar_number,From_date,To_date,Total_tickets)
VALUES ('$n','$e','$p','$a','$fd','$td','$tn')";//it should match above thid code  

if (mysqli_query($conn, $sql))
{

echo "New record created successfully !";

}
else
{

echo "Error: " . $sql . " " . mysqli_error($conn);

}

$conn->close();

?>
</body>
</html>


