<!DOCTYPE html>

<html lang="en" style="background-color: rgb(181, 136, 158);">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../CSS/search.css">
    <title>Search</title>
</head>


<!-- Dropdown Navigation Bar -->
<body>
<div class="w3-bar w3-black">
  <a href="../HTML/Home_Page.htm" class="w3-bar-item w3-button">Home</a>
  <a href = "heroes.php" class = "w3-bar-item w3-button">Heroes</a>
  <div class="w3-dropdown-hover">
    <button class="w3-button">Marvel</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="../HTML/Marvel_Cinema.htm" class="w3-bar-item w3-button">Cinema</a>
      <a href="../HTML/Marvel_Timeline.htm" class="w3-bar-item w3-button">Timeline</a>
    </div>
  </div>
  <div class="w3-dropdown-hover">
    <button class="w3-button">DC</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="../HTML/DC_Cinema.htm" class="w3-bar-item w3-button">Cinema</a>
      <a href="../HTML/DC_Timeline.htm" class="w3-bar-item w3-button">Timeline</a>
    </div>
  </div>
</div>


<?php
    $user = 'root';
        $password = "";
        $db = "characters";

        $db = new mysqli('localhost', $user, $password, $db) or die("unable to connect");

        // echo "database connected";
    $query = mysqli_real_escape_string($db, $_GET['query']);
    $sql = "SELECT * FROM heroes WHERE Hero LIKE'%$query%'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Hero: " . $row["Hero"]. "<br>";
        echo "Universe: " . $row["Universe"]. "<br>";
        echo "First Apperance: " . $row["First Apperance"]. "<br>";
        echo "Has Powers?: " . $row["Has Powers?"]. "<br>";
        echo "Main Power: " . $row["Main Power"]. "<br>";
        echo "Alter Ego: " . $row["Alter Ego"]. "<br>";
        echo "Is Secret?: " . $row["Is Secret?"]. "<br>";
        echo "Occupation: " . $row["Occupation"]. "<br>";

    }
    } else {
    echo "0 results";
    }
    $db->close();
    ?>
</body>
</html>