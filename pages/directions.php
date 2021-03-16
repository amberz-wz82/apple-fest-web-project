<?php
include("includes/init.php");
$nav_directions_class = "current_page";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Apple Harvest Festival</title>

  <link rel="stylesheet" type="text/css" href="public/styles/theme.css" media="all"/>

</head>
<body>
    <?php include("includes/header.php"); ?>

    <?php include("includes/nav.php"); ?>


    <h2 class="title">Transportations & Directions</h2>
    <div class="directions">
        <div class="drive">
            <!-- Source: https://www.google.com/maps/@42.4404296,-76.4970363,15z?hl=en-US -->
            <img src="public/images/directions.png" alt="Festival Map" width="380" height="300" class="attractions img-size"/>
            <a href="https://www.google.com/maps/@42.4404296,-76.4970363,15z?hl=en-US" class="leftleft-source">Source</a>
        </div>

        <div class="bus">
            <h3 id="TCAT">TCAT Bus</h3>
            <p>
                Wants to go to downtown Ithaca but lives on North Campus and don't have a car?
            </p>
            <p>
                Some recommended TCAT bus routes you could take:
            </p>
            <ul>
                <li>Depart from <em>Risley Hall - Shelter</em> and take <em>Route 30</em>. Then ride 8 stops to <em>Ithaca Commons - Seneca St.</em> in 14 minutes and take a 1 minute walk to the festival.
                </li>
                <li>Walk to <em>Milstein Hall</em> and take <em>Route 10</em>. Then ride 7 stops to <em>Ithaca Commons - Seneca St.</em> in 10 minutes and take a 1 minute walk to the festival.
                </li>
            </ul>
            <!-- Source: https://www.tcatbus.com/ -->
            <p>You can also check out the <a href="https://www.tcatbus.com/" class="red">TCAT bus routes and schedule here</a>.</p>
        </div>
    </div>
    <div class="car">
        <h3>Parking</h3>
        <p>
            If you are driving, you can park in the Green, Seneca, and Cayuga Street garages and walk to anywhere in Downtown Ithaca.
        </p>
        <p>
            Garage parking is $1.00/hour in the garages. On-street parking is $1.50/hour during the week until 6pm.
        </p>
        <!-- Source: https://www.cityofithaca.org/243/Parking-Operations -->
        <a href="https://www.cityofithaca.org/243/Parking-Operations" class="red">For additional downtown parking information, click here.</a>

        <!-- Source: https://www.downtownithaca.com/apple-festive -->
        <a href="https://www.downtownithaca.com/apple-festive" class="leftleft-source">Source</a>
    </div>

    <?php include("includes/footer.php"); ?>

</body>
</html>
