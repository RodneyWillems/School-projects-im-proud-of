<?php
//check if logged in
session_start();
if ($_COOKIE['login'] == 'loggedin') {
    echo "";
} else {
    header("Location: login.php");
}
//connect database
$host = 'localhost';
$db = 'netland';
$user = 'root';
$password = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $password);
echo "<h1 class='title_series'>series</h1>";
?>
<header>
    <title>
        home page
    </title>
    <link href="style_home.css" rel="stylesheet">
</header>
<body>
    <!-- log out button -->
    <form method="post" class='uitloggen'>
        <input type="submit" name="uitloggen" value="uitloggen">
    </form>
    <form method="post" class='sort_rating_movies' action="sort_rating2.php">
        <input type="submit" href="sort_rating2.php" name="sort_r_movies" value="sort_r_movies">
    </form>
    <form method="post" class='sort_rating_series' action="sort_rating1.php">
        <input type="submit" href="sort_rating1.php" name="sort_r_series" value="sort_r_series">
    </form>
    <!-- insert series button -->
    <a href="insert_series.php" class="toevoegen_series">
        <input type="submit" value="add series">
    </a>
    <div class="series">
    <?php
    //echo series
    $stmt = $pdo->query('SELECT * FROM series ORDER by title asc');
    while ($row = $stmt->fetch()) {
        ?><a href="series.php?id=<?php echo $row["id"] ?>"><?php
        echo $row['title'] . "\n", '<br><br> rating ' . $row['rating'] . "\n" . '<br>'; ?></a>
        </div><div class="edit_series"><a href="edit_series.php?id=<?php echo $row["id"] ?>"><p>edit</p></a></div><div class="series"><?php
    }
    ?>
    </div>
    <?php
    echo "<h1 class='title_films'>movies</h1>";
    ?>
    <!-- insert movie button -->
    <a href="insert_movies.php" class='toevoegen_films'>
        <input type="submit" value="add film">
    </a>
    <div class="movies">
    <?php
    //echo movies
    $stmt = $pdo->query('SELECT * FROM movies');
    while ($row = $stmt->fetch()) {
        ?><a href="films.php?id=<?php echo $row["id"] ?>"><?php
        echo $row['title'] . "\n", '<br><br> minutes ' . $row['length_in_minutes'] . "\n" . '<br>'; ?></a>
        <div class="edit_films"><a href="edit_films.php?id=<?php echo $row["id"] ?>"><p>edit</p></a></div><?php
    }
    ?>
    </div>
<?php
//log out
if (isset($_POST['uitloggen'])) {
    header('Refresh: 0; URL = logout.php');
    exit();
}
?>
</body>