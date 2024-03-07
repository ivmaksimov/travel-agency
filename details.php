<?php


require_once 'actions/db_connect.php';

if ($_GET['id']) {
  $id = $_GET['id'];

  $sql = "SELECT * FROM offers WHERE id = {$id}";
  $result = mysqli_query($connect, $sql);
  if (mysqli_num_rows($result) == 1) {
    $data = mysqli_fetch_assoc($result);
    $place = $data['place'];
    $country = $data['country'];
    $picture = $data['picture'];
    $des = $data['des'];
    $lon = $data['lon'];
    $lat = $data['lat'];
    $price = $data['price'];
  }
}









?>
<!DOCTYPE html>
<html>

<head>
    <title>Details</title>

    <meta name="viewport" content="initial-scale=1.0" />

    <meta charset="utf-8" />
    <link rel="stylesheet" href="componentss/xxx.css" />

</head>

<body>
    <div class="home">
        <div class="head">
            <h1 class="name  shadow">Welcome to MOUNT EVEREST Travel Agency</h1>
        </div>
        <div class="text-center">
            <h1 class="price shadow">MORE INFORMATIONS</h1>
        </div>
        <div class="be1" style="background-image: url(pictures/<?php echo $picture ?>);">
            <div class="ce1">
                <div class="map-name">
                    <h1 class="place shadow"><?php echo $place ?></h1>

                    <h1 class="place shadow"><?php echo $country ?></h1>
                </div>


                <div id="map"></div>

            </div>
            <div class="ce1 ">
                <p class="des shadow "><?php echo $des ?></p>

                <h1 class="price shadow">From <?php echo $price ?> € / Night</h1>
            </div>
        </div>
        <div class="pb-2">
            <a href="<?php echo 'update.php?id=' . $id ?>"><button class="btn edit">Edit</button></a>
            <a href="<?php echo 'delete.php?id=' . $id ?>"><button class="btn delete">Delete</button></a>

            <a href="index.php"><button class="btn back">Back</button></a>
        </div>
    </div>
    <?php include 'components/footer.php' ?>

    <script>
    var map;

    function initMap() {
        var vienna = {
            lat: <?php echo $lat ?>,

            lng: <?php echo $lon ?>,
        };

        map = new google.maps.Map(document.getElementById("map"), {
            center: vienna,

            zoom: 8,
        });

        var pinpoint = new google.maps.Marker({
            position: vienna,

            map: map,
        });
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap"
        async defer></script>
</body>

</html>