<?php include 'styles.php';?>
<?php include 'header.php';?>
<section id="contact" class="contact">
   <div class="container">
      <br>
      <br> 
      <div class="row">
         <div class="col-sm-12">
            <div class="panel panel-danger">
               <div class="faq section-bg" style="padding: 40px;">
                  <h2>Quiz Game</h2>
               </div>
               <div class="panel-body">
                  <br>
                  <div class="row">
                     <div class="col-lg-6">
                          <div class="card" style="padding: 20px;margin: 20px;">
                           <div class="panel-heading">
                              <h4>Signin</h4>
                           </div>
                           <div class="php-email-form aos-init aos-animate">
                              <?php 
                                 if(isset($_GET['run']) && $_GET['run']=="failed")
                                 {
                                   
                                 }
                                 ?>
                              <form action="signin_sub.php"  method="post" >
                                 <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                 </div>
                                 <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                 </div>
                                
                                    <div class="text-center">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                 </div>
                                
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 box aos-init aos-animate" data-aos="fade-right">
                        <div class="card" style="padding: 20px;margin: 20px;">
                           <div class="panel-heading">
                              <h4>Sign Up</h4>
                           </div>
                         <div class="php-email-form aos-init aos-animate">
                              <?php 
                                 { 
                                   
                                 }?>
                              <form action="signup_sub.php" method="post" enctype="multipart/form-data">
                                 <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                                 </div>
                                 <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                 </div>
                                 <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                 </div>
                                 <div class="form-group">
                                    <label for="img">Upload your Image</label>
                                    <input type="file" class="form-control"  name="image">
                                 </div>
                                 <div class="text-center">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</body>
<?php include 'scripts.php';?>
