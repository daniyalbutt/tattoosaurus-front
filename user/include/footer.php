</div>
        </main>
        <!-- MODALS -->
        <!-- Reminder Modal -->
        <div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-secondary">
                        <h5 class="modal-title has-icon text-white"> New Reminder</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="ms-form-group">
                                <label>Remind me about</label>
                                <textarea class="form-control" name="reminder"></textarea>
                            </div>
                            <div class="ms-form-group">
                                <span class="ms-option-name fs-14">Repeat Daily</span>
                                <label class="ms-switch float-right">
                                <input type="checkbox">
                                <span class="ms-switch-slider round"></span>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ms-form-group">
                                        <input type="text" class="form-control datepicker" name="reminder-date" value="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ms-form-group">
                                        <select class="form-control" name="reminder-time">
                                            <option value="">12:00 pm</option>
                                            <option value="">1:00 pm</option>
                                            <option value="">2:00 pm</option>
                                            <option value="">3:00 pm</option>
                                            <option value="">4:00 pm</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Reminder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Notes Modal -->
        <div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-secondary">
                        <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="ms-form-group">
                                <label>Note Title</label>
                                <input type="text" class="form-control" name="note-title" value="">
                            </div>
                            <div class="ms-form-group">
                                <label>Note Description</label>
                                <textarea class="form-control" name="note-description"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Note</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <aside id="ms-request-send" class="side-nav fixed ms-aside-right ms-scrollable">
            <div class="ms-aside-body">
                <div class="booking-details">
                    <div class="booking-information">
                        <h3>Request Details</h3>
                    </div>
                    <div class="booking-images">
                        <img src="img/booking-img-1.png" alt="">
                        <img src="img/booking-img-1.png" alt="">
                        <img src="img/booking-img-1.png" alt="">
                    </div>
                    <div class="booking-box">
                        <h6>Tattoo Type</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                    <div class="booking-box">
                        <h6>Tattoo Color</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                    <div class="booking-box">
                        <h6>Tattoo Size</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                    <div class="booking-box">
                        <h6>Tattoo Style</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                    <div class="booking-box">
                        <h6>Additional Notes</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                </div>
            </div>
            <div class="booking-designer">
                <div class="designer-info">
                    <img src="img/design-user-img.png" alt="">
                    <h2>Ink by Nova <span>@inkbynova</span></h2>
                </div>
                <div class="designer-msg">
                    <a href="chat.php">
                        <img src="img/message-text.png" alt="">
                    </a>
                </div>
            </div>
        </aside>

        <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">
            <div class="ms-aside-body">
                <div class="booking-details">
                    <div class="booking-information">
                        <h3>Booked</h3>
                        <h3><a href="javascript:;" class="cancel-booking">Cancel Booking</a></h3>
                    </div>
                    <div class="booking-images">
                        <img src="img/booking-img-1.png" alt="">
                        <img src="img/booking-img-1.png" alt="">
                        <img src="img/booking-img-1.png" alt="">
                    </div>
                    <div class="booking-box">
                        <h6>Tattoo Type</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                    <div class="booking-box">
                        <h6>Tattoo Color</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                    <div class="booking-box">
                        <h6>Tattoo Size</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                    <div class="booking-box">
                        <h6>Tattoo Style</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                    <div class="booking-box">
                        <h6>Additional Notes</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                    <div class="booking-timing">
                        <ul>
                            <li>
                                <h6>Time</h6>
                                <p>Monday (9am to 12 pm )</p>
                            </li>
                            <li>
                                <h6>Hours</h6>
                                <p>1- 2</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="booking-cancel">
                    <a href="javascript:;" class="back-to-details"><img src="img/circle-left.png" alt=""></a>
                    <div class="booking-information">
                        <h3>Cancel Reason</h3>
                    </div>
                    <p>Select a reason for cancelling this booking.</p>
                    <form action="">
                        <div class="form-group">
                            <label for="">Select Reason</label>
                            <select class="form-control" id="exampleSelect">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="" id="" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-black">Submit</button>
                    </form>
                </div>
            </div>
            <div class="booking-designer">
                <div class="designer-info">
                    <img src="img/design-user-img.png" alt="">
                    <h2>Ink by Nova <span>@inkbynova</span></h2>
                </div>
                <div class="designer-msg">
                    <a href="chat.php">
                        <img src="img/message-text.png" alt="">
                    </a>
                </div>
            </div>
        </aside>
        <!-- SCRIPTS -->
        <!-- Global Required Scripts Start -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/perfect-scrollbar.js"> </script>
        <script src="js/jquery-ui.min.js"> </script>
        <!-- Global Required Scripts End -->
        <!-- Page Specific Scripts Start -->
        <script src="js/slick.min.js"> </script>
        <script src="js/moment.js"> </script>
        <script src="js/Chart.bundle.min.js"> </script>
        <!-- Page Specific Scripts Finish -->
        <!-- Mystic core JavaScript -->
        <script src="js/framework.js"></script>
        <!-- Settings -->
        <script src="js/settings.js"></script>
    </body>
</html>