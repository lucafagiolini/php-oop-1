<?php 

    class Movie {
        public $title;
        public $genre;
        public $year;
        public $rating;

        public function __construct($title, $genre, $year, $rating) {
            $this->title = $title;
            $this->genre = $genre;
            $this->year = $year;
            $this->rating = $rating;
        }
        public function getMovieInfo() {
            return $this->title . " - " . $this->genre . " - " . $this->year . " - " . $this->rating;
        }
    }

    $movie1 = new Movie("The Matrix", "Sci-Fi", 1999, 8.7);
    $movie2 = new Movie("The Matrix Reloaded", "Sci-Fi", 2003, 7.2);
    $movie3 = new Movie("The Matrix Revolutions", "Sci-Fi", 2003, 6.7);
    
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>



    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- framework -->
    <link rel="stylesheet" href="./css/framework.css">

    <!-- style css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/39dc9eb8ed.js" crossorigin="anonymous"></script>
</head>




<body data-bs-theme="dark">

    <div id="app" class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Movies</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class='justify-content-center text-center'>
                   <?php
                   echo "<li>" . $movie1->getMovieInfo() . "</li>";
                     echo "<li>" . $movie2->getMovieInfo() . "</li>";
                        echo "<li>" . $movie3->getMovieInfo() . "</li>";
                   
                   ?>
                </ul>
            </div>
        </div>
    











    <!-- ******** LIBRARIES AND FRAMEWORKS ******** -->

    <!-- Vue -->
    <script src="https://unpkg.com/vue@3"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

    <!-- JS -->
    <script type="text/javascript" src="./js/script.js"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>