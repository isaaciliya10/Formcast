<?php require_once 'includes/links.php'; ?>
<!--=================================
header -->
<?php require_once 'includes/header.php'; ?>
<!--=================================
 header -->

<!--=================================
breadcrumb -->
<style type="text/css">
     label{
    text-transform: capitalize;
    font-family: cursive;
   
    font-size: 18px;
 }
</style>
<div class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.html"> <i class="fas fa-home"></i> </a></li>
          <li class="breadcrumb-item"> <i class="fas fa-chevron-right"></i> <a href="#">Pages</a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span>Registration</span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
breadcrumb -->

<!--=================================
Blog -->
   <div class="container col-md-5 mt-4">
                        <div class="row">
                             
                                <div class="card shadow-lg ">
                                    <div class="card-body">
                                         
                                        <h4 class="card-header text-center">Registration Form</h4>
                                        <form class="needs-validation" novalidate>
                                            <div class="mb-3">

                                                <label for="validationCustom01" class="form-label">First name</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required />    
                                            </div>

                                            <div class="mb-3">
                                                <label for="last_name" class="form-label">Last name</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required />
                                            </div>

                                            <div class="mb-3">
                                                <label for="Username" class="form-label">Username</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    <input type="text" class="form-control" id="Username" placeholder="Username" aria-describedby="inputGroupPrepend" required />    
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="city" class="form-label">City</label>
                                                <input type="text" class="form-control" id="validationCustom03" placeholder="City" required />
                                            </div>

                                            <div class="mb-3">
                                                <label for="state" class="form-label">State</label>
                                                <input type="text" class="form-control" id="state" placeholder="State" required />
                                            </div>

                                            <div class="mb-3">
                                                <label for="Zip" class="form-label">Zip</label>
                                                <input type="text" class="form-control" id="zip" placeholder="Zip" required />
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="invalidCheck" required />
                                                    <span class="form-check-label" for="invalidCheck">Agree to terms and conditions</spanl>
                                                     
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                        </form>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        
                    </div>
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
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/popper/popper.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>

  <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
  <script src="js/owl-carousel/owl.carousel.min.js"></script>

  <!-- Template Scripts (Do not remove)-->
  <script src="js/custom.js"></script>

</body>
</html>
