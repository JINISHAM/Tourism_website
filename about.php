<!-- about_us.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="proj1.css">
</head>
<body>
    <header>
        <h1>About Us</h1>
    </header>

    <section class="about-section">
        <?php
$aboutData = array(
    'title' => 'Welcome to Our Tourism Website!',
    'content' => 'We are passionate about creating unforgettable travel experiences. Our team is dedicated to providing you with the best adventures,<br> ensuring you discover the beauty and wonders of the world in style and comfort.',
    'team' => array(
        'XXX' => 'Founder and CEO',
        'YYY' => 'Head of Operations',
        'ZZZ' => 'Marketing Specialist',
       
    )
);

echo '<h2>' . $aboutData['title'] . '</h2>';
echo '<p>' . $aboutData['content'] . '</p>';

echo '<h3>Our Team</h3>';
echo '<ul>';
foreach ($aboutData['team'] as $name => $role) {
    echo '<li><strong>' . $name . ':</strong> ' . $role . '</li>';
}
echo '</ul>';
?>

        
    </section>

    <footer>
        <p>&copy; 2023 SHA'S Tourism </p>
    </footer>
</body>
</html>
