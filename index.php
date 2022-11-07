<?php require_once 'includes/links.php';?>  
 
<?php require_once 'includes/header.php'; ?>
 
<!--================banner---------->
<div class="container-fluid">
<section class=" bg-holder bg-overlay-black-30">
<div class="row">
  <div class="col-md-4 position-relative">
     
        <h1 class="text-white text-center mt-5">Enjoy Peace and wealth through formcast Design Plans!</h1>
        <p class="lead text-center text-white  fw-normal mt-5">If you’re looking to design of your dream home but don’t know where to begin, you’re in the right place!</p>
          <center><br><br><a class="btn-primary btn-lg mt-4" href="registration.php">Register</a><br></center>   
 
  </div>
  <div class="col-md-8"> 
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="images/banner5.jpeg" class="d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/banner4.jpeg" class="d-block w-100" height="500px" alt="...">
    </div>
     <div class="carousel-item" data-bs-interval="2000">
      <img src="images/banner5.jpeg" class="d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/banner6.jpeg" class="d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/banner7.jpeg" class="d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/banner8.jpeg" class="d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/banner9.jpeg" class="d-block w-100" height="500px" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
</div>
  <div class="container">
    <div class="row">
      
      
      </div>
    </div>
  </div>
</section>
<!--=================================
banner ena -->
<!--=================================

 Modal login -->
<div class="modal login fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="loginModalLabel">Log in & Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs nav-tabs-02 justify-content-center" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Log in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="register-tab" data-bs-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">Register</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
            <form class="row my-4 align-items-center">
              <div class="mb-3 col-sm-12">
                <input type="text" class="form-control" placeholder="Username">
              </div>
              <div class="mb-3 col-sm-12">
                <input type="Password" class="form-control" placeholder="Password">
              </div>
              <div class="col-sm-6 d-grid">
                <button type="submit" class="btn btn-primary">Sign up</button>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                  <li class="me-1"><a href="#"><b>Already Registered User? Click here to login</b></a></li>
                </ul>
              </div>
            </form>
            <div class="login-social-media border ps-4 pe-4 pb-4 pt-0 rounded">
              <div class="mb-4 d-block text-center"><b class="bg-white ps-2 pe-2 mt-3 d-block">Login or Sign in with</b></div>
              <form class="row">
                <div class="col-sm-6">
                  <a class="btn facebook-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-facebook-f"></i>Login with Facebook</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn twitter-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-twitter"></i>Login with Twitter</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn google-bg social-bg-hover d-block mb-3 mb-sm-0" href="#"><span><i class="fab fa-google"></i>Login with Google</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn linkedin-bg social-bg-hover d-block" href="#"><span><i class="fab fa-linkedin-in"></i>Login with Linkedin</span></a>
                </div>
              </form>
            </div>
          </div>
          <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
            <form class="row mt-4 mb-5 align-items-center">
              <div class="mb-3 col-sm-12">
                <input type="text" class="form-control" placeholder="Username">
              </div>
              <div class="mb-3 col-sm-12">
                <input type="email" class="form-control" placeholder="Email Address">
              </div>
              <div class="mb-3 col-sm-12">
                <input type="Password" class="form-control" placeholder="Password">
              </div>
              <div class="mb-3 col-sm-12">
                <input type="Password" class="form-control" placeholder="Confirm Password">
              </div>
              <div class="col-sm-6 d-grid">
                <button type="submit" class="btn btn-primary">Sign up</button>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                  <li class="me-1"><a href="#"><b>Already Registered User? Click here to login</b></a></li>
                </ul>
              </div>
            </form>
            <div class="login-social-media border ps-4 pe-4 pb-4 pt-0 rounded">
              <div class="mb-4 d-block text-center"><b class="bg-white ps-2 pe-2 mt-3 d-block">Login or Sign in with</b></div>
              <form class="row">
                <div class="col-sm-6">
                  <a class="btn facebook-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-facebook-f"></i>Login with Facebook</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn twitter-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-twitter"></i>Login with Twitter</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn google-bg social-bg-hover d-block mb-3 mb-sm-0" href="#"><span><i class="fab fa-google"></i>Login with Google</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn linkedin-bg social-bg-hover d-block" href="#"><span><i class="fab fa-linkedin-in"></i>Login with Linkedin</span></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=================================
  Modal login -->
<!--=================================
Browse Designs -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Browse plans by category</h2>
          <p>To browse and buy in your areas of interest, look for designs by category.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="category">
          <ul class="list-unstyled mb-0">
            <li class="category-item">
              <a href="property-list.html">
                <div class="category-icon">
                  <i class="flaticon-building-2"></i>
                </div>
                <h6 class="mb-0">Bungalows</h6>
                <span>(457)</span>
              </a>
            </li>
            <li class="category-item">
              <a href="property-list.html">
                <div class="category-icon">
                  <i class="flaticon-skyline"></i>
                </div>
                <h6 class="mb-0">Duplex</h6>
                <span>(659)</span>
              </a>
            </li>
            <li class="category-item">
              <a href="property-list.html">
                <div class="category-icon">
                  <i class="flaticon-apartment"></i>
                </div>
                <h6 class="mb-0">Semi Duplex</h6>
                <span>(298)</span>
              </a>
            </li>
            <li class="category-item">
              <a href="property-list.html">
                <div class="category-icon">
                  <i class="flaticon-apartment-1"></i>
                </div>
                <h6 class="mb-0">Terrance Duplex</h6>
                <span>(235)</span>
              </a>
            </li>
            <li class="category-item">
              <a href="property-list.html">
                <div class="category-icon">
                  <i class="flaticon-real-estate"></i>
                </div>
                <h6 class="mb-0">Hotel</h6>
                <span>(478)</span>
              </a>
            </li>
            <li class="category-item">
              <a href="property-list.html">
                <div class="category-icon">
                  <i class="flaticon-building-1"></i>
                </div>
                <h6 class="mb-0">Industrial</h6>
                <span>(698)</span>
              </a>
            </li>
            <li class="category-item">
              <a href="property-list.html">
                <div class="category-icon">
                  <i class="flaticon-building"></i>
                </div>
                <h6 class="mb-0">Flats</h6>
                <span>(152)</span>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
 Browse Designs -->

<!--=================================
  Featured Designs-->
<section class="space-pb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Newly listed designs</h2>
          <p>Find your dream home from our Newly added designs</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/property/grid/01.jpeg" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Bungalow</span>
              <span class="badge badge-md bg-info">Sale </span>
            </div>
            <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
            <div class="property-agent">
              
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Alice Williams</a>
                <span class="d-block">Company Agent</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 06</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="design_details.php"> bungalow </a></h5>
               
              <div class="property-price">₦485.00</div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>3</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>145m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="design_details.php">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare">
                  <a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a>
                </li>
                <li class="property-favourites">
                  <a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/property/grid/02.jpeg" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Terrance Duplex</span>
              <span class="badge badge-md bg-info">New </span>
            </div>
            <div class="property-agent">
               
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">John doe</a>
                <span class="d-block">Hotel</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 12</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="design_details.php">Semi Duplex</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Vermont Dr. hephzibah</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>2 months ago</span>
              <div class="property-price">₦485.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>3</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>215m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="design_details.php">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/property/grid/03.jpeg" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Duplex</span>
              <span class="badge badge-md bg-info">Hot </span>
            </div>
            <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
            <div class="property-agent">
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Felica queen</a>
                <span class="d-block">Investment</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 03</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="design_details.php">Bungalow</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Newport st. mebane, nc</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>6 months ago</span>
              <div class="property-price">₦485.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>3</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>4</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,189m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="design_details.php">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/property/grid/05.jpeg" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Duplex</span>
              <span class="badge badge-md bg-info">Hot </span>
            </div>
            <div class="property-agent">
              <div class="property-agent-image">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Sara lisbon</a>
                <span class="d-block">Construction</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 04</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="design_details.php">bungalow</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Border st. nicholasville, ky</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>12 months ago</span>
              <div class="property-price">₦485.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>1</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>2,356m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="design_details.php">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/property/grid/05.jpeg" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Industry</span>
              <span class="badge badge-md bg-info">Rent </span>
            </div>
            <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
            <div class="property-agent">
              <div class="property-agent-image">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Mellissa Doe</a>
                <span class="d-block">Founder & CEO</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 10</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="design_details.php">Terrance Duplex</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>West Indian St. Missoula</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>2 years ago</span>
              <div class="property-price">₦485.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>5</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>4</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>1,658m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="design_details.php">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/property/grid/06.jpeg" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Semi Dupulex</span>
              <span class="badge badge-md bg-info">New </span>
            </div>
            <div class="property-agent">
              <div class="property-agent-image">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Michael Bean</a>
                <span class="d-block">Research</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 02</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="design_details.php">Flat</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Hamilton rd. willoughby, oh</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>3 years ago</span>
              <div class="property-price">₦485.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,657m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="design_details.php">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 text-center">
        <a class="btn btn-link" href="property-list.html"><i class="fas fa-plus"></i>View All Listings</a>
      </div>
    </div>
  </div>
</section>
<!--=================================
Featured Designs-->

<!--=================================
 offering the Best Real Estate-->
<section class="clearfix">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Discover our best deals</h2>
          <p>Check the listings of the best dealer on Real Villa and contact the agency or its agent by phone or contact form.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="owl-carousel owl-nav-top-right" data-animateOut="fadeOut" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="2" data-xx-items="2" data-space="1">
          <div class="item">
            <div class="property-offer">
              <div class="property-offer-item">
                <div class="property-offer-image bg-holder" style="background: url('images/gallery/banner4.jpeg');">
                  <div class="row">
                    <div class="col-lg-6 col-md-10 col-sm-12">
                      <div class="property-details">
                        <div class="property-details-inner">
                          <h5 class="property-title"><a href="property-detail-style-01.html">Ample apartment at last floor </a></h5>
                          <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Virginia drive temple hills</span>
                          <span class="property-agent-date"><i class="far fa-clock fa-md"></i>10 days ago</span>
                          <p class="mb-0 d-block mt-3">Use a past defeat as a motivator. Remind yourself you have nowhere to go except up as you.</p>
                          <div class="property-price">$150.00<span> / month</span> </div>
                          <ul class="property-info list-unstyled d-flex">
                            <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>1</span></li>
                            <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                            <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>145m</span></li>
                          </ul>
                        </div>
                        <div class="property-btn">
                          <a class="property-link" href="property-detail-style-01.html">See Details</a>
                          <ul class="property-listing-actions list-unstyled mb-0">
                            <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                            <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="property-offer">
              <div class="property-offer-item">
                <div class="property-offer-image bg-holder" style="background: url('images/gallery/banner5.jpeg');">
                  <div class="row">
                    <div class="col-lg-6 col-md-10 col-sm-12">
                      <div class="property-details">
                        <div class="property-details-inner">
                          <h5 class="property-title"><a href="property-detail-style-01.html">Luxury villa with pool</a></h5>
                          <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>West Indian St. Missoula</span>
                          <span class="property-agent-date"><i class="far fa-clock fa-md"></i>2 years ago</span>
                          <p class="mb-0 d-block mt-3">For those of you who are serious about having more, doing more, giving more and being more.</p>
                          <div class="property-price">$698.00<span> / month</span> </div>
                          <ul class="property-info list-unstyled d-flex">
                            <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>5</span></li>
                            <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>4</span></li>
                            <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>1,658m</span></li>
                          </ul>
                        </div>
                        <div class="property-btn">
                          <a class="property-link" href="property-detail-style-01.html">See Details</a>
                          <ul class="property-listing-actions list-unstyled mb-0">
                            <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                            <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
   <!--=================================
  offering the Best Real Estate-->

<!--=================================
  Feature -->
<section class="space-ptb bg-holder-bottom building-space" style="background-image: url(images/building-bg.png);">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-9">
        <div class="section-title mb-0">
          <h2>Plenty of reasons to choose us</h2>
          <p>Our agency has many specialized areas, but our CUSTOMERS are our real specialty.</p>
        </div>
      </div>
      <div class="col-lg-3 text-lg-end">
        <a class="btn btn-primary" href="about-us.html">More about us </a>
      </div>
    </div>
    <div class="row g-0 mt-4">
      <div class="col-lg-3 col-sm-6">
        <div class="feature-info h-100">
          <div class="feature-info-icon">
            <i class="flaticon-like"></i>
          </div>
          <div class="feature-info-content">
            <h6 class="mb-3 feature-info-title">Excellent reputation</h6>
            <p class="mb-0">Our comprehensive database of listings and market info give the most accurate view of the market and your home value.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="feature-info h-100">
          <div class="feature-info-icon">
            <i class="flaticon-agent"></i>
          </div>
          <div class="feature-info-content">
            <h6 class="mb-3 feature-info-title">Best local agents</h6>
            <p class="mb-0">You are just minutes from joining with the best agents who are fired up about helping you Buy or sell.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="feature-info h-100">
          <div class="feature-info-icon">
            <i class="flaticon-like-1"></i>
          </div>
          <div class="feature-info-content">
            <h6 class="mb-3 feature-info-title">Peace of mind</h6>
            <p class="mb-0">Rest guaranteed that your agent and their expert team are handling every detail of your transaction from start to end.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="feature-info h-100">
          <div class="feature-info-icon">
            <i class="flaticon-house-1"></i>
          </div>
          <div class="feature-info-content">
            <h6 class="mb-3 feature-info-title">Tons of options</h6>
            <p class="mb-0">Discover a place you’ll love to live in. Choose from our vast inventory and choose your desired house.</p>
          </div>
        </div>
      </div>
    </div>

     <!-- video intoduction -->
     <div class="container">
    <div class="row justify-content-center mt-5">

      <div class="col-md-7">

        <h1 class="text-center">Formcast Decumentary</h1>
        <center><hr style="width: 60%;"></center> 

        <p class="mb-4">Ten years and thousands of home buyers have turned to Formcast to find their dream home. We offer a comprehensive list of for-sale Designs, as well as the knowledge and tools to make informed real estate decisions. Today, more than ever, Formcast is the home of home Search.</p>
      </div>
      <div class="col-md-5">
        <div class="popup-video">
          <video controls height="180px"><source src="video/video.mp4"  type=""></video>
          <!-- <a class="popup-icon popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0"> <i class="flaticon-play-button"></i> </a> -->
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
  <!--=================================
  Feature -->

<!--=================================
testimonial -->
<section class="testimonial-main bg-holder" style="background-image: url(images/bg/testimony1.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <h2 class="text-center mt-2 text-primary">What Others Are Saying About Us</h2>
        <div class="owl-carousel owl-dots-bottom-left" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
          <div class="item">
            <div class="testimonial">
              <div class="testimonial-content">
                 
                 <div class="card">
                   <div class="card-header">
                     <div class="card-body">
                       <center><img src="images/agent/01.jpg" style="height: 100px; border-radius: 100%;"></center>
                        <p class="text-justify">
                        Oliver always had a smile and was so quick to answer and 
                        the job done.  I'll definitely suggest you to anyone we know who is selling or wanting to purchase a home. He is the best!
                      </p>
                       <div class="testimonial-name">
                        <h6 class="text-primary mb-1">Lisa & Graeme</h6>
                       </div>
                     </div>
                   </div>
                 </div>
              </div> 
            </div>
          </div>

          <div class="item">
            <div class="testimonial">
              <div class="testimonial-content">
                 
                 <div class="card">
                   <div class="card-header">
                     <div class="card-body">
                       <center><img src="images/agent/01.jpg" style="height: 100px; border-radius: 100%;"></center>
                        <p class="text-justify"> 
                        Oliver always had a smile and was so quick to answer and 
                        the job done.  I'll definitely suggest you to anyone we know who is selling or wanting to purchase a home. He is the best!
                        </p>
                       <div class="testimonial-name">
                        <h6 class="text-primary mb-1">Lisa & Graeme</h6>
                 
                       </div>
                     </div>
                   </div>
                 </div>
              </div> 
            </div>
          </div>
           
            <div class="item">
            <div class="testimonial">
              <div class="testimonial-content">
                 
                 <div class="card">
                   <div class="card-header">
                     <div class="card-body">
                       <center><img src="images/agent/01.jpg" style="height: 100px; border-radius: 100%;"></center>
                        <p class="text-justify"> 
                        Oliver always had a smile and was so quick to answer and 
                        the job done.  I'll definitely suggest you to anyone we know who is selling or wanting to purchase a home. He is the best!
                       </p>
                       <div class="testimonial-name">
                        <h6 class="text-primary mb-1">Lisa & Graeme</h6>
                 
                       </div>
                     </div>
                   </div>
                 </div>
              </div> 
            </div>
          </div>

      </div>
    </div>
  </div>
</section>
<!--=================================
testimonial -->

<!--=================================
Meet our agent -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Meet our Designers</h2>
          <p>Formcast Designers are customer advocates. We are accountable for helping clients morden designs, at the right price.</p>
        </div>
      </div>
    </div>
    <div class="row g-0">
      <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
        <div class="agent text-center">
          <div class="agent-detail">
            <div class="agent-avatar avatar avatar-xllll">
              <img class="img-fluid rounded-circle" src="images/agent/01.jpg" alt="">
            </div>
            <div class="agent-info">
              <h6 class="mb-0"> <a href="agent-detail.html">Alice Williams </a></h6>
              <span class="text-primary font-sm">Founder & CEO </span>
              <p class="mt-3 mb-0">The first thing to remember about success is that it is a process – nothing more, nothing less.</p>
            </div>
          </div>
          <div class="agent-button">
            <a class="btn btn-light d-grid" href="agent-detail.html">View Profile</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
        <div class="agent text-center">
          <div class="agent-detail">
            <div class="agent-avatar avatar avatar-xllll">
              <img class="img-fluid rounded-circle" src="images/agent/02.jpg" alt="">
            </div>
            <div class="agent-info">
              <h6 class="mb-0"> <a href="agent-detail.html">Felica queen </a></h6>
              <span class="text-primary font-sm">Construction</span>
              <p class="mt-3 mb-0">There are basically six key areas to higher achievement. Some people will tell you there are four.</p>
            </div>
          </div>
          <div class="agent-button">
            <a class="btn btn-light d-grid" href="agent-detail.html">View Profile</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
        <div class="agent text-center">
          <div class="agent-detail">
            <div class="agent-avatar avatar avatar-xllll">
              <img class="img-fluid rounded-circle" src="images/agent/03.jpg" alt="">
            </div>
            <div class="agent-info">
              <h6 class="mb-0"> <a href="agent-detail.html">Paul flavius </a></h6>
              <span class="text-primary font-sm">Investment</span>
              <p class="mt-3 mb-0">While others may tell you there are eight. One thing for certain though, is that irrespective of the.</p>
            </div>
          </div>
          <div class="agent-button">
            <a class="btn btn-light d-grid" href="agent-detail.html">View Profile</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="agent text-center">
          <div class="agent-detail">
            <div class="agent-avatar avatar avatar-xllll">
              <img class="img-fluid rounded-circle" src="images/agent/04.jpg" alt="">
            </div>
            <div class="agent-info">
              <h6 class="mb-0"> <a href="agent-detail.html">Sara lisbon  </a></h6>
              <span class="text-primary font-sm">Land development</span>
              <p class="mt-3 mb-0">If success is a process with a number of defined steps, then it is just like any other process.</p>
            </div>
          </div>
          <div class="agent-button">
            <a class="btn btn-light d-grid" href="agent-detail.html">View Profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Meet our agent -->

<!--=================================
Most popular Design -->
<section class="space-pb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Most popular Design</h2>
          <p>Discover designs in Formcast Most Popular gallery</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0">
            <a href="design-grid.php">
              <div class="location-item bg-overlay-gradient bg-holder" style="background-image: url(images/location/06.jpeg);">
                <div class="location-item-info">
                  <h5 class="location-item-title">bungalows</h5>
                  <span class="location-item-list">10 Designs</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 mb-4 mb-md-0">
            <a href="design-grid.php">
              <div class="location-item bg-overlay-gradient bg-holder" style="background-image: url(images/location/03.jpg);">
                <div class="location-item-info">
                  <h5 class="location-item-title">Duplex</h5>
                  <span class="location-item-list">14 Designs</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-12 mt-0 mt-lg-4">
            <a href="design-grid.php">
              <div class="location-item bg-overlay-gradient bg-holder" style="background-image: url(images/location/04.jpeg);">
                <div class="location-item-info">
                  <h5 class="location-item-title">Semi detached</h5>
                  <span class="location-item-list">22 Designs</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-4 mt-lg-0">
        <a href="property-grid.html">
          <div class="location-item location-item-big bg-overlay-gradient bg-holder" data-jarallax='{"speed": 0.6}' data-jarallax-video="https://www.youtube.com/embed/kacyaEXqVhs?showinfo=0&enablejsapi=1&origin=https://themes.potenzaglobalsolutions.com/html/real-villa/">
            <div class="location-item-info">
              <h5 class="location-item-title">Terrance </h5>
              <span class="location-item-list">29 Designs</span>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!--=================================
Most popular Design -->

<!--=================================
mobile app -->
<!-- <section class="space-pt bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="section-title">
          <h2>Download our android and iOS app to get exciting features prime content</h2>
          <p>Our Real Estate app simplifies your home search. Spontaneously see nearby homes for sale, apartments for rent.</p>
        </div>
        <div class="row">
          <div class="col-md-4 mb-5">
            <div class="d-flex">
              <div class="me-3">
                <i class="flaticon-rent font-xlll"></i>
              </div>
              <h6 class="text-primary">Real time property listing</h6>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="d-flex">
              <div class="me-3">
                <i class="flaticon-contract font-xlll"></i>
              </div>
              <h6 class="text-primary">Budget filter for budget</h6>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="d-flex">
              <div class="me-3">
                <i class="flaticon-notification font-xlll"></i>
              </div>
              <h6 class="text-primary">Notification price reduction</h6>
            </div>
          </div>
        </div>
        <div class="d-block d-sm-flex">
          <a class="btn btn-dark btn-sm btn-app me-0 me-sm-2 mb-2 mb-sm-0" href="#">
            <i class="fab fa-apple"></i>
            <div class="btn-text text-start">
              <small class="small-text">Download on the </small>
              <span class="mb-0 text-white d-block">App store</span>
            </div>
          </a>
          <a class="btn btn-dark btn-sm btn-app mb-2 mb-sm-0" href="#">
            <i class="fab fa-google-play"></i>
            <div class="btn-text text-start">
              <small class="small-text">Get in on </small>
              <span class="mb-0 text-white d-block">google play</span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-5 mt-5 mt-lg-0 text-center">
        <img class="img-fluid" src="images/mobile-app.png" alt="">
      </div>
    </div>
  </div>
</section> -->
<!--=================================
mobile app -->

<!--=================================
News, tips & articles -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>News, tips & articles</h2>
          <p>Grow your appraisal and real estate career with tips, trends, insights and learn more about our expert's advice.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="blog-post">
          <div class="blog-post-image">
            <img class="img-fluid" src="images/blog/img1.jpg" alt="">
          </div>
          <div class="blog-post-content">
            <div class="blog-post-details">
              <div class="blog-post-category">
                <a class="mb-3" href="#"><strong>Home improvement</strong></a>
              </div>
              <div class="blog-post-title">
                <h5><a href="blog-detail.html">7 pieces of advice to newbies</a></h5>
              </div>
              <div class="blog-post-description">
                <p class="mb-0">You are going on a cruise, but when the ship sets sail, you discover.</p>
              </div>
            </div>
            <div class="blog-post-footer">
              <div class="blog-post-time">
                <a href="#"> <i class="far fa-clock"></i>02 Jan 2019</a>
              </div>
              <div class="blog-post-author">
                <span> By <a href="#"> <img class="img-fluid" src="images/avatar/01.jpg" alt="">Sara lisbon </a> </span>
              </div>
              <div class="blog-post-comment">
                <a href="#"> <i class="far fa-comment"></i>(12) </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="blog-post">
          <div class="blog-post-image">
            <img class="img-fluid" src="images/blog/img2.jpg" alt="">
          </div>
          <div class="blog-post-content">
            <div class="blog-post-details">
              <div class="blog-post-category">
                <a class="mb-3" href="#"><strong>Tips and advice</strong></a>
              </div>
              <div class="blog-post-title">
                <h5><a href="blog-detail.html">Where to Invest in Real Estate</a></h5>
              </div>
              <div class="blog-post-description">
                <p class="mb-0">You will sail along until you collide with an immovable object.</p>
              </div>
            </div>
            <div class="blog-post-footer">
              <div class="blog-post-time">
                <a href="#"> <i class="far fa-clock"></i>14 Feb 2019</a>
              </div>
              <div class="blog-post-author">
                <span> By <a href="#"> <img class="img-fluid" src="images/avatar/02.jpg" alt="">Anne Smith</a> </span>
              </div>
              <div class="blog-post-comment">
                <a href="#"> <i class="far fa-comment"></i>(32) </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="blog-post">
          <div class="blog-post-image">
            <img class="img-fluid" src="images/blog/img3.jpg" alt="">
          </div>
          <div class="blog-post-content">
            <div class="blog-post-details">
              <div class="blog-post-category">
                <a class="mb-3" href="#"><strong>Market trends</strong></a>
              </div>
              <div class="blog-post-title">
                <h5><a href="blog-detail.html">Cutting your losses in Real Estate</a></h5>
              </div>
              <div class="blog-post-description">
                <p class="mb-0">Trying to go through life without clarity is similar to sailing.</p>
              </div>
            </div>
            <div class="blog-post-footer">
              <div class="blog-post-time">
                <a href="#"> <i class="far fa-clock"></i>30 March 2019</a>
              </div>
              <div class="blog-post-author">
                <span> By <a href="#"> <img class="img-fluid" src="images/avatar/03.jpg" alt="">Alice Williams</a> </span>
              </div>
              <div class="blog-post-comment">
                <a href="#"> <i class="far fa-comment"></i>(45) </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<!--=================================
News, tips & articles -->

<!--=================================
call to action -->
<?php require_once 'includes/call_to_action.php'?>
<!--=================================
call to action -->

<!--=================================
footer-->
<?php require_once 'includes/footer.php'; ?>
<!--=================================
footer-->

<!--=================================
Javascript -->

  <!-- JS Global Compulsory (Do not remove)-->
<?php require_once 'includes/footer_js.php'; ?>
