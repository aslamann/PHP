<?php
/**
 * Created by PhpStorm.
 * User: Anouk
 * Date: 27-2-2019
 * Time: 15:44
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP opdracht 2.4</title>
    <style>

    </style>
</head>
<body>
<?php
$leeftijd = 64;
$bedrag = 10;
if ($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
}

if ($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;

}
if ($leeftijd < 3) {
    $bedrag = 0;
}
echo $bedrag;
?>
</body>
</html>

<br>
<br>
---------------------------------------------------
<br>
<br>
<a href="../index.php">Terug naar de inhoudsopgave</a>
<br>
<a href="../h02/page2.php">Terug naar pagina 1</a>
