<?php
/**
 * Created by PhpStorm.
 * User: Anouk
 * Date: 25-2-2019
 * Time: 10:44
 */
?>
<!doctype HTML>
<html>
<head>
<title>PHP opdacht 2.3</title>
<style>
    body {
        text-align: center;
    }
    .rood {
        border:red solid 5px;
    }
    .groen {
        border:green solid 5px
    }
</style>
</head>
<body>
<?php
for($i = 1; $i<9 ;$i++){
    if($i % 2 == 0) {
        $class ="class='rood'";
    } else {
        $class = "class='groen'";
    }
    echo "<img ".$class,"src='apen/aap".$i.".jpg' alt='dit moet afbeelding nummer".$i."zijn'>";
}
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
<br>
<a href="../h02/page2.4.php">opdracht 2.4</a>
