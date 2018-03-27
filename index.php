<?php 
$page = 'home';
require 'includes/header.php';
?>
    
    <div class="row">
        <div class="col-lg-8">
        
        <!-- start hero module ======================================================-->
        <article class="hero"> 
                <h3>Home page style layout</h3>
                
               This is a "hero unit" with a background image that is responsive.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, 
                    remaining essentially unchanged. It was popularised in the 1960s with the release of 
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                    software like Aldus PageMaker including versions of Lorem Ipsum.
            </article>
            <!-- end hero module ======================================================-->

             <!-- start two column module ======================================================-->
             <div class="row twoCol">
               <div class="col-lg-6">
               <img class="newsImg" src="images/mars1.jpg">
               <h5> Second level story</h5>
                 <p>
                 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, 
                </p>
               </div>
               <div class="col-lg-6">
               <img class="newsImg" src="images/mars2.jpg">
               <h5> Second level story</h5>
               <p>
                 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, 
                </p>
              </div>
            </div>
             <!-- end two column module ======================================================-->

                   <!-- start small story two column module ======================================================-->
                   <div class="row twoCol">
               <div class="col-lg-6">
               <h5> Third level story</h5>
                 <p>
                 << exerpt>> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
               <a href="#"> Read more...</a>
                 
                </p>
               </div>
               <div class="col-lg-6">
               <h5> Third level story</h5>
               <p>
                 << exerpt>> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
               </p>
                <a href="#"> Read more...</a>  
                </p>
              </div>
            </div>
             <!-- end small story column module ======================================================-->

        <!--Start tabs module ======================================================-->
          <h3>Module with tabs</h3>
            <nav class="tabs">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"> <i class="material-icons" style="font-size:15px">call</i>Planet</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="material-icons" style="font-size:15px">star_border</i>Interior</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="material-icons" style="font-size:15px">fiber_smart_record</i>Missions</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </div>
     <!-- end tabs module ======================================================-->

      <!-- Stary gallery module ======================================================-->
        <div class="row">
          <div class="col-lg-12">
            <h3>Thumnail Gallery using local images</h3>
          <img id="mainImage" width="100%" src="images/jpeg/mars1.jpg">
         </div>
        </div>
        <div id="imgWrapper" class="row no-gutters" onclick="changeImage(event)">
          <div class="col-lg-3">
            <img class="imageStyle" width="100%" src="images/jpeg/mars1.jpg">
            <p class="caption">Caption 1</p>
          </div>
          <div class="col-lg-3">
             <img class="imageStyle" width="100%" src="images/jpeg/mars2.jpg">
             <p class="caption">Caption 1</p>
          </div>
          <div class="col-lg-3">
             <img class="imageStyle" width="100%" src="images/jpeg/mars3.jpg">
             <p class="caption" >Caption 1</p>
          </div>
          <div class="col-lg-3">
             <img class="imageStyle" width="100%" src="images/jpeg/mars4.jpg">
             <p class="caption">Caption 1</p>
          </div>
        </div>
         <!-- end gallery module ======================================================-->
     
        </div>
        <div class="col-lg-4">
        <h3> Sidebar </h3>
        <p>
          Why do we use it?
          It is a long established fact that a reader will be distracted by the readable 
          content of a page when looking at its layout. The point of using Lorem Ipsum is 
          that it has a more-or-less normal distribution of letters, as opposed to using 
          'Content here, content here', making it look like readable English. Many desktop 
          publishing packages and web page editors now use Lorem Ipsum as their default model text, 
          and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various 
          versions have evolved over the years, sometimes by accident, sometimes on purpose (injected
          humour and the like).</p>
        </div>
    </div>
    <?php require 'includes/footer.php';
?>