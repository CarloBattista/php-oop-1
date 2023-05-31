<?php

class Movie {
    // Variabili d'istanza
    public $title;
    public $genre = array();
    public $year;

    // Constructor
    public function __construct($title, $genres, $year) {
        $this->title = $title;
        $this->genre = $genres;
        $this->year = $year;
    }

    // Methods
    public function displayMovieInfo() {
        echo "<h2 class='title_content'>Title: " . $this->title . "</h2>";
        echo "<h3 class='genres_content'>Genre: " . implode(", ", $this->genre) . "</h3>";
        echo "<h4 class='year_content'>Year: " . $this->year . "</h4>";
    }
}

// Creo un array per poter ciclare in modo dinamico gli elementi in pagina
$movies = array(
    new Movie("The Shawshank Redemption", array("Drama", "Crime"), 1994),
    new Movie("Inception", array("Science Fiction", "Thriller"), 2010),
    new Movie("Avengers: Endgame", array("Action", "Sci-Fi"), 2019)
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