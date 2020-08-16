<?php
   include("class/users.php");
   $email=$_SESSION['email'];
   $ob_user=new users;
   extract($_POST);
   $ob_user->users_profile($email);
 
   ?>
<?php include 'styles.php';?>
<?php include 'header.php';?>
 <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" >

    <div class="container">
      <div class="row">
        <div class="col-lg-8 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            
        <div class="text-center">
          <h1>Quizzard</h1>
          <br>
          <br>
            <a href="#options" class="download-btn " onclick="removeHidden()" style="width: 50%;"><i class="fa fa-folder"></i> PLAY NOW</a>
          </div> 
          </div>
        </div>
        <div class="col-lg-4 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="assets/img/idea-icon-4.png" class="img-fluid" style="height: 30vw;" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <section class="contact" id="options">
   <div class="container" style="margin-top: 5vw; margin-bottom: 5vw;">

        <div class="section-title" >
          <h2>Categories</h2>
          <h3>select a category</h3>
        </div>

        <div class="row">

          <div class="col-lg-12">
            <div class="row">
              <?php 
      $ob_user->cat_shows();
      foreach ($ob_user->cat as $category) {

        ?>
        <div class="col-lg-12 php-email-form aos-init aos-animate " data-aos="fade-up">
                 <div class="text-center ">
                  <form method="post" action="qus_show.php">
                   
                    <div class="text-center">
                                    <button type="submit" style="width: 70%;" name="category" href="#action"class="btn btn-default" value="<?php echo $category['id']; ?>"><h1><?php echo $category['cat_name']; ?></h1></button>
                                 </div>
                     
                        

                   
                   
                  </form>
                    
                </div>
              </div>
     <?php }
?>
               
            </div>
          </div>

         

        </div>

      </div>
  </section>


  <script>
    function removeHidden()
    {
        var hidden = document.getElementsByClassName("hidden");
        for(var i=0; i<hidden.length; i++)
        {
            hidden[i].classList.remove("hidden");
        }
    }
    </script>

<?php include 'scripts.php';?>