<!DOCTYPE html>
<html lang="en">
  <head>
    <!--  Title -->
    <title>Mordenize</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/images/canstar-logo.svg" />
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-orange.min.css" />
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img src="<?php echo base_url(); ?>assets/images/canstar-logo.svg" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
      <img src="<?php echo base_url(); ?>assets/images/canstar-logo.svg" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
              <div class="card mb-0">
                <div class="card-body">
                  <a href="" class="text-nowrap logo-img text-center d-block mb-5 w-100 rounded-2" style="background: #fa896b;padding: 20px;">
                    <img src="<?php echo base_url(); ?>assets/images/canstar-logo.svg" width="180" alt="">
                  </a>
                  <div class="row">
                  <form id="loginform" method="Post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email ID</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <div class="form-check">
                        <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label text-dark" for="flexCheckChecked">
                          Remeber this Device
                        </label>
                      </div>
                    </div>
                    <small class="error1" style="color: red;font-size:15px"> </small>
                    <button class="btn btn-primary w-100 py-8 mb-4 rounded-2" type="submit" >Sign In</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--  Import Js Files -->
    <script src="<?php echo base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--  core files -->
    <script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/app.init.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/app-style-switcher.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

    <script>
        $('#loginform').on('submit', function(e)
        {
          e.preventDefault();
          $.ajax({
              url:"<?php echo base_url();?>Account/login_process", 
              method:"POST",
              dataType : "json",
              data:new FormData(this),
              contentType: false,
              cache: false,
              processData:false,
              success:function(json)
              {
                  console.log(json);
                  if(json.status_code == '1')
                  {
                    window.open("<?php echo base_url();?>Dashboard",'_self');
                      /* if(json.data['role'] == '1')
                      {
                          window.open("<?php echo base_url();?>designers",'_self');
                      }else{
                          window.open("<?php echo base_url();?>createquotations",'_self');
                      } */
                  }
                  else
                  {
                  $('.error1').html(json.message).fadeIn().delay(3000).fadeOut();
                  }
              }
          });
        });
    </script>
  </body>
</html>