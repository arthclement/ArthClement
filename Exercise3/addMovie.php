<?php

$title = $_POST['title'] ?? null;
$director = $_POST['director'] ?? null;
$actors = $_POST['actors'] ?? null;
$producer = $_POST['producer'] ?? null;
$synopsis = $_POST['synopsis'] ?? null;
$yearOfProd = $_POST['year_of_prod'] ?? null;
$language = $_POST['language'] ?? null;
$category = $_POST['category'] ?? null;
$video = $_POST['video'] ?? null;

if (
    strlen($title) >= 5
    && strlen($director) >= 5
    && strlen($actors) >= 5
    && strlen($producer) >= 5
    && strlen($synopsis) >= 5    
) {
    $connection = new PDO('mysql:host=localhost;dbname=phpexam', 'root');

    $sql = 'INSERT INTO exercice_3(
        title, 
        actors, 
        director, 
        producer, 
        year_of_prod, 
        language, 
        category, 
        storyline, 
        video
        ) VALUES(
        :title,
        :actors,
        :director,
        :producer,
        :year_of_prod,
        :language,
        :category,
        :storyline,
        :video
        );';

    $statement = $connection->prepare($sql);

    $statement->bindValue(':title', $title, PDO::PARAM_STR);
    $statement->bindValue(':actors', $actors, PDO::PARAM_STR);
    $statement->bindValue(':director', $director, PDO::PARAM_STR);
    $statement->bindValue(':producer', $producer, PDO::PARAM_STR);
    $statement->bindValue(':year_of_prod', $yearOfProd, PDO::PARAM_STR);
    $statement->bindValue(':language', $language, PDO::PARAM_STR);
    $statement->bindValue(':category', $category, PDO::PARAM_STR);
    $statement->bindValue(':storyline', $synopsis, PDO::PARAM_STR);
    $statement->bindValue(':video', $video, PDO::PARAM_STR);

    $statement->execute();

    echo 'Movie added';
    
} else {
    ?>
<p style="color:red">Error with the given informations. Check that all fields are at least 5 characters long.</p>
    <?php
}
?>