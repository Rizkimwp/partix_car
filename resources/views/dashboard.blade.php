<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS BOOTSRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    {{-- CSS STYLE --}}
    <link rel="stylesheet" href="style.css">
    <title>Partix - Car Accsessories</title>
</head>
<body>
   <div class="container">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand me-5 ms-4" href="#"><img src="asset/logo-nav.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex" role="search">
                <input class="form-control me-4 form-lg" type="search" placeholder="Search by Make Model Year, Product Type, Parts Number Or Brand.." aria-label="Search">
              </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center">
              <li class="nav-item">
                <a class="nav-link active fw-semibold " aria-current="page" href="#"><img src="asset/phone.png" alt="">44440000</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-semibold" href="#"><img src="asset/fax.png" alt="">0050</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-3 ms-4" aria-disabled="true"><img src="asset/shipping.png" alt=""></a>
              </li>
              <li class="nav-item">
                <button class="btn  me-3 btn-set fw-semibold" id="login" type="button"> Login </button>
              </li>
              <li class="nav-item">
                <button class="btn btn-set fw-semibold" id="signup" type="button"> Signup </button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</div>
<div class="container-fluid bg-d9">
    <div class="container">
        <div class="row">
            <div class="col-7 d-flex mt-2">
               <p class="link me-3"><a href=""> Shop by Categories</a></p>
               <p class="link me-3"><a href=""> Shop by Make</a></p>
               <p class="link me-3"><a href=""> Services</a></p>
               <p class="link me-3"><a href=""> Trade</a></p>
               <p class="link me-3"><a href=""> Quote Request</a></p>
               <p class="link me-3"><a href=""> Contact</a></p>
            </div>
          <div class="row mb-3">
            <div class="col-8"> <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="asset/banner.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="asset/banner.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="asset/banner.png" class="d-block w-100" alt="...">
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
              </div></div>
              <div class="col-4 banner-2">
            <div class="col banner-2 " id="banner-2"> </div></div>
          </div>
    </div>
</div></div>

<div class="container">
    <div class="row">
        <div class="col text-center mt-3">
            <h4>CHOOSE YOUR VEHICLE</h4>
        </div>
        <div class="row select align-items-center">
                <div class="col-2">
                <select class="form-select form-select-lg" aria-label="Default select example">
                <option selected>Select Make</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select></div>
              <div class="col-2">
                <select class="form-select form-select-lg" aria-label="Default select example">
                <option selected>Select Model</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select></div>
              <div class="col-2">
                <select class="form-select form-select-lg" aria-label="Default select example">
                <option selected>Select Year</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select></div>
              <div class="col-2">
                <select class="form-select form-select-lg bg-light" aria-label="Default select example">
                <option selected>Engine Base</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select></div>
              <div class="col-1">
                <button type="submit" class="btn btn-go">GO</button>
                </div>
            </div>
        </div>
</div>
    {{-- JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
