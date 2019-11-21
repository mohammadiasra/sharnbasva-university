
<style>

#heading{
		font-size: 30px;
		color:white;
	}
	a{
		font-size: 18px;

	}
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}
</style>


<div id="banner">
	<img src="images/banner.png" width="100%" height="100%">
</div>	
		<div class="container">
	<nav class="navbar navbar-inverse">
		 	<div class="navbar-header">
		 	<p id="heading">
		 	&nbsp; &nbsp; &nbsp; Faculty of Engineering and Technology (Exclusively for Women), Kalaburagi</p>
			</div>
				<ul class="nav navbar-nav">
				    <li >
				    	<a href="index.php">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Home</a>
				    </li>
				    <li class="dropdown">
				    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">&nbsp;&nbsp;Departments 
				    	<span class="caret"></span>
				        </a>
			        	<ul class="dropdown-menu">
			          		<li class="dropdown-submenu">
			          			<a class=test  href="#">Under Graduation <span class="caret"></span></a>
			          				<ul class="dropdown-menu">
			          					<li> <a href="cse.php" >Computer Science & Engg </a></li>
			          					<li> <a href="ise.php" >Information Science & Engg</a></li>
			          					<li> <a href="ece.php" >Electronics & Communication Engg</a></li>
			          					<li> <a href="eee.php" >Electronics & Electrical Engg</a></li>
			          					<li> <a href="civil.php">Civil Engineering </a></li>
			          				</ul>
			          			</li>
			          		<li class="dropdown-submenu">
			          			<a class=test href="#">Post Graduation <span class="caret"></span></a>
			          			<ul class="dropdown-menu">
			          				<li><a href="" >Computer Science & Engineering</a></li>
			          				<li><a href="" >Digital Communication Networking</a></li>
			          				<li><a href="" >Master of Business Administration</a></li>
			          			</ul>
			          		</li>
			        	</ul>
			        </li>
			        
			        <li class="dropdown">
				    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">&nbsp;&nbsp;Admissions
				    	<span class="caret"></span>
				        </a>
			        	<ul class="dropdown-menu">
			        		<li><a href="ug.php" >Under Graduation</a></li>
			        		<li><a href="pg.php" >Post Graduation</a></li>
			        	</ul>
			        	</li>	

			        	<li>
				      	<a href="placement.php">&nbsp;&nbsp;Placement</a>
				        </li>
<!-- 
			         <li class="dropdown">
			       		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Faculty</a> 
			      	</li> -->

				   <!--  <li class="dropdown">
				    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Cutoff-KCET</a> <span class="caret"></span>
				    	</a>
			        
			      	</li> -->
			      	
			      	<!-- <li class="dropdown">
			      		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Placement</a> --><!--  <span class="caret"></span>
			      		</a>
			        	<ul class="dropdown-menu">
			          		<li>
			          			<a href="#">2017-18</a>
			          		</li>
			          		<li>
			          			<a href="#">2018-19</a>
			          		</li>
			        	</ul> -->

			       <li class="dropdown">
			       		<a class="dropdown-toggle" data-toggle="dropdown" href="#">&nbsp;&nbsp;Gallery
			       		<span class="caret"></span> 
			       		</a> 
				       		<ul class="dropdown-menu">
				          		<li><a href="images.php">Images</a></li>
				          		<li><a href="#">Videos</a>
				  </li>
				        	</ul> 
			      	</li>
			       
				    
				    <li>
				      	<a href="#">&nbsp;&nbsp;News and Articles</a>
				    </li>
				    
				    <!-- <li class="dropdown">
				    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Result</a> -->  <!-- <span class="caret"></span>
				    	</a>
			        	<ul class="dropdown-menu">
			          		<li>
			          			<a href="#">2017-18</a>
			          		</li>
			          		<li>
			          			<a href="#">2018-19</a>
			          		</li>
			        	</ul>
			      	</li> -->

			      	<li>
			      		<a href="contact.php" title="">&nbsp;&nbsp;Contact</a>
			      	 </li>
	        </div>
        </nav>
</div>



<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>