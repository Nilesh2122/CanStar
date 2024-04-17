
<div class="container-fluid">
  <div class="card bg-light-info shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3">
      <div class="row align-items-center">
        <div class="col-9">
          <h4 class="fw-semibold mb-8">Add User</h4>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="<?php echo base_url(); ?>Users">Users</a></li>
              <li class="breadcrumb-item" aria-current="page">Add</li>
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

  <div class="card">
    <form  action="" id="add_quote" method="Post" enctype="multipart/form-data">
      <div>
        <div class="card-body">
          <h5>Person Info</h5>
          <div class="row pt-3">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="control-label mb-1">First Name</label>
                <input type="text" id="firstName" class="form-control" name="fname" placeholder="Enter first name" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="control-label mb-1">Last Name</label>
                <input type="text" id="lastName" class="form-control" name="lname" placeholder="Enter last name" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="control-label mb-1">Phone number</label>
                <input type="text" id="phone" class="form-control" name="phone" placeholder="Enter phone number" required>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="card-body">
          <!--/row-->
          <h5 class="mb-4">Address</h5>
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label class="mb-1">Street</label>
                <input type="text" class="form-control" id="street" name="street" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="mb-1">City</label>
                <input type="text" class="form-control" id="city" name="city" required>
              </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="mb-3">
                <label class="mb-1">State</label>
                <input type="text" class="form-control" id="state" name="state" required>
              </div>
            </div>
            <!--/span-->
          </div>
          <!--/row-->
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="mb-1">Post Code</label>
                <input type="text" class="form-control" id="post_code" name="post_code" required>
              </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="mb-3">
                <label class="mb-1">Country</label>
                <select class="form-control form-select" id="country" name="country" required>
                  <option>--Select your Country--</option>
                  <option>India</option>
                  <option>Sri Lanka</option>
                  <option>USA</option>
                </select>
              </div>
            </div>
            <!--/span-->
          </div>
        </div>
        <hr>
        <div class="card-body">
          <!--/row-->
          <h5 class="mb-4">Image details</h5>
         
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                  <label class="control-label mb-1">Easy plug access</label>
                  <div class="form-check">
                    <input type="radio" id="customRadio11" name="plugaccess" class="form-check-input" value="yes" checked>
                    <label class="form-check-label" for="customRadio11">Yes</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" id="customRadio22" name="plugaccess" class="form-check-input" value="no">
                    <label class="form-check-label" for="customRadio22">No</label>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                  <label class="control-label mb-1">Controller access</label>
                  <div class="form-check">
                    <input type="radio" id="customRadio11" name="conaccess" class="form-check-input" value="yes" checked>
                    <label class="form-check-label" for="customRadio11">Yes</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" id="customRadio22" name="conaccess" class="form-check-input" value="no">
                    <label class="form-check-label" for="customRadio22">No</label>
                  </div>
              </div>
            </div>
              
          </div>

          <div class="row">
            <div class="col-md-6" id="plug-yes">
              <div class="email-repeater mb-3">
                <div data-repeater-list="repeater-group">
                  <div data-repeater-item="" class="row mb-3">
                    <div class="col-md-10">
                      <div class="custom-file">
                        <input type="file" class="form-control" id="customFile" name="plug-image">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <button data-repeater-delete="" class="btn btn-danger waves-effect waves-light" type="button">
                        <i class="ti ti-circle-x fs-5"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <button type="button" data-repeater-create="" class="btn btn-info waves-effect waves-light">
                  <div class="d-flex align-items-center">
                    Add More File
                    <i class="ti ti-circle-plus ms-1 fs-5"></i>
                  </div>
                </button>
              </div>
            </div>

            <div class="col-md-6" id="plug-no" style="display:none">
              <div class="mb-3">
                <label class="mb-1">Notes</label>
                <textarea class="form-control" rows="2" name="plug-notes"></textarea>
              </div>
            </div>

            <div class="col-md-6" id="controller-yes">
              <div class="email-repeater mb-3">
                <div data-repeater-list="repeater-group">
                  <div data-repeater-item="" class="row mb-3">
                    <div class="col-md-10">
                      <div class="custom-file">
                        <input type="file" class="form-control" id="customFile" name="controller-image">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <button data-repeater-delete="" class="btn btn-danger waves-effect waves-light" type="button">
                        <i class="ti ti-circle-x fs-5"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <button type="button" data-repeater-create="" class="btn btn-info waves-effect waves-light">
                  <div class="d-flex align-items-center">
                    Add More File
                    <i class="ti ti-circle-plus ms-1 fs-5"></i>
                  </div>
                </button>
              </div>
            </div>

            <div class="col-md-6" id="controller-no" style="display:none">
              <div class="mb-3">
                <label class="mb-1">Notes</label>
                <textarea class="form-control" rows="2" name="controller-notes"></textarea>
              </div>
            </div>
            
          </div>


          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="mb-1">Color Swatches</label>
                <select class="form-control form-select" id="color" name="color" required>
                  <option>--Select color--</option>
                  <option>Red</option>
                  <option>Blue</option>
                  <option>Yellow</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row align-items-end mb-2">
                
                <div class="col-md-4">
                  <label class="mb-1">Annotation Image</label>
                  <div class="custom-file">
                    <input type="file" class="form-control" id="annotation_image" name="annotation_image[]">
                  </div>
                </div>
                <div class="col-md-3">
                  <label class="mb-1">Note to identify the photo</label>
                  <input type="text" class="form-control" id="identify_photo" name="identify_photo" required>
                </div>
                <div class="col-md-2">
                  <label class="mb-1">Number of Peaks</label>
                  <input type="text" class="form-control" id="peaks" name="peaks" required>
                </div>
                <div class="col-md-2">
                  <label class="mb-1">Number of Jumper</label>
                  <input type="text" class="form-control" id="jumper" name="jumper" required>
                </div>
                <div class="col-md-1">
                  <button  class="btn btn-danger waves-effect waves-light" type="button" onclick="duplicateRow()">
                          <i class="ti ti-circle-plus fs-5"></i>
                  </button>
                </div>
          </div>

        </div>
        <div class="form-actions">
          <div class="card-body border-top">
            <button type="submit" class="btn btn-outline-primary font-medium rounded-pill px-4 submit-btn" >
              <div class="d-flex align-items-center">
                <i class="ti ti-send me-2 fs-4"></i>
                Submit
              </div>
            </button>
            <button class="btn btn-outline-primary font-medium rounded-pill px-4 loading-btn" type="button" disabled="">
              <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
              Creating...
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
 </section>
</div>

  <script src="<?php echo base_url(); ?>assets/libs/jquery.repeater/jquery.repeater.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/plugins/repeater-init.js"></script>
  <script>
     $('input[name="plugaccess"]').change(function(){
        var value = $(this).val();
        //alert(value);
        if(value === "yes") {
            $('#plug-yes').show();
            $('#plug-no').hide();
        } else {
            $('#plug-yes').hide();
            $('#plug-no').show();
        }
    });

    $('input[name="conaccess"]').change(function(){
        var value = $(this).val();
        //alert(value);
        if(value === "yes") {
            $('#controller-yes').show();
            $('#controller-no').hide();
        } else {
            $('#controller-yes').hide();
            $('#controller-no').show();
        }
    });
    var rowCount = 1; // Initialize the row count
    
    function duplicateRow() {
        var rowToClone = $('.row:last');
        var clonedRow = rowToClone.clone();
        clonedRow.find('label').remove();
        // Update input IDs and names with dynamic values
        clonedRow.find('input').each(function() {
            var input = $(this);
            var id = input.attr('id');
            var newId = id + '_' + rowCount;
            input.attr('id', newId);
        });
        
        // Update row count
        rowCount++;
        
        // Append cloned row after original row
        rowToClone.after(clonedRow);
    }
  </script>