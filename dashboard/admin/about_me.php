<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>About Me</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
    <link href="a1style.css" type="text/css" rel="stylesheet">
    <style>
    	.page-container .sidebar-menu #main-menu li#regis > a {
    	background-color: #2b303a;
    	color: #ffffff;
		}
       #boxx
	{
		width:220px;
	}</style>

</head>
      <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="#">
					<img src="../../images/logo.png" alt="" width="192" height="80" />
				</a>
			</div>
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
		
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							<li>Welcome <?php echo $_SESSION['full_name']; ?> 
							</li>
						
							<li>
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

		
        	<h3>Albin Qerimi</h3>

		<hr />
        
        <div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:500px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>Info</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="new_submit.php">
         <h1>Looking for an opportunity to express and expand my knowledge</h1>
         <h1>-Student at F.I.E.K</h1>
         <h1>-Junior Developer</h1>
         <h1>-Productive</h1>




       </form>
    </div>
    </div>   
        
        <script>
        	function myplandetail(str){

        		if(str==""){
        			document.getElementById("plandetls").innerHTML = "";
        			return;
        		}else{
        			if (window.XMLHttpRequest) {
           			 xmlhttp = new XMLHttpRequest();
       				 }
       			 	xmlhttp.onreadystatechange = function() {
            		if (this.readyState == 4 && this.status == 200) {
               		 document.getElementById("plandetls").innerHTML=this.responseText;
                
            			}
        			};
        			
       				 xmlhttp.open("GET","plandetail.php?q="+str,true);
       				 xmlhttp.send();	
        		}
        		
        	}
        </script>
        
        <table style="border:1px solid black;margin-left:auto;margin-right:auto;">

			<thead>
				<tr>
					<th>Language</th>
					<th>Understanding</th>
					<th>Speaking</th>
					<th>Writing</th>
				</tr>
			</thead>

				<tbody>
					<tr>
<td>Albanian</td>
<td>C2</td>
<td>C2</td>
<td>C2</td>

</tr>
<tr><td>English</td>
<td>C1</td>
<td>C1</td>
<td>C1</td>
<tr><td>German</td>
<td>B2</td>
<td>A2</td>
<td>A1</td>
<tr>
<td colspan="4"><a href="https://www.cambridgeenglish.org/exams-and-tests/cefr/#:~:text=The%20Common%20European%20Framework%20of%20Reference%20for%20Languages%20(CEFR)%20is,who%20have%20mastered%20a%20language.">Common European Framework of Reference for Languages </a></td>


												
				</tbody>

		</table>
			
    	</div>

    </body>
</html>

