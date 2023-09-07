<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cat = fopen("boys/cat.txt", "w");
        fwrite($cat, "Miau");
        fclose($cat);

        $dog = fopen("boys/dog.txt", "w");
        fwrite($dog, "Woofff");
        fclose($dog);
    ?>
    <script>location.replace("/")</script>
</body>
</html>