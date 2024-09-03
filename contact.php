<!-- contact.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="proj1.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>

    <section class="contact-section">
        <?php
$contactData = array(
    'email' => 'xxx@kongu.edu',
    'phone' => '9876543210',
    'address' => '123 Travel Street, Cityville, India'
);

echo '<p>If you have any questions or inquiries, please feel free to contact us:</p>';
echo '<ul>';
echo '<li>Email: ' . $contactData['email'] . '</li>';
echo '<li>Phone: ' . $contactData['phone'] . '</li>';
echo '<li>Address: ' . $contactData['address'] . '</li>';
echo '</ul>';
?>
    </section>

    <footer>
        <p>&copy; 2023 SHA'S Tourism</p>
    </footer>
</body>
</html>
