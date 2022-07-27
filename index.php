<?php 
    // - è definita una classe 'Movie'
    class Movie {
        // => all'interno della classe sono dichiarate delle variabili d'istanza
        public $title;
        public $genre;
        public $director;
        public $cover;
        public $quote;

        // => all'interno della classe è definito un costruttore
        public function __construct($_title, $_genre, $_director, $_cover, $_quote) {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->director = $_director;
            $this->cover = $_cover;
            $this->quote = $_quote;
        }

        // => all'interno della classe è definito almeno un metodo
        public function getQuote() {
            return $this->quote;
        }
    }

    // - vengono istanziati almeno due oggetti 'Movie' 
    $PulpFiction = new Movie (
        'Pulp Fiction', 
        'Giallo/Drammatico', 
        'Quentin Tarantino',
        './img/pulp-fiction.webp',
        'Ezechiele, 25:17. Il cammino dell\'uomo timorato è minacciato da ogni parte dalle iniquità degli esseri egoisti e dalla tirannia degli uomini malvagi.
        Benedetto sia colui che nel nome della carità e della buona volontà, conduce i deboli attraverso la valle delle tenebre, perché egli è in verità il pastore di suo fratello e il ricercatore dei figli smarriti. E la mia giustizia calerà sopra di loro con grandissima vendetta e furiosissimo sdegno su coloro che si proveranno ad ammorbare, e infine a distruggere i miei fratelli. E tu saprai che il mio nome è quello del Signore, quando farò calare la mia vendetta sopra di te!'
    );

    $FightClub = new Movie (
        'Fight Club',
        'Thriller/Drammatico',
        'David Fincher',
        './img/fight-club.jpg',
        'Se ti svegliassi ad un\'ora diversa in un posto diverso, ti sveglieresti come una persona diversa?'
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Movies</title>
</head>
<body>
    <!-- e stampati a schermo i valori delle relative proprietà -->

    <div class="container">
        <div class="col">
            <!-- movie card -->
            <div class="movie-card">

                <!-- card image -->
                <div class="card-image">
                    <img src="<?php echo $PulpFiction->cover; ?>" alt="<?php echo $PulpFiction->title; ?>">
                </div>

                <!-- card text -->
                <div class="card-text">
                    <h2 class="title">
                        <?php echo $PulpFiction->title; ?>
                    </h2>

                    <div class="genre">
                        Genere: <?php echo $PulpFiction->genre; ?>
                    </div>

                    <div class="director">
                        Regista: <?php echo $PulpFiction->director; ?>
                    </div>

                    <p class="quote">
                        <i class="fa-solid fa-quote-left"></i>
                            <?php echo $PulpFiction->getQuote(); ?>
                        <i class="fa-solid fa-quote-right"></i>
                    </p>
                </div>

            </div>
        </div>

        <div class="col">
            <!-- movie card -->
            <div class="movie-card">

                <!-- card image -->
                <div class="card-image">
                    <img src="<?php echo $FightClub->cover; ?>" alt="<?php echo $FightClub->title; ?>">
                </div>

                <!-- card text -->
                <div class="card-text">
                    <h2 class="title">
                        <?php echo $FightClub->title; ?>
                    </h2>

                    <div class="genre">
                       Genere: <?php echo $FightClub->genre; ?>
                    </div>

                    <div class="director">
                       Regista: <?php echo $FightClub->director; ?>
                    </div>

                    <p class="quote">
                        <i class="fa-solid fa-quote-left"></i>
                            <?php echo $FightClub->getQuote(); ?>
                        <i class="fa-solid fa-quote-right"></i>
                    </p>
                </div>

            </div>
        </div>
    </div>
</body>
</html>