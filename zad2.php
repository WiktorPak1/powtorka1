<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dane = "Anna Kowalska";
    $nazwapliku = "wizytowka.txt";
    $plik = fopen($nazwapliku, "w");
    if ($plik) {
        fwrite($plik, $dane);
        fclose($plik);
        echo "zapisano $nazwapliku";
    }else{
        echo"nie udalo sie zapisac" ;
    }
    ?>
</body>
</html>