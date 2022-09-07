<?php
     /**
     * Template Name: Resume Page
     */
    
 ?>
<?php get_header() ; ?>

<body style="font-family: Arial, Helvetica, sans-serif; background-color: #bdc3c7;">
  
<div class="text-white " style=" background: #9eb1be;
  background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);
  background: linear-gradient(to right, #2c3e50, #bdc3c7);padding-top: 7em;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 text-left text-md-center mb-3">
        <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('largest');?>" alt="" class="img-fluid">
          <?php endif;?>
        </div>
        <div class="col-md-9">
          <h1 class="name"><?php the_field('name'); ?></h1>
          <h5><b><?php the_field('position'); ?></b></h5>
          <p class="border-top pt-3"><?php the_content();?></p>
        </div>       
      </div>        
    </div>
  </div>
  <nav class="bg-dark text-white-50 mb-5">
    <div class="container">
     <div class="row p-3">
       <div class="col-md pb-2 pb-md-0">
          <a href="#" class="text-white ml-2"><?php the_field('email'); ?></a>
       </div>
       <div class="col-md text-md-center pb-2 pb-md-0">
          <a href="#" class="text-white ml-2"><?php the_field('website'); ?></a>
        </div>       
        <div class="col-md text-md-right">
          <a href="#" class="text-white ml-2"><?php the_field('phone'); ?></a>
        </div>       
      </div>
    </div>
  </nav>
  <main class="container-fluid">
    <div class="row">
      <div class="col-md mb-5">
        <h2 class="mb-5">Work Experience</h2>
        <ul>
          <li>
            <h6 class="text-primary">Web Developer Trainee / CloudSpring 2022 to present</h6>
            <p>Mauris volutpat, ex condimentum fringilla imperdiet, nulla turpis semper diam, ac semper risus urna quis libero. Fusce non nunc quam. Ut vulputate, magna eget molestie luctus, elit est posuere lorem, quis dapibus dolor felis id mi.</p>
          </li>
          <li>
            <h6 class="text-primary">Technical Support Engineer 'Acer' Us 2020-2021</h6>
            <p>Sed eu turpis placerat, posuere odio a, viverra velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          </li>
        </ul>
      </div>
      <div class="col-md mb-5">
        <h2 class="mb-5">Education</h2> 
        <ul>
          <li>
            <h6 class="text-primary">Bachelor of Computer Application/ University of Calicut 2015-2018</h6>
            <p>Sed et ornare quam. Cras scelerisque ex ultricies neque sodales tristique. Phasellus mattis dui ut enim tincidunt auctor. Maecenas euismod, orci eget varius elementum, nunc massa dignissim sapien, ac sagittis libero dolor vitae elit.</p>
          </li>
          <li>
            <h6 class="text-primary">PVS HSS 1994-2000</h6>
            <p>Aenean nisl enim, dictum in odio ut, suscipit efficitur diam. Nam nec velit a odio porta efficitur nec at magna.</p>
          </li>
        </ul>
      </div>     
    </div>    
    <div class="row">
      <div class="col-md mb-5">
        <h2 class="mb-5">Skills</h2>      
  <div class="progress mb-4" style="height:25px;">
    <div class="progress-bar  text-left pl-2" role="progressbar" style="width: 95%;background-color: rgb(63, 161, 63);" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">HTML</div>
  </div>       
  <div class="progress mb-4" style="height:25px;">
    <div class="progress-bar  text-left pl-2" role="progressbar" style="width: 89%;background-color: rgb(63, 161, 63);" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100">CSS</div>
  </div> 
  <div class="progress mb-4" style="height:25px;">
    <div class="progress-bar  text-left pl-2" role="progressbar" style="width: 87%;background-color: rgb(63, 161, 63);" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100">JavaScript</div>
  </div>       
  <div class="progress mb-4" style="height:25px;">
    <div class="progress-bar  text-left pl-2" role="progressbar" style="width: 80%;background-color: rgb(63, 161, 63);" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">WordPress</div>
  </div>  
  <div class="progress mb-4" style="height:25px;">
    <div class="progress-bar  text-left pl-2" role="progressbar" style="width: 78%;background-color: rgb(63, 161, 63);" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">Photoshop</div>
  </div>       
  <div class="progress mb-4" style="height:25px;">
    <div class="progress-bar  text-left pl-2" role="progressbar" style="width: 77%;background-color: rgb(63, 161, 63);" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">PHP</div>
  </div>
  <div class="progress mb-4" style="height:25px;">
    <div class="progress-bar  text-left pl-2" role="progressbar" style="width: 75%;background-color: rgb(63, 161, 63);" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Linux</div>
  </div> 
  <div class="progress mb-4" style="height:25px;">
    <div class="progress-bar  text-left pl-2" role="progressbar" style="width: 65%;background-color: rgb(63, 161, 63);" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">SEO</div>
  </div>
      </div>
      <div class="col-md">    
        <h2 class="mb-5">Recent Work</h2> 
  <div class="row">
    <div class="col-md mb-3">
      <a href="#">
        <img class="img-fluid img-thumbnail" src="..." alt="soon">
      </a>
    </div> 
    <div class="col-md mb-3">
      <a href="#">
        <img class="img-fluid img-thumbnail" src="..." alt="soon">
      </a>
    </div> 
  </div>
  <div class="row">
    <div class="col-md mb-3">
      <a href="#">
        <img class="img-fluid img-thumbnail" src="..." alt="soon">
      </a>
    </div> 
    <div class="col-md mb-3">
      <a href="#">
        <img class="img-fluid img-thumbnail" src="..." alt="soon">
      </a>
    </div> 
  </div> 
      </div>     
    </div>
  </main>
  <?php get_footer() ; ?>