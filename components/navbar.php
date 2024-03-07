<?php
$my_bookings_reviews="";
if (isset($_SESSION['user']) != "") {
$my_bookings_reviews="
<li><a href='user_bookings.php'>
            My bookings
        </a></li>
        <li><a href='user_reviews.php'>
            My reviews
        </a></li>";
}else{
    $my_bookings_reviews="
    ";
};
?>
<nav class="navbar navbar-expand-md">
    <div class="container-fluid">
        <a class="logo" href="index.php">
            <img id="logo-image" src="./pictures/eerew.png" alt="logo image">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">




                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="products.php">Cars</a>
                </li>
                <li>
                    <a href="about_us.php">About us</a>
                </li>

                <li>
                    <a href="contact_us.php">Contact</a>
                </li>
                <?php echo $my_bookings_reviews ?>
                <li class="nav-item has-dropdown">

                    <a href="#">Categories</a>

                    <ul class="dropdown gap-1">

                        <li class="dropdown-item ">
                            <form method="post" name="economy" action="./categories.php">
                                <input type="hidden" name="economy" value="Economy" />
                                <button class="button-navig text-white"
                                    style="background-color:transparent; border:none;text-shadow: 2px 2px 5px black; font-weight: bold;"
                                    type="submit" name="economy_btn">Economy</button>
                            </form>

                        </li>
                        <li class="dropdown-item">
                            <form method="post" name="compact" action="./categories.php">
                                <input type="hidden" name="compact" value="Compact" />
                                <button class="button-navig text-white"
                                    style="background-color:transparent; border:none;text-shadow: 2px 2px 5px black; font-weight: bold;"
                                    type="submit" name="compact_btn">Compact</button>

                            </form>
                        </li>

                        <li class="dropdown-item">
                            <form method="post" name="suv" action="./categories.php">
                                <input type="hidden" name="suv" value="SUV" />
                                <button class="button-navig text-white"
                                    style="background-color:transparent; border:none;text-shadow: 2px 2px 5px black; font-weight: bold;"
                                    type="submit" name="suv_btn">SUV</button>
                            </form>

                        </li>
                        <li class="dropdown-item">
                            <form method="post" name="special" action="./categories.php">
                                <input type="hidden" name="special" value="Special" />
                                <button class="button-navig text-white"
                                    style="background-color:transparent; border:none;text-shadow: 2px 2px 5px black; font-weight: bold;"
                                    type="submit" name="special_btn">Special</button>
                            </form>

                        </li>
                    </ul>
                </li>







            </ul>
        </div>
    </div>

</nav>