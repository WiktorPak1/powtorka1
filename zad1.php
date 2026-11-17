<?php
$pol = mysqli_connect('localhost', 'root', '' , 'labolatorium');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
<tr>
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Pesel</th>
</tr>
    <!-- wypisac z bazy danych w formie tablei (table tr td) -->
    <?php
    $zapytanie = "SELECT `imie`,`nazwisko`,`pesel` FROM `pacjent`";
    $wynik = mysqli_query($pol, $zapytanie);
    
    while ($row = mysqli_fetch_array($wynik)) {
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "</tr>";
    }
    
    ?>    
</table>
</body>
</html>
<?php
mysqli_close($pol);
?>