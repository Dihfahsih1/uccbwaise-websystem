<?php
@ob_start();
session_start();
if (!isset($_SESSION['username'])){ 
    include('include/dbconn.php');
?>
<?php
include('include/header.php')
?>
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area hero-post-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/uccchurch.jpg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h3 data-animation="fadeInUp" data-delay="100ms"  style="color:white;">YOU ARE WELCOME TO</h3>
                            <h2 data-animation="fadeInUp" data-delay="200ms" style="color:white;">UNITED CHRISTIAN CENTER - (UCC Bwaise).</h2>
                            <h5 data-animation="fadeInUp" data-delay="300ms" style="color:white;">Where we discover and do the will of God in our lives.</h5>
                            <a href="about.php" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/ucc1.jpg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Why Are You Alive?</h2>
                            <p data-animation="fadeInUp" data-delay="130ms"><h3 style = "color:white">Are you what really God has in his blueprint for you or you are something else from what exactly God purposed you to be</h3></p>
                            <a href="sermons.php" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">find out More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/ucc.jpg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Discovering and Doing God's will</h2>
                            <p data-animation="fadeInUp" data-delay="110ms">What is the will of God? How do you discover God's will and carry it out in your life? UCC Bwaise looks at what the Bible says about God's will and especially why it is important. Jesus prayed, "Thy will be done." Knowing God's will must go beyond understanding it but taking action.(Matthew 7:21, Matthew 12:50, 1 John 2:15-17)</p>
                            <a href="sermons.php" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">find out More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/ucc.jpg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Who Are You?</h2>
                            <p data-animation="fadeInUp" data-delay="120ms">I am saved by God’s grace, raised up with Christ and seated with Him in heavenly places (Ephesians 2:5-6; Colossians 2:12).

.</p>
                            <a href="sermons.php" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">find out More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### About Area Start ##### -->
       <section class="call-to-action-area section-padding-40 bg-img sm-overlay" style="background-image: url(img/inside1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-content text-center">
                        <h2>Know More About UCC Bwaise</h2>
                    </div>
                </div>
            </div>
        </div>
      </section>

    <section class="about-area"  >
        <div class="container" >
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                     <div class="table-responsive">
                             <h4>UCC Bwaise Church Program</h4>
                             <table class="table table-dark"style="text-align:left;">
                                 <tbody class="table-striped">
                                     <div classs="jumbotron">
                             <p>
                                <thead class="thead-dark blue " >
                                <tr>
                                <th>Day</th>
                                <th>Time</th> 
                                <th>Activity</th>
                                </tr>
                                </thead>
                                <tr><td>Sunday</td>
                                   <td>
                                       <ul>
                                           <li>7:30am - 10:30am</li>
                                           <li>10:30am- 1:30pm</li>
                                           <li>4:00pm- 6:30pm</li>
                                           <li>6:00pm- 7:30pm</li>
                                       </ul>
                                    </td>
                                    <td>
                                        <ul style="text-align:left;">
                                            <li>First Service</li>
                                            <li>Second Service</li>
                                            <li>DDM Bible Study</li>
                                            <li>Youth's Practice</li>
                                        </ul>
                                    </td>
                                </tr>
                                
                               <tr class="active"><td>Monday</td>
                                   <td>
                                       <ul>
                                           <li>9:00am - 4:00pm</li>
                                           <li>7:00pm - 10:00pm</li>
                                       </ul>
                                    </td>
                                    <td>
                                        <ul style="text-align:left;">
                                            <li>Prayer Alter</li>
                                            <li>Youth's Service</li>
                                        </ul>
                                    </td>
                                </tr>
                                
                                <tr><td>Tuesday</td>
                                   <td>
                                       <ul>
                                           <li>5:00pm - 7:00pm</li>
                                       </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li style="text-align:left;">Men's Service</li>
                                        </ul>
                                    </td>
                                </tr>
                                
                                <tr class="active"><td>Wednesday</td>
                                   <td>
                                       <ul >
                                           <li>5:00pm - 8:00pm</li>
                                           <li>8:00pm - 09:00pm</li>
                                       </ul>
                                    </td>
                                    <td>
                                        <ul style="text-align:left;">
                                            <li>Worker's Service</li>
                                            <li>Alter For Church Building</li>
                                        </ul>
                                    </td>
                                </tr>
                                
                                <tr><td>Thursday</td>
                                   <td>
                                       <ul >
                                           <li>9:00am - 5:00pm</li>
                                           <li>4:00pm - 6:00pm</li>
                                           <li>5:00pm - 7:00pm</li>
                                       </ul>
                                    </td>
                                    <td>
                                        <ul style="text-align:left;">
                                            <li>Counselling and Guidance</li>
                                            <li>Minister's in the Word</li>
                                            <li>Women's Practices</li>
                                        </ul>
                                    </td>
                                </tr>
                                
                                <tr class="active"><td>Friday</td>
                                   <td>
                                       <ul >
                                           <li>5:00pm - 7:00pm</li>
                                           <li>7:00pm - 12:00am</li>
                                           <li>9:00pm - 5:00am(last friday in the month)</li>
                                       </ul>
                                    </td>
                                    <td>
                                        <ul style="text-align:left;">
                                            <li>Bible Study</li>
                                            <li>Night Prayers</li>
                                            <li>Over Night Prayers</li>
                                        </ul>
                                    </td>
                                </tr>
                                
                                <tr><td>Saturday</td>
                                   <td>
                                       <ul >
                                           <li>5:00pm - 7:00pm</li>
                                           <li>5:00pm - 7:00pm</li>
                                       </ul>
                                    </td>
                                    <td>
                                        <ul style="text-align:left;">
                                            <li>Worship Team Practices</li>
                                            <li>Wells of Hope Practices</li>
                                        </ul>
                                    </td>
                                </tr>
                                </p>
                              </tbody>
                            </table>
                        </div>    
                    </div>
        
                   
                </div>
                </div>
            </div><br>
    <div class="container-fluid"        
     <div class="upcoming-events-heading bg-img bg-overlay bg-fixed" style="background-image: url(img/1.jpg);">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-left white">
                        <h2>Fencing Wall</h2>
                        <p>This is a work in progress of fencing our church with a perimeter wall with support from the Believers of UCC Bwaise</p>
                    </div>
                </div>
            </div>
        </div>
     </div>
    </div>
 <div class="container">
    <section class="hero-area hero-post-slides owl-carousel">
        
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                           <img src="img/ucc2.jpg" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                         <img src="img/build1.jpg" class="img-fluid">   
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                          <img src="img/build2.jpg" class="img-fluid">  
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <img src="img/build3.jpg" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                             <img src="img/ucc6.jpg" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </section><br>
    </div>
    <div class="container-fluid"        
     <div class="upcoming-events-heading bg-img bg-overlay bg-fixed" style="background-color:gray;">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-left white">
                        <h2>Believers Inspecting the Building of the New UCC Bwaise Hall</h2>
                        <p>This will act as a temporary church structure as we wait for the permanent church structure to be completed</p>
                    </div>
                </div>
            </div>
        </div>
     </div>
    <div class="container">
        
        <iframe width="1000" height="381" src="https://www.youtube.com/embed/q8hR4mbXNdY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
    </div>
    
    </div>
    <br><br>
  </section>
    <section class="call-to-action-area section-padding-40 bg-img sm-overlay" style="background-image: url(img/inside1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-content text-center">
                        <h2>We Discover and Do the Will of God in Our lives</h2>
                    </div>
                </div>
            </div>
        </div>
      </section>
    <div class="container">
            <div class="row about-content justify-content-center">
                <!-- Single About Us Content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="about-us-content mb-100">
                        <img src="img/ucc1.jpg" alt="">
                        <div class="about-text">
                            <h4>Our Church</h4>
                            <p><b> United Christian Centre Bwaise (UCC BWAISE)</b> is a born again Christian church in Kampala Uganda East Africa</p>
                            <a href="about.php">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

             
                <!-- Single About Us Content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="about-us-content mb-100">
                        <img src="img/psjoshua.jpg" alt="">
                        <div class="about-text">
                            <h4>Our Sermons</h4>
                            <p>Teach me how to do you will for you're my God, may your good spirit lead me to ground level(Psalms 143:10)</p>
                            <a href="sermons.php">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                   <!-- Single About Us Content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="about-us-content mb-100">
                        <img src="img/m1.jpg" alt="">
                        <div class="about-text">
                            <h4>Our History</h4>
                            <p>UCC-Bwaise was formed as a result of expansion of innerman teaching of mother Church UCC-Kasubi led by Bishop Steven Ssenfuma</p>
                            <a href="about.php">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
     </div>
     </div>
    
    <!-- ##### About Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area section-padding-100 bg-img bg-overlay" style="background-image: url(img/inside1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-content text-center">
                        <h6>A Place For You</h6>
                        <h2>UCC-Bwaise is a church where people are taught the Bible and how it relates to their being alive in the world.</h2>
                        <a href="about.php" class="btn crose-btn btn-2">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Latest Sermons Area Start ##### -->
    <section class="latest-sermons-area " >
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Latest Sermons</h2>
                        <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that christians face each day</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Latest Sermons -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-latest-sermons mb-100">
                        <div class="sermons-thumbnail">
                            <iframe width="361" height="361" src="https://www.youtube.com/embed/0zDXvo824HU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="sermons-content">
                            <div class="sermons-cata">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-cloud-download" aria-hidden="true"></i>Download</a>
                            </div>
                            <h4>IN HIS VINEYARD</h4>
                            <div class="sermons-meta-data">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Sermon From: <span>Pr.Joshua Zake</span></p>
                                <p><i class="fa fa-tag" aria-hidden="true"></i> Categories: <span>Spiritual Growth</span></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-latest-sermons mb-100">
                        <div class="sermons-thumbnail">
                           <iframe width="361" height="361" src="https://www.youtube.com/embed/KP8yW7YBxgE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="sermons-content">
                            <div class="sermons-cata">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-cloud-download" aria-hidden="true"></i>Download</a>
                            </div>
                            <h4>HOW DO YOU DO GOD's WILL</h4>
                            <div class="sermons-meta-data">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Sermon From: <span>Pr.Joshua Zake</span></p>
                                <p><i class="fa fa-tag" aria-hidden="true"></i> Categories: <span>Salvation</span></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-latest-sermons mb-100">
                        <div class="sermons-thumbnail">
                           <iframe width="361" height="361" src="https://www.youtube.com/embed/Mo5gDH9JELI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="sermons-content">
                            <div class="sermons-cata">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-cloud-download" aria-hidden="true"></i>Download</a>
                            </div>
                            <h4>WHAT IS THE MEANING OF LIFE</h4>
                            <div class="sermons-meta-data">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Sermon From: <span>Pr.Joshua Zake</span></p>
                                <p><i class="fa fa-tag" aria-hidden="true"></i> Categories: <span>Meaning of life</span></p>
                                
                            </div>
                        </div>
                         <center><a href="sermons.php" class="btn-center crose-btn"  >More Sermons</a></center> 
                    </div>
                   
                </div>
                
            </div>
           
        </div>
        
    </section>

    <!-- ##### Latest Sermons Area End ##### -->
    <!-- ##### Upcoming Events Area Start ##### -->
    <section class="upcoming-events-area " >
        <!-- Upcoming Events Heading Area -->
        <div class="upcoming-events-heading bg-img bg-overlay bg-fixed" style="background-image: url(img/sefuma.jpg);">
            <div class="container">
                <div class="row">
                    <!-- Section Heading -->
                    <div class="col-12">
                        <div class="section-heading text-left white">
                            <h2>Gospel Series</h2>
                            <p>Be sure to visit our Sermons page regularly to get all updated sermons preached at UCC-Bwaise</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Upcoming Events Slide -->
        <div class="upcoming-events-slides-area">
            <div class="container ">
                <div class="row">
                    <div class="col-12">
                        <div class="upcoming-slides owl-carousel">

                            <div class="single-slide">
                                <!-- Single Upcoming Events Area -->
                                <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                                    <!-- Thumbnail -->
                                    
                                    <!-- Content -->
                                    <div class="upcoming-events-thumbnail">
                                        <img src="img/1.jpg" alt="">
                                    </div>
                                    <div class="upcoming-events-content d-flex flex-wrap align-items-center" >
                                        <div class="events-text">
                                            <h4>Seeing and Savoring Jesus Christ</h4>
                                            <div class="events-meta">
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 01, 2018</a>
                                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 - 11:00</a>
                                                <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> UCC-Bwaise</a>
                                            </div>
                                            <p>Transforming the innerman through life break through message</p>
                                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <!-- Single Upcoming Events Area -->
                                <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                                     <!-- Thumbnail -->
                                    <div class="upcoming-events-thumbnail">
                                        <img src="img/awesome.jpg" alt="">
                                    </div>
                                    <!-- Content -->
                                   <div class="upcoming-events-content d-flex flex-wrap align-items-center" >
                                        <div class="events-text">
                                            <h4>Seeing and Savoring Jesus Christ</h4>
                                            <div class="events-meta">
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 01, 2018</a>
                                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 - 11:00</a>
                                                <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> UCC-Bwaise</a>
                                            </div>
                                            <p>Transforming the innerman through life break through message</p>
                                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                        
                                    </div>
                                   
                                </div>

                                <!-- Single Upcoming Events Area -->
                                <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                                   
                                    <!-- Thumbnail -->
                                    <div class="upcoming-events-thumbnail">
                                        <img src="img/family.jpg" alt="">
                                    </div> 
                                    <!-- Content -->
                                  <div class="upcoming-events-content d-flex flex-wrap align-items-center" >
                                        <div class="events-text">
                                            <h4>Seeing and Savoring Jesus Christ</h4>
                                            <div class="events-meta">
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 01, 2018</a>
                                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 - 11:00</a>
                                                <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> UCC-Bwaise</a>
                                            </div>
                                            <p>Transforming the innerman through life break through message</p>
                                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                        
                                    </div>
                                   
                                </div>
                            </div>



                            <div class="single-slide">
                                <!-- Single Upcoming Events Area -->
                                <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                                   
                                    <!-- Thumbnail -->
                                    <div class="upcoming-events-thumbnail">
                                        <img src="img/2.jpg" alt="">
                                    </div>
                                    <!-- Content -->
                                    <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                                        <div class="events-text">
                                            <h4>Lwaki olimulamu Conference</h4>
                                            <div class="events-meta">
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> April 29 - May 4, 2018</a>
                                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00am - 07:00pm</a>
                                                <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> UCC-Bwaise</a>
                                            </div>
                                            <p>God created man with alot of abilities in him including the ability of man to talk and listen to God</p>
                                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                    
                                </div>

                                <!-- Single Upcoming Events Area -->
                                <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                                   
                                     <!-- Thumbnail -->
                                    <div class="upcoming-events-thumbnail">
                                        <img src="img/5.jpg" alt="">
                                    </div>
                                    <!-- Content -->
                                    <div class="upcoming-events-content d-flex flex-wrap align-items-center" >
                                        <div class="events-text">
                                            <h4>Lwaki olimulamu Conference</h4>
                                            <div class="events-meta">
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> April 29 - May 4, 2018</a>
                                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00am - 07:00pm</a>
                                                <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> UCC-Bwaise</a>
                                            </div>
                                            <p>God created man with alot of abilities in him including the ability of man to talk and listen to God</p>
                                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                   
                                </div>

                                <!-- Single Upcoming Events Area -->
                                <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                                    
                                    <!-- Thumbnail -->
                                    <div class="upcoming-events-thumbnail">
                                        <img src="img/m1.jpg" alt="">
                                    </div>
                                    <!-- Content -->
                                   <div class="upcoming-events-content d-flex flex-wrap align-items-center" >
                                        <div class="events-text">
                                            <h4>Lwaki olimulamu Conference</h4>
                                            <div class="events-meta">
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> April 29 - May 4, 2018</a>
                                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00am - 07:00pm</a>
                                                <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> UCC-Bwaise</a>
                                            </div>
                                            <p>God created man with alot of abilities in him including the ability of man to talk and listen to God</p>
                                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Upcoming Events Area End ##### -->

    <!-- ##### Upcoming Events Area Start ##### -->
    <section class="upcoming-events-area" >
        <!-- Upcoming Events Heading Area -->
        <div class="upcoming-events-heading bg-img bg-overlay bg-fixed" style="background-image: url(img/1.jpg);">
            <div class="container">
                <div class="row">
                    <!-- Section Heading -->
                    <div class="col-12">
                        <div class="section-heading text-left white">
                            <h2>UCC BWAISE Church Ministries</h2>
                            <p>All the information you need to know about ministries in our church</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <!-- Upcoming Events Slide -->
            <div class="row justify-content-center">
                 <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post mb-100">
                         <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                                    <!-- Thumbnail -->
                                    <div class="upcoming-events-thumbnail">
                                        <img src="img/2.jpg" alt="">
                                    </div>
                                    <!-- Content -->
                                        <div class="events-text">
                                            <h4>Men's Ministry</h4>
                                            
                                            <p>When UCC Bwaise men start ministering, they do it with all their passion and love for christ.</p>
                                           
                                        </div>
                                        <div class="find-out-more-btn">
                                            <a href="about.php" class="btn crose-btn btn-2">Find Out More</a>
                                        </div>
                        </div>
                    </div>
                   
                </div>
                 <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post mb-100">
                          <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                                    <!-- Thumbnail -->
                                    <div class="upcoming-events-thumbnail">
                                        <img src="img/family.jpg" alt="">
                                    </div>
                                    <!-- Content -->
                                        <div class="events-text">
                                            <h4>Children's Ministry</h4>
                                            
                                            <p>Ucc Bwaise kids have passion of serving Jesus</p>
                                            
                                        </div>
                                        <div class="find-out-more-btn">
                                            <a href="about.php" class="btn crose-btn btn-2">Find Out More</a>
                                        </div>
                                </div>
                    </div>
                </div>
                
                 <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post mb-100">
                        <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                                    <!-- Thumbnail -->
                                    <div class="upcoming-events-thumbnail">
                                        <img src="img/1.jpg" alt="">
                                    </div>
                                    <!-- Content -->
                                        <div class="events-text">
                                            <h4>Youth's Ministry</h4>
                                            
                                            <p>Youths always minister in power and Grace given to them by God</p>
                                        </div>
                                        <div class="find-out-more-btn">
                                            <a href="about.php" class="btn crose-btn btn-2">Find Out More</a>
                                        </div>
                                </div>        
                            </div>
                     </div>
            </div>
    </div>

    <!-- ##### Missions Area Start ##### -->
    <section class="blog-area " >
         <div class="upcoming-events-heading bg-img bg-overlay bg-fixed" style="background-image: url(img/1.jpg);">
           <div class="container">      
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                        <div class="section-heading text-left white">
                        <h2>UCC-Bwaise Church Missionary Work</h2>
                        <p>The most famous version of the Great Commission is in Matthew 28:16–20, where on a mountain in Galilee Jesus calls on his followers to baptize all nations in the name of the Father, the Son, and the Holy Spirit.It has become a tenet in Christian theology emphasizing ministry, missionary work, evangelism, and baptism.</p>
                         </div>
                </div>
             </div>
           </div>      
         </div>
   </section>
   <br><br>
   <div class="container">
            <div class="row justify-content-center">
                <!-- Single Blog Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post mb-100" style="height:20%">
                        <div class="post-thumbnail">
                            <a href="missions.php"><img src="img/family.jpg"  alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="missions.php" class="post-title">
                                <h4>Lwaki Oli mulamu mission</h4>
                            </a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Pr.Rebecca</a>
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> october 23, 2018</a>
                            </div>
                            <p class="post-excerpt">People are being taught the reason as to why they are alive</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post mb-100" style="height:20%">
                        <div class="post-thumbnail">
                            <a href="missions.php"><img src="img/4.jpg"  alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="missions.php" class="post-title">
                                <h4>Missionary work abroad</h4>
                            </a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Pr. Joshua Zake, Ephraim and Pr. Steven Senfuma</a>
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> october 23, 2018</a>
                            </div>
                            <p class="post-excerpt">Good news must be preached in all nations</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post mb-100" style="height:20%">
                        <div class="post-thumbnail">
                            <a href="missions.php"><img src="img/m1.jpg"  alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="missions.php" class="post-title">
                                <h4>Pr.Joshua Preaching </h4>
                            </a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Missionary work</a>
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> June 23, 2018</a>
                            </div>
                            <p class="post-excerpt">Lwaki oli mulamu mission blesses many people in uganda and abroad</p>
                        </div>
                    </div>
                </div>
           <div class="find-out-more-btn">
              <a href="missions.php" class="btn crose-btn btn-2">Find Out More</a>
           </div>
    </div>
  </div>
</div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Subscribe Area Start ##### -->
    
    <section class="subscribe-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Subscribe Text -->
                <div class="col-12 col-lg-6">
                    <div class="subscribe-text">
                        <h3>Subscribe To Our Newsletter</h3>
                        <h6>Subcribe Us And Tell Us About Your Story</h6>
                    </div>
                </div>
                <!-- Subscribe Form -->
                <div class="col-12 col-lg-6">
                    <div class="subscribe-form text-right">
                        <form action="#">
                            <input type="email" name="subscribe-email" id="subscribeEmail" placeholder="Your Email">
                            <button type="submit" class="btn crose-btn">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <?php
} else if(isset($_SESSION['username'])) { 
    include('include/admin.php');

} ?>
  <?php
  include('include/footer.php');
  ?>