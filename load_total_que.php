   <?php
 session_start();
include "connection.php";


   // $total_que=$question->qus_shows($category);
   // echo $total_que;
 
   $resl=mysqli_query( $link,"select * from questions where cat_name='".$_SESSION['category']."'");
   $total_que=mysqli_num_rows($resl);
print_r($_SESSION['category']);
   ?>