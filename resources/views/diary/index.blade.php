<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diensgrāmata</title>
</head>
<body> 
    <x-navigation></x-navigation>
    <h1>Diensgrāmata</h1>

    <ul>
        <?php foreach ($diary as $diary) { ?>
            <li><a href="/diary/{{ $diary->id }}">{{ $diary->title }}</a></li>
        <?php } ?>
    </ul>
    
</body>
</html>