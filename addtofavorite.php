<?php 
session_start();
if (isset($_SESSION["Favorites"])) {
    $_SESSION["Favorites"] = [] ; 
}

$favorite = $_SESSION["Favorites"];
$favorite[] = $_GET['song_id'];
$_SESSION["Favorites"] = $favorite ;
header("Location: favorite.php");

?>