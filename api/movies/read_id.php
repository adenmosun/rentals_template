<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/movies.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare movie object
$movie = new Movie($db);
 
// set ID property of movie to be edited
$movie->id = isset($_GET['id']) ? $_GET['id'] : die();
 
// read the details of movie to be edited
$movie->readOne();
 
// create array
$movie_arr = array(
    "id" =>  $movie->id,
    "title" => $movie->title,
    "year" => $movie->year,
    "genre" => $movie->genre,
    "ratings" => $movie->ratings,
    "created_at" => $movie->created_at
 
);
 
// make it json format
print_r(json_encode($movie_arr));
?>
