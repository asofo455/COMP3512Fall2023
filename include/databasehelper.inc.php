<!-- <?php

class DatabaseHelper {
    /* Function returns a connection object to a database */
    public static function createConnection($values = array()) {
        $connString = $values[0];
        $user = $values[1];
        $password = $values[2];
        
        $pdo = new PDO($connString, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
 
   
    }

    public static function runQuery($connection, $sql, $parameters) {
        // ensure parameters are in an array 
        $statement = null;
        if (isset($parameters)) {
            if (is_array($parameters)) {
                $parameters = array($parameters);
            }
        // use a prepared statement if paramters     
        $statement = $connection->prepare($sql);
        $executedOk = $statement->execute($parameters);
        if (! $executedOk) throw new PDOException;   
        }
        else {
            // execute the normal query 
            $statement = $connection->query($sql);
            if ($statement === false) throw new PDOException;
        }
        return $statement; 
    }
}
    class ArtistsDB{

        // adding a provate PDO to try and fix the pdo issue 
        private PDO $pdo;


        private static $baseSQL = "SELECT artist_id, artist_name, artists.artist_type_id, type_id, type_name 
        FROM artists INNER JOIN types ON artists.artists_type_id = types.type_id ORDER BY artist_name";

        public function __construct($connection) {
            $this->pdo = $connection;
         
        }
        // get all 
        public function getAll(){
            $sql = self::$baseSQL;
            $statement = DatabaseHelper::runQuery($this->pdo, $sql, null);
            return $statement->fetchAll();
        }
    }

    class TypesDB{
        private $pdo;
        private static $baseSQL = "SELECT type_id, type_name FROM 
        ORDER BY type_name";

        public function __construct($connection) {
            $this->pdo = $connection;
        }
        //get all
        public function getAll(){
            $sql = self::$baseSQL;
            $statement = DatabaseHelper::runQuery($this->pdo, $sql,null);
            return $statement->fetchAll();
        }
    }

    class GenresDB{
        private $pdo;
        private static $baseSQL = "SELECT genre_id, genre_name FROM genres ORDER BY 
        genre_name";

        public function __construct($connection) {
            $this->pdo = $connection;
        }
        // get all
        public function getAll(){
            $sql = self::$baseSQL;
            $statement = DatabaseHelper::runQuery($this->pdo, $sql,null);
            return $statement->fetchAll();
        }
    }

    class SongsDB{
        private $pdo;
        private static $baseSQL = "SELECT song_id, title, artist_id, artist_name, artisit_type_id,type_id, type_name, songs.genre_id, genre_name, year, bpm, energy, 
        danceability, loudness, liveness, valence, duration, acousticness, speechiness, popularity
        FROM (((songs
        INNER JOIN artists ON songs.artist_id = artists.artist_id)
        INNER JOIN genres ON songs.genre_id = genres.genre_id) INNER JOIN types ON artist_type_id = types.type_id) 
     ";

        public function __construct($connection) {
            $this->pdo = $connection;
        }

        // get all 
        public function getAll(){
            $sql = self::$baseSQL;
            $statement = DatabaseHelper::runQuery($this->pdo, $sql, null);
            return $statement->fetchAll();
        }

        // get song_id  
        public function getSong($songID){
            $sql = self::$baseSQL . "Where song_id=?";
            $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($songID));
            return $statement->fetchAll();
        }

        // get artist_id  
        public function getAllForArtists($artistID){
            $sql = self::$baseSQL . " Where songs.artist_id=?";
            $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($artistID));
            return $statement->fetchAll();
        }

        // get title 
        public function getTitle($title){
            $sql = self::$baseSQL . " WHERE title=?";
            $sql .=  " OR title LIKE '%$title%'";
            $sql .=  " ORDER BY artist_name ";
            $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($title));
            return $statement->fetchAll();
        }

        // get year 
        public function getYear($year) {
            $sql = self::$baseSQL . " WHERE year=?";
            $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($year));
            return $statement->fetchAll();
        }

        // get popularity 
        public function getPopularity($popularity) {
            $sql = self::$baseSQL . " WHERE popularity=?";
            $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($popularity));
            return $statement->fetchAll();
        }

        // get genre_id 
        public function getAllForGenres($genreID) {
            $sql = self::$baseSQL . " WHERE songs.genre_id=?";
            $sql .=  " ORDER BY artist_name ";
            $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($genreID));
            return $statement->fetchAll();
        }

    }

 ?> -->

 <?php 
$databasefile = 'database/music.db'; 

try {
$pdo = new PDO("sqlite:$databasefile");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

 ?>