<!--modals-->
  <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
			<h5 class="modal-title text-dark" id="productModalLabel">OILS AND FATS</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
          <!-- Product details form or content -->
          <div class="container">
            <div class="row">
              <?php
              // Define the directory you want to scan
              $directory = 'asset/products/section_a'; // Replace with the path to your directory

              // Check if the directory exists
              if ( is_dir( $directory ) ) {
                // Get an array of filenames in the directory
                $files = scandir( $directory );

                // Filter out the special entries '.' and '..'
                $files = array_diff( $files, array( '.', '..' ) );

                // Display the files
                if ( !empty( $files ) ) {
                  foreach ( $files as $file ) {
                    // Get the filename with extension
                    $filenameWithExtension = htmlspecialchars( $file );

                    // Get the filename without extension
                    $fileParts = pathinfo( $file );
                    $filenameWithoutExtension = htmlspecialchars( $fileParts[ 'filename' ] );
                    ?>
				
				
              <div class="col-xl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/products/section_a/<?php echo $filenameWithExtension;?>" class="card-img-top" alt="<?php echo $filenameWithoutExtension;?>">
                  <div class="card-body">
                    <p class="card-text small text-black-50 modal-content-p"><?php echo $filenameWithoutExtension;?></p>
                  </div>
                </div>
              </div>
              <?php
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>No products here.</p>";
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>Directory does not exist.</p>";
              }
              ?>

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!--MODAL SECTION B-->

	<div class="modal fade" id="productModal-2" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
			<h5 class="modal-title text-dark" id="productModalLabel">COMMODITIES</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
          <!-- Product details form or content -->
          <div class="container">
            <div class="row">
              <?php
              // Define the directory you want to scan
              $directory = 'asset/products/section_b'; // Replace with the path to your directory

              // Check if the directory exists
              if ( is_dir( $directory ) ) {
                // Get an array of filenames in the directory
                $files = scandir( $directory );

                // Filter out the special entries '.' and '..'
                $files = array_diff( $files, array( '.', '..' ) );

                // Display the files
                if ( !empty( $files ) ) {
                  foreach ( $files as $file ) {
                    // Get the filename with extension
                    $filenameWithExtension = htmlspecialchars( $file );

                    // Get the filename without extension
                    $fileParts = pathinfo( $file );
                    $filenameWithoutExtension = htmlspecialchars( $fileParts[ 'filename' ] );
                    ?>
              <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/products/section_b/<?php echo $filenameWithExtension;?>" class="card-img-top" alt="<?php echo $filenameWithoutExtension;?>">
                  <div class="card-body">
                    <p class="card-text small text-black-50 modal-content-p"><?php echo $filenameWithoutExtension;?></p>
                  </div>
                </div>
              </div>
              <?php
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>No products here.</p>";
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>Directory does not exist.</p>";
              }
              ?>
 
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	
	
	<!--MODAL SECTION C-->
	<div class="modal fade" id="productModal-3" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
			<h5 class="modal-title text-dark" id="productModalLabel">CLEANING AND LAUNDRY</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
          <!-- Product details form or content -->
          <div class="container">
            <div class="row">
  
  <!--<div class="modal fade" id="productModal-3" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="productModalLabel-3">CLEANING AND LAUNDRY</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> -->
          
          <!-- Product details form or content -->
         <!-- <div class="container">
            <div class="row">-->
              <?php
              // Define the directory you want to scan
              $directory = 'asset/products/section_c'; // Replace with the path to your directory

              // Check if the directory exists
              if ( is_dir( $directory ) ) {
                // Get an array of filenames in the directory
                $files = scandir( $directory );

                // Filter out the special entries '.' and '..'
                $files = array_diff( $files, array( '.', '..' ) );

                // Display the files
                if ( !empty( $files ) ) {
                  foreach ( $files as $file ) {
                    // Get the filename with extension
                    $filenameWithExtension = htmlspecialchars( $file );

                    // Get the filename without extension
                    $fileParts = pathinfo( $file );
                    $filenameWithoutExtension = htmlspecialchars( $fileParts[ 'filename' ] );
                    ?>
              <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/products/section_c/<?php echo $filenameWithExtension;?>" class="card-img-top" alt="<?php echo $filenameWithoutExtension;?>">
                  <div class="card-body">
                    <p class="card-text small text-black-50 modal-content-p"><?php echo $filenameWithoutExtension;?></p>
                  </div>
                </div>
              </div>
              <?php
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>No products here.</p>";
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>Directory does not exist.</p>";
              }
              ?>
 
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	
		<!--MODAL SECTION D-->
	<div class="modal fade" id="productModal-4" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
			<h5 class="modal-title text-dark" id="productModalLabel">DAIRY</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
      
  
  <!--<div class="modal fade" id="productModal-4" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="productModalLabel-4">DAIRY</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> -->
          
          <!-- Product details form or content -->
          <div class="container">
            <div class="row">
              <?php
              // Define the directory you want to scan
              $directory = 'asset/products/section_d'; // Replace with the path to your directory

              // Check if the directory exists
              if ( is_dir( $directory ) ) {
                // Get an array of filenames in the directory
                $files = scandir( $directory );

                // Filter out the special entries '.' and '..'
                $files = array_diff( $files, array( '.', '..' ) );

                // Display the files
                if ( !empty( $files ) ) {
                  foreach ( $files as $file ) {
                    // Get the filename with extension
                    $filenameWithExtension = htmlspecialchars( $file );

                    // Get the filename without extension
                    $fileParts = pathinfo( $file );
                    $filenameWithoutExtension = htmlspecialchars( $fileParts[ 'filename' ] );
                    ?>
              <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/products/section_d/<?php echo $filenameWithExtension;?>" class="card-img-top" alt="<?php echo $filenameWithoutExtension;?>">
                  <div class="card-body">
                    <p class="card-text small text-black-50 modal-content-p"><?php echo $filenameWithoutExtension;?></p>
                  </div>
                </div>
              </div>
              <?php
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>No products here.</p>";
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>Directory does not exist.</p>";
              }

              ?>
 
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	
	<!--MODAL SECTION E-->
	
	<div class="modal fade" id="productModal-5" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
			<h5 class="modal-title text-dark" id="productModalLabel">BEVERAGES</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
         
 <!--- <div class="modal fade" id="productModal-5" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="productModalLabel-4">BEVERAGES</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> -->
          
          <!-- Product details form or content -->
          <div class="container">
            <div class="row">
              <?php
              // Define the directory you want to scan
              $directory = 'asset/products/section_e'; // Replace with the path to your directory

              // Check if the directory exists
              if ( is_dir( $directory ) ) {
                // Get an array of filenames in the directory
                $files = scandir( $directory );

                // Filter out the special entries '.' and '..'
                $files = array_diff( $files, array( '.', '..' ) );

                // Display the files
                if ( !empty( $files ) ) {
                  foreach ( $files as $file ) {
                    // Get the filename with extension
                    $filenameWithExtension = htmlspecialchars( $file );

                    // Get the filename without extension
                    $fileParts = pathinfo( $file );
                    $filenameWithoutExtension = htmlspecialchars( $fileParts[ 'filename' ] );
                    ?>
              <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/products/section_e/<?php echo $filenameWithExtension;?>" class="card-img-top" alt="<?php echo $filenameWithoutExtension;?>">
                  <div class="card-body">
                    <p class="card-text small text-black-50 modal-content-p"><?php echo $filenameWithoutExtension;?></p>
                  </div>
                </div>
              </div>
              <?php
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>No products here.</p>";
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>Directory does not exist.</p>";
              }
              ?>
 
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
		<!--MODAL SECTION F-->
	<div class="modal fade" id="productModal-6" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
			<h5 class="modal-title text-dark" id="productModalLabel">HEALTHCARE AND HYGIENE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
         
  <!--<div class="modal fade" id="productModal-6" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="productModalLabel-4">HEALTHCARE AND HYGIENE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> -->
          
          <!-- Product details form or content -->
          <div class="container">
            <div class="row">
              <?php
              // Define the directory you want to scan
              $directory = 'asset/products/section_f'; // Replace with the path to your directory

              // Check if the directory exists
              if ( is_dir( $directory ) ) {
                // Get an array of filenames in the directory
                $files = scandir( $directory );

                // Filter out the special entries '.' and '..'
                $files = array_diff( $files, array( '.', '..' ) );

                // Display the files
                if ( !empty( $files ) ) {
                  foreach ( $files as $file ) {
                    // Get the filename with extension
                    $filenameWithExtension = htmlspecialchars( $file );

                    // Get the filename without extension
                    $fileParts = pathinfo( $file );
                    $filenameWithoutExtension = htmlspecialchars( $fileParts[ 'filename' ] );
                    ?>
              <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/products/section_f/<?php echo $filenameWithExtension;?>" class="card-img-top" alt="<?php echo $filenameWithoutExtension;?>">
                  <div class="card-body">
                    <p class="card-text small text-black-50 modal-content-p"><?php echo $filenameWithoutExtension;?></p>
                  </div>
                </div>
              </div>
              <?php
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>No products here.</p>";
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>Directory does not exist.</p>";
              }
              ?>
 
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	
		<!--BLOG MODAL SECTION 1-->
	
		<div class="modal fade" id="blogModal-1" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
			<h5 class="modal-title text-dark" id="productModalLabel">The Heart of Our Commitment: Quality in Every Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
          <!-- Product details form or content -->
          <div class="container">
     		<div class="modal-body">
				
               <div class="col-lg-3 col-md-6 mb-3 blog-image" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/blogs/9375520.png" class="card-img-top" alt="Commitment">
                 
                </div>
              </div>
				<div class="blog-text-c">
					<p class="card-text lead">At BEI BORA DISTRIBUTORS, quality isn't just a promise; it's our guiding principle. As Kenya's premier distributor of Fast-Moving Consumer Goods (FMCGs), we understand that our customers rely on us for products that meet their everyday needs. This commitment to quality sets us apart and drives everything we do.</p>
					
							<p class="card-text lead"><strong>Our Quality Assurance Process</strong>Quality assurance is at the core of our operations. We implement a rigorous testing and selection process to ensure that every product in our portfolio meets high standards of quality. From the initial sourcing of goods to the final delivery, we carefully evaluate each product, assessing its durability, safety, and overall performance.</p>
							<p class="card-text lead">We work closely with our suppliers, conducting regular audits and inspections to guarantee that they adhere to our stringent quality criteria. This collaboration allows us to maintain a diverse and reliable product range that our customers can trust.
							</p>
						
							<p class="card-text lead"><strong>Importance of Quality in FMCGs:</strong>In the fast-paced world of FMCGs, quality is paramount. Consumers expect products that are not only effective but also safe and reliable. When customers choose our products, they are investing in their daily needs, and we take this responsibility seriously.
							<br>
							Quality impacts customer satisfaction and loyalty. When our customers know they can depend on us, they are more likely to return, creating a lasting relationship built on trust. We strive to provide products that meet and exceed these expectations, enriching the lives of those we serve.</p>
						
						
						<p></p>

					
				</div> 
          	
				
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	</div>
			
			<!--BLOG MODAL SECTION 2-->
	
		<div class="modal fade" id="blogModal-2" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
			<h5 class="modal-title text-dark" id="productModalLabel">Innovation in FMCGs: Meeting the Evolving Needs of Kenyans</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
          <!-- Product details form or content -->
          <div class="container">
     		<div class="modal-body">
				
               <div class="col-lg-3 col-md-6 mb-3 blog-image" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/blogs/1568482.png" class="card-img-top" alt="Commitment">
                 
                </div>
              </div>
				<div class="blog-text-c">
					<p class="card-text lead">In today’s rapidly changing market, innovation is essential for staying relevant and meeting the diverse needs of consumers. At BEI BORA DISTRIBUTORS, we are committed to not just keeping pace but leading the way in the Fast-Moving Consumer Goods (FMCG) sector. Our focus on innovation ensures that we provide products that align with the evolving preferences and lifestyles of Kenyans.</p>
					
					<p class="card-text lead"><strong>Emerging Trends in FMCGs</strong>The FMCG landscape is dynamic, influenced by various factors such as technology, consumer behavior, and global trends. Some key trends currently shaping the market include Sustainable Packaging, Health-Conscious Products and Technology Integration</p>

					</p>

					<p class="card-text lead"><strong>Our Innovative Approach:</strong>At BEI BORA DISTRIBUTORS, innovation isn’t just about products; it’s about how we operate and serve our partners. We continuously explore new ways to enhance our offerings and improve efficiency. Here’s how we do it: Collaborative Product Development, Investment in Research and Development and Training and Support for Partners.
					<br>
					Innovation is at the heart of our mission at BEI BORA DISTRIBUTORS. By embracing emerging trends and continuously improving our offerings, we aim to bridge the gap between diverse needs and exceptional products. As we move forward, we remain committed to enriching the lives of Kenyans with innovative solutions that cater to their evolving preferences. Together, let’s embrace a future where quality and innovation go hand in hand.</p>
						
						

					
				</div> 
          	
				
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	</div>
  
	<!--BLOG MODAL SECTION 3-->
	
		<div class="modal fade" id="blogModal-3" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
			<h5 class="modal-title text-dark" id="productModalLabel">Building Lasting Partnerships: The BEI BORA DISTRIBUTORS Approach</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
          <!-- Product details form or content -->
          <div class="container">
     		<div class="modal-body">
				
               <div class="col-lg-3 col-md-6 mb-3 blog-image" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/blogs/1269668624.jpg" class="card-img-top" alt="Commitment">
                 
                </div>
              </div>
				<div class="blog-text-c">
					<p class="card-text lead">At BEI BORA DISTRIBUTORS, we believe that strong relationships are the backbone of our success. As Kenya’s premier distributor of Fast-Moving Consumer Goods (FMCGs), our commitment to building lasting partnerships with wholesalers, retailers, and organizations is integral to our mission. These collaborations not only enhance our service offerings but also support the growth of communities across the country.</p><br>
					<p class="card-text lead"><strong>Training and Resources: </strong>  We offer training programs that equip our partners with the knowledge and skills they need to effectively market and sell our products. By sharing best practices, we empower them to succeed.</p>
					
					<p class="card-text lead"><strong>Responsive Communication:</strong>Open and transparent communication is key to our partnerships. We prioritize regular check-ins and feedback sessions to ensure that we address any challenges and celebrate successes together.</p>

					

					<p class="card-text lead"><strong>Community Engagement</strong>Our commitment to building partnerships extends to the communities we serve. We believe in corporate social responsibility and actively engage in initiatives that benefit society. Whether it’s supporting local charities, participating in community events, or promoting sustainable practices, we strive to make a positive impact.
					<br>
					At BEI BORA DISTRIBUTORS, we understand that our success is intertwined with that of our partners and the communities we serve. By fostering lasting relationships built on trust, support, and collaboration, we can navigate the challenges of the FMCG market together. As we look to the future, we remain committed to nurturing these partnerships, enriching the lives of Kenyans, and contributing to the growth and development of our nation. Together, we can achieve excellence and create a brighter future for all.</p>
						
						

					
				</div> 
          	
				
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	</div>
  