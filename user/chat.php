<?php include 'include/header.php'; ?>
        <title>Chat</title>
    </head>
    <body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
        <?php include 'include/menu.php'; ?>
        <div class="row">
            <div class="col-xl-4 col-md-12">
                <div class="ms-panel ms-panel-fh">
                    <div class="ms-panel-body py-3 px-0">
                        <div class="ms-chat-container">
                            <div class="ms-chat-header px-3">
                                <form class="ms-form my-3" method="post">
                                    <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                                        <input type="search" class="ms-form-input w-100" name="search" placeholder="Search for People and Groups" value="">
                                        <i class="flaticon-search text-disabled"></i>
                                    </div>
                                </form>
                            </div>
                            <div class="ms-chat-body">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active show fade in" id="chats-2">
                                        <ul class="ms-scrollable ps ps--active-y">
                                            <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                                                <div class="ms-chat-status ms-status-away ms-has-new-msg ms-chat-img mr-3 align-self-center">
                                                    <span class="msg-count">3</span>
                                                    <img src="img/user-chat.png" class="ms-img-round" alt="people">
                                                </div>
                                                <div class="media-body ms-chat-user-info mt-1">
                                                    <h6>John Doe</h6>
                                                    <span class="ms-chat-time">2 Hours ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                </div>
                                            </li>
                                            <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                                                <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                                                    <img src="img/user-chat.png" class="ms-img-round" alt="people">
                                                </div>
                                                <div class="media-body ms-chat-user-info mt-1">
                                                    <h6>John Doe</h6>
                                                    <span class="ms-chat-time">3 Hours ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                </div>
                                            </li>
                                            <li class="ms-chat-user-container ms-open-chat selected ms-deletable p-3 media clearfix">
                                                <div class="ms-chat-status ms-status-offline ms-chat-img mr-3 align-self-center">
                                                    <img src="img/user-chat.png" class="ms-img-round" alt="people">
                                                </div>
                                                <div class="media-body ms-chat-user-info mt-1">
                                                    <h6>John Doe</h6>
                                                    <span class="ms-chat-time">12 Hours ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                </div>
                                            </li>
                                            <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                                                <div class="ms-chat-status ms-status-busy ms-chat-img mr-3 align-self-center">
                                                    <img src="img/user-chat.png" class="ms-img-round" alt="people">
                                                </div>
                                                <div class="media-body ms-chat-user-info mt-1">
                                                    <h6>John Doe</h6>
                                                    <span class="ms-chat-time">Yesterday</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                </div>
                                            </li>
                                            <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                                                <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                                                    <img src="img/user-chat.png" class="ms-img-round" alt="people">
                                                </div>
                                                <div class="media-body ms-chat-user-info mt-1">
                                                    <h6>John Doe</h6>
                                                    <span class="ms-chat-time">3 Days ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                </div>
                                            </li>
                                            <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                                                <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                                                    <img src="img/user-chat.png" class="ms-img-round" alt="people">
                                                </div>
                                                <div class="media-body ms-chat-user-info mt-1">
                                                    <h6>John Doe</h6>
                                                    <span class="ms-chat-time">3 Days ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                </div>
                                            </li>
                                            <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                                                <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                                                    <img src="img/user-chat.png" class="ms-img-round" alt="people">
                                                </div>
                                                <div class="media-body ms-chat-user-info mt-1">
                                                    <h6>John Doe</h6>
                                                    <span class="ms-chat-time">3 Days ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                </div>
                                            </li>
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                            </div>
                                            <div class="ps__rail-y" style="top: 0px; height: 847px; right: 0px;">
                                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 700px;"></div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chat Body -->
            <div class="col-xl-8 col-md-12">
                <div class="ms-panel ms-chat-conversations ms-widget">
                    <div class="ms-panel-header">
                        <div class="ms-chat-header justify-content-between">
                            <div class="ms-chat-user-container media clearfix">
                                <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                                    <img src="img/user-chat.png" class="ms-img-round" alt="people">
                                </div>
                                <div class="media-body ms-chat-user-info mt-1">
                                    <h6>John Doe</h6>
                                    <span class="text-disabled fs-12">
                                    Active Now
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-panel-body ms-scrollable">
                        <div class="ms-chat-bubble ms-chat-message ms-chat-outgoing media clearfix">
                            <div class="ms-chat-status ms-status-online ms-chat-img">
                                <img src="img/user-chat.png" class="ms-img-round" alt="people">
                            </div>
                            <div class="media-body">
                                <div class="ms-chat-text">
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                    </p>
                                </div>
                                <p class="ms-chat-time">10:33 pm</p>
                            </div>
                        </div>
                        <div class="ms-chat-bubble ms-chat-message media ms-chat-incoming clearfix">
                            <div class="ms-chat-status ms-status-online ms-chat-img">
                                <img src="img/user-chat.png" class="ms-img-round" alt="people">
                            </div>
                            <div class="media-body">
                                <div class="ms-chat-text">
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words
                                    </p>
                                </div>
                                <p class="ms-chat-time">10:33 pm</p>
                            </div>
                        </div>
                        <div class="ms-chat-bubble ms-chat-message ms-chat-outgoing media clearfix">
                            <div class="ms-chat-status ms-status-online ms-chat-img">
                                <img src="img/user-chat.png" class="ms-img-round" alt="people">
                            </div>
                            <div class="media-body">
                                <div class="ms-chat-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget orci ex.
                                    </p>
                                </div>
                                <p class="ms-chat-time">10:36 pm</p>
                            </div>
                        </div>
                        <div class="ms-chat-bubble ms-chat-message media ms-chat-incoming clearfix">
                            <div class="ms-chat-status ms-status-online ms-chat-img">
                                <img src="img/user-chat.png" class="ms-img-round" alt="people">
                            </div>
                            <div class="media-body">
                                <div class="ms-chat-text">
                                    <p>
                                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                </div>
                                <p class="ms-chat-time">10:41 pm</p>
                            </div>
                        </div>
                        <div class="ms-chat-bubble ms-chat-message ms-chat-outgoing media clearfix">
                            <div class="ms-chat-status ms-status-online ms-chat-img">
                                <img src="img/user-chat.png" class="ms-img-round" alt="people">
                            </div>
                            <div class="media-body">
                                <div class="ms-chat-text">
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                </div>
                                <p class="ms-chat-time">10:44 pm</p>
                            </div>
                        </div>
                        <div class="ms-chat-bubble ms-chat-message ms-chat-incoming media clearfix">
                            <div class="ms-chat-status ms-status-online ms-chat-img">
                                <img src="img/user-chat.png" class="ms-img-round" alt="people">
                            </div>
                            <div class="media-body">
                                <div class="ms-chat-text">
                                    <p>
                                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                    </p>
                                </div>
                                <p class="ms-chat-time">11:01 pm</p>
                            </div>
                        </div>
                        <div class="ms-chat-bubble ms-chat-message ms-chat-outgoing media clearfix brief-sent">
                            <div class="media-body">
                                <div class="ms-chat-text">
                                    <h6>Brief sent</h6>
                                    <a href="" data-toggle="modal" data-target="#modal-4">View brief details</a>
                                </div>
                                <p class="ms-chat-time">10:44 pm</p>
                            </div>
                        </div>
                        <div class="ms-chat-bubble ms-chat-message ms-chat-outgoing media clearfix brief-sent brief-sent-message ">
                            <div class="media-body">
                                <div class="ms-chat-text">
                                    <p>Your brief has been sent. The artist usually replies within 24 hours. Feel free to ask questions or elaborate about your idea in the meantime.</p>
                                </div>
                                <p class="ms-chat-time">10:44 pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="ms-panel-footer pt-0">
                        <div class="ms-chat-textbox">
                            <ul class="ms-list-flex mb-0">
                                <li class="ms-chat-input">
                                    <input type="text" name="msg" placeholder="Type a message" value="">
                                </li>
                                <ul class="ms-chat-text-controls ms-list-flex">
                                    <li> <i class="material-icons">tag_faces</i> </li>
                                    <li> <i class="material-icons">attach_file</i> </li>
                                    <li> <i class="material-icons">camera_alt</i> </li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-4" tabindex="-1" role="dialog" aria-labelledby="modal-4">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title has-icon ms-icon-round ">
                            <i class="flaticon-list bg-primary text-white"></i> Brief</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body brief-modal">
                        <ul>
                            <li>
                                <h6>Reference images</h6>
                                <img src="../img/tattoo-gallery-img-9.png" alt="">
                            </li>
                            <li>
                                <h6>Description</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae ultrices massa, non consectetur nunc.</p>
                            </li>
                            <li>
                                <h6>Placement image</h6>
                                <img src="img/custom.svg" alt="">
                            </li>
                            <li>
                                <h6>Size</h6>
                                <p>Credit Card</p>
                            </li>
                            <li>
                                <h6>Available days</h6>
                                <p>Mondays, and Tuesdays</p>
                            </li>
                            <li>
                                <h6>Available hours</h6>
                                <p>Mornings (9 - 12 hrs), and Afternoons (13 - 17 hrs)</p>
                            </li>
                            <li>
                                <h6>City</h6>
                                <p>London</p>
                            </li>
                            <li>
                                <h6>Customer name</h6>
                                <p>Daniell Houston</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'include/footer.php'; ?>