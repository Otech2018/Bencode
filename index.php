<?php     
// require "../script/php/connect.php";

$css = "../script/css/css.txt";

if(  file_exists($css)){
	 echo "<script>
										window.location.replace(\"login.php\");
																													
									</script>";
}


?>

<!doctype html>

<html>
	<head>

<?php     
require "../script/mlc/script_head.php";
?>


<!-------
	<meta name="viewport" content="width=1024">
   

   <meta name="viewport" content="width=device-width, initial-scale=1">
	
	--->
	
	 <meta name="viewport" content="width=1024">
	
	
    <meta name="description" content=" FAST AND AMAZING ">
    <meta name="keywords" content=" MICRO LINK CODE  ">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    
  <meta http-equiv="pragma" content="no-cache" />

   <title> 	WELCOME -HOME </title>
<style>


body { 
  background:url("../script/img/bg.png") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}





</style>
	
	</head>

<body>
	<br/><br/><br/>


 <div class="container">
<br/>
     <div class="row">
	
	
		<div class="col m3 l3 s0"></div>
		<div class="col m6 l6 s12" >
		
		 <div class="card z-depth-4 green-text wow animated bounceInUp" id='next1'  >
            <div class="card-content">
			
              <h1 align="center" style="color:#283593;">
			  <br/><b>	 WELCOME! </b></h1>
            <div class="row">
       
	   <h5 align='center'>
	   A COST EFFECTIVE MODEL FOR SECURING INFORMATION USING BLOCKCHAIN TECHNOLOGY
								</h5>
								
								<h1 align='center'><i>BY</i></h1>
								
								<h3 align='center'>  IBENEME-SABINUS, IFEOMA LIVINA</h3>
								<h3 align='center'>201844142858</h3>
								<h4 align='center' style="color:red;">(MSc. THESIS)</h4>
								<h2 align='center'>IFT DEPARTMENT</h2>
								<h3 align='center'>FUTO</h3>
								<h3 align='center' style='color:red;'><i>(Make Sure You are Connected to the Internet !)</i></h3>
      </div>

	  <center>
	 
	 <button onclick=" $('#next1').hide();  $('#next2').show();  install();"  class="btn green darken-4">
	  <b>Install <i class="fa fa-download"></i> </b></button>
	    </center>
	  </div>
            <div  >
            </div> <br/>
          </div>
		  
		  
		  
		  
		   <div class="card z-depth-4 green-text wow animated bounceInLeft" id='next2' style='display:none;'>
            <div class="card-content">
			
              <h1 align="center" style="color:#283593;">
			  <img src='../script/img/install.gif'  height='250px' />
			  </h1>
            <div class="row">
						<h2 align='center' id='status'> Installing...</h2>
			</div>
				<div class='progress'>
					<div class='indeterminate'></div>
				</div>
	  <center>
	 
	 <a  href='index.php' class="btn red darken-4" >
	  <b>Cancel <i class="fa fa-close"></i> </b></a>
	    </center>
	  </div>
            <div  >
            </div> <br/>
          </div>
		  
		  
		  
		</div>
		<div class="col m3 l3 s0"></div>


	   
			</div>


   


   </div>


<?php     
require "../script/mlc/script_foot.php";
?>

<script type="text/javascript">
function install() {
		setInterval(
		function(){
			document.getElementById('status').innerHTML = "Setting Some Few Things Up!";
					setInterval(
						function(){
							document.getElementById('status').innerHTML = "Almost Done!";
							
									setInterval(
										function(){
											window.location.replace('setup.php');
										}, 3000
									);
							
						}, 7000
					);
		}, 5000
	);
   
   
}


function install2() {
		setInterval(
		function(){
			document.getElementById('status').innerHTML = "Almost Done!";
			window.location.replace('setup.php');
		}, 7000
	);
   
   
}
 
	
</script>
</body>

</html>
















