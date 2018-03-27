<?php 
     $page = 'gallery';
     require 'includes/header.php';
?>
    
    <div class="row">
        <div class="col-lg-8">
        
        <article id="mars"> 
            <h3>Mars missions</h3>
            
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, 
                remaining essentially unchanged. It was popularised in the 1960s with the release of 
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                software like Aldus PageMaker including versions of Lorem Ipsum.
        </article>
      <!-- start gallery =================================================== -->
        <div class="row">
          <div class="col-lg-12">
          <div class="row">
          <div class="col-lg-12">
            <h3>Gallery</h3>
            <p>The images below are read dynamically from a folder.</p>
          <img id="mainImage" width="100%" src="images/mars/mars1.jpg">
         </div>
        </div>
          <div id="imgWrapper" class="row no-gutters" onclick="changeImage(event)">
            <?php
            $dir_path = "images/mars/";
            $extensions_array = array('jpg','png','jpeg');

            if(is_dir($dir_path))
            {
                $files = scandir($dir_path);
                
                for($i = 0; $i < count($files); $i++)
                {
                    if($files[$i] !='.' && $files[$i] !='..')
                    { 
                        // get file extension
                        $file = pathinfo($files[$i]);
                        $extension = $file['extension'];
                     
                    // check file extension
                        if(in_array($extension, $extensions_array))
                        {
                            ?>
                         <div class="col-lg-3">
                            <?php
                           // show image
                            echo "<img class='imageStyle' src='$dir_path$files[$i]' style='width:100%;'><br>";
                            ?>
                          </div>
                        <?php
                        }
                    }
                }
            }     
             ?>
            </div> <!-- end image wrapper ========================================= -->
         </div> <!-- end image col-->
        </div> 
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
        </div> <!-- end sidebar col-->
    </div><!-- end main row-->
    <?php require 'includes/footer.php';
?>