<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Movie Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Add New Movie</h2>
        <form method="post" action="action_add.php" class="movie-form">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="thumbnail">Thumbnail URL:</label>
                <input type="text" id="thumbnail" name="thumbnail" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="year">Year:</label>
                <input type="text" id="year" name="year" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="rating">Rating:</label>
                <input type="text" id="rating" name="rating" class="form-control" required>
            </div>
            <button type="submit" class="btn">SAVE</button>
        </form>
    </div>
</body>
</html>
