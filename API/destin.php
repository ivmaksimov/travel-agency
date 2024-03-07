<?php

require_once '../actions/db_connect.php';

//query
$query="SELECT * FROM offers";

//Get results
$result= mysqli_query($connect,$query);

//Fetch Data from database
$offers=mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($offers);


?>