<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/data.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Heroes</title>
</head>

<div class="w3-bar w3-black">
  <a href="../HTML/Home_Page.htm" class="w3-bar-item w3-button">Home</a>
  <a href = "heroes.php" class = "w3-bar-item w3-button">Heroes</a>
  <div class="w3-dropdown-hover">
    <button class="w3-button">Marvel</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="../HTML/Marvel_Cinema.htm" class="w3-bar-item w3-button">Movies</a>
      <a href="../HTML/Marvel_Timeline.htm" class="w3-bar-item w3-button">Timeline</a>
    </div>
  </div>
  <div class="w3-dropdown-hover">
    <button class="w3-button">DC</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="../HTML/DC_Cinema.htm" class="w3-bar-item w3-button">Movies</a>
      <a href="../HTML/DC_Timeline.htm" class="w3-bar-item w3-button">Timeline</a>
    </div>
  </div>
</div>

<body>
    <?php
    ?>
    <?php
        $user = 'root';
        $password = "";
        $db = "characters";

        $db = new mysqli('localhost', $user, $password, $db) or die("unable to connect");

        // echo "database connected";

        $sql = "SELECT * FROM `heroes`;";
        $result = mysqli_query($db, $sql);

?>

        <table style="height:75vh;width:100vw; position: relative; top: 0; bottom: 0; left: 0; right: 0;border:7px double black; border-radius: 11px">
            <tr style="font-size: 28px; text-align: left; outline: 4px groove; font-family: Jost Bold">
                <th>Hero</th>
                <th>Universe</th>
                <th>First Apperance</th>
                <th>Has Powers?</th>
                <th>Main Power</th>
                <th>Alter Ego</th>
                <th>Is Secret?</th>
                <th>Occupation</th>
            </tr>
            <?php 
                if($result -> num_rows > 0){
                    while($row = $result->fetch_assoc()) { ?>
                    <tr class="data" style="outline: 1px dashed black; font-family: Jost Bold">
                        <td><?php echo $row['Hero'];?></td>
                        <td><?php echo $row['Universe'];?></td>
                        <td><?php echo $row['First Apperance'];?></td>
                        <td><?php echo $row['Has Powers?'];?></td>
                        <td><?php echo $row['Main Power'];?></td>
                        <td><?php echo $row['Alter Ego'];?></td>
                        <td><?php echo $row['Is Secret?'];?></td>
                        <td><?php echo $row['Occupation'];?></td>
                    </tr>
                 <?php   }
                } ?>
        </table>
        


          
</body>
</html>