<?php 
// includes 
require_once('includes/config.inc.php');
require_once('includes/databasehelper.inc.php');
?>

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
  <a href="index.php" target="_top">Home</a>
            <a href="search.php" target="_top">Search</a>
            <a class="current" href="index.php" target="_top">Browse / Search Results</a>
            <a href="favorite.php" target="_top">Favorites</a>
        </nav>
        <main>
    <section>
        <!--background image-->
        <div class="image">
        <div class="container">
            <h2>Browse/Search Results</h2>
        </div>
        <!--table for songs-->
        <div class="table">
            <table class="table">
                <tr class="headers">
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Year</th>
                    <th>Genre</th>
                    <th>Popularity</th>
                    <th><a href="brower-search-results-page.php" target="_self"><button class="showButton"> Show All</button></a></th>
                </tr>
                <!--Generate title, artist, year, genre, and popularity score through loop-->
                <?php
                foreach($songs as $result) { ?>
                    <tr class="info">
                    <td><a class="link" href= "single-song-page.php?song_id=<?= $result['song_id']; ?>"><?= $result['title']; ?></a></td>
                    <td><?= $result['artist_name']; ?></td>
                    <td><?= $result['year']; ?></td>
                    <td><?= $result['genre_name']; ?></td>
                    <td><?= $result['popularity']; ?></td>
                    <!--Enable ability to add song to favorites and go to favorites page with correct song-->
                    <td><a href="addToFavorites.php?song_id=<?= $result['song_id']; ?>" target="_blank">
                    <button class="favButton">Add to favorites</button></a></td>

                    <!--When choosing "View" should link back to Single Song Page with correct song using the song_id as querystring-->
                    <td><a href="single-song-page.php?song_id=<?= $result['song_id']; ?>" target="_blank">
                    <button class="viewButton">View</button></a></td>
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
    <div class="foot-container">COMP 3512 Web II; Athina Sofocleous & Harsheen Nijjer </div>
    <a href="https://github.com/asofo455/COMP3512Fall2023" target="_blank">Github Repo Link </a>
    <a href="https://github.com/asofo455" target="_blank">Athina's Github Profile</a>
    <a href="https://github.com/hnijj156" target="_blank">Harsheen's Github Profile</a>
</div>

</footer>

</body>

