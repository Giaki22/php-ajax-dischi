<?php 

require __DIR__ . "../server/database.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
</head>
<body>
    <div class="container" style="display: flex;">
        <?php foreach ($database as $album) { ?>
            <div class="album" style="display: flex; flex-flow:column; width: calc(100%/4)">
                <?php
                    echo "<img src='$album[poster]' alt='Album'>";
                    echo "<h2>$album[title]</h2>";
                    echo "<h4>$album[author]</h4>";
                    echo "<h4>$album[year]</h4>";
                ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>