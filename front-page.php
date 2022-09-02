<?php
get_header();
?>
<section style="padding-top: 8em;">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-6">
            <?php if(get_theme_mod("header_image")): ?>
                <img src="<?php echo esc_url(get_theme_mod("header_image"))?>" alt="" class="img-fluid rounded " style="height: 500px;width: 500px;;">
            <?php endif;?>
        </div>
        <div class="col-md-6" id="main">
            <?php if(get_theme_mod('header_text_field')): ?>
          <h2><?php echo get_theme_mod('header_text_field')?><br>Kozhikode,Kerala,India</h2>
          <?php endif;?>
          <blockquote class="blockquote">
            <p><i>"You are the average of 5 people you hang around"</i></p>
            <footer><b>- Jishnu V Gopal</b></footer>
          </blockquote>
        </div>
      </div>
    </div>
  </section>
  
  <section class="" style="padding-top: 8em;">
        <div class="container-fluid">
          <h1 class="text-center">Portfolio</h1>
          <div class="row">
            <div class="col-md-4">
              <div class="card text-center p-3">
                <img src="https://t3.ftcdn.net/jpg/02/13/82/64/360_F_213826408_rgNjb6np2y56rYuBQDhipOmXtnB7l4UT.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Web Design</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center p-3">
                <img src="https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720__480.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Web Development</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center p-3">
                <img src="https://media.istockphoto.com/id/1206800961/photo/online-shopping-and-payment-man-using-tablet-with-shopping-cart-icon-digital-marketing.webp?s=612x612&w=is&k=20&c=5BGuf9-Q_xzNzgRKxbIFw-OCCdYgwIgtFuCUnjZLp2Y=" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ecommerce Development</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card text-center p-3">
                <img src="https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720__480.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CMS Development</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center p-3">
                <img src="https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720__480.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Logo Design</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center p-3">
                <img src="https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720__480.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">SEO Design</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

  <section class="bg-light p-3 text-center" style="margin-top: 18px; opacity: .8;border-radius: 10px;">
    <div class="container-fluid">
      <h1 class="text-center"><b>About</b></h1>
      <div class="row">
        <div class="col-md-6">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
             Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
              It has survived not only five centuries, but also the leap into electronic typesetting,
               remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, and more recently with desktop publishing software
                 like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="col-md-6">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
             Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
              It has survived not only five centuries, but also the leap into electronic typesetting,
               remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, and more recently with desktop publishing software
                 like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
?>