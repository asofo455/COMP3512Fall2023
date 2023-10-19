<!-- <?php

require_once("include/config.inc.php");
require_once('include/databasehelper.inc.php');

try { 
    $conn = DatabaseHelper::createConnection(array(DBCONNSTRING, DBUSER, DBPASS)); 
    $songData = new SongsDB($conn);
    $artistDB = new ArtistsDB($conn);
    $genreDB = new GenresDB($conn);
    $typeDB = new TypesDB($conn);


    if (isset($_GET['song_id']) && !empty($_GET['song_id'])) 
    {
        $songs = $_GET['song_id'];
    }
    else
    {
        $songs = null;
    }
    
}

catch (Exception $e) {
    die(''. $e->getMessage());} 
?> -->

<!DOCTYPE html> 
<head lang="en">
    <meta charset="utf-8">
    <meta name="authors" content="Harsheen Nijjer"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--title-->
    <title>COMP 3512 Assignment 1</title>

</head>

<body>
<header>
    <nav class="flex-container">
        <!--links to other pages on the website--> 
        <a href="index.php" target="_top"></i>Home</a>
        <a href="search.php" target="_top"></i>Search</a> 
        <a href="brower-search-results.php" target="_top"></i>Browse </a>
        <a href="favorite.php" target="_top"></i>Favorites</a>  
    </nav>
</header>


<main>
<section>
    <!--loop through SongDB class to retrieve info--> 

    <?php foreach($songs as $s) {?> 
    <!--list for song information--> 
    <h2 class="ui header">Here's the Song!</h2> 
    <div class="container">
    <ul class="description">
        <li><span>Title: <?=$s['title'] ?></span><li>
        <li><span>Artist Name: <?= $s['artist_name'] ?></span></li>
        <li><span>Artist Type: <?= $s['type_name'] ?></span></li>
        <li><span>Genre: <?= $s['genre_name'] ?></span></li>
        <li><span>Year: <?= $s['year'] ?></span></li>
        <li><span>Duration: <?= $s['duration']; ?></span></li>

  

    </div>

    <!--list for song analysis and progress bars--> 
    <h2 class="ui header">The Goods</h2> 
    <div class="container">
    <ul class="analysis">
        <li><span>bpm <progress class="one" max="200" value="<?= $s['bpm']; ?>"></progress></span><span class="nums"><?= $s['bpm']; ?></span></li>
        <li><span>energy <progress class="two" max="100" value="<?= $s['energy']; ?>"></progress></span><span class="nums"><?= $s['energy']; ?> / 100</span></li>
        <li><span>danceability <progress class="three" max="100" value="<?= $s['danceability']; ?>"></progress></span><span class="nums"><?= $s['danceability']; ?> / 100</span></li>
        <li><span>liveness <progress class="four" max="100" value="<?= $s['liveness']; ?>"></progress></span><span class="nums"><?= $s['liveness']; ?> / 100</span></li> 
        <li><span>valence <progress class="five" max="100" value="<?= $s['valence']; ?>"></progress></span><span class="nums"><?= $s['valence']; ?> / 100</span></li> 
        <li><span>acousticness <progress class="six" max="100" value="<?= $s['acousticness']; ?>"></progress></span><span class="nums"><?= $s['acousticness']; ?> / 100</span></li>
        <li><span>speechiness <progress class="seven" max="100" value="<?= $s['speechiness']; ?>"></progress></span><span class="nums"><?= $s['speechiness']; ?> / 100</span></li> 
        <li><span>popularity <progress class="eight" max="100" value="<?= $s['popularity']; ?>"></progress></span><span class="nums"><?= $s['popularity']; ?> / 100</span></li><br>
</div>
<?php } ?>
</ul>
    </ul>
    </div>
</section>
   
</main>

<!--github links, course name, and copyright--> 
<footer>
    <div class="foot-container">COMP 3512 Web II; Athina Sofocleous & Harsheen Nijjer </div>
    <a href="https://github.com/asofo455/COMP3512Fall2023" target="_blank">Github Repo Link </a>
    <a href="https://github.com/hnijj156" target="_blank">Harsheen's Github Profile</a>
</div>

</footer>

</body>
</html> 