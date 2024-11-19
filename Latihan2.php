<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Predefine Variable</h1>
    <?php
    if (isset($_GET['nama']) && !empty($_GET['nama'])) {
        echo 'Selamat datang ' . htmlspecialchars($_GET['nama']);
    } else {
        echo 'Selamat datang Simfrosa Gradiani';
    }
    ?>
</body>
</html>
