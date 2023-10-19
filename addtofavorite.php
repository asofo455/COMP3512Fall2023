<?php
session_start();
if (isset($_SESSION["Favorites"])) {
$_SESSION["Favorites"] = [] ;
}
$favorites = $_SESSION["Favorites"];
$favorites[] = $_GET['songs_id'];
$_SESSION['Favorites'] = $favorites ;
header('Location: favorite.php');
?>