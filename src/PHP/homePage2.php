<?php 
require('connectFordB.php');

$query = 'SELECT post FROM posts';

// Get Result
$result = mysqli_query($connect, $query);


// Fetch Data
$questions = mysqli_fetch_all($result, MYSQLI_ASSOC);


echo json_encode($questions);