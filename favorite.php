<?php 
// includes 
require('include/config.inc.php');
require('include/databasehelper.inc.php');

// ensure sessions works on this page
session_start();
// if no favorites in session, initialize it to empty array
if(!isset($_SESSION["favorite"])) {
    $_SESSION["favorite"] = [];
}
// retrieve favorites array for this user session
$favorite = $_SESSION["favorite"];
//try catch block for single-song-page page
try {
    //create connection
    $conn = DatabaseHelper::createConnection(array(DBCONNSTRING, DBUSER, DBPASS));
    //connect to class
    $songData = new SongsDB($conn);
    $songs = [];
    //loop to retrieve song_id from favorites array
    foreach($favorites as $getID){
        $song = $songData->getSong($getID)[0];
        $songs[] = $song;
    }
//Exceptiona and error handling
} catch (Exception $e) {
    die ($e->getMessage());
}
?>

<!DOCTYPE html> 
<head lang="en">
    <meta charset="utf-8">
    <meta name="authors" content=" Harsheen Nijjer"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/favorite.css">

    <!--title-->
    <title>COMP 3512 Assignment 1</title>

</head>

<body>
<header>
    <nav class="flex-container">
 <!--links to other pages on the website-->
 <a href="index.php" target="_top">Home</a>
            <a href="search.php" target="_top">Search</a>
            <a href="brower-search-results.php" target="_top">Browse / Search Results</a>
            <a class="current" href="favorite.php" target="_top">Favorites</a>
    </nav> 
</header>
    <main>
        <section>
            <!--background image-->
            <div class="image">
            <div class="container">
            <h2>Favorites</h2>
            </div>
            <div class="table">
                <!--table for songs-->
                <table class="table">
                    <tr class="headers">
                        <th>Title</th>
                        <th>Artist</th>
                        <th>Year</th>
                        <th>Genre</th>
                        <th>Popularity</th>
                        <!--Remove all items from the favorites list-->
                        <th><a href="emptyfavorite.php"><button class="removeAll">Remove All</button></a></th>
                    </tr>
                    <!--Generate title, artist, year, genre, and popularity score through loop-->
                    <?php
                        foreach($songs as $s) { ?>
                        <tr class="info">
                        <td><a class="link" href= "single-song.php?song_id=<?= $s['song_id']; ?>"><?= $s['title']; ?></a></td>
                        <td><?= $s['artist_name']; ?></td>
                        <td><?= $s['year']; ?></td>
                        <td><?= $s['genre_name']; ?></td>
                        <td><?= $s['popularity']; ?></td>

                        <td><a href="single-song.php?song_id=<?= $s['song_id']; ?>" target="_blank">
                        <button class="viewButton">View</button></a></td>

                        <td> <a href="emptyfavorite.php?song_id=<?= $s['song_id']; ?>">
                        <button class="remove">Remove</button></a></td>

                        </tr>
                        <?php 
                        } ?>
                    </table>
                </div>
            </div>
        </section>
        </main>

    <!--github links, course name, and copyright--> 
<footer>
    <div class="foot-container">COMP 3512 Web II; Harsheen Nijjer </div>
    <a href="https://github.com/asofo455/COMP3512Fall2023" target="_blank">Github Repo Link </a>
    <a href="https://github.com/hnijj156" target="_blank">Harsheen's Github Profile</a>
</div>

</footer>


</body>