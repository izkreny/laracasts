<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1>Top players</h1>

    <?php
        $usernames = [
            "alfa",
            "beta",
            "gama",
            "omega",
        ];
    ?>

    <ol>
        <?php foreach ($usernames as $username) { ?>
            <li><?= $username ?></li>
        <?php } ?>
    </ol>
</body>
</html>
