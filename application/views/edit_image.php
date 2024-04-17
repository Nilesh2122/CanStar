
<style>
    #image-container {
        position: relative;
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
    img{
        width: 100%;
    }
</style>
<div class="container-fluid">
  <div class="card bg-light-info shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3">
      <div class="row align-items-center">
        <div class="col-9">
          <h4 class="fw-semibold mb-8">Edit Image</h4>
        </div>
      </div>
    </div>
  </div>
  <section>

  <div class="card p-3">
    <div class="image-edit-block">
      <div class="row">
        <div class="col-md-2">
          <label for="color-picker">Choose line color:</label><br>
          <input type="color" id="color-picker" value="#000000">
        </div>
        <div class="col-md-2">
          <label for="line-weight">Line weight:</label><br>
          <input type="range" id="line-weight" min="1" max="10" value="2">
        </div>
        <div class="col-md-3">
          <label for="text-input">Enter text:</label>
          <input type="text" id="text-input" class="form-control mb-2">
          <!-- <button id="add-text-btn">Add Text</button> -->
          <button type="button" class="btn btn-primary"  id="add-text-btn">Add Text </button>
        </div>
        <div class="col-md-5" style="text-align: right;">
          <div class="btn-group">
            <button type="button" class="btn btn-primary" id="undo-btn">
                <i class="ti ti-rotate-clockwise fs-5"></i>
            </button>
            <button type="button" class="btn btn-primary" id="redo-btn">
                <i class="ti ti-reload fs-5"></i>
            </button>
          </div>
          <!-- <button id="undo-btn">Undo</button>
          <button id="redo-btn">Redo</button> -->
          <button type="button" class="btn btn-primary" id="save-btn">Save </button>
          <!-- <button id="save-btn" class="btn btn-outline-primary font-medium rounded-pill px-4 submit-btn" >Save</button> -->
        </div>
      </div>
      
      
     
      <!-- <button id="straight-line-btn">Straight Line</button> -->
      
      <input type="file" id="file-input" class="form-control mt-4">
      <div id="image-container"></div>
    </div>
 
  </div>
 </section>
</div>
<script>
$(document).ready(function(){
    var canvasStack = [];
    var redoStack = [];
    var isDrawing = false;
    var selectedTextBox = null;
    var startX, startY;
    var endX, endY;
    var originalImg, annotationCanvas;

    $('#file-input').on('change', function(e){
        var file = e.target.files[0];
        if(file){
            var reader = new FileReader();
            reader.onload = function(e){
                var imageUrl = e.target.result;
                var img = new Image();
                img.onload = function() {
                    originalImg = img;
                    setupCanvas();
                };
                img.src = imageUrl;
            };
            reader.readAsDataURL(file);
        }
    });

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
            saveImage();
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

   /*  function saveImage() {
        var mergedCanvas = document.createElement('canvas');
        mergedCanvas.width = originalImg.width;
        mergedCanvas.height = originalImg.height;
        var mergedCtx = mergedCanvas.getContext('2d');
        mergedCtx.drawImage(originalImg, 0, 0, originalImg.width, originalImg.height);
        mergedCtx.drawImage(annotationCanvas, 0, 0, annotationCanvas.width, annotationCanvas.height);
        var dataURL = mergedCanvas.toDataURL('image/png');
        var link = document.createElement('a');
        link.href = dataURL;
        link.download = 'annotated_image.png';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    } */

    function saveImage() {
    var mergedCanvas = document.createElement('canvas');
    mergedCanvas.width = originalImg.width;
    mergedCanvas.height = originalImg.height;
    var mergedCtx = mergedCanvas.getContext('2d');
    
    // Draw the original image onto the merged canvas
    mergedCtx.drawImage(originalImg, 0, 0, originalImg.width, originalImg.height);
    
    // Draw the annotation canvas onto the merged canvas
    mergedCtx.drawImage(annotationCanvas, 0, 0, annotationCanvas.width, annotationCanvas.height);
    
    // Draw text boxes onto the merged canvas with their respective CSS styles
    $('.text-box').each(function() {
        var $textBox = $(this);
        var text = $textBox.text();
        var x = parseInt($textBox.css('left'), 10);
        var y = parseInt($textBox.css('top'), 10);
        var width = $textBox.outerWidth();
        var height = $textBox.outerHeight();
        
        // Draw background color
        var backgroundColor = $textBox.css('background-color');
        mergedCtx.fillStyle = backgroundColor;
        mergedCtx.fillRect(x, y, width, height);
        
        // Apply text box CSS styles to the drawn text
        mergedCtx.font = $textBox.css('font');
        mergedCtx.fillStyle = $textBox.css('color');
        mergedCtx.textAlign = 'center';
        mergedCtx.textBaseline = 'middle';
        
        // Calculate text position for center alignment
        var textX = x + width / 2;
        var textY = y + height / 2;
        
        mergedCtx.fillText(text, textX, textY);
    });

    // Convert the merged canvas to a data URL and download it
    var dataURL = mergedCanvas.toDataURL('image/png');
    var link = document.createElement('a');
    link.href = dataURL;
    link.download = 'annotated_image.png';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

});
</script>