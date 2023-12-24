<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My PHP Playground</title>
</head>

<body>

    <h1>Filtered book by author.</h1>
    <ul>

        <?php foreach ($filteredBooksList as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl']; ?>">
                    <?= $book['name']; ?>
                </a>
                <!-- <?= $book['author']; ?> -->
                <!-- <?= $book['releaseYear']; ?> -->
            </li>
        <?php endforeach; ?>

    </ul>
</body>

</html>