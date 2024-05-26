<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Movie Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
       body {
            font-family: 'Georgia', serif;
            padding: 20px;
            background-image: url('backgroundWeb.jpg');
            font-family: 'Poppins', sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .containerContent {
            background-image: url('formBekgron.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 28px;
            text-align: center;
            color: #5a4d3f;
            border-bottom: 2px solid #5a4d3f;
            padding-bottom: 10px;
        }
        table {
            width: 100%;
        }
        td {
            padding: 10px;
        }
        label {
            font-weight: bold;
            color: #5a4d3f;
        }
        .form-control {
            width: calc(100% - 22px);
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-control:focus {
            border-color: #5a4d3f;
            outline: none;
            box-shadow: 0 0 5px rgba(90, 77, 63, 0.5);
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 18px;
            color: #fff;
            background-color: #5a4d3f;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #3e3226;
        }
    </style>
</head>
<body>


<div class="containerContent">
    <h2>Musik Ekleme Sayfasi</h2>
    <form method="post" action="action_add.php" class="movie-form">
        <div class="form-group">
            <label for="title">Musik Adi</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="thumbnail">Resim</label>
            <input type="text" id="thumbnail" name="thumbnail" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="year">Yil Cikisi</label>
            <input type="text" id="year" name="year" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="album">Musik grubu</label>
            <input type="text" id="album" name="album" class="form-control" required>
        </div>
        <button type="submit" class="btn">Kaydet</button>
    </form>
    
</div>


<!-- Bootstrap Bundle with Popper -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
