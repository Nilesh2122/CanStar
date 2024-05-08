<link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
<div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3">
      <div class="row align-items-center">
        <div class="col-9">
          <h4 class="fw-semibold mb-8">List Quote</h4>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-muted " href="<?php echo base_url(); ?>Quote">Quote</a></li>
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
  <section class="datatables">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config"
                                class="table border table-striped table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Salesman</th>
                                        <th>Customer Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Total</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($quote as $row){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['salesman'];?></td>
                                        <td><?php echo $row['fname'].' '.$row['lname']; ?></td>
                                        <td><?php echo $row['phone'];?></td>
                                        <td><?php echo $row['address'].'<br>'.$row['city'].', '.$row['state'];?></td>
                                        <td><?php echo $row['main_total'];?></td>
                                        <td><?php echo $row['created_at'];?></td>
                                        <td>
                                          <ul class="list-unstyled mb-0 d-flex align-items-center">
                                            <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View">
                                              <a class="d-block text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5" href="<?php echo base_url(); ?>Quote/view_quote/<?php echo $row['quote_id']; ?>">
                                                <i class="ti ti-eye fs-5"></i>
                                              </a>
                                            </li>
                                            
                                          </ul>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</div>
    <script src="<?php echo base_url(); ?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/datatable/datatable-basic.init.js"></script>

 