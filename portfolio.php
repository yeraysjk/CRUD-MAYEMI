
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Productes</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tot</li>
              <?php
              foreach($woocommerce->get('products/categories') as $cat){
                if($cat->id != 15)
                  echo "<li data-filter='.filter-".$cat->name."'>".$cat->name."</li>";
              }
              ?>

            </ul>
          </div>
        </div>
        

        <div class="row portfolio-container" data-aos="fade-up">

          <?php
          foreach($woocommerce->get('products') as $product) {
            $product_image = $product->images[0]->src;
            $product_url = $product->permalink;
            $product_cat = $product->categories[0]->name;
            echo "<div class='col-lg-4 col-md-6 portfolio-item filter-".$product_cat."'>";
            echo "<div class='portfolio-wrap'>";
            echo "<img src='".$product_image."' class='img-fluid' alt='".$product->name."'>";
            echo "<div class='portfolio-links'>";
            echo "<a href='".$product_image."' data-gallery='portfolioGallery' class='portfolio-lightbox' title='".$product->name."'><i class='bx bx-plus'></i></a>";
            echo "<a href='portfolio-details.html' title='More Details'><i class='bx bx-link'></i></a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
          }
          ?>

        </div>

      </div>
  
    </section><!-- End Portfolio Section -->

    