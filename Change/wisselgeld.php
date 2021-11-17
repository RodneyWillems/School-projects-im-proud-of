<?php

define("GELDEENHEDEN", [5000 => 50, 2000 => 20, 1000 => 10, 500 => 5, 200 => 2, 100 => 1, 50 => 0.5, 20 => 0.2, 10 => 0.1, 5 => 0.05]);
$geld = round($argv[1], 2);
function validateInput($geld) 
{
    try {
        if ($geld < 0) { 
            throw new Exception("Ik kan geen negatief bedrag wisselen");
        } elseif ($geld == 0) {
            throw new Exception("Je hebt geen bedrag meegegeven dat omgewisseld dient te worden");
        } elseif (intval($geld) == false) {
            throw new Exception("Je hebt geen geldig bedrag meegegeven");
        }
    } catch (Exception $ex) {
        echo 'Error: ' . $ex->getMessage();
        exit;
    }
}
echo validateInput($geld);
function parseNaarGetal($geld)
{
    if (is_numeric($geld)) {
        return $geld;
    } else {
        echo "Input moet een valide getal zijn";
        exit;
    }
}
$geld = parseNaarGetal($geld);
function afronden($geld) 
{
    echo round($geld / 0.05) * 0.05 . PHP_EOL;
}
function wisselgeld($geld) 
{
    foreach (GELDEENHEDEN as $key => $value) {
        if (round($value, 2) <= round($geld, 2)) {
            $geld = round($geld / 0.05) * 0.05;
            $aantal = $geld / $value;
            $aantal = round($aantal, 2);
            $geld = fmod($geld, $value);
            if ($value >= 1) {
                echo floor($aantal) . " x $value euro" . PHP_EOL;
            }
            if ($value < 1) {
                $value = $value * 100;
                echo floor($aantal) . " x $value cent" . PHP_EOL;
            }
        }
    }
}
echo wisselgeld($geld);
?>
