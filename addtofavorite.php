<?php
session_start();
if (isset($_SESSION["Favorite"])) {
$_SESSION["Favorite"] = [] ;
}
$favorite = $_SESSION["Favorite"];
$favorite[] = $_GET['songs_id'];
$_SESSION['Favorite'] = $favorite ;
header('Location: favorite.php');
?>