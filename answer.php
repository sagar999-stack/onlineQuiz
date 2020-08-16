<?php
include("class/users.php");
$ans_obj=new users;
$ans_obj->answer($_POST);
$answer=$ans_obj->answer($_POST);
   $total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
   $attempt_qus=$answer['right']+$answer['wrong'];
   $average=$answer['right']*100/$total_qus;

?>
<?php include 'styles.php';?>
<?php include 'header.php';?>
  <section id="testimonials" class="testimonials section-bg">
            <div class="container">
               
        <div class="row">
          <div class="col-md-2"></div>
           <div class="col-md-8">
              <div class="card shadow p-3 mb-5 bg-white rounded " style="margin: 5vw;" data-aos="fade-up">
                <div class="card-header">
                  <div class="section-title">
                  <h2>Your quiz result</h2>
               </div>
                </div>
         

                  <div class="card-body" style="padding: 2vw;">
                    
                      
                        <table class="table table-hover">
                          <thead>
                         
                          </thead>
                          <tbody>
                               <tr class="table-active">>
                         <th scope="col"><h3>Total number of Questions :</h3></th>
                          <th scope="col"><h3><?php echo $total_qus; ?></h3></th> 
                         
                            </tr>
                            <tr>
                              <th scope="row"><h3>Attempt Questions :</h3></th>
                              <td><h3><?php echo $attempt_qus; ?></td>
                         
                            </tr>
                            <tr class="table-success">
                              <th  scope="row"><h3>Right Answer :</h3></th>
                              <td  ><h3><?php echo $answer['right']; ?></h3></td>
                           
                            </tr>

                            <tr class="table-danger">
                              <th  scope="row"><h3>Wrong answer :</h3></th>
                              <td  colspan="2"><h3><?php echo $answer['wrong']; ?></h3></td>
                           
                            </tr>
                             <tr>
                              <th scope="row"><h3>No answer :</h3></th>
                              <td colspan="2"><h3><?php echo $answer['no_answer']; ?></h3></td>
                           
                            </tr>
                            <tr class="table-info">
                              <th scope="row"><h2>Average :</h2></th>
                              <td colspan="2"><h2><?php echo $average; ?>%</h2></td>
                           
                            </tr>
                          </tbody>
                        </table>
                    
                  </div>
               </div>
           </div>
            <div class="col-md-2"></div>
        </div>
              
        
            </div>
         </section>
<?php include 'scripts.php';?>