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
  <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <form action="" id="add_user" method="Post" enctype="multipart/form-data"> 
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="tb-fname" name="fname" placeholder="Enter Name here" required/>
                    <label for="tb-fname">First Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="tb-lname" name="lname" placeholder="Enter Name here" required/>
                    <label for="tb-lname">Last Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="tb-email" name="email" placeholder="name@example.com" required/>
                    <label for="tb-email">Email address</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="password" class="form-control" id="tb-pwd" name="password" placeholder="Password" required/>
                    <label for="tb-pwd">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                  <select class="form-control form-select" name="role" id="tb-role" required>
                        <option value="">--Select Role--</option>
                        <option value="2">Installer</option>
                        <option value="3">Operations</option>
                        <option value="4">Sales</option>
                      </select>
                    <label for="tb-role">Role</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-md-flex align-items-center mt-3">
                    <div class="ms-auto mt-3 mt-md-0">
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
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
 </section>
</div>
      