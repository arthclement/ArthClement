<?php

$id = (int) $_GET['id'];
// Connecting to DB
try {
    $connection = new PDO('mysql:host=localhost;dbname=phpexam', 'root');
} catch (PDOException $exception) {
    echo 'Error connecting to DB';
    return;
}
// SQL Query
$sql = 'SELECT * FROM exercice_3 WHERE id=:id';

$statement = $connection->prepare($sql);
$statement->bindValue(':id', $id, PDO::PARAM_INT);
if ($statement->execute()) { // Will return false if empty
    $returnedValues = $statement->fetchAll();
    $returnedValues = $returnedValues[0]; // Always one result (unique id) so we can just use the 0 value of the array
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $returnedValues['title'] ?></title>
    </head>
    <body>
        <h1><?php echo $returnedValues['title'] ?></h1>
        <h2>A movie directed by <?php echo $returnedValues['director'] ?> and produced by <?php echo $returnedValues['producer'] ?></h2>
        <h3>Casting <?php echo $returnedValues['actors'] ?></h3>
        <h4>Released in <?php echo $returnedValues['year_of_prod'] ?></h4>
        <p><?php echo $returnedValues['storyline'] ?></p>
        <a href="<?php echo $returnedValues['video'] ?>">See the trailer</a>
        <p>Category: <?php echo $returnedValues['category'] ?>; Language: <?php echo $returnedValues['language'] ?></p>
    </body>
    </html>
<?php
} else {
    echo 'Movie does not exist'; // In case of movie not found
}
?>