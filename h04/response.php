<?php
/**
 * Created by PhpStorm.
 * User: Anouk
 * Date: 12-3-2019
 * Time: 12:33
 */
if ($_POST ['e-mail'] == '' ) {
    echo "Je moet nog je e-mail invullen!";
    echo "<br><a href= \"page4.php\"> terug naar het formulier.</a>";
}
if ($_POST ['Wachtwoord'] == '') {
    echo "Je moet nog een wachtwoord invullen!";

    echo "<br><a href=\"page4.php\">Terug naar het formulier.<a/>";
}

?>


