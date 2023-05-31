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

    <div class="container_heading">
        <h1 class="heading">Movies</h1>
    </div>
    <div class="container_contents">
        <div class="card"></div>
    </div>

</body>

</html>