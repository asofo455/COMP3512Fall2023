<?php
session_start();
if (isset($_SESSION["favorite"])) {
$_SESSION["favorite"] = [] ;
}
$favorite = $_SESSION["favorite"];
$favorite[] = $_GET['songs_id'];
$_SESSION['favorite'] = $favorite ;
header('Location: favorite.php');
?>