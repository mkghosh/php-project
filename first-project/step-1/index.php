<!-- <?php
        $books = [
            "Risk Management", "Microfinance", "Loan and Advances",
        ];
        $is_read = true;
        ?>
    <h1>Recommended Books </h1>
    <?php
    foreach ($books as $book) {
        echo "<li> $book </li>";
    }
    ?>

    <?php foreach ($books as $book) : ?>
        <?= $book ?>
    <?php endforeach; ?>
 -->
<?php
$books = [

    [
        "name" => "The Big Bang",
        "author" => "Stephen Hawking",
        "purchaseUrl" => "amazon.com",
        "releaseYear" => 1968
    ],
    [
        "name" => "The History of Life",
        "author" => "Life Hacker",
        "purchaseUrl" => "amazon.com",
        "releaseYear" => 2021
    ],
    [
        "name" => "The History of Life 2",
        "author" => "Life Hacker",
        "purchaseUrl" => "amazon.com",
        "releaseYear" => 2022
    ]
];

function filterByAuthor($books)
{
    $filteredBooks = [];
    foreach ($books as $book) {
        if ($book['author'] === 'Life Hacker') {
            $filteredBooks[] = $book;
        }
    }
    return $filteredBooks;
}

function filterItems ($items, $key, $value) {
    $filteredItems = [];
    foreach ($items as $item) {
        if ($item[$key] === $value) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}

function filter($items, $fun) {
    $finalItems = [];
    foreach ($items as $item) {
        if ($fun($item)) {
            $finalItems[] = $item;
        }
    }
    return $finalItems;
}

// $filteredBooksList = filter($books, function ($book) {
//     return $book['releaseYear'] < 2020;
// }) ;
$filteredBooksList = array_filter($books, function ($book) {
    return $book['author'] === 'Life Hacker';
});

require './index.view.php';