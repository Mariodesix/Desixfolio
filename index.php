<!DOCTYPE html>
<?php include("setup/head.php") ?>

    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section" id="home" >
      <div class="container">
        <div class="row">
          <div class="circle-1"></div>
          <div class="circle-2"></div>
          <div class="circle-3"></div>
          <div class="col-6 mx-auto text-center">

              <h1 style="font-size: 3.5em">
                Web Developer <br>
                Designer <br>
                Editor <br>
              </h1>
              <!-- NON TOCCARE SE NO SI RISCHIA DI ROMPERE L'EFFETTO TYPEWRITER -->
              <!-- INIZIO -->
              <p id="typing-effect" style="padding: 1%; font-size: 1.5em"></p>
              <script src="script.php"></script> <!-- Carica tutti gli script (incluso typewriter.js) -->
                <script>
                  window.onload = function() {
                    typeWriterEffect(); // Richiama la funzione del typewriter dal file caricato
                    }
              </script>
              <!-- FINE -->
            </div>
          </div>
          <!-- <div class="col-lg-5 col-md-6 offset-lg-1">
            <div class = "img_container">
              <div class = "img-box">
                <img src="images/logo.png">
              </div> -->
          <!-- </div>
        </div>
      </div> -->
    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <?php include ("service.php") ?>

  <!-- end service section -->

  <!-- about section -->

  <?php include ("about.php") ?>

  <!-- end about section -->




  <!-- blog section -->

  <?php include ("blog.php") ?>

  <!-- end blog section -->



  <!-- contact section -->

  <?php include("contact.php") ?>

  <!-- end contact section -->


  <!-- info section -->

  <!-- <section class="info_section layout_padding">
    <div class="container">
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="images/location-white.png" alt="">
              <span>
                Passages of Lorem Ipsum available
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/telephone-white.png" alt="">
              <span>
                Call : +012334567890
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/envelope-white.png" alt="">
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Enter your email">
              <button>
                subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section> -->

  <!-- end info section -->

  <!-- footer section -->

  <?php include("setup/footer.php") ?>

  <!-- footer section -->


  <?php include("setup/script.php") ?>

</body>

</html>
