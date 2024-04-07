
                <!-- --------------------------------------------------- -->
                <div class="container-fluid">
                    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
                        <div class="card-body px-4 py-3">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h4 class="fw-semibold mb-8">Calendar</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a class="text-muted " href="./index.html">Dashboard</a>
                                            </li>
                                            <li class="breadcrumb-item" aria-current="page">
                                                Calendar
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="col-3">
                                    <div class="text-center mb-n5">
                                        <img src="<?php echo base_url(); ?>assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="row gx-0">
                                <div class="col-lg-12">
                                    <div class="p-4 calender-sidebar app-calendar">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN MODAL -->
                    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="eventModalLabel">
                                        Add / Edit Event
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="">
                                                <label class="form-label">Event Title</label>
                                                <input id="event-title" type="text" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-4">
                                            <div><label class="form-label">Event Color</label></div>
                                            <div class="d-flex">
                                                <div class="n-chk">
                                                    <div class="form-check form-check-primary form-check-inline">
                                                        <input class="form-check-input" type="radio" name="event-level" value="Danger" id="modalDanger" />
                                                        <label class="form-check-label" for="modalDanger">Danger</label>
                                                    </div>
                                                </div>
                                                <div class="n-chk">
                                                    <div class="form-check form-check-warning form-check-inline">
                                                        <input class="form-check-input" type="radio" name="event-level" value="Success" id="modalSuccess" />
                                                        <label class="form-check-label" for="modalSuccess">Success</label>
                                                    </div>
                                                </div>
                                                <div class="n-chk">
                                                    <div class="form-check form-check-success form-check-inline">
                                                        <input class="form-check-input" type="radio" name="event-level" value="Primary" id="modalPrimary" />
                                                        <label class="form-check-label" for="modalPrimary">Primary</label>
                                                    </div>
                                                </div>
                                                <div class="n-chk">
                                                    <div class="form-check form-check-danger form-check-inline">
                                                        <input class="form-check-input" type="radio" name="event-level" value="Warning" id="modalWarning" />
                                                        <label class="form-check-label" for="modalWarning">Warning</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 d-none">
                                            <div class="">
                                                <label class="form-label">Enter Start Date</label>
                                                <input id="event-start-date" type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-12 d-none">
                                            <div class="">
                                                <label class="form-label">Enter End Date</label>
                                                <input id="event-end-date" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn btn-success btn-update-event" data-fc-event-public-id="">
                                        Update changes
                                    </button>
                                    <button type="button" class="btn btn-primary btn-add-event">
                                        Add Event
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MODAL -->
                </div>
            </div>
        </div>
       
        
        <script src="<?php echo base_url(); ?>assets/libs/fullcalendar/index.global.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/apps/calendar-init.js"></script>
    </body>
</html>
