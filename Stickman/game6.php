<?php

$keuze = array("Steen", "Papier", "Schaar");
$computer = $keuze[array_rand($keuze)];
if ($_GET['keuze1'] == $computer) {
    echo "<h2>Gelijk!</h2>";
} else if ($_GET['keuze1'] == 'Steen' && $computer == 'Schaar') {
    echo "<h2>Speler 1 Wint!</h2>";
} else if ($_GET['keuze1'] == 'Schaar' && $computer == 'Papier') {
    echo "<h2>Speler 1 Wint!</h2>";
} else if ($_GET['keuze1'] == 'Papier' && $computer == 'Steen') {
    echo "<h2>Speler 1 Wint!</h2>";
} else {
    echo "<h2>Computer Wint!</h2>";
}
?>