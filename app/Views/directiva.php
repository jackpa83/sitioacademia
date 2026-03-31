 <main class="main">
   <section id="doctors" class="doctors section light-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Junta Directiva </h2>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4">
        <?php foreach ($data->getResultArray() as $row) {?>
               

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="<?php echo base_url('public/uploads/'.$row['filename']);?>" class="img-fluid" alt="" width="500">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $row['nombre'];?></h4>
                <span><?php echo $row['titulo'];?></span>
                <hr>
                    <?php echo $row['contenido'];?>
                 
                <hr>
                <small><b>Correo electrónico:</b> <?php echo $row['email'];?></small><br>
                <small>Áreas de interés: <?php echo $row['interes'];?></small>
              </div>
            </div>
          
          
            </div>
  <?php }?> 
      </div>

    </section><!-- /Doctors Section -->