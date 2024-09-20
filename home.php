<?php
session_start();
$nama = $_SESSION['username'];
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <marquee direction="right" width="100%" behavior="Alternate">
      <h3>welcome to Beauty Clinic application <?php echo $nama; ?></h3>
    </marquee>
    <h2 align="center" class="display-6 mt-4">Beauty Care</h2>
    <br>
  </div>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner" align="center">
    <div class="carousel-item active">
      <img src="poto2.jpg" class="d-block w-50" height="600"alt="...">
      <button type="submit" class="form-control">Dr.Byunbaekhyun</button>
    </div>
    <div class="carousel-item">
      <img src="poto3.jpg" class="d-block w-50" height="600"alt="...">
      <button type="submit" class="form-control">Dr.Seo Woojin</button>
    </div>
    <div class="carousel-item">
      <img src="poto4.jpeg" class="d-block w-50" height="600"alt="...">
      <button type="submit" class="form-control">Dr.Melitha</button>
    </div>
    <div class="carousel-item">
      <img src="poto7.jpg" class="d-block w-50" height="600"alt="...">
      <button type="submit" class="form-control">Dr.Ca Eunjae</button>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>








































































































































































































































































































































  <!-- <div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000" align="center">
        <img src="poto2.jpg" class="d-block w-50">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="carousel-caption d-none d-md-block">
          <h3>Cuci Kering</h3>
          <button type="submit" class="form-control">Select</button>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000" align="center">
        <img src="poto3.jpg" class="d-block w-50" alt="...">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="carousel-caption d-none d-md-block">
          <h3>Cuci Setrika</h3>
          <button type="submit" class="form-control">Select</button>
      </div>
      <div class="carousel-item" data-bs-interval="2000" align="center">
        <img src="poto4.jpeg" class="d-block w-50" alt="...">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="carousel-caption d-none d-md-block">
          <h3>Cuci Setrika</h3>
          <button type="submit" class="form-control">Select</button>
      </div>
      <div class="carousel-item" data-bs-interval="2000" align="center">
        <img src="poto5.jpeg" class="d-block w-50" alt="...">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="carousel-caption d-none d-md-block">
          <h3>Cuci Setrika</h3>
          <button type="submit" class="form-control">Select</button>
      </div>
      
      
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> -->