<?php 




session_start();
include "connection.php";
 $question_no="";
 $question="";
 $opt_1="";
 $opt_2="";
 $opt_3="";
 $opt_4="";
 $answer="";
 $count=0;
 $ans="";

 $queno=1;
 if(isset($_SESSION["answer"][$queno]))
 {
 	$ans=$_SESSION["answer"][$queno];
 }
 $res=mysqli_query( $link,"select * from questions where cat_name='".$_SESSION['category']."' && id='".$_GET["id"]."'");
 $count=mysqli_num_rows($res);
 if($count==0)
 {
 	echo "over";
 }
 else
 {
 	while($row=mysqli_fetch_array($res))
 	{
 		 echo $question_no=$row["id"];
 		$question=$row["question"];
 		$opt1=$row["ans1"];

 		$opt2=$row["ans2"];
 		$opt3=$row["ans3"];
 		$opt4=$row["ans4"];
 	}
 }

?>

<br>
<table>	
<tr>	
			<td>	
					<?php echo "(".$question_no.")".$question;?>
						
		</td>
</tr>
</table>	
<table>	
<tr>	
			<td>	
					<input type="radio" name="rl" id="rl" value="<?php echo $opt_1; ?>">
				if($ans==$opt1){
					echo "checked";
			}
			else			
		</td>
</tr>
</table>