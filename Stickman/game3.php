<!DOCTYPE html>
<html>
    <head>
        <title>Steen Papier Schaar</title>
    </head>
    <body>
        <h1>Steen Papier Schaar</h1>
        <h1>Speler 2:</h1>
        <form action="game4.php" method="get">  
            <input type="hidden" name="keuze1" value="<?php echo $_GET['keuze1']  ?>">
            <select id="keuze2" name="keuze2" size="3">
                <option value="Schaar">schaar</option>
                <option value="Papier">papier</option>
                <option value="Steen">steen</option>
            </select>
            <br><br>
            <input type="submit" name="submit" value="Selecteer">  
        </form> 
    </body>    
<html>
