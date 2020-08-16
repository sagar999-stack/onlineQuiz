  <?php
   include("class/users.php");
   $email=$_SESSION['email'];
   $profile=new users;
   extract($_POST);
   $profile->users_profile($email);

   ?>
<?php include 'styles.php';?>
<?php include 'header.php';?>
  <section id="testimonials" class="testimonials section-bg">
            <div class="container">
               <div class="section-title">
                  <h2>My Profile</h2>
               </div>
               <?php foreach($profile->data as $prof){ ?>
               <div class="card shadow p-3 mb-5 bg-white rounded " style="margin: 5vw;" data-aos="fade-up">
                  <div class="card-body" style="padding: 5vw;">
                     <div class="row">
                        <div class="col-md-4">
                           <img src="img/<?php echo $prof['image']?>" class="img-circle" style="width: 15vw;" alt="">
                        </div>
                        <div class="col-md-8" style="margin-top: 2vw;">
                           <h3><?php echo $prof['name']; ?></h3>
                           <h4>Enail: <?php echo $prof['email']; ?></h4>
                           
                        </div>
                     </div>
                  </div>
               </div>
           <?php }?>
            </div>
         </section>
         <?php include 'scripts.php';?>