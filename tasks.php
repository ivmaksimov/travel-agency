<!DOCTYPE html>
<html>

<head>
    <title>Tasks</title>

    <meta name="viewport" content="initial-scale=1.0" />

    <meta charset="utf-8" />
    <link rel="stylesheet" href="componentss/xxx.css" />

</head>

<body>

    <div class="head">
        <h1 class="name  shadow">Welcome to MOUNT EVEREST Travel Agency</h1>
    </div>
    <div class="text-center">
        <h1 class="price shadow">Project Description:</h1>
    </div>
    <div class="tasks-container">
        <p>"Mount Everest'' is the name of a travel agency from Vienna. They want a nice looking responsive web page
            where they can advertise their travel offers. "Mount Everest" travel agency also wants that each offer
            could be shown independently when the user clicks on it or on a button "Details". Whenever that happens,
            a google maps map should show a pinpoint indicating the location of the current offer.</p>
        <p>make a CRUD (create/read/update/delete) for the touristic agency offers.</p>
        <p>create a details file: when you click on any offer it will lead you to a new page that will show more
            information about the offer that was clicked on.
        </p>
        <p>On the details page, you need to use google maps API to show the location of the offer (remember that
            your database should have the columns longitude and latitude).
        </p>
        <p>From the database that was built, create a display API. This API is supposed to return a JSON object with
            all information from all offers from the agency. A single PHP file displayAll.php is necessary for this
            task. There should be a link in the home page that would lead to the API. Please note that the data from
            the database must be converted to a JSON type which is raw data, therefore no formatting is required.
        </p>
        <p>after you create your own API (displayAll.php), create a new file called showAll.php, and that file will
            have a button, when you click on the button, you will show all data that you got from the API using
            AJAX.
        </p>
    </div>

    <?php include 'components/footer.php' ?>
</body>

</html>