<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tablica = [];

    for ($i=0; $i < 100; $i++) { 
        $tablica[] = rand(1, 100);

    }
    print_r($tablica);

    ?>
</body>
</html>