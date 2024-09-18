 <!-- Portfolio Section -->
 <section id="portfolio" class="portfolio section">

     <!-- Section Title -->
     <div class="container section-title" data-aos="fade-up">
         <h2>Portfolio</h2>
         <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
     </div><!-- End Section Title -->

     <div class="container">
         <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
             <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                 <li data-filter="*" class="filter-active">Galeri Portfolio</li>
                 <!-- <li data-filter=".filter-app">Galeri Portfolio</li> -->
                 <!-- <li data-filter=".filter-product">Card</li>
                 <li data-filter=".filter-branding">Web</li> -->
             </ul><!-- End Portfolio Filters -->

             <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                 <!-- Looping data dari database -->
                 <?php
                    require_once 'admin/config/connection.php';
                    $sql = "SELECT * FROM portfolio";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $image_id = $row['id'];
                            $image_path = 'admin/uploads/' . $row['image'];
                            $image_title = $row['image_title'];
                            $img_desc = $row['img_desc'];
                    ?>
                         <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                             <img src="<?php echo $image_path; ?>" class="img-fluid" alt="<?php echo $image_title; ?>">
                             <div class="portfolio-info">
                                 <h4><?php echo $image_title; ?></h4>
                                 <p><?php echo $img_desc; ?></p>
                                 <!-- Glightbox Preview Link -->
                                 <a href="<?php echo $image_path; ?>" title="<?php echo $image_title; ?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
                                     <i class="bi bi-zoom-in"></i>
                                 </a>
                                 <!-- More Details Link -->
                                 <a href="portfolio-details.html" title="More Details" class="details-link">
                                     <i class="bi bi-link-45deg"></i>
                                 </a>
                             </div>
                         </div>
                 <?php
                        }
                    } else {
                        echo "<p>No portfolio items available.</p>";
                    }

                    // $conn->close();
                    ?>

             </div><!-- End Portfolio Container -->

         </div>

     </div>

 </section><!-- /Portfolio Section -->