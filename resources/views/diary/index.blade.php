<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diensgrāmata</title>
</head>
<body> 
    <h1>Diensgrāmata</h1>

    <ul>
        <?php foreach ($diary as $diary) { ?>
            <li><?= $diary["title"] ?></li>
        <?php } ?>
    </ul>
    
</body>
</html>