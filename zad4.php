<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_COOKIE["akceptuj_regulamin"])) {
        echo "Dziękujemy za zaakceptowanie";
    }else{
            setcookie("akceptuj_regulamin", time() * 3600);
            exit();
    }
    ?>
</body>
</html>