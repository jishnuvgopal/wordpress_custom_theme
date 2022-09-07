<?php
     /**
     * Template Name: Contact Us Page
     */
    
 ?>
<?php get_header();?>

<section class="" style="padding: 70px;">
        <div class="container-fluid">
          <div class="row">
            <form class="row g-3">
              <h1 class="text-center">Contact me</h1>
              <h2><?php the_field('connect_here'); ?></h2>
              <div class="col-md-6">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" id="" placeholder="Enter Your Name">
              </div>
              <div class="col-md-6">
                <label for="inputCity" class="form-label">Place</label>
                <input type="text" class="form-control" id="inputCity" placeholder="Enter Your Place">
              </div>
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email Id</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="col-md-6">
                <label for="inputCity" class="form-label">Mobile</label>
                <input type="tel" class="form-control" id="Mobile" placeholder="98XXXXXX67">
              </div>
              
              <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Address here">
              </div>
              <div class="col-12">
                <label for="inputAddress">Message</label>
                <textarea class="form-control" cols="30" rows="10" placeholder="Type your message here"></textarea>
              </div>
              
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </section>

      <?php get_footer();?>