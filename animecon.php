<?php 
$id = $_GET['id'];
$eps = $_GET['eps'];
$slug = $_GET['slug'];
$animesingle = "https://api.gdriveplayer.us/v1/anime/id/$id";
$animesingleget = file_get_contents($animesingle);
$animesingles = json_decode($animesingleget);
 ?>
