<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css?v=1.0">
</head>
<body>
    <div class="container">
        <p>Welcome <?php echo $_SESSION['username'];  ?></p>
        <form action="logout.php" method="post">
            <button class="btn" type="submit">Logout</button>
        </form>
    </div>
</body>
</html>
