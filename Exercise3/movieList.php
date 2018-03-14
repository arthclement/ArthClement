<?php
// Connecting to DB
try {
    $connection = new PDO('mysql:host=localhost;dbname=phpexam', 'root');
} catch (PDOException $exception) {
    echo 'Error connecting to DB';
    return;
}
// SQL Query
$sql = 'SELECT * FROM exercice_3';

// Retreiving data
$statement = $connection->prepare($sql);
$statement->execute();
$returnedValues = $statement->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie list</title>
</head>
<body>
    <!-- Creating table -->
    <table>
        <tr>
            <th>Name of the movie</th>
            <th>Director</th>
            <th>Year of production</th>
            <th>See more</th>
        </tr>
        <?php
foreach ($returnedValues as $key => $value) {
    echo '<tr>'; // Common structure to all movies
    echo '<td>' . $value['title'] . '</td>';
    echo '<td>' . $value['director'] . '</td>';
    echo '<td>' . $value['year_of_prod'] . '</td>';
    echo '<td><a href="movieInfos.php?id='. $value['id'] . '">Informations</a></td>'; // Link to detailled informations
    echo '</tr>';
}
        ?>
    </table>
</body>
</html>

