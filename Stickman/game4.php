<!DOCTYPE html>
<html>
    <head>
        <title>Steen Papier Schaar</title>
    </head>
    <body>
        <h1>Steen Papier Schaar</h1>
        <?php 
        echo "<h1>Speler 1 heeft $_GET[keuze1] gekozen</h1>";
        echo "<h1>Speler 2 heeft $_GET[keuze2] gekozen</h1>";            
        if ($_GET['keuze1'] == $_GET['keuze2']) {
            echo "<h2>Gelijk!</h2>";
        } else if ($_GET['keuze1'] == 'Steen' && $_GET['keuze2'] == 'Schaar') {
            echo "<h2>Speler 1 Wint!</h2>";
        } else if ($_GET['keuze1'] == 'Schaar' && $_GET['keuze2'] == 'Papier') {
            echo "<h2>Speler 1 Wint!</h2>";
        } else if ($_GET['keuze1'] == 'Papier' && $_GET['keuze2']   == 'Steen') {
            echo "<h2>Speler 1 Wint!</h2>";
        } else {
            echo "<h2>Speler 2 Wint!</h2>";
        }
        ?>    
    </body>    
<html>