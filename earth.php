<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="keywords" content="insert, keywords, here">
     <meta name="description" content="Insert description here">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Results</title>

</head>

<body>
  <div id="wrapper">
  	<h1>Results</h1>
    <?php
      $miles = substr(filter_input(INPUT_GET, 'miles', FILTER_SANITIZE_NUMBER_INT),0,6);

    if ($miles >  6200)
      echo "<p>$miles miles above sea level is in <b><a href=\"https://en.wikipedia.org/wiki/Outer_space\">OUTER SPACE!!</a></b></p>";
    elseif ($miles >= 376)
      echo "<p>$miles miles above sea level is the <b><a href=\"https://en.wikipedia.org/wiki/Exosphere\">Exosphere</a></b> layer of earth's atmosphere. </p>";
    elseif ($miles >= 54)
      echo "<p>$miles miles above sea level is the <b><a href=\"https://en.wikipedia.org/wiki/Thermosphere\">Thermosphere</a></b> layer of earth's atmosphere. </p>";
    elseif ($miles >= 32)
      echo "<p>$miles miles above sea level is the <b><a href=\"https://en.wikipedia.org/wiki/Mesosphere\">Mesosphere</a></b> layer of earth's atmosphere.</p>";
    elseif ($miles >= 9)
      echo "<p>$miles miles above sea level is the <b><a href=\"https://en.wikipedia.org/wiki/Stratosphere\">Stratosphere</a></b> layer of earth's atmosphere. </p>";
    else
      echo "<p>$miles miles above sea level is the <b><a href=\"https://en.wikipedia.org/wiki/Troposphere\">Troposphere</a></b> layer of earth's atmosphere. ";
    ?>
    
    <div id="again">
      <a href="earth.html">Go back?</a>
    </div>
  </div>



</body>
</html>