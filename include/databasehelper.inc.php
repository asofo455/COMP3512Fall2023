<?php
class DatabaseHelper {
/* Returns a connection object to a database */
    public static function createConnection($values=array()) {
        $connString = $values[0];
        $user = $values[1];
        $password = $values[2];
        $pdo = new PDO($connString, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
    /*
    Runs the specified SQL query using the passed connection and
    the passed array of parameters (null if none)
    */
    public static function runQuery($connection, $sql, $parameters) {
        $statement = null;
        // if there are parameters then do a prepared statement
        if (isset($parameters)) {
        // Ensure parameters are in an array
        if (!is_array($parameters)) {
            $parameters = array($parameters);
        }
        // Use a prepared statement if parameters
        $statement = $connection->prepare($sql);
        $executedOk = $statement->execute($parameters);
        if (!$executedOk) throw new PDOException;
      } else {
        // Execute a normal query
        $statement = $connection->query($sql);
        if (!$statement) throw new PDOException;
      }
      return $statement;
    }
}

class SongsDB {
    private static $baseSQL = "SELECT song_id, title, songs.artist_id, artist_name, artist_type_id, type_id, type_name, songs.genre_id, genre_name, year, bpm, energy, 
    danceability, loudness, liveness, valence, duration, acousticness, speechiness, popularity FROM (((songs
    INNER JOIN artists ON songs.artist_id = artists.artist_id) INNER JOIN genres ON songs.genre_id = genres.genre_id) INNER JOIN types ON artist_type_id = types.type_id) ";

    public function __construct($connection) {
        $this->pdo = $connection;
    }
    // Get All function for SongsDB class
    public function getAll() {
        $sql = self::$baseSQL;
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, null);
        return $statement->fetchAll();
    }
    // get song_id string query
    public function getSong($songID) {
        $sql = self::$baseSQL . " WHERE song_id=?";
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($songID));
        return $statement->fetchAll();
    }
    // get title string query, order by artist_name, and find title in database
    public function getTitle($title){
        $sql = self::$baseSQL . " WHERE title=?";
        $sql .=  " OR title LIKE '%$title%'";
        $sql .=  " ORDER BY artist_name ";
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($title));
        return $statement->fetchAll();
    }
    // get artist_id query string
    public function getAllForArtists($artistID) {
        $sql = self::$baseSQL . " WHERE songs.artist_id=?";
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($artistID));
        return $statement->fetchAll();
    }
    // get year query string
    public function getYear($year) {
        $sql = self::$baseSQL . " WHERE year=?";
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($year));
        return $statement->fetchAll();
    }
    // get genre_id query string
    public function getAllForGenres($genreID) {
        $sql = self::$baseSQL . " WHERE songs.genre_id=?";
        $sql .=  " ORDER BY artist_name ";
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($genreID));
        return $statement->fetchAll();
    }
    // get popularity query string
    public function getPopularity($popularity) {
        $sql = self::$baseSQL . " WHERE popularity=?";
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($popularity));
        return $statement->fetchAll();
    }
}

class ArtistsDB {
    private static $baseSQL = "SELECT artist_id, artist_name, artists.artist_type_id, type_id, type_name FROM artists INNER JOIN types ON artists.artist_type_id = types.type_id ORDER BY artist_name";

    public function __construct($connection) {
        $this->pdo = $connection;
    }
    // get all function
    public function getAll() {
        $sql = self::$baseSQL;
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, null);
        return $statement->fetchAll();
    }

}

class GenresDB {
    private static $baseSQL = "SELECT genre_id, genre_name FROM genres ORDER BY genre_name";

    public function __construct($connection) {
        $this->pdo = $connection;
    }
    // get all function
    public function getAll() {
        $sql = self::$baseSQL;
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, null);
        return $statement->fetchAll();
    }
}

class TypesDB {
    private static $baseSQL = "SELECT type_id, type_name FROM types ORDER BY type_name";

    public function __construct($connection) {
        $this->pdo = $connection;
    }
    // get all function
    public function getAll() {
        $sql = self::$baseSQL;
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, null);
        return $statement->fetchAll();
    }
}