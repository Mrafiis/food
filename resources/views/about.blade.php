<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link font poppins -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;0,900;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <title>Home | Landing Page</title>
  </head>
  <body>
    <!-- navbar -->
    <header>
      <section class="navigation">
        <div class="container">
          <div class="box-navigation">
            <div class="box">
              <h1 class="T">TASTY FOOD</h1><br><br><br>
                <h1 style="font-size:60px;"><strong>TENTANG KAMI</strong></h1>
            </div>
            <div class="box">
              <ul>
                <li><a href="/home#">HOME</a></li>
                <li><a href="#">TENTANG</a></li>
                <li><a href="#">BERITA</a></li>
                <li><a href="#">GALERI</a></li>
                <li><a href="#">KONTAK</a></li>
              </ul>
            </div>
          </div>
        </div>
    </header>
    <!-- card Tasty Food 1-->
    <section class="card-section">
      <div class="container">
        <div class="box-about">
          <div class="box">
            <h1><strong>Tasty Food</strong></h1>
            <p><b>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut libero corporis repellat. Quia aliquid, est sit laborum vel nulla cum dicta quo repudiandae, recusandae harum error incidunt repellat dolores dolore.</b></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum repellat dignissimos odio inven illum, illo reprehenderit iusto doloribus temporibus explicabo quod expedita quia voluptatum tempora consequatur nobis numquam nesciunt necessitatibus.</p>
          </div>
          <!-- card 1 -->
          <div class="box">
            <img src="/imgasset/galeri-1.jpg" alt="" width="250px">
          </div>
          <div class="box">
            <img src="/imgasset/news-3.jpg" alt="" width="250px">
          </div>
        </div>
      </div>
    </section>
    <!-- card about 2 -->
    <section class="about">
      <div class="container">
        <div class="card-about">
          <div class="box">
            <h3> <strong>VISI</strong></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste minus aspernatur excepturi blanditiis. Laboriosam tempore quos, debitis dolorum fugit similique aspernatur impedit aut maiores ab iusto nobis, quisquam sequi adipisci. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur veritatis porro natus, ipsa libero cum, inventore itaque fugit alias aliquam ullam error. Harum, illo dolores? Minima ipsa reprehenderit temporibus est!</p>
          </div>
          <div class="box">
            <img src="/imgasset/news-1.jpg" alt="" width="150px">
          </div>
          <div class="box">
            <img src="/imgasset/card-about2.jpg" alt="" width="150px">
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
