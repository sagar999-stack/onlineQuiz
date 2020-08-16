
<?php session_start();
include "connection.php";?>
<div class="row">
	
	 <div class="col-lg-6 col-lg-push-3">
	 	<!-- start editing-->
	 	<br>
	 	<div class="row">
	 		<br>
	 		<div class="col-lg-2 col-lg-push-10">
	 			<div class="current_que" style="float:left;">0</div>
	 			<div style="float: left;"></div>
	 			<div id="total_que" style="float: left;">0</div>
	 		</div>
	 		<div class="row" style="margin-top: 30px;">
	 			<div class="row">
	 				<div class="col-lg-10 col-lg-push-1" style="min-height: 300px; background-color: white; " id="load_questions">
	 					
	 				</div>			
	 			</div>
	 		</div>
	 		<div class="row" style="margin-top: 10px;">
	 			
	 				<div class="col-lg-6 col-lg-push-3" style="min-height: 50px; " >
	 					<div class="col-lg-12 text-center">
	 						<input type="button" class="btn-btn-warning" value="Previous" onclick="load_previous();" name="">&nbsp;
	 						<input type="button" class="btn-btn-success" value="Next" onclick="load_next();" name="">&nbsp;
	 					</div>
	 				</div>			
	 			
	 		</div>
	 	</div>
	 </div>
</div>

<script type="text/javascript">
	
	function load_total_que()
	{
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status ==200){
				document.getElementById("total_que").innerHTML=xmlhttp.responceText;
			}
		};
		xmlhttp.open("GET","load_total_que.php",true);
		xmlhttp.send(null);
	}

	var questionno="1";
	load_questions(questionno);
	function load_questions(questionno)
	{
		document.getElementById("current_que").innerHTML=questionno;
			var xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status ==200){
				if(xmlhttp.responceText=="over")
				{
					window.location="answer.php"
				}
				else{
					document.getElementById("load_questions").innerHTML=xmlhttp.responceText;
					load_total_que();

				}

				
			}
		};
		xmlhttp.open("GET","load_questions.php?questionno="+ questionno,true);
		xmlhttp.send(null);
	}
	function load_previous(){
		if(questionno=="1")
		{
			load_questions(questionno);
		}
		else
		{
			questionno=eval(questionno)-1;
			load_questions(questionno);
		}
	}
	function load_next(){
			questionno=eval(questionno)+1;
			load_questions(questionno);	
	}
</script>


<?php include 'scripts.php';?>