<?php

require_once __DIR__ . '/movie.php';

$movies = [
    new Movie(
    10001,
    'Last Night in Soho',
    'https://m.media-amazon.com/images/M/MV5BZjgwZDIwY2MtNGZlNy00NGRlLWFmNTgtOTBkZThjMDUwMGJhXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_FMjpg_UX1000_.jpg',
    ['drama','horror','thriller'],
    'english',
    '04/11/2021',
    118,
    false,
    'Una giovane ragazza, appassionata di design della moda, è misteriosamente in grado di entrare negli anni \'60.',
    8,
    ['Thomasin McKenzie', 'Anya Taylor-Joy', 'Matt Smith', 'Diana Rigg', 'Terence Stamp', 'Synnove Karlsen', 'James Phelps', 'Rita Tushingham', 'Oliver Phelps', 'Michael Jibson'],    
    ),
    new Movie(
        10001,
        'Doctor Strange in the Multiverse of Madness',
        'https://m.media-amazon.com/images/M/MV5BYzljNzE0ZDktNWFkOS00ZjE3LWJjNzEtZTE0NmVhNzBmYzE5XkEyXkFqcGdeQXVyNjg3MDMxNzU@._V1_UY1200_CR84,0,630,1200_AL_.jpg',
        ['action','fantasy'],
        'english',
        '23/03/2022',
        176,
        false,
        'Ancora alle prese con il multiverso, come sembra sarà già nel film appena precedente, il Doctor Strange dovrà vedersela di certo anche con Wanda, reduce dal tragico epilogo di WandaVision, munita di un tenebroso libro magico e determinata a riavere i suoi figli. Alla regia torna un mito del cinema di supereroi, Sam Raimi, che avrà anche il compito di riprendere i personaggi interpretati da Benedict Wong, Chiwetel Ejiofor e Rachel McAdams e pure di introdurre una supereroina fieramente latina come America Chavez, cui presta il volto l\'attrice di origini messicane Xochitl Gomez.',
        'n.d',
        ['Benedict Cumberbatch', 'Elizabeth Olsen', 'Rachel McAdams', 'Chiwetel Ejiofor', 'Benedict Wong', 'Xochitl Gomez'],    
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