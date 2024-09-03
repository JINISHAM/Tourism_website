<html>
<body>
<?php
$host= "localhost";
$username= "root";
$password = "";
$db_name = "tourism_register";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn)
{
echo "Connection failed!". "<br>";
}
else{
echo "Connection Successful". "<br>";
}

$sql = "SELECT * FROM viewtickets";
$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
if((!strcmp($row["Phone_number"],$_POST["phone"])))
{
echo "name " . "<br>";
echo "email " . $row["Email"] . "<br>";
echo "phone " . $row["Phone_number"] . "<br>";
echo "aadhar " . $row["Aadhar_number"] . "<br>";
echo "fdate " . $row["From_date"] . "<br>";
echo "tdate " . $row["To_date"] . "<br>";
echo "tnumber " . $row["Total_tickets"] . "<br>";

}
}
}
else { echo "0 results";
}
$conn->close();
?>
</body>
</html>