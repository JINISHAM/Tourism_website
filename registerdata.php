<html>
<body>
<?php
$host= "localhost";
$username= "root";
$password = "";

$db_name = "gym_register";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn)
{
echo "Connection failed!". "<br>";
}
else
{
echo "Connection Successful". "<br>";
}
$n=$_POST["fname"];
$e=$_POST["femail"];
$p1=$_POST["pwd1"];
$p2=$_POST["pwd2"];

$sql = "INSERT INTO register (name,emailid,password,confirm_password)
VALUES ('$n','$e','$p1','$p2')";
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