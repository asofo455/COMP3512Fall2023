<?php

use DatabaseHelper as GlobalDatabaseHelper;

class DatabaseHelper {
    /* Function returns a connection object to a database */
    public static function createConnection($values=array()) {
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
        private static $baseSQL = "SELECT artist_id, artist_name, artists.artist_type_id, type_id, type_name 
        FROM artists INNER JOIN types ON artists.artists_type_id = types.type_id ORDER BY artist_name";

        public function __construct($connection) {
            $this->$pdo = $connection;

        }
        // get all 
        public function getAll(){
            $sql = self::$baseSQL;
            $statement = DatabaseHelper::runQuery($this->pdo, $sql, null);
            return $statement->fetchAll();
        }
    }

?>