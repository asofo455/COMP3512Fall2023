
<?php 
//includes 
require_once("include/config.inc.php");
require_once('include/databasehelper.inc.php');

// try{
// $conn = DatabaseHelper::createConnection(array(DBCONNSTRING, DBUSER, DBPASS));
// $songData = new SongsDB($conn);
// $songs = $songData->getAll();
// $artistData = new ArtistsDB($conn);
// $artists = $artistData->getAll();
// $genreData = new GenresDB($conn);
// $genres = $genreData->getAll();

// }
// catch(Exception $e){
//     die($e->getMessage());
// }
// ?>


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
            <a class="current" href="search-page.php" target="_top">Search</a>
            <a href="results-page.php" target="_top">Browse / Search Results</a>
            <a href="favorites-page.php" target="_top">Favorites</a>
        </nav>
        </header>
        <main>
            <section>
            <!--background image-->
            <div class="image">
                <div class="container">
                    <!--form to conduct search and output to results-page.php-->
                    <form action="results-page.php" method="get" target="_blank">
                    <h2>Song Search</h2>
                    <h4>Please select one option:</h4>
                    <!--Search by title-->
                    <div class="title">
                    <label for="title">Title: </label>
                    <input type="text" id="title" name='title' placeholder="Type in song title">
                    </div>

                    <!--Search by artist-->
                    <div class="artist">
                    <label for="artist">Artist: </label>
                    <select id="artist" name="artist_id">
                    <option value="" >Select artist</option>
                    <?php
                        foreach ($artists as $a) {
                            echo "<option value='" . $a['artist_id'] . "'>" . $a['artist_name'] . "</option>";
                         }
                    ?>
                    </select>
                    </div>

                    <!--Search by genre-->
                    <div class="genre">
                    <label for="genre">Genre: </label>
                    <select id="genre" name='genre_id'>
                    <option value="">Select genre</option>
                    <?php
                        foreach ($genres as $g) {
                            echo "<option value='" . $g['genre_id'] . "'>" . $g['genre_name'] . "</option>";
                        }
                    ?>   
                    </select>
                    </div>

                    <!--Search by year-->
                    <div class="year">
                    <label for="year">Year: </label>
                    <!--Search year by less than-->
                    <input type="radio" id="lessYear" name="choose1">
                    <label for="lessYear">Less</label>
                    <input type="number" id="lessYear" name='year' min="2017" max="2018">
                    <!--Search year by greater than-->
                    <input type="radio" id="greaterYear" name="choose1">
                    <label for="greaterYear">Greater</label>
                    <input type="number" id="greaterYear" name='year' min="2016" max="2018">
                    </div>

                    <!--Search by popularity score-->
                    <div class="popularity">
                    <label for="popularity">Popularity: </label>
                    <!--Search by popularity score by less than-->
                    <input type="radio" id="lessPopularity" name="choose1">
                    <label for="lessPopularity">Less</label>
                    <input type="number" id="lessPopularity" name='popularity' min="0" max="100">
                    <!--Search by popularity score by greater than-->
                    <input type="radio" id="greaterPopularity" name="choose1">
                    <label for="greaterYear">Greater</label>
                    <input type="number" id="greaterPopularity" name='popularity' min="0" max="100">
                    </div>
                
                    <div class="buttons">
                    <!--Search and redirect to results-page.php-->
                    <input type="submit" value="Search" >
                    <!--clear form-->
                    <input type="reset">
                    </div>
                    </form>
                </div>
            </div>
            </section>
        </main>
    </nav>

<!--github links, course name, and copyright--> 
<footer>
    <div class="foot-container">COMP 3512 Web II; Athina Sofocleous & Harsheen Nijjer </div>
    <a href="https://github.com/asofo455/COMP3512Fall2023" target="_blank">Github Repo Link </a>
    <a href="https://github.com/asofo455" target="_blank">Athina's Github Profile</a>
    <a href="https://github.com/hnijj156" target="_blank">Harsheen's Github Profile</a>
</div>

</footer>

</body>