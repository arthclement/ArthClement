<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add movie</title>
</head>
<body>
    <form action="addMovie.php" method="post">
        <label for="title">Title</label>
        <input type="text" name="title">
        <br>
        <label for="director">Director</label>
        <input type="text" name="director">
        <br>
        <label for="actors">Actors</label>
        <input type="text" name="actors">
        <br>
        <label for="producer">Producer</label>
        <input type="text" name="producer">
        <br>
        <label for="synopsis">Synopsis</label>
        <textarea name="synopsis" cols="30" rows="10"></textarea>
        <br>
        <label for="year_of_prod">Year of production</label>
        <select name="year_of_prod">
<?php
for ($i = 2018; $i > 1900; $i--) {
    echo "<option value=\"$i\">$i</option>";
}
?>
        </select>
        <br>
        <label for="language">Language</label>
        <select name="language">
            <option value="french">French</option>
            <option value="german">German</option>
            <option value="english">English</option>
            <option value="italian">Italian</option>
            <option value="spanish">Spanish</option>  
        </select>
        <br>
        <label for="category">Category</label>
        <select name="category">
            <option value="horror">Horror</option>
            <option value="action">Action</option>
            <option value="comedy">Comedy</option>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>