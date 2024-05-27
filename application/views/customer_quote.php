<!DOCTYPE html>
<html lang="en">
  <head>
    <!--  Title -->
    <title>CanStar System</title>
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
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/owl.carousel/dist/assets/owl.carousel.min.css">
    
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-orange.min.css" />
    <script src="<?php echo base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <style>
      .loading-btn {
        display: none;
      }
      .swal2-popup .swal2-styled.swal2-confirm{
        background-color: #fa896b !important;
      }
    </style>
  </head>
  <body>
  <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
    <!-- Preloader -->
    <div class="preloader">
      <img src="<?php echo base_url(); ?>assets/images/canstar-logo.svg" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
      <img src="<?php echo base_url(); ?>assets/images/canstar-logo.svg" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme"  data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar Start -->
     
      <!--  Sidebar End -->
      <!--  Main wrapper -->
      <div class="">
        <!--  Header Start -->
        
        <!--  Header End -->
      <div class="container-fluid">
        
        <div class="card overflow-hidden invoice-application">
          <div class="d-flex align-items-center justify-content-between gap-3 m-3 d-lg-none">
            <button class="btn btn-primary d-flex" type="button" data-bs-toggle="offcanvas"
              data-bs-target="#chat-sidebar" aria-controls="chat-sidebar">
              <i class="ti ti-menu-2 fs-5"></i>
            </button>
            <form class="position-relative w-100">
              <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search Contact">
              <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
            </form>
          </div>
          <div class="d-flex">
            <div class="w-100 w-xs-100 chat-container">
              <div class="invoice-inner-part h-100">
                <div class="invoiceing-box">
                  <div class="invoice-header d-flex align-items-center border-bottom p-3">
                  
                    <h4 class="font-medium text-uppercase mb-0">Invoice</h4>
                    <div class="ms-auto">
                      <h4 class="invoice-number"></h4>
                    </div>
                  </div>
                  <div class="p-3" id="custom-invoice">
                    <div class="invoice-123" id="printableArea">
                      <div class="row">
                       
                      </div>
                      <div class="row pt-3">
                      
                        <div class="col-md-12">
                          <div class="" style="display:inline-block">
                            <address>
                              <h6>&nbsp;From,</h6>
                              <h6 class="fw-bold">&nbsp;CanStar</h6>
                              <p class="ms-1">
                              3227 18 St NW, <br />Edmonton,
                                <br />AB T6T 0H2
                              </p>
                            </address>
                          </div>
                          <img src="<?php echo base_url(); ?>assets/images/new-logo.jpg" alt="" class="img-fluid mb-n4" style="width: 25%;margin: 0 auto;display: inline-block; float: right;">
                          <div class="text-end">
                          
                            <address>
                              <h6>To,</h6>
                              <h6 class="fw-bold invoice-customer">
                              <?php echo $quote['fname'].' '.$quote['lname']; ?>,
                              </h6>
                              <p class="ms-4">
                              <?php echo $quote['address'];?>, <br /><?php echo $quote['city'];?>, <br /><?php echo $quote['state'];?>
                                 - <?php echo $quote['post_code'];?>
                              </p>
                              <p>Phone No : <?php echo $quote['phone'];?></p>
                              <p class="mt-4 mb-1">
                                <span>Invoice Date :</span>
                                <i class="ti ti-calendar"></i>
                                <?php echo $quote['created_at'];?>
                              </p>
                              
                            </address>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="table-responsive mt-5" style="clear: both">
                            <table class="table table-hover">
                              <thead>
                                <!-- start row -->
                                <tr>
                                  <th class="text-center">#</th>
                                  <th>Description</th>
                                  <th>Image</th>
                                  <th class="text-end">Quantity</th>
                                  <th class="text-end">Unit Cost</th>
                                  <th class="text-end">Total</th>
                                </tr>
                                <!-- end row -->
                              </thead>
                              <tbody>
                                <!-- start row -->
                                <?php
                                $counter = 0;
                                if($quote['annotation_image'])
                                foreach ($quote['annotation_image'] as $item) { 
                                    if($item['type'] == 'fullyEdited'){
                                ?>
                                <tr>
                                  <td class="text-center"><?php echo ++$counter; ?></td>
                                  <!-- <td><?php echo ucwords($item['identify_image_name']); ?></td> -->
                                  <td><?php echo 'Canstar puck lights with customised data line system,<b>'.$item['color'].'</b> aluminium channel track package for the <b>'.$item['identify_image_name'].' </b> of the house'; ?></td>
                                  <td><i class="ti ti-eye fs-5 gallery-img" data-img="<?php echo base_url().$item['image_url']; ?>" style="cursor:pointer"></i></td>
                                  <td class="text-end"><?php echo $item['total_numerical_box']; ?></td>
                                  <td class="text-end">$<?php echo $item['unit_price']; ?></td>
                                  <td class="text-end">$<?php echo $item['total_amount']; ?></td>
                                </tr>
                                <?php } } ?>
                                <?php
                                if($quote['products'])
                                foreach ($quote['products'] as $item) { 
                                ?>
                                <tr>
                                  <td class="text-center"><?php echo ++$counter; ?></td>
                                  <td><?php echo $item['product_description']; ?></td>
                                  <td></td>
                                  <td class="text-end"><?php echo $item['qty']; ?></td>
                                  <td class="text-end">$<?php echo $item['price']; ?></td>
                                  <td class="text-end">$<?php echo $item['amount']; ?></td>
                                </tr>
                                <?php } ?>
                                <?php
                                if($quote['custom_product_data'])
                                foreach ($quote['custom_product_data'] as $item) { 
                                ?>
                                <tr>
                                  <td class="text-center"><?php echo ++$counter; ?></td>
                                  <td><?php echo $item['product']; ?></td>
                                  <td></td>
                                  <td class="text-end"><?php echo $item['qty']; ?></td>
                                  <td class="text-end">$<?php echo $item['unit_price']; ?></td>
                                  <td class="text-end">$<?php echo $item['amount']; ?></td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="pull-left col-md-4">
                            <p style="font-weight:bold;font-size:15px">Notes : </p>
                            <p><?php echo $quote['notes']; ?></p>
                          </div>

                          <div class="pull-right mt-4 text-end">
                            <p>Total Linear Feet : $ <?php echo $quote['total_feet_price']; ?></p>
                            <p>Total Controller : $ <?php echo $quote['total_controller_price']; ?></p>
                            <p>Discount (%) : <?php echo $quote['discount_percentage']; ?></p>
                            <hr />
                            <h3><b>Main Total :</b> $ <?php echo $quote['main_total']; ?></h3>
                          </div>
                          <div class="clearfix"></div>
                          <hr />
                          <div class="text-end">
                            <button class="btn btn-default print-page" type="button">
                              <span><i class="ti ti-printer fs-5"></i>
                                Print</span>
                            </button>
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

      <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" class="img-fluid" id="modalImage" alt="Modal Image">
                </div>
            </div>
        </div>
    </div>
<script src="<?php echo base_url(); ?>assets/js/apps/jquery.PrintArea.js"></script>
<script src="<?php echo base_url(); ?>assets/js/apps/invoice.js"></script>
<script>
   $(document).ready(function() {
    $('.gallery-img').click(function() {
      // Get the source of the clicked image
      var src = $(this).attr('data-img');
      // Set the source of the modal image
      $('#modalImage').attr('src', src);
      // Show the modal
      $('#imageModal').modal('show');
    });
   });
</script>
  <!--  Customizer -->
    <!--  Import Js Files -->
    
    <script src="<?php echo base_url(); ?>assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--  core files -->
    <script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/app.init.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/app-style-switcher.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <!--  current page js files -->
    <script src="<?php echo base_url(); ?>assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/canstar.js"></script>
  </body>
</html>