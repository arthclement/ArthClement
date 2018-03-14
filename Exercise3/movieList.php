<?php
try {
    $connection = new PDO('mysql:host=localhost;dbname=phpexam', 'root');
} catch (PDOException $exception) {
    echo 'Error connecting to DB';
    return;
}

$sql = 'SELECT * FROM exercice_3';

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
    <table>
        <tr>
            <th>Name of the movie</th>
            <th>Director</th>
            <th>Year of production</th>
            <th>See more</th>
        </tr>
        <?php
foreach ($returnedValues as $key => $value) {
    echo '<tr>';
    echo '<td>' . $value['title'] . '</td>';
    echo '<td>' . $value['director'] . '</td>';
    echo '<td>' . $value['year_of_prod'] . '</td>';
    echo '<td><a href="movieInfos.php?id='. $value['id'] . '">Informations</a></td>';    
    echo '</tr>';
}
        ?>
    </table>
</body>
</html>

