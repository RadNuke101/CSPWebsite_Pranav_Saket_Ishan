<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Heroes</title>
</head>

<div class="w3-bar w3-black">
  <a href="index.htm" class="w3-bar-item w3-button">Home</a>
  <a href = "login.php" class = "w3-bar-item w3-button">Sources</a>
  <div class="w3-dropdown-hover">
    <button class="w3-button">Marvel</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="Marvel_Cinema.htm" class="w3-bar-item w3-button">Movies</a>
      <a href="Marvel_Timeline.htm" class="w3-bar-item w3-button">Timeline</a>
      <a href="Marvel_Cinema.htm" class="w3-bar-item w3-button">TV Shows</a>
    </div>
  </div>
  <div class="w3-dropdown-hover">
    <button class="w3-button">DC</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="DC_Cinema.htm" class="w3-bar-item w3-button">Movies</a>
      <a href="DC_Timeline.htm" class="w3-bar-item w3-button">Timeline</a>
      <a href="DC_Cinema.htm" class="w3-bar-item w3-button">TV Shows</a>
    </div>
  </div>
</div>



<style>
  body { 
    font-family: 'Bangers', cursive;
  }
</style>

<body>
    <?php
    $user = 'root';
        $password = " ";
        $db = "heroes";

        $db = new mysqli('localhost', $user, $password, $db) or die("unable to connect");

        // echo "database connected";

        $sql = "SELECT * FROM 'characters';";
        $result = mysqli_query($db, $sql);
 
?>

        <table style="height:50vh;width:97vw; position: relative; top: 0; bottom: 0; left: 0; right: 0;border:6px double black; border-radius: 10px">
            <tr style="font-size: 25px; text-align: left; outline: 3px groove; font-family: Trebuchet MS">
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
                    <tr class="data" style="outline: 1px dashed gray; font-family: Trebuchet MS">
                        <td><?php echo $row['Hero'];?></td>
                        <td><?php echo $row['Universe'];?></td>
                        <td><?php echo $row['First Apperance'];?></td>
                        <td><?php echo $row['Has Powers?'];?></td>
                        <td><?php echo $row['Main Power'];?></td>
                        <td><?php echo $row['Alter Ego'];?></td>
                        <td><?php echo $row['Is Seret?'];?></td>
                        <td><?php echo $row['Occupation'];?></td>
                    </tr>
                 <?php   }
                } ?>
        </table>
        


          
</body>
</html>