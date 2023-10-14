<!DOCTYPE html> 
<head lang="en">
    <meta charset="utf-8">
    <meta name="authors" content="Athina Sofocleous & Harsheen Nijjer"/> 
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
            <a href="brower-search-results-page.php" target="_top">Browse / Search Results</a>
            <a class="current" href="favorite.php" target="_top">Favorites</a>
    </nav>
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
                        <th><a href="emptyFavorites.php"><button class="removeAll">Remove All</button></a></th>
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
                       
                        <!--When choosing "View" should link back to Single Song Page with correct song using the song_id as querystring-->
                        <td><a href="single-song.php?song_id=<?= $s['song_id']; ?>" target="_blank"><button class="viewButton">View</button></a></td>
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