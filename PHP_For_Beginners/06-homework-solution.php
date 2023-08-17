<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays - Homework</title>
</head>

<body>
    <?php
        $usernames = [
            "JohnDoe",
            "JaneDoe",
            "FrankDoe"
        ];
    ?>

    <h1>Top Performing Users</h1>

    <ol>
        <?php foreach ($usernames as $username) : ?>
            <li><?= $username ?></li>
        <?php endforeach; ?>
    </ol>

</body>
</html>
