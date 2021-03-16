<?php $title = "Page Not Found";?>
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

    <main>
    <h2><?php echo $title; ?></h2>

    <div class="directions">
      <div class="drive">
        <!-- Source: https://image.flaticon.com/icons/svg/1206/1206330.svg -->
        <img src="public/images/cider-svg.svg" alt="Apple Cider Image" width="150" height="50" class="img-size"/>
        <a href="https://image.flaticon.com/icons/svg/1206/1206330.svg" class="left-source">Source</a>
      </div>

      <p class="not-found">Oops! The page you are looking for does not exist... Maybe take a break and go have a glass of apple cider?</p>
    </div>

    </main>

    <?php include("includes/footer.php"); ?>

</body>
</html>
