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
</style>
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
            <div class="col-md-6 mb-3" id="plug-yes">
              <div class="custom-file">
                <input type="file" class="form-control" id="customFile" name="plug-image">
              </div>
            </div>

            <div class="col-md-6" id="plug-no" style="display:none">
              <div class="mb-3">
                <label class="mb-1">Notes</label>
                <textarea class="form-control" rows="2" name="plug-notes"></textarea>
              </div>
            </div>

            <div class="col-md-6" id="controller-yes">
              <div class="custom-file">
                <input type="file" class="form-control" id="customFile" name="controller-image">
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

          <div class="row align-items-end mb-2 main-row">
            <div class="col-md-3">
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
                <input type="text" class="form-control" id="identify_photo" name="identify_photo" required="">
            </div>
            <div class="col-md-1">
                <label class="mb-1">Total</label>
                <input type="text" class="form-control" id="sumInputBox" name="sumInputBox" readonly>
            </div>
            <div class="col-md-1">
                <label class="mb-1">Number of Peaks</label>
                <input type="text" class="form-control" id="peaks" name="peaks" required="">
            </div>
            <div class="col-md-1">
                <label class="mb-1">Number of Jumper</label>
                <input type="text" class="form-control" id="jumper" name="jumper" required="">
            </div>
            <div class="col-md-1">
                <label class="mb-1">Unit price</label>
                <input type="text" class="form-control" id="jumper" name="jumper" required="">
            </div>
            <div class="col-md-1">
                <label class="mb-1">Color</label>
                <select class="form-control form-select" id="color" name="color" required>
                  <option>--Select color--</option>
                  <option>Red</option>
                  <option>Blue</option>
                  <option>Yellow</option>
                </select>
            </div>
            <div class="col-md-1">
                <label class="mb-1">Amount</label>
                <input type="text" class="form-control" id="jumper" name="jumper" required="" value="1500">
            </div>
            <div class="d-block mt-4">
              <div id="drawnLinesPreviewContainer" style="display: none;width:20%">
                  <img id="drawnLinesPreview_1" src="" class="preview-image" alt="Drawn Lines Preview" style="max-width: 100%;" name="drawnLinesPreview">
              </div>

              <div id="fullyEditedPreviewContainer" style="display: none;width:20%">
                  <img id="fullyEditedPreview_1" src="" class="preview-image" alt="Fully Edited Preview" style="max-width: 100%;" name="fullyEditedPreview">
              </div>
            </div>
        </div>
        <div>
          <button type="button" class="btn btn-info waves-effect waves-light mb-4 btn-add-more">
            <div class="d-flex align-items-center">
              Add More
              <i class="ti ti-circle-plus ms-1 fs-5"></i>
            </div>
          </button>
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
    $(document).ready(function() {
      var rowCount = 1; // Initialize row count
      
      // Add more button click event
      $('.btn-add-more').click(function() {
        var clone = $('.main-row').first().clone(); // Clone the main row
        rowCount++; // Increment row count
        
        // Remove label from cloned row
        clone.find('label').remove();
        
        // Set unique field names and IDs
        clone.find('input').each(function() {
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
            openEditPopup(currentRowCount);
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

    function openEditPopup(currentRowCount) {
      //alert(currentRowCount);
        // Open the modal
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

            function addText(text, x, y) {
                var textBox = $('<div>').addClass('text-box').text(text).css({ left: x, top: y });
                overlay.append(textBox);
                textBox.on('mousedown', function(e){
                    selectedTextBox = $(this);
                    offsetX = e.offsetX;
                    offsetY = e.offsetY;
                }).on('mouseup', function(){
                    selectedTextBox = null;
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
  </script>