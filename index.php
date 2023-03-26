<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=b893c632&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark                                                                      ">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container-fluid" style="background-image:url(2.jpg)">
<div class="container">
<div class="row text-center">
  <div class="col text-white">
<h1>top movies</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="4.jpg" class="card-img-top" height="400px">
      <div class="card-body bg-dark text-white">
        <h5 class="card-title">AVENGERS ENDGAME (2019)</h5>
        <p class="card-text">Sutradara: Avengers: Endgame <br>
                  Bintang: Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="5.jpg" class="card-img-top" height="400px">
      <div class="card-body bg-dark text-white">
        <h5 class="card-title">CAPTAIN MARVEL (2019)</h5>
        <p class="card-text">Sutradara: Captain Marvel <br>
                  Bintang: Brie Larson, Samuel L. Jackson, Ben Mendelsohn, Jude Law</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="6.jpg" class="card-img-top" height="375px">
      <div class="card-body bg-dark text-white">
        <h5 class="card-title">CAPTAIN AMERICA: THE FIRST AVENGER (2011)</h5>
        <p class="card-text">Sutradara: Joe Johnston <br>
                  Bintang: Chris Evans, Hugo Weaving, Samuel L. Jackson</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="7.jpg" class="card-img-top" height="400px">
      <div class="card-body bg-dark text-white">
        <h5 class="card-title">BLACK PANTHER: WAKANDA FOREVER (2022)</h5>
        <p class="card-text">Sutradara: Ryan Coogler <br>
Bintang: Letitia Wright, Lupita Nyong&apos;o, Danai Gurira</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card bg-primary">
      <img src="8.jpg" class="card-img-top" height="425px">
      <div class="card-body bg-dark text-white">
        <h5 class="card-title">She-Hulk: Attorney at Law (2022)</h5>
        <p class="card-text">Sutradara: Jessica Gao <br>
Bintang: Tatiana Maslany, Mark Ruffalo, Tim Roth</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="9.jpg" class="card-img-top" height="400px">
      <div class="card-body bg-dark text-white">
        <h5 class="card-title">SPIDER-MAN: NO WAY HOME (2021)</h5>
        <p class="card-text">SutradaraJon Watts <br> Bintang filmBenedict Cumberbatch, Tom Holland, Zendaya</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
