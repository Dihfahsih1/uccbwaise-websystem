<?php 
require('include/header.php');
 ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Event</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Events Area Start ##### -->
    <div class="events-area section-padding-100 " style="margin-top: -5%">
        <div class="container ">
            <div class="row">

                <!-- Event Search Form -->
                <!--<div class="col-12">
                    <div class="event-search-form mb-50">
                        <form action="#" method="get">
                            <div class="row align-items-end">
                                <div class="col-12 col-md">
                                    <div class="form-group mb-0">
                                        <label for="eventDate">Event In</label>
                                        <input type="date" class="form-control" id="eventDate" placeholder="Event In">
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="form-group mb-0">
                                        <label for="eventLocation">Near</label>
                                        <input type="text" class="form-control" id="eventLocation" placeholder="Location">
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="form-group mb-0">
                                        <label for="eventKeyword">Keyword</label>
                                        <input type="text" class="form-control" id="eventKeyword" placeholder="Typing Keyword">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-2">
                                    <button type="submit" class="btn crose-btn">Find Events</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>-->

                <!-- Events Title -->
                <div class="col-12">
                    <div class="events-title">
                        <h2>Events in the calendar Year 2019</h2>
                    </div>
                </div>

                <div class="col-12">
                    <!-- Single Upcoming Events Area -->
                    <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                        <!-- Thumbnail -->
                        <div class="upcoming-events-thumbnail">
                            <img src="img/awesome.jpg" alt="">
                        </div>
                        <!-- Content -->
                        <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                            <div class="events-text">
                                <h4>Thanks Giving Week</h4>
                                <div class="events-meta">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Jan 01, 2019</a>
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00am - 5:00pm</a>
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> UCC Bwaise</a>
                                </div>
                                <p>Come be part</p>
                                <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <!-- Single Upcoming Events Area -->
                    <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                        <!-- Thumbnail -->
                        <div class="upcoming-events-thumbnail">
                            <img src="img/m1.jpg" alt="">
                        </div>
                        <!-- Content -->
                        <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                            <div class="events-text">
                                <h4>Lwaki Oli Mulamu</h4>
                                <div class="events-meta">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> April 29, 2019</a>
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00am - 5:00pm</a>
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> UCC-Bwaise</a>
                                </div>
                                <p>Come be part</p>
                                <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <!-- Single Upcoming Events Area -->
                    <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                        <!-- Thumbnail -->
                        <div class="upcoming-events-thumbnail">
                            <img src="img/5.jpg" alt="">
                        </div>
                        <!-- Content -->
                        <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                            <div class="events-text">
                                <h4> Youth's Love Monday</h4>
                                <div class="events-meta">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> June 21, 2019</a>
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 07:00pm - 10:00pm</a>
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> UCC-Bwaise</a>
                                </div>
                                <p>You are welcome.</p>
                                <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="col-12">
                    <div class="pagination-area mt-70">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Events Area End ##### -->
 <?php 
     require('include/footer.php');
     ?>