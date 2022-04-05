<?php
    $nim = '202410103009'; 
    $nama = 'Marizka Maulidina ';
    $title = 'Trending ';
    $content = array(
      'Ribuan Muslim Buka Puasa dan Sholat Tarawih di Times Square New York',
      'Bahaya Tidur Setelah Makan Sahur',
      'Tips Agar Tidak Lemas Saat Berpuasa',
      'Khofifah: Puasa Bukan Halangan Tingkatkan Produktifitas'
    );
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
      <div class="container">
        <a class="navbar-brand strong">Beritaku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
        </div>
      </div>
    </nav>
    <div id="home" class = "container">
      <div style = "margin: 50px 0px;">
        <h1> 4 Trending Berita Ramadhan 2022</h1>
        <h4>oleh: <?=$nama?></h4>
        <h4><?=$nim?></h4>
      </div>
      
      <?php for ($number = 1; $number<= 4; $number++): ?>
        <h5><?php echo $title . $number?></h5>
        <h3><?php if ($number == 1){echo $content[0];}
        elseif($number == 2){echo $content[1];}
        elseif($number == 3){echo $content[2];}
        else{echo $content[3];} ?></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum pariatur, eligendi vero, illo dolorem deserunt soluta, quae repellat quas quos dolore impedit fuga eveniet facere corporis animi magnam dicta accusantium.</p>
      <?php endfor ?>
    </div>
      <p id = "about" class = "text-center" style= "margin-top: 50px"> Dibuat untuk memenuhi salah satu tugas Mata Kuliah Pemrograman Berbasis Website</p>
    <div class = "text-center bg-dark text-white" style = "padding: 7px; ">
      <p><?=$nama . $nim?></p>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
