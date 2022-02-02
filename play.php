<?php
require 'connectdb.php';
$id = $_GET['id'];
$sql = "SELECT * FROM data_movie WHERE id ='$id'";
$query  = mysqli_query($dbcon, $sql);
$result = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SubJect CEI3104</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

  <!--ส่วน Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="
    background-color: #3788d9!important;">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">หน้าแรก <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ยอดฮิตติดอันดับ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            หมวดหมุ่
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">เข้าสู่ระบบ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">ออกจากระบบ</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-dark" type="submit">ค้นหา</button>
      </form>
    </div>
  </nav>
  <!--ส่วน Navbar-->


  <div class="album py-5 bg-light">
    <div class="container">
      <!-- Nav -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
          <li class="breadcrumb-item active"><a href="#"><?= $result['name'] ?></a></li>
        </ol>
      </nav>
      <!-- Nav -->

      <!--Play-->
      <div class="row">
        <div class="col-md-3">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" width="100%" height="550" src="./images/<?= $result['img'] ?>" alt="Card image cap">
          </div>
        </div>
        <div class="col-md-9">
          <div class="card mb-4 box-shadow">
            <iframe width="100%" height="550" src="https://www.youtube.com/embed/<?= $result['vdo_ex'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card shadow-sm text-center" style="background-color: #e9a6b3!important;color: white;">
            <h3>ตัวเล่นหนัง</h3>
          </div>
          <div class="card mb-4 box-shadow">
            <iframe width="100%" height="550" src="https://www.youtube.com/embed/<?= $result['vdo_ex'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Play-->

  </div>

  <br>
  <center>
    <footer class="blog-footer">
      <p>จัดทำโดย เด็กชาย ประหยัด จันทร์อังคาร์</p>
    </footer>
  </center>



</body>

</html>