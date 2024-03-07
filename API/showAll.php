<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API to AJAX</title>
    <link rel="stylesheet" href="componentss/xxx.css" />
    <?php require_once '../components/boot.php' ?>
</head>

<body>
    <div class="container mt-5 mb-5">
        <h1>Printed with AJAX</h1>
        <button class="btn btn-success mt-3 mb-3" id="button">Show All</button>
        <div id="printajax"></div>
    </div>
    <script>
    document.getElementById("button").addEventListener("click", getOffers,
        false); //create an eventlistener to call getUsers() function when button clicked

    function getOffers() {
        const request = new XMLHttpRequest(); //create new request
        request.open("GET", "displayAll.php", true); //set request as a GET method connecting to users.php
        request.onload = function() {
            if (this.status == 200) {
                let showAll = JSON.parse(this.responseText); //data received are turned to objects
                console.log(showAll) //see the array of objects in your console
                let output = ''; //create container variable
                // users.forEach(user => {
                for (let i in showAll) {
                    output += `
                       <ul>
                       <li>Location name: ${showAll[i].place} </li>
                       <li>Location: ${showAll[i].country} </li>
                       <li>Image link: ${showAll[i].picture} </li>
                       <li>Price: ${showAll[i].price} </li>
                       <li>Description: ${showAll[i].des} </li>
                       <li>Longitude: ${showAll[i].lon} </li>
                       <li>Latitude: ${showAll[i].lat} </li>
                       <li>category: ${showAll[i].sect} </li>
                       </ul>
                       `; //loop through each object and display their properties
                }
                document.getElementById('printajax').innerHTML = output; //output results in div#users
                // });
            }
        }
        request.send(); //send request
    }
    </script>
</body>

</html>