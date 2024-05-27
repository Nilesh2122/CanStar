<style>
    #image-container {
        position: relative;
    }
    #image-container img{
      width: 100%;
    }
    #annotation-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    #canvas {
        position: absolute;
        top: 0;
        left: 0;
    }
    .text-box {
        position: absolute;
        border: 1px solid black;
        background-color: white;
        padding: 5px;
        cursor: move;
    }
    #add_quote img{
        width: 100%;
    }
    .main-total-div{
      text-align: right;
      display: inline-block;
      float: right;
      font-size: 16px;
      font-weight: 700;
    }

    

    .remove-icon {
        position: absolute; /* Position the icon absolutely within the text box */
        top: -10px; /* Adjusted position to make it overlap the border neatly */
        right: -10px; /* Adjusted position to make it overlap the border neatly */
        width: 20px; /* Set the width of the button */
        height: 20px; /* Set the height of the button */
        background-color: white; /* White background */
        border: 1px solid black; /* Black border */
        border-radius: 50%; /* Make it round */
        display: flex; /* Use flexbox for centering */
        align-items: center; /* Center the icon vertically */
        justify-content: center; /* Center the icon horizontally */
        cursor: pointer; /* Pointer cursor */
        color: red; /* Black text color */
        font-weight: bold; /* Bold text */
        line-height: 1; /* Ensure the text is vertically centered */
        display: none; /* Initially hide the remove icon */
    }

    /* Show the remove icon when hovering over the text box */
    .text-box .remove-icon {
        display: flex;
    }
    input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* For Firefox */
        input[type="number"] {
            -moz-appearance: textfield;
        }

</style>
<div class="container-fluid">
  <div class="card bg-light-info shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3">
      <div class="row align-items-center">
        <div class="col-9">
          <h4 class="fw-semibold mb-8">Edit Quote</h4>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="<?php echo base_url(); ?>Quote">Quote</a></li>
              <li class="breadcrumb-item" aria-current="page">Edit</li>
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
    <form  action="" id="edit_quote" method="Post" enctype="multipart/form-data">
      <div>
        <div class="card-body">
          <h5>Person Info</h5>
          <input type="hidden" id="quote_id" name="quote_id" value="<?php echo $quote['quote_id']; ?>">
          <input type="hidden" id="total-controller-input" name="total-controller-input" value="<?php echo $quote['total_controller_price']; ?>">
          <input type="hidden" id="total-feet-input" name="total-feet-input" value="<?php echo $quote['total_feet_price']; ?>">
          <input type="hidden" id="total-input" name="total-input" value="<?php echo $quote['main_total']; ?>">
          <div class="row pt-3">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="control-label mb-1">First Name</label>
                <input type="text" id="firstName" class="form-control" name="fname" placeholder="Enter first name" value="<?php echo $quote['fname']; ?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="control-label mb-1">Last Name</label>
                <input type="text" id="lastName" class="form-control" name="lname" placeholder="Enter last name" value="<?php echo $quote['lname']; ?>" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="control-label mb-1">Email Id</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="Enter Email Id" value="<?php echo $quote['email']; ?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="control-label mb-1">Phone number</label>
                <input type="text" id="phone" class="form-control" name="phone" placeholder="Enter phone number" value="<?php echo $quote['phone']; ?>" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
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
                <input type="text" class="form-control" id="street" name="street" value="<?php echo $quote['address']; ?>" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="mb-1">City</label>
                <input type="text" class="form-control" id="city" name="city" value="<?php echo $quote['city']; ?>" required>
              </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="mb-3">
                <label class="mb-1">State</label>
                <input type="text" class="form-control" id="state" name="state" value="<?php echo $quote['state']; ?>" required>
              </div>
            </div>
            <!--/span-->
          </div>
          <!--/row-->
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="mb-1">Post Code</label>
                <input type="text" class="form-control" id="post_code" name="post_code" value="<?php echo $quote['post_code']; ?>" required>
              </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="mb-3">
                <label class="mb-1">Country</label>
                <?php
                $countries = ['Canada', 'India', 'Sri Lanka', 'USA'];
                $selectedCountry = $quote['country'];
                ?>

                <select class="form-control form-select" id="country" name="country" required>
                    <option>--Select your Country--</option>
                    <?php foreach ($countries as $country): ?>
                        <option value="<?php echo $country; ?>" <?php echo ($selectedCountry == $country) ? 'selected' : ''; ?>>
                            <?php echo $country; ?>
                        </option>
                    <?php endforeach; ?>
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
          <?php 
          $checkYes = '';
          $checkNo = 'checked'; // By default, assume "No" is selected unless a condition changes it.
          $access_plug_data = '';
          $access_controller_data = '';
          
          if (!empty($quote['access_image'])) {
              foreach ($quote['access_image'] as $item) {
                  if ($item['access_type'] === 'plug' && $item['data_type'] == 1) {
                      $checkYes = 'checked';
                      $checkNo = ''; // If a plug is found, "Yes" should be checked, so "No" is unchecked.
                      $access_plug_data = $item['data'];
                      break; // Exit the loop once the condition is met.
                  }
                  else{
                    $access_plug_data = $item['data'];
                  }
              }
          }
          
          $checkYesController = '';
          $checkNoController = 'checked';

          if (!empty($quote['access_image'])) {
              foreach ($quote['access_image'] as $item) {
                if ($item['access_type'] === 'controller' && $item['data_type'] == 1) {
                      $checkYesController = 'checked';
                      $checkNoController = ''; // If any controller is found, "Yes" should be checked.
                      $access_controller_data = $item['data'];
                      break; // Exit the loop once the condition is met.
                  }
                  else
                  {
                    $access_controller_data = $item['data'];
                  }
              }
          }
          ?>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                  <label class="control-label mb-1">Easy plug access</label>
                  <div class="form-check">
                    <input type="radio" id="customRadio11" name="plugaccess" class="form-check-input" value="yes" <?php echo $checkYes; ?>>
                    <label class="form-check-label" for="customRadio11">Yes</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" id="customRadio22" name="plugaccess" class="form-check-input" value="no" <?php echo $checkNo; ?>>
                    <label class="form-check-label" for="customRadio22">No</label>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                  <label class="control-label mb-1">Controller access</label>
                  <div class="form-check">
                    <input type="radio" id="customRadio11" name="conaccess" class="form-check-input" value="yes" <?php echo $checkYesController; ?>>
                    <label class="form-check-label" for="customRadio11">Yes</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" id="customRadio22" name="conaccess" class="form-check-input" value="no" <?php echo $checkNoController; ?>>
                    <label class="form-check-label" for="customRadio22">No</label>
                  </div>
              </div>
            </div>
              
          </div>

          <div class="row">
            <div class="col-md-6 mb-3" id="plug-yes"  style="<?php echo ($checkYes == 'checked') ? '' : 'display:none'; ?>">
              <div class="custom-file">
                <input type="file" class="form-control" id="customFile" name="plug-image">
                <img  src="<?php echo base_url().$access_plug_data; ?>" class="preview-image" style="width: 20%;">
              </div>
            </div>

            <div class="col-md-6" id="plug-no" style="<?php echo ($checkNo == 'checked') ? '' : 'display:none'; ?>">
              <div class="mb-3">
                <label class="mb-1">Notes</label>
                <textarea class="form-control" rows="2" name="plug-notes"><?php echo $access_plug_data; ?></textarea>
              </div>
            </div>

            <div class="col-md-6" id="controller-yes" style="<?php echo ($checkYesController == 'checked') ? '' : 'display:none'; ?>">
              <div class="custom-file">
                <input type="file" class="form-control" id="customFile" name="controller-image">
                <img  src="<?php echo base_url().$access_controller_data; ?>" class="preview-image" style="width: 20%;">
              </div>
            </div>

            <div class="col-md-6" id="controller-no"  style="<?php echo ($checkNoController == 'checked') ? '' : 'display:none'; ?>">
              <div class="mb-3">
                <label class="mb-1">Notes</label>
                <textarea class="form-control" rows="2" name="controller-notes"><?php echo $access_controller_data; ?></textarea>
              </div>
            </div>
            
          </div>
          <div class="controller-row mt-3">
            <div class="row align-items-end mb-1">
              <div class="col-md-2">
                  <label class="mb-1">Product</label>
              </div>
              <div class="col-md-2">
                  <label class="mb-1">Quantity</label>
              </div>
              <div class="col-md-2">
                  <label class="mb-1">Amount</label>
              </div>
            </div>

            <?php 
            $productQuantities = [];
            $productAmounts = [];
            
            foreach ($quote['products'] as $product_data) {
                $productQuantities[$product_data['product']] = $product_data['qty'];
                $productAmounts[$product_data['product']] = $product_data['amount'];
            }
            /* echo "<pre>";
            print_r($productQuantities);
            print_r($productAmounts);
            echo "</pre>";
            exit(); */
            foreach($product as $row) { 
              $qty = isset($productQuantities[$row['product_title']]) ? $productQuantities[$row['product_title']] : 0;
              $amount = isset($productAmounts[$row['product_title']]) ? $productAmounts[$row['product_title']] : 0;  
             /*  echo "<pre>";
            print_r($qty);
            print_r($amount);
            echo "</pre>";
            exit(); */
            ?>
            <div class="row align-items-end mb-3">
              <div class="col-md-2">
                <div class="mb-3">
                  <input type="text" class="form-control" id="product_<?php echo $row['product_id']; ?>" data-amount="<?php echo $row['price']; ?>" name="product_<?php echo $row['product_id']; ?>" value="<?php echo $row['product_title']; ?>" readonly>
                </div>
              </div>
              <div class="col-md-2">
                <div class="mb-3">
                  <input type="text" class="form-control product-qty" id="product_qty_<?php echo $row['product_id']; ?>" name="product_qty_<?php echo $row['product_id']; ?>" value="<?php echo $qty; ?>" required="" >
                </div>
              </div>
              <div class="col-md-2">
                <div class="mb-3">
                  <input type="text" class="form-control sub-total sub-total-control" id="product_amount_<?php echo $row['product_id']; ?>" name="product_amount_<?php echo $row['product_id']; ?>" value="<?php echo $amount; ?>" readonly>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>

          <div>  
            <div class="row align-items-end mb-1 custom-product-label" style="display:none">
              <div class="col-md-5">
                  <label class="mb-1">Product Description</label>
              </div>
              <div class="col-md-1">
                  <label class="mb-1">Quantity</label>
              </div>
              <div class="col-md-2">
                  <label class="mb-1">Unite Price</label>
              </div>
              <div class="col-md-2">
                  <label class="mb-1">Amount</label>
              </div>
              <div class="col-md-2">
                  <label class="mb-1">Actions</label>
              </div>
            </div>
            <div class="custom-product-field">
              <?php 
               foreach($quote['custom_product_data'] as $key=>$row) { 
              ?>
              <div class="row" id="row-1">
                <div class="col-md-5">
                  <div class="mb-3">
                    <textarea class="form-control" rows="1" id="description-<?php echo $key+1; ?>" name="descriptionCus-<?php echo $key+1; ?>"><?php echo $row['product']; ?></textarea>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="mb-3">
                    <input type="text" class="form-control quantityCus" id="quantityCus-<?php echo $key+1; ?>" name="quantityCus-<?php echo $key+1; ?>" value="<?php echo $row['qty']; ?>" required="">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="mb-3">
                    <input type="text" class="form-control unit_priceCus" id="unit_price-Cus-<?php echo $key+1; ?>" name="unit_priceCus-<?php echo $key+1; ?>" value="<?php echo $row['unit_price']; ?>" required="">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="mb-3">
                    <input type="text" class="form-control amountCus sub-total sub-total-control" id="amount-Cus-<?php echo $key+1; ?>" name="amountCus-<?php echo $key+1; ?>" value="<?php echo $row['amount']; ?>" readonly="">
                  </div>
                </div>
                <div class="col-md-2">
                  <button type="button" class="btn btn-danger btn-remove-row">Remove</button>
                </div>
              </div>
              <?php } ?>
            </div>
            <button type="button" class="btn btn-info waves-effect waves-light mb-4 btn-add-custom-product">
              <div class="d-flex align-items-center">
                Custom product
                <i class="ti ti-circle-plus ms-1 fs-5"></i>
              </div>
            </button>
          </div>
          <input class="annotation-row-count" value="<?php echo count($quote['edited_image']); ?>" type="hidden">
          <?php
          $i = 1;
          foreach ($quote['edited_image'] as $item) { 
          ?>
          <div class="row align-items-end mb-2 main-row">
            <div class="col-md-2">
                <label class="mb-1">Annotation Image</label>
                <div class="custom-file">
                    <input type="file" class="form-control" id="annotation_image" name="annotation_image">
                </div>
            </div>
            <div class="col-md-1">
                <!-- Edit button -->
                <button class="btn btn-primary waves-effect waves-light btn-edit" type="button">
                    <i class="ti ti-pencil fs-5"></i>
                </button>
            </div>
            <div class="col-md-2">
                <label class="mb-1">Identify the photo</label>
                <input type="text" class="form-control" id="identify_photo<?php echo ($i > 1) ? '_' . $i : ''; ?>" name="identify_photo<?php echo ($i > 1) ? '_' . $i : ''; ?>" value="<?php echo ucwords($item['common_fields']['identify_image_name']); ?>" required="">
            </div>
            <div class="col-md-2">
                <label class="mb-1">Color</label>
                <select class="form-control form-select" id="color<?php echo ($i > 1) ? '_' . $i : ''; ?>" name="color<?php echo ($i > 1) ? '_' . $i : ''; ?>" required>
                  <option>--Select color--</option>
                  <option <?php echo ($item['common_fields']['color'] == 'Red') ? 'selected': '';?>>Red</option>
                  <option <?php echo ($item['common_fields']['color'] == 'Blue') ? 'selected': '';?>>Blue</option>
                  <option <?php echo ($item['common_fields']['color'] == 'Yellow') ? 'selected': '';?>>Yellow</option>
                </select>
            </div>
            <div class="col-md-1">
                <label class="mb-1">Number of Peaks</label>
                <input type="text" class="form-control" id="peaks<?php echo ($i > 1) ? '_' . $i : ''; ?>" name="peaks<?php echo ($i > 1) ? '_' . $i : ''; ?>" required="" value="<?php echo $item['common_fields']['no_peaks']; ?>">
            </div>
            <div class="col-md-1">
                <label class="mb-1">Number of Jumper</label>
                <input type="text" class="form-control" id="jumper<?php echo ($i > 1) ? '_' . $i : ''; ?>" name="jumper<?php echo ($i > 1) ? '_' . $i : ''; ?>" required="" value="<?php echo $item['common_fields']['no_jumper']; ?>">
            </div>
            <div class="col-md-1">
                <label class="mb-1">Total</label>
                <input type="number" class="form-control" id="sumInputBox<?php echo ($i > 1) ? '_' . $i : ''; ?>" name="sumInputBox<?php echo ($i > 1) ? '_' . $i : ''; ?>" value="<?php echo $item['common_fields']['total_numerical_box']; ?>">
            </div>
            <div class="col-md-1">
                <label class="mb-1">Unit price</label>
                <input type="text" class="form-control" id="unite_price<?php echo ($i > 1) ? '_' . $i : ''; ?>" name="unite_price<?php echo ($i > 1) ? '_' . $i : ''; ?>" required="" value="<?php echo $item['common_fields']['unit_price']; ?>">
            </div>
            
            <div class="col-md-1">
                <label class="mb-1">Amount</label>
                <input type="text" class="form-control sub-total sub-total-feet" id="amount<?php echo ($i > 1) ? '_' . $i : ''; ?>" name="amount<?php echo ($i > 1) ? '_' . $i : ''; ?>" required="" value="<?php echo $item['common_fields']['total_amount']; ?>">
            </div>
            <div class="d-block mt-4">
            <?php
            foreach($item['details'] as $row){
            ?>
              <?php 
              if($row['type'] == 'drawnLines'){
              ?>
              <div id="drawnLinesPreviewContainer" style="width:20%;display: inline-block;">
                  <img id="drawnLinesPreview_<?php echo $i; ?>" src="<?php echo $row['image_url']; ?>" class="preview-image" alt="Drawn Lines Preview" style="max-width: 100%;" name="drawnLinesPreview">
              </div>
              <?php }else{ ?>
              <div id="fullyEditedPreviewContainer" style="width:20%;display: inline-block;position: relative;">
                  <img id="fullyEditedPreview_<?php echo $i; ?>" src="<?php echo $row['image_url']; ?>" class="preview-image" alt="Fully Edited Preview" style="max-width: 100%;" name="fullyEditedPreview">

                  <button class="btn btn-primary waves-effect waves-light btn-edit" type="button" data-imageedit="edit" style="position: absolute;bottom: 10px;right: 10px;">
                    <i class="ti ti-pencil fs-5"></i>
                  </button>
              </div>
              <?php } ?>
            
            <?php } ?>
            </div>
          </div>
          <?php $i++; } ?>
          
        <div>
          <button type="button" class="btn btn-info waves-effect waves-light mb-4 btn-add-more">
            <div class="d-flex align-items-center">
              Add More
              <i class="ti ti-circle-plus ms-1 fs-5"></i>
            </div>
          </button>
        </div>
        <div class="row mb-2">
            <div class="col-md-5">
                <label class="mb-1">Notes</label>
                <div class="custom-file">
                  <textarea class="form-control" rows="4" name="notes" required><?php echo $quote['notes']; ?></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <label class="mb-1">Customer Visible</label>
                <div class="form-check">
                  <input type="radio" id="customRadio11" name="visible" class="form-check-input" value="yes" <?php echo ($quote['customer_visible'] == 'yes') ? 'checked' : ''; ?>>
                  <label class="form-check-label" for="customRadio11">Yes</label>
                </div>
                <div class="form-check">
                  <input type="radio" id="customRadio22" name="visible" class="form-check-input" value="no" <?php echo ($quote['customer_visible'] == 'no') ? 'checked' : ''; ?>>
                  <label class="form-check-label" for="customRadio22">No</label>
                </div>
            </div>
          </div>
        <div class="form-actions">
        <p style="font-weight: 300;margin-bottom: 5px;text-align:end">Enter Discount (%) : <input class="form-control" type="number" name="discountInput" id="discountInput" min="0" step="1"  style="display: inline-block;width: 10%;" value="<?php echo $quote['discount_percentage']; ?>"></p>
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
            <div class="main-total-div">
              <p style="font-weight: 300;margin-bottom: 8px;">Total Controller price : $ <span id="total-controller"><?php echo $quote['total_controller_price']; ?></span></p>
              <p style="font-weight: 300;margin-bottom: 5px;">Total Linear Feet Price : $ <span id="total-feet"><?php echo $quote['total_feet_price']; ?></span></p>
              <hr>
              <p>Main Total : $ <span id="total"><?php echo $quote['main_total']; ?></span></p>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
 </section>
</div>
<div id="editImageModal" class="modal fade">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            
            <div class="modal-header d-flex align-items-center">
            <h4 class="modal-title" id="myLargeModalLabel">
            Edit Image
            </h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
                <div class="image-edit-block">
                  <div class="row">
                    <div class="col-md-2">
                      <label for="color-picker">Choose line color:</label><br>
                      <input type="color" id="color-picker" value="#000000">
                    </div>
                    <div class="col-md-2">
                      <label for="line-weight">Line weight:</label><br>
                      <input type="range" id="line-weight" min="1" max="10" value="3">
                    </div>
                    <div class="col-md-5 d-block">
                      <label for="text-input" class="d-inline">Enter text:</label>
                      <input type="text" id="text-input" class="form-control mb-2 d-inline" style="width:20%">
                      <button type="button" class="btn btn-primary d-inline"  id="add-text-btn">Add Text </button>
                    </div>
                    <div class="col-md-3" style="text-align: right;">
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary" id="undo-btn">
                            <i class="ti ti-rotate-clockwise fs-5"></i>
                        </button>
                        <button type="button" class="btn btn-primary" id="redo-btn">
                            <i class="ti ti-reload fs-5"></i>
                        </button>
                      </div>
                      <button type="button" class="btn btn-primary" id="save-btn">Save </button>
                    </div>
                  </div>
                  <div id="image-container"><img id="editImagePreview" src="" alt="Image Preview" style="max-width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header d-flex align-items-center">
        <h4 class="modal-title" id="myLargeModalLabel">
        Image Preview
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <img class="img-fluid" id="fullImage" src="" alt="Full Image">
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
  <script src="<?php echo base_url(); ?>assets/libs/jquery.repeater/jquery.repeater.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/plugins/repeater-init.js"></script>
  <script>
    $('.product-qty').on('input', function() {
      // Get the corresponding product amount input field
      $(this).val($(this).val().replace(/[^0-9]/g, ''));
      var productId = $(this).attr('id').split('_').pop();
      
      var amountInput = $('#product_amount_' + productId);
      var productInput = $('#product_' + productId);
      // Get the amount from data-amount attribute
      var amountPerItem = parseFloat(productInput.data('amount'));
      // Calculate the total amount based on quantity
      var quantity = parseInt($(this).val());
      var totalAmount = amountPerItem * quantity;

      // Update the product amount input field
      amountInput.val(isNaN(totalAmount) ? '' : totalAmount.toFixed(2));
      updateMainTotal();
      updateTotalcontroller();
      calculateDiscountedTotal();
    });
    function updateMainTotal() {
        var subTotal = 0;
        // Loop through each sub-total input and sum up their values
        $('.sub-total').each(function() {
            subTotal += parseFloat($(this).val()) || 0; // Ensure to parse float and handle NaN
        });
        // Update the main total element with the calculated total
        $('#total').text(subTotal.toFixed(2)); // Format total to two decimal places
        $('#total-input').val(subTotal.toFixed(2));
    }
    function updateTotalfeet() {
        var subTotal = 0;
        // Loop through each sub-total input and sum up their values
        $('.sub-total-feet').each(function() {
            subTotal += parseFloat($(this).val()) || 0; // Ensure to parse float and handle NaN
        });
        // Update the main total element with the calculated total
        $('#total-feet').text(subTotal.toFixed(2)); // Format total to two decimal places
        $('#total-feet-input').val(subTotal.toFixed(2));
    }
    function updateTotalcontroller() {
        var subTotal = 0;
        // Loop through each sub-total input and sum up their values
        $('.sub-total-control').each(function() {
            subTotal += parseFloat($(this).val()) || 0; // Ensure to parse float and handle NaN
        });
        // Update the main total element with the calculated total
        $('#total-controller').text(subTotal.toFixed(2));
        $('#total-controller-input').val(subTotal.toFixed(2)); // Format total to two decimal places
    }
    $(document).ready(function() {
      //var rowCount = 1; // Initialize row count
      var rowCount = $('.annotation-row-count').val();
      // Add more button click event
      $('.btn-add-more').click(function() {
        var clone = $('.main-row').first().clone(); // Clone the main row
        rowCount++; // Increment row count
        
        // Remove label from cloned row
        //clone.find('label').remove();
        
        // Set unique field names and IDs
        clone.find('input, select').each(function() {
          var fieldName = $(this).attr('name');
          $(this).attr('name', fieldName + '_' + rowCount);
          $(this).attr('id', fieldName + '_' + rowCount);
          $(this).val(''); // Clear input values
        });
        
        clone.find('.preview-image[name="drawnLinesPreview"]').attr({
            'id': 'drawnLinesPreview_' + rowCount,
            'name': 'drawnLinesPreview_' + rowCount,
            'src':''
        });
        clone.find('.preview-image[name="fullyEditedPreview"]').attr({
            'id': 'fullyEditedPreview_' + rowCount,
            'name': 'fullyEditedPreview_' + rowCount,
            'src':''
        });
        clone.find('#drawnLinesPreviewContainer').hide();
        clone.find('#fullyEditedPreviewContainer').hide();
        // Append the cloned row after the last main row
        $('.main-row:last').after(clone);
      });
    });
    $(document).on('click', '.btn-edit', function() {
        var mainRow = $(this).closest('.main-row');
        
        if (mainRow.length > 0) {
            var currentRowCount = $('.main-row').index(mainRow) + 1;
            var type = $(this).data('imageedit');
            openEditPopup(currentRowCount,type);
        } else {
            console.log('Error: Main row not found.');
        }
    });
    
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

     var rowCountCus = 0;
    $(".btn-add-custom-product").click(function(){
        rowCountCus++;
        var newRow = 
        '<div class="row" id="row-' + rowCountCus + '">' +
          '<div class="col-md-5">' +
              '<div class="mb-3">' +
                  '<textarea class="form-control" rows="1"  id="description-' + rowCountCus + '" name="descriptionCus-' + rowCountCus + '"></textarea>' +
              '</div>' +
          '</div>' +
          '<div class="col-md-1">' +
              '<div class="mb-3">' +
                  '<input type="text" class="form-control quantityCus"  id="quantityCus-' + rowCountCus + '" name="quantityCus-' + rowCountCus + '"  required="">' +
              '</div>' +
          '</div>' +
          '<div class="col-md-2">' +
              '<div class="mb-3">' +
                  '<input type="text" class="form-control unit_priceCus"  id="unit_price-Cus-' + rowCountCus + '"  name="unit_priceCus-' + rowCountCus + '" required="">' +
              '</div>' +
          '</div>' +
          '<div class="col-md-2">' +
              '<div class="mb-3">' +
                  '<input type="text" class="form-control amountCus sub-total sub-total-control" id="amount-Cus-' + rowCountCus + '" name="amountCus-' + rowCountCus + '" readonly>' +
              '</div>' +
          '</div>' +
          '<div class="col-md-2">' +
                  '<button type="button" class="btn btn-danger btn-remove-row">Remove</button>' +
          '</div>' +
      '</div>';
     // $(".btn-add-custom-product").before(newRow);
      $(".custom-product-field").append(newRow);
      toggleLabelVisibility();
    });
    $(document).on("click", ".btn-remove-row", function(){
        $(this).closest('.row').remove();
        toggleLabelVisibility();
        updateMainTotal();
        updateTotalcontroller();
    });
    function toggleLabelVisibility() {
        if ($('.custom-product-field .row').length >= 1) {
            $('.custom-product-label').show();
        } else {
            $('.custom-product-label').hide();
        }
    }
    $(document).on("input", ".quantityCus, .unit_priceCus", function(){
        $(this).val($(this).val().replace(/[^0-9]/g, ''));
        var row = $(this).closest('.row');
        calculateAmountCustomproducts(row);
        calculateDiscountedTotal();
    });
    function calculateAmountCustomproducts(row) {
        var quantity = parseFloat(row.find('.quantityCus').val());
        var unitPrice = parseFloat(row.find('.unit_priceCus').val());
        var total = quantity * unitPrice;
        row.find('.amountCus').val(total.toFixed(2));
        updateMainTotal();
        updateTotalcontroller();
        calculateDiscountedTotal();
    }
    $("#discountInput").on('input', function(){
        calculateDiscountedTotal();
    });
    function calculateDiscountedTotal() {
        var controller = parseFloat($("#total-controller-input").val()) || 0; // Get the value of the controller input as a float
        var feet = parseFloat($("#total-feet-input").val()) || 0;
        var total = controller+feet; // Extract the numeric value
        var discountPercentage =  parseFloat($("#discountInput").val());// Get the discount percentage from the input field
        var discountedTotal = total - (total * (discountPercentage / 100)); // Calculate the discounted total
        console.log(discountedTotal);
        $('#total').text(discountedTotal.toFixed(2)); // Format total to two decimal places
        $('#total-input').val(discountedTotal.toFixed(2));
    };
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

    function openEditPopup(currentRowCount,type) {
      //alert(currentRowCount);
        // Open the modal
        if(type == 'edit')
        {
          $('#editImageModal').modal('show');
          $('#save-btn').attr('data-row-count', currentRowCount);
          
          var imageElement = document.getElementById('fullyEditedPreview_' + currentRowCount);
          var imageUrl = imageElement.src;
          $('#editImagePreview').attr('src', imageUrl);
          var img = new Image();
          img.onload = function() {
              originalImg = img;
              setupCanvas();
          };
          img.src = imageUrl;
        }
        else
        {
          $('#editImageModal').modal('show');
          $('#save-btn').attr('data-row-count', currentRowCount);

          var input = (currentRowCount == 1) ? document.getElementById('annotation_image') : document.getElementById('annotation_image_' + currentRowCount);
          // Get the file input element
        
          // Check if any file is selected
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              // Set up the reader onload function
              reader.onload = function(e) {
                  // Set the source of the image preview to the selected image
                  $('#editImagePreview').attr('src', e.target.result);
                  var imageUrl = e.target.result;
                  var img = new Image();
                  img.onload = function() {
                      originalImg = img;
                      setupCanvas();
                  };
                  img.src = imageUrl;
              }

              // Read the selected file as a data URL
              reader.readAsDataURL(input.files[0]);
          }
        }
        
    }



        var canvasStack = [];
        var redoStack = [];
        var isDrawing = false;
        var selectedTextBox = null;
        var startX, startY;
        var endX, endY;
        var originalImg, annotationCanvas;

        function setupCanvas() {
            var img = originalImg;
            $('#image-container').empty().append(img);
            var canvas = $('<canvas>').attr({id: 'canvas', width: img.width, height: img.height});
            var overlay = $('<div>').attr('id', 'annotation-overlay').append(canvas);
            $('#image-container').append(overlay);

            annotationCanvas = canvas[0];
            var ctx = annotationCanvas.getContext('2d');
            var color = $('#color-picker').val();
            var weight = $('#line-weight').val();

            canvas.on('mousedown', function(e){
                isDrawing = true;
                startX = e.offsetX;
                startY = e.offsetY;
            }).on('mouseup', function(e){
                if (isDrawing) {
                    endX = e.offsetX;
                    endY = e.offsetY;
                    ctx.beginPath();
                    ctx.moveTo(startX, startY);
                    ctx.lineTo(endX, endY);
                    ctx.strokeStyle = color;
                    ctx.lineWidth = weight;
                    ctx.stroke();
                    saveCanvas();
                }
                isDrawing = false;
            });

            $('#color-picker').on('input', function(){
                color = $(this).val();
            });

            $('#line-weight').on('input', function(){
                weight = $(this).val();
            });

            $('#add-text-btn').on('click', function(){
                var text = $('#text-input').val();
                if (text !== '') {
                    addText(text, startX, startY);
                }
            });
            
            $('#straight-line-btn').on('click', function(){
                isDrawing = false;
                $(this).toggleClass('active');
                canvas.off('mousedown mouseup');
                if ($(this).hasClass('active')) {
                    canvas.on('mousedown', function(e){
                        isDrawing = true;
                        startX = e.offsetX;
                        startY = e.offsetY;
                    }).on('mouseup', function(e){
                        if (isDrawing) {
                            endX = e.offsetX;
                            endY = e.offsetY;
                            ctx.beginPath();
                            ctx.moveTo(startX, startY);
                            ctx.lineTo(endX, endY);
                            ctx.strokeStyle = color;
                            ctx.lineWidth = weight;
                            ctx.stroke();
                            saveCanvas();
                        }
                        isDrawing = false;
                    });
                }
            });

            $('#undo-btn').on('click', function(){
                undoAction();
            });

            $('#redo-btn').on('click', function(){
                redoAction();
            });

            $('#save-btn').on('click', function(){
                var rowCount = $(this).attr('data-row-count');
                saveImage(rowCount);
            });

            /*function addText(text, x, y) {
                var textBox = $('<div>').addClass('text-box').text(text).css({ left: x, top: y });
                overlay.append(textBox);
                textBox.on('mousedown', function(e){
                    selectedTextBox = $(this);
                    offsetX = e.offsetX;
                    offsetY = e.offsetY;
                }).on('mouseup', function(){
                    selectedTextBox = null;
                });
            }*/
            function addText(text, x, y) {
            // Create the text box div
                var textBox = $('<div>').addClass('text-box').css({ left: x, top: y });
                // Add the text and remove icon to the text box
                var textContent = $('<span>').text(text);
                var removeIcon = $('<span>').addClass('remove-icon').html('&times;').hide(); // Initially hide the remove icon
                textBox.append(textContent).append(removeIcon);
                // Append the text box to the overlay
                overlay.append(textBox);

                // Event handlers for dragging
                textBox.on('mousedown', function(e){
                    selectedTextBox = $(this);
                    offsetX = e.offsetX;
                    offsetY = e.offsetY;
                }).on('mouseup', function(){
                    selectedTextBox = null;
                });

                // Event handler to show the remove icon on double-click
                textBox.on('dblclick', function(){
                    removeIcon.toggle(); // Toggle the visibility of the remove icon
                });

                // Event handler for the remove icon
                removeIcon.on('click', function(){
                    textBox.remove();
                });
            }
            overlay.on('mousemove', function(e){
                if(selectedTextBox !== null) {
                    var x = e.pageX - $(this).offset().left - offsetX;
                    var y = e.pageY - $(this).offset().top - offsetY;
                    selectedTextBox.css({ left: x, top: y });
                }
            });
        }

        function saveCanvas() {
            var ctx = annotationCanvas.getContext('2d');
            var imageData = ctx.getImageData(0, 0, annotationCanvas.width, annotationCanvas.height);
            canvasStack.push(imageData);
            redoStack = [];
        }

        function undoAction() {
            if (canvasStack.length > 1) {
                redoStack.push(canvasStack.pop());
                redrawCanvas(canvasStack[canvasStack.length - 1]);
            }
        }

        function redoAction() {
            if (redoStack.length > 0) {
                canvasStack.push(redoStack.pop());
                redrawCanvas(canvasStack[canvasStack.length - 1]);
            }
        }

        function redrawCanvas(imageData) {
            var ctx = annotationCanvas.getContext('2d');
            ctx.putImageData(imageData, 0, 0);
        }


        function saveImage(rowCount) {
         
          $('.remove-icon').remove();
            // Create a canvas for drawn lines
            var drawnLinesCanvas = document.createElement('canvas');
            drawnLinesCanvas.width = originalImg.width;
            drawnLinesCanvas.height = originalImg.height;
            var drawnLinesCtx = drawnLinesCanvas.getContext('2d');
           /*  drawnLinesCtx.drawImage(originalImg, 0, 0);
            drawnLinesCtx.drawImage(annotationCanvas, 0, 0); */
            // Draw the original image onto the merged canvas
            drawnLinesCtx.drawImage(originalImg, 0, 0, originalImg.width, originalImg.height);
          
          // Draw the annotation canvas onto the merged canvas
          drawnLinesCtx.drawImage(annotationCanvas, 0, 0, annotationCanvas.width, annotationCanvas.height);

            // Convert drawn lines canvas to a data URL and display it in the drawn lines preview
            var drawnLinesImageUrl = drawnLinesCanvas.toDataURL('image/png');
            var drawnLinesPreviewId = '#drawnLinesPreview_' + rowCount;
            $(drawnLinesPreviewId).attr('src', drawnLinesImageUrl);
            $('#drawnLinesPreviewContainer').css('display', 'inline-block');
            //$('#drawnLinesPreviewContainer').show();
            $(drawnLinesPreviewId).parent().show();
            // Create a canvas for the fully edited image
            var fullyEditedCanvas = document.createElement('canvas');
            fullyEditedCanvas.width = originalImg.width;
            fullyEditedCanvas.height = originalImg.height;
            var fullyEditedCtx = fullyEditedCanvas.getContext('2d');
            //fullyEditedCtx.drawImage(originalImg, 0, 0);
            
            // Draw annotation canvas onto the fully edited canvas
            //fullyEditedCtx.drawImage(annotationCanvas, 0, 0);

            fullyEditedCtx.drawImage(originalImg, 0, 0, originalImg.width, originalImg.height);
          
          // Draw the annotation canvas onto the merged canvas
          fullyEditedCtx.drawImage(annotationCanvas, 0, 0, annotationCanvas.width, annotationCanvas.height);

            // Draw text boxes onto the fully edited canvas with their respective CSS styles
            var sum = 0;
            $('.text-box').each(function() {
                var $textBox = $(this);
                var text = $textBox.text();
                $textBox.find('.remove-icon').remove();
                var x = parseInt($textBox.css('left'), 10);
                var y = parseInt($textBox.css('top'), 10);
                var width = $textBox.outerWidth();
                var height = $textBox.outerHeight();
                
                // Draw background color
                var backgroundColor = $textBox.css('background-color');
                fullyEditedCtx.fillStyle = backgroundColor;
                fullyEditedCtx.fillRect(x, y, width, height);
                
                // Apply text box CSS styles to the drawn text
                fullyEditedCtx.font = $textBox.css('font');
                fullyEditedCtx.fillStyle = $textBox.css('color');
                fullyEditedCtx.textAlign = 'center';
                fullyEditedCtx.textBaseline = 'middle';
                
                // Calculate text position for center alignment
                var textX = x + width / 2;
                var textY = y + height / 2;
                
                fullyEditedCtx.fillText(text, textX, textY);

                var text_value = parseInt($textBox.text()) || 0; // Parse the text as an integer, default to 0 if not a valid number
                sum += text_value; // Accumulate the sum
            });
            var sumInputBox = (rowCount == 1) ? '#sumInputBox' : '#sumInputBox_' + rowCount;
            $(sumInputBox).val(sum);

            // Convert fully edited canvas to a data URL and display it in the fully edited image preview
            var fullyEditedImageUrl = fullyEditedCanvas.toDataURL('image/png');
            var fullyEditedPreview = '#fullyEditedPreview_' + rowCount;
            $(fullyEditedPreview).attr('src', fullyEditedImageUrl);
            $('#fullyEditedPreviewContainer').css('display', 'inline-block');
            //$('#fullyEditedPreviewContainer').show();
            $(fullyEditedPreview).parent().show();
            $('#editImageModal').modal('hide');
        }


        var images = document.getElementsByClassName('preview-image');
        var modalImg = document.getElementById('fullImage');

        // Loop through all images and add click event listener
        for (var i = 0; i < images.length; i++) {
            images[i].addEventListener('click', function() {
                var imageUrl = this.src;
                $('#fullImage').attr('src', imageUrl); // Set the source of the modal image to the clicked image's source
                $('#imageModal').modal('show'); // Display the modal using Bootstrap's modal method
            });
        }

        function calculateAmount(sumInputBox, unitePrice, amountInput) {
            var sum = parseFloat(sumInputBox.val());
            var price = parseFloat(unitePrice.val());
            var amount = sum * price;
            amountInput.val(amount.toFixed(2)); // Assuming you want 2 decimal places
        }

        // Attach input event listener to dynamically created unite_price inputs
        $(document).on('input', 'input[name^="unite_price"]', function() {
            var row = $(this).closest('.main-row');
            var sumInputBox = row.find('input[name^="sumInputBox"]');
            var amountInput = row.find('input[name^="amount"]');
            calculateAmount(sumInputBox, $(this), amountInput);
            updateMainTotal();
            updateTotalfeet();
            calculateDiscountedTotal();
        });

        function attachEventListeners() {
        $('.main-row').each(function(index) {
              var sumInputBox = $(this).find('input[name^="sumInputBox"]');
              var unitePrice = $(this).find('input[name^="unite_price"]');
              var amountInput = $(this).find('input[name^="amount"]');
              
              // Trigger calculation on input
              sumInputBox.on('input', function() {
                  calculateAmount($(this), unitePrice, amountInput);
                  updateMainTotal();
                  calculateDiscountedTotal();
                  updateTotalfeet();
              });
          });
      }
      // Call the function to attach initial event listeners
      attachEventListeners();
  </script>