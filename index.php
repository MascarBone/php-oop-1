<?php

require_once __DIR__ . '/movie.php';

$movies = [new Movie(
    10001,
    'Last Night in Soho',
    'https://m.media-amazon.com/images/M/MV5BZjgwZDIwY2MtNGZlNy00NGRlLWFmNTgtOTBkZThjMDUwMGJhXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_FMjpg_UX1000_.jpg',
    ['drama','horror','thriller'],
    'english',
    '04/11/2021',
    118,
    false,
    'Una giovane ragazza, appassionata di design della moda, è misteriosamente in grado di entrare negli anni \'60.',
    7,
    ['Thomasin McKenzie', 'Anya Taylor-Joy', 'Matt Smith', 'Diana Rigg', 'Terence Stamp', 'Synnove Karlsen', 'James Phelps', 'Rita Tushingham', 'Oliver Phelps', 'Michael Jibson'],    
),
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php-oop-1</title>
</head>
<body>
    
    <main>
        <?php foreach($movies as $movie) {?>
            
            <section>
                <h2><?= $movie->getTitle(); ?></h2>

                <div class="wrapper">               

                    <div class="side side-left">
                        <div class="poster">
                            <img src="<?= $movie->getPosterPath(); ?>" alt="<?= $movie->getTitle(); ?>">
                        </div>
                    </div>
                    <div class="side side-right">
                        <p><?= $movie->getGenres(); ?></p>
                        <p><?= $movie->getLanguage(); ?></p>
                        <p><?= $movie->getReleaseDate(); ?></p>
                        <p><?= $movie->getLength(); ?></p>
                        <p><?= $movie->getAdult() ? 'For Adult' : 'Below 18'; ?></p>
                        <p><?= $movie->getOverview(); ?></p>
                        <p><?= $movie->getReview(); ?></p>
                        <p><?= $movie->getCast(); ?></p>
                    </div>
                    
                </div>
            </section>
            


        <?php }; ?>
            
        
    </main>

</body>
</html>