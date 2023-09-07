<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "You killed the " . $_GET["victim"]; ?></title>

    <style>
        html {
            background-image: url('death_<?php echo $_GET["victim"] ?>.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top;
        }
    </style>
</head>
<body>
    <?php
        $file = "boys/".$_GET["victim"].".txt";
        if (!unlink($file))
        {
            echo "<p>The " . $_GET["victim"] . " is already dead</p>";
        }
        else 
        {
            echo "<p>The " . $_GET["victim"] . " has been killed</p>";
        }
    ?>
    
    <button onclick="location.replace('/')">Back</button>
    <button onclick="location.replace('revive.php')">Revive?</>

</body>
</html>

