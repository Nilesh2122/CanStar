<link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/@claviska/jquery-minicolors/jquery.minicolors.css">
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
                <label class="control-label">First Name</label>
                <input type="text" id="firstName" class="form-control" name="fname" placeholder="Enter first name" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="control-label">Last Name</label>
                <input type="text" id="lastName" class="form-control" name="lname" placeholder="Enter last name" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="control-label">Phone number</label>
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
                <label>Street</label>
                <input type="text" class="form-control" id="street" name="street" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label>City</label>
                <input type="text" class="form-control" id="city" name="city" required>
              </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="mb-3">
                <label>State</label>
                <input type="text" class="form-control" id="state" name="state" required>
              </div>
            </div>
            <!--/span-->
          </div>
          <!--/row-->
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label>Post Code</label>
                <input type="text" class="form-control" id="post_code" name="post_code" required>
              </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="mb-3">
                <label>Country</label>
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

          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label>Color Swatches</label>
                <input type="text" id="hue-demo" class="form-control demo minicolors-input" data-control="hue" value="#ff6161" size="7" name="color" required>
              </div>
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

  <script src="<?php echo base_url(); ?>assets/libs/@claviska/jquery-minicolors/jquery.minicolors.min.js"></script>
  <script>
    $(".demo").each(function () {
      $(this).minicolors({
        control: $(this).attr("data-control") || "hue",
        defaultValue: $(this).attr("data-defaultValue") || "",
        format: $(this).attr("data-format") || "hex",
        keywords: $(this).attr("data-keywords") || "",
        inline: $(this).attr("data-inline") === "true",
        letterCase: $(this).attr("data-letterCase") || "lowercase",
        opacity: $(this).attr("data-opacity"),
        position: $(this).attr("data-position") || "bottom left",
        swatches: $(this).attr("data-swatches")
          ? $(this).attr("data-swatches").split("|")
          : [],
        change: function (value, opacity) {
          if (!value) return;
          if (opacity) value += ", " + opacity;
          if (typeof console === "object") {
            console.log(value);
          }
        },
        theme: "bootstrap",
      });
    });
  </script>