<div class="container-fluid">
<div class="card bg-light-info shadow-none position-relative overflow-hidden">
   <div class="card-body px-4 py-3">
      <div class="row align-items-center">
         <div class="col-9">
            <h4 class="fw-semibold mb-8">View Quote Detail</h4>
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="<?php echo base_url(); ?>">Dashboard</a></li>
                  <li class="breadcrumb-item" aria-current="page">View</li>
               </ol>
            </nav>
         </div>
         <div class="col-3">
            <div class="text-center mb-n5">  
               <img src="<?php echo base_url(); ?>assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
            </div>
         </div>
      </div>
   </div>
</div>
<section>
   <!-- Row -->
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <form class="form-horizontal">
               <div class="form-body">
                  <div class="card-body pb-0">
                     <h5 class="card-title mb-0">Person Info</h5>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group row">
                              <label class="control-label text-end col-md-3"
                                 >First Name:</label
                                 >
                              <div class="col-md-9">
                                 <p class="form-control-static"><?php echo $quote['fname'];?></p>
                              </div>
                           </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                           <div class="form-group row">
                              <label class="control-label text-end col-md-3"
                                 >Last Name:</label
                                 >
                              <div class="col-md-9">
                                 <p class="form-control-static"><?php echo $quote['lname'];?></p>
                              </div>
                           </div>
                        </div>
                        <!--/span-->
                     </div>
                     <!--/row-->
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group row">
                              <label class="control-label text-end col-md-3"
                                 >Phone number:</label
                                 >
                              <div class="col-md-9">
                                 <p class="form-control-static"><?php echo $quote['phone'];?></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--/row-->
                  </div>
                  <hr class="mt-0" />
                  <div class="card-body">
                     <h5 class="mb-4">Address</h5>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group row">
                              <label class="control-label text-end col-md-3"
                                 >Street:</label
                                 >
                              <div class="col-md-9">
                                 <p class="form-control-static">
                                    <?php echo $quote['address'];?>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group row">
                              <label class="control-label text-end col-md-3"
                                 >City:</label
                                 >
                              <div class="col-md-9">
                                 <p class="form-control-static"><?php echo $quote['city'];?></p>
                              </div>
                           </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                           <div class="form-group row">
                              <label class="control-label text-end col-md-3"
                                 >State:</label
                                 >
                              <div class="col-md-9">
                                 <p class="form-control-static"><?php echo $quote['state'];?></p>
                              </div>
                           </div>
                        </div>
                        <!--/span-->
                     </div>
                     <!--/row-->
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group row">
                              <label class="control-label text-end col-md-3"
                                 >Post Code:</label
                                 >
                              <div class="col-md-9">
                                 <p class="form-control-static"><?php echo $quote['post_code'];?></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <hr />
                  <div class="card-body">
                     <!-- <h5 class="mb-4">Image details</h5> -->
                     <div class="row mb-4">
                        <div class="col-md-6">
                           <div class="form-group row">
                              <h5 class=""
                                 >Easy plug access:</h5
                                 >
                              <div class="col-md-9">
                                 <p class="form-control-static">
                                    <?php 
                                       if($quote['access_image'])
                                       foreach ($quote['access_image'] as $item) {
                                          if ($item['access_type'] === 'plug') {
                                            if($item['data_type'] == 1){
                                             ?>
                                 <div class="col-md-6">
                                    <div class="card overflow-hidden">
                                       <div class="el-card-item pb-3">
                                          <div class="">
                                             <img src="<?php echo base_url().$item['data']; ?>" class="d-block position-relative w-100 gallery-img" alt="user">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <?php
                                    }
                                    else{
                                      echo $item['data'];
                                    }
                                    }
                                    }
                                    ?>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group row">
                              <h5 class=""
                                 >Controller access:</h5
                                 >
                              <div class="col-md-9">
                                 <p class="form-control-static">
                                    <?php 
                                       if($quote['access_image'])
                                       foreach ($quote['access_image'] as $item) {
                                          if ($item['access_type'] === 'controller') {
                                          if($item['data_type'] == 1)
                                          {
                                             ?>
                                 <div class="col-md-6">
                                    <div class="card overflow-hidden">
                                       <div class="el-card-item pb-3">
                                          <div class="">
                                             <img src="<?php echo base_url().$item['data']; ?>" class="d-block position-relative w-100 gallery-img" alt="user">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <?php
                                    }
                                    else{
                                       echo $item['data'];
                                    }
                                    }
                                    }
                                    ?>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group row">
                              <h5 class="control-label mb-4"
                                 >Annotation Image:</h5
                                 >
                              <div class="row">
                                 <?php 
                                    if($quote['annotation_image'])
                                    foreach ($quote['annotation_image'] as $item) { ?>
                                 <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                       <div class="el-card-item pb-3">
                                          <div class="
                                             el-card-avatar
                                             mb-3
                                             el-overlay-1
                                             w-100
                                             overflow-hidden
                                             position-relative
                                             text-center
                                             ">
                                             <img src="<?php echo base_url().$item['image_url']; ?>" class="d-block position-relative w-100 gallery-img" alt="user">
                                          </div>
                                          <div class="el-card-content text-center">
                                             <h4 class="mb-0 fs-5"><?php echo ucwords($item['identify_image_name']); ?></h4>
                                             <p class="text-muted"><?php echo ucwords($item['type']); ?></p>
                                             <ul>
                                                <li><b>Total</b> - <?php echo ucwords($item['total']); ?></li>
                                                <li><b>No Peaks</b> - <?php echo ucwords($item['no_peaks']); ?></li>
                                                <li><b>No Jumper</b> - <?php echo ucwords($item['no_jumper']); ?></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <?php }
                                    ?>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-actions">
                        <div class="card-body">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                       <!-- <button type="submit" class="btn btn-primary">
                                       <i class="ti ti-edit fs-5"></i>
                                       Edit
                                       </button> -->
                                       <button type="button" class="btn btn-danger">
                                       Send for Approval

                                       </button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6"></div>
                           </div>
                        </div>
                     </div>
                  </div>
            </form>
            </div>
            <!-- ---------------------
               start Form with view only
               ---------------- -->
         </div>
      </div>
      <!-- Row -->
</section>
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
<script>
   $(document).ready(function() {
    $('.gallery-img').click(function() {
      // Get the source of the clicked image
      var src = $(this).attr('src');
      // Set the source of the modal image
      $('#modalImage').attr('src', src);
      // Show the modal
      $('#imageModal').modal('show');
    });
   });
</script>