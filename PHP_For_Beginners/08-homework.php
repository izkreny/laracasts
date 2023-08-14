<?php

$movies = [
    [
        'name' => 'Blade Runner',
        'year' => 1982
    ],
    [
        'name' => 'Princess Mononoke',
        'year' => 1997
    ],
    [
        'name' => 'Avatar',
        'year' => 2009
    ],
    [
        'name' => 'Little Miss Sunshine',
        'year' => 2006
    ],
];

function filterByYear($movies, $year)
{
    $filteredMovies = [];

    foreach ($movies as $movie) {
        if ($movie['year'] >= $year) {
            $filteredMovies[] = $movie;
        }
    }

    return $filteredMovies;
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>#8 - Homework</title>
</head>

<body>
    <ul>
        <?php foreach (filterByYear($movies, 2000) as $movie) : ?>
            <li>
                <?= $movie['name'] ?> (<?= $movie['year'] ?>)
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
