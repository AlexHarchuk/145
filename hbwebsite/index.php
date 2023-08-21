<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link   rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }

        .h-font{
            font-family: 'Merienda', cursive;
        }
        
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        input[type=number] {
        -moz-appearance: textfield;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">TJ HOTEL</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilities</a>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Сontact us</a>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">About</a>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <div class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success shadow-one" type="submit">Search</button>
            <button type="button" class="btn btn-outline-dark shadown-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                   Login
            </button>
            <button type="button" class="btn btn-outline-dark shadown-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#registerModal">
                   Register
            </button>
            </div>
        </div>
    </div>
    </nav>


       <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                                <h5 class="modal-title d-flex aling-items-center">
                                <i class="bi bi-person-circle fs-3 me-2"></i>User Login
                                </h5>
                                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                            </div>
                     </div>
                     <div class="d-flex aling-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-dark shadow-none">Login</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                                <h5 class="modal-title d-flex aling-items-center">
                                <i class="bi bi-person-lines-fill"></i>
                                User Registration
                                </h5>
                                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                                Note: Your details must match with your ID (Aadhaar card, passport, driving licence, etc.)
                                that will be required during check-in. 
                            </span>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="class col-md-6 mb-3">
                                         <label class="form-label">Name</label>
                                         <input type="email" class="form-control shadow-none">
                                        </div>
                                    <div class="class col-md-6 p-0">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control shadow-none">
                                        </div>
                                        <div class="class col-md-6 mb-3">
                                         <label class="form-label">Phone Number</label>
                                         <input type="number" class="form-control shadow-none">
                                        </div>
                                        <div class="class col-md-6 p-0 mb-3">
                                        <label class="form-label">Picture</label>
                                        <input type="file" class="form-control shadow-none">
                                        </div>
                                        <div class="class col-md-12 p-0 mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea class="form-control shadow-none" rows="1"></textarea>
                                        </div>
                                        <div class="class col-md-6 mb-3">
                                         <label class="form-label">Pincode</label>
                                         <input type="number" class="form-control shadow-none">
                                        </div>
                                        <div class="class col-md-6 p-0 mb-3">
                                        <label class="form-label">Date of birth</label>
                                        <input type="date" class="form-control shadow-none">
                                        </div>
                                        <div class="class col-md-6 mb-3">
                                         <label class="form-label">Password</label>
                                         <input type="password" class="form-control shadow-none">
                                        </div>
                                        <div class="class col-md-6 p-0 mb-3">
                                        <label class="form-label">Confirm Passwod</label>
                                        <input type="password" class="form-control shadow-none">
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="text-center my-1">
                               <button type="submit" class="btn btn-dark shadow-none">Register</button>
                            </div> 
                </div>
            </form>
        </div>
    </div>
 </div>

<!--<div class="container-fluid">
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="image/carousel/1.png"/>
      </div>
      <div class="swiper-slide">
        <img src="image/carousel/2.png"/>
      </div>
      <div class="swiper-slide">
        <img src="image/carousel/3.png"/>
      </div>
      <div class="swiper-slide">
        <img src="image/carousel/4.png"/>
      </div>
      <div class="swiper-slide">
        <img src="image/carousel/5.png"/>
      </div>
      <div class="swiper-slide">
        <img src="image/carousel/6.png"/>
      </div>
    </div>
  </div>
</div>-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
    });
  </script>

</body>
</html>