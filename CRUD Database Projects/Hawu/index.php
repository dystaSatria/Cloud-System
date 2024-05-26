<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Firebase RDB CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            padding: 20px;
            background-image: url('backgroundWeb.jpg');
            font-family: 'Poppins', sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .thumbnail-img {
            max-width: 100px;
            height: auto;
        }
        .action-links a {
            margin-right: 10px;
        }

        footer {
            width: 200px;
            color: #fff;
            padding: 30px 0;
        }
       
    </style>
</head>

<body>
<div class="container" bis_skin_checked="1">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4"> <h1 class="text-white px-5">Hawu</h1></span>
        
      </a>

      <ul class="nav nav-pills">
        
        <li class="nav-item"><a href="#" class="nav-link"></a></li>
        <li class="nav-item"><a href="#" class="nav-link"></a></li>
        <li class="nav-item"><img src="logo.png" alt="" height="200px"></li>
        
      </ul>
      <p class="text-center text-secondary">A treasury of classical music, fragrant with a blend of symphonic spices, offering timeless lyrics that transcend the boundaries of time.</p>

    </header>
  </div>
    <!-- Jumbotron -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active text-center">
      <img src="slider1.png" alt="First slide">
    </div>
    <div class="carousel-item text-center">
      <img src="classicROck.png" alt="Second slide">
    </div>
    <div class="carousel-item text-center">
      <img src="musikBackground.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- Jumbotron -->
    
    <div class="container mt-5">
        <!-- Embedding YouTube Music Video -->
       
        
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Resim</th>
                    <th scope="col">Musik Adi</th>
                    <th scope="col">Yil</th>
                    <th scope="col">Musik grubu</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("config.php");
                include("firebaseRDB.php");

                $db = new firebaseRDB($databaseURL);
                $data = $db->retrieve("musik");
                $data = json_decode($data, 1);

                if (is_array($data)) {
                    foreach ($data as $id => $musik) {
                        echo "<tr>
                                <td><img src='{$musik['thumbnail']}' class='thumbnail-img'></td>
                                <td class='text-white'>{$musik['title']}</td>
                                <td class='text-white'>{$musik['year']}</td>
                                <td class='text-white'>{$musik['album']}</td>
                                <td class='action-links'>
                                    <a href='edit.php?id=$id' class='btn btn-sm btn-info'>Duzenle</a>
                                    <a href='delete.php?id=$id' class='btn btn-sm btn-danger'>Kaldir</a>
                                </td>
                              </tr>";
                    }
                }
                ?>
            </tbody>
        </table>

        <div class="row mb-3 justify-content-center">
            <div class="col-6 text-center">
                <a href="add.php" class="btn btn-primary">Musik Ekle</a>
            </div>
        </div>
        
        <div class="col-12 text-center mw-100 mb-4">
            <iframe width="300" height="215" src="https://www.youtube.com/embed/KVjBCT2Lc94?autoplay=1" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center">
                <!-- Optional footer links can be added here -->
            </ul>
            <p class="text-center text-white fs-1">&copy; 2024 dystaSatria</p>
        </footer>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
