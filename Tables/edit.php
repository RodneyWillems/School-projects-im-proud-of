<?php

$host = 'localhost';
$db = 'netland';
$user = 'root';
$password = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $password);
$title = null;
$minuten = null;
$datum = null;
$land = null;
$omschrijving = null;
$trailer = null;
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<form name="name" method="post">
<select name="naam">
<option value="series">series</option>
<option value="films">films</option> 
</select>
<input type="submit" value="Filteren">
</form>
<?php
function films()
{
    echo <<<ENDPAGE
        <h1>edit een film toe</h1>
        <form method="post">
            <h3>id</h3>
            <textarea name="id" ></textarea>
            <h3>titel</h3>
            <textarea name="title" ></textarea>
            <h3>duur</h3>
            <textarea name="minuten"></textarea>
            <h3>datum van uitkomst</h3>
            <textarea name="datum"></textarea>
            <h3>land van uitkomst</h3>
            <textarea name="land"></textarea>
            <h3>omschrijving</h3>
            <textarea name="omschrijving"></textarea>
            <h3>youtube trailer id</h3>
            <textarea name="trailer"></textarea>
            <br>
            <br>
            <input type="submit" value="submit" name="submitfilms">
    ENDPAGE;
}
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}
if (isset($_REQUEST['title'])) {
    $title = $_REQUEST['title'];
}
if (isset($_REQUEST['minuten'])) {
    $minuten = $_REQUEST['minuten'];
}
if (isset($_REQUEST['datum'])) {
    $datum = $_REQUEST['datum'];
}
if (isset($_REQUEST['land'])) {
    $land = $_REQUEST['land'];
}
if (isset($_REQUEST['omschrijving'])) {
    $omschrijving = $_REQUEST['omschrijving'];
}
if (isset($_REQUEST['trailer'])) {
    $trailer = $_REQUEST['trailer'];
} 
if (isset($_POST['submitfilms'])) {
    $omschrijving = $_REQUEST['omschrijving'];
    $omschrijving2 = str_replace("'", "''", $omschrijving);
    $row = "UPDATE movies set title='" . $title . "', 
    length_in_minutes='" . $minuten . "', released_at='" . $datum . "', 
    country_of_origin='" . $land . "' ,summary='" . $omschrijving2 . "' , youtube_trailer_id='" . $trailer . "' WHERE id='" . $id . "'";
    $message = "Record Modified Successfully";
    $stmt = $pdo->prepare($row);
    $stmt->execute([]);
    header("Refresh: 0;");
}
?>
</form>
<?php
function series() 
{
    echo <<<ENDPAGE
        <h1>edit een serie toe</h1>
        <form method="post">
            <h3>id</h3>
            <textarea name="id" ></textarea>
            <h3>titel</h3>
            <textarea name="title" ></textarea>
            <h3>rating</h3>
            <textarea name="rating"></textarea>
            <h3>seasons</h3>
            <textarea name="seasons"></textarea>
            <h3>awards</h3>
            <textarea name="awards"></textarea>
            <h3>land van uitkomst</h3>
            <textarea name="land"></textarea>
            <h3>omschrijving</h3>
            <textarea name="omschrijving"></textarea>
            <h3>taal</h3>
            <textarea name="taal"></textarea>
            <br>
            <br>
            <input type="submit" value="submit" name="submit">
    ENDPAGE;  
}
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}
if (isset($_REQUEST['title'])) {
    $title = $_REQUEST['title'];
}
if (isset($_REQUEST['rating'])) {
    $rating = $_REQUEST['rating'];
}
if (isset($_REQUEST['seasons'])) {
    $seasons = $_REQUEST['seasons'];
}
if (isset($_REQUEST['awards'])) {
    $awards = $_REQUEST['awards'];
}
if (isset($_REQUEST['land'])) {
    $land = $_REQUEST['land'];
}
if (isset($_REQUEST['omschrijving'])) {
    $omschrijving = $_REQUEST['omschrijving'];
}
if (isset($_REQUEST['taal'])) {
    $taal = $_REQUEST['taal'];
} 
if (isset($_POST['submit'])) {
    $omschrijving = $_REQUEST['omschrijving'];
    $omschrijving2 = str_replace("'", "''", $omschrijving);
    $row = "UPDATE series set title='" . $title . "', 
    rating='" . $rating . "', has_won_awards='" . $awards . "',
    seasons='" . $seasons . "', country='" . $land . "', summary='" . $omschrijving2 . "' , spoken_in_language='" . $taal . "' WHERE id='" . $id . "'";
    $message = "Record Modified Successfully";
    var_dump($row);
    $stmt = $pdo->prepare($row);
    $stmt->execute([]);
    header("Refresh: 0;");
}
?>
</form>
<?php
if (isset($_POST['naam'])) {
    $functie = $_POST['naam'];
    if ($functie == 'series') {
        echo series();
    } elseif ($functie == 'films') {
        echo films();
    }
}