
<div class="container-fluid">
  <div class="card bg-light-info shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3">
      <div class="row align-items-center">
        <div class="col-9">
          <h4 class="fw-semibold mb-8">List User</h4>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a class="text-muted " href="<?php echo base_url(); ?>Users">Users</a>
              </li>
              <li class="breadcrumb-item" aria-current="page">List</li>
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
  <div class="card w-100 position-relative overflow-hidden">
    <div class="card-body p-4">
      <div class="table-responsive rounded-2 mb-4">
        <table class="table border text-nowrap customize-table mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th><h6 class="fs-4 fw-semibold mb-0">User</h6></th>
              <th><h6 class="fs-4 fw-semibold mb-0">Email</h6></th>
              <th><h6 class="fs-4 fw-semibold mb-0">Role</h6></th>
              <th><h6 class="fs-4 fw-semibold mb-0">Action</h6></th>
            </tr>
          </thead>
          <tbody>
          <?php 
          $i=1;
          $roleNames = [
              1 => 'Admin',
              2 => 'Installer',
              3 => 'Operations',
              4 => 'Sales'
          ];
          foreach($users as $row){
            $role = isset($roleNames[$row['role']]) ? $roleNames[$row['role']] : '';
            ?>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="<?php echo base_url(); ?>assets/images/profile/user-<?php echo $i;?>.jpg" class="rounded-circle" width="40" height="40" />
                  <div class="ms-3">
                    <h6 class="fs-4 fw-semibold mb-0"><?php echo $row['fname'].' '.$row['lname']; ?></h6>
                    <!-- <span class="fw-normal">Web Designer</span> -->
                  </div>
                </div>
              </td>
              <td><p class="mb-0 fw-normal fs-4"><?php echo $row['email']; ?></p></td>
              <td><p class="mb-0 fw-normal fs-4"><?php echo $role; ?></p></td>
              <td>
                <ul class="list-unstyled mb-0 d-flex align-items-center">
                  <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                    <a class="d-block text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5" href="<?php echo base_url(); ?>Users/edit_user/<?php echo $row['user_id']; ?>">
                      <i class="ti ti-pencil"></i>
                    </a>
                  </li>
                  <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                    <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5 delete_user" data-userid='<?php echo $row['user_id']; ?>'>
                      <i class="ti ti-trash"></i>
                    </a>
                  </li>
                </ul>
              </td>
            </tr>
            <?php
            if($i<10)
            {
              $i++;
            }
             } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
    