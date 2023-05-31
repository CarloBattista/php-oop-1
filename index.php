<?php

class Movie {
    // Variabili d'istanza
    public $title;
    public $genre;
    public $year;

    // Constructor
    public function __construct($title, $genre, $year) {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    // Methods
    public function displayMovieInfo() {
        echo "Title: " . $this->title . "<br>";
        echo "Genre: " . $this->genre . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}

// Creo un array per poter ciclare in modo dinamico gli elementi in pagina
$movies = array(
    $movie1 = new Movie("The Shawshank Redemption", "Drama", 1994),
    $movie2 = new Movie("Inception", "Science Fiction", 2010),
    $movie3 = new Movie("Avengers: Endgame", "Fantasy", 2019)
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./_assets/css/main.css">
</head>

<body>

    <!-- Container Main -->
    <div class="main">
        <!-- Container Heading -->
        <div class="container_heading">
            <h1 class="heading">Movies</h1>
        </div>
        <!-- Container Contents -->
        <div class="container_contents">
            <?php foreach ($movies as $elem) { ?>
                <div class="card">
                    <?php $elem->displayMovieInfo(); ?>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>