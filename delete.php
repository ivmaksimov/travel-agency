<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM offers WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $place = $data['place'];
        $country = $data['country'];
        $picture = $data['picture'];
        $des = $data['des'];
        $lon = $data['lon'];
        $lat = $data['lat'];
        $price = $data['price'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
    <?php require_once 'components/boot.php' ?>
    <link rel="stylesheet" href="./componentss/xxx.css">
    <style type="text/css">
    fieldset {
        margin: auto;
        margin-top: 100px;
        width: 70%;
    }

    .img-thumbnail {
        width: 70px !important;
        height: 70px !important;
    }
    </style>
</head>

<body>
    <div class="head">
        <h1 class="name  shadow">Welcome to MOUNT EVEREST Travel Agency</h1>
    </div>
    <fieldset class="vh-90">
        <legend class='h2 mb-3'>Delete request <img class='img-thumbnail rounded-circle'
                src='pictures/<?php echo $picture ?>' alt="<?php echo $place ?>"></legend>
        <h5>You have selected the data below:</h5>
        <table class="table w-75 mt-3">
            <tr>
                <td><?php echo $place ?></td>
            </tr>
        </table>

        <h3 class="mb-4">Do you really want to delete this product?</h3>
        <form action="actions/a_delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id ?>" />
            <input type="hidden" name="picture" value="<?php echo $picture ?>" />
            <button class="btn btn-danger" type="submit">Yes, delete it!</button>
            <a href="index.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
        </form>
    </fieldset>
    <?php include 'components/footer.php' ?>

</body>

</html>