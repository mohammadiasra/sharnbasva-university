
<style>



#heading{
		color:white;
		font-size: 30px;
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
	<img src="images/banner.png" width="100%" height="100%" >
	</div>	

		<div class="container">
	<nav class="navbar navbar-inverse">
		 	<div class="navbar-header">
		 	<p id="heading">
		 	&nbsp; &nbsp; &nbsp; Faculty of Engineering and Technology (Exclusively for Women), Kalaburagi</p>
			</div>
				<ul class="nav navbar-nav">
				    <li >
				    	<a href="index.php">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Home</a>
				    </li>
				    <li class="dropdown">
				    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">&nbsp; &nbsp;Departments
				    	<span class="caret"></span>
				        </a>
			        	<ul class="dropdown-menu">
			          		<li class="dropdown-submenu">
			          			<a class=test  href="#">Under Graduation <span class="caret"></span></a>
			          				<ul class="dropdown-menu">
			          					<li> <a href="cse.php" >Computer Science & Engg </a></li>
			          					<li> <a href="ise.php" >Information Science & Engg</a></li>
			          					<li> <a href="ece.php" >Electronics & Communication Engg </a></li>
			          					<li> <a href="eee.php" >Electronics & Electrical Engg</a></li>
			          					<li> <a href="civil.php" >Civil Engineering </a></li>
			          				</ul>
			          			</li>
			          		<li class="dropdown-submenu">
			          			<a class=test href="#">Post Graduation <span class="caret"></span></a>
			          			<ul class="dropdown-menu">
			          				<li><a href="" >Computer Science & Engineering</a></li>
			          				<li><a href="" >Digital Communication & Networking</a></li>
			          				<li><a href="" >Master of Business Administration</a></li>
			          			</ul>
			          		</li>
			        	</ul>
			        </li>

				   <!--  <li class="dropdown">
				    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Cutoff-KCET <span class="caret"></span>
				    	</a>
			        	<ul class="dropdown-menu">
			          		<li class="dropdown-submenu">
			          			<a class=test href="#">Under Graduation<span class="caret"></span></a>
			          			<ul class="dropdown-menu">
			          				<li><a href="cutoffug18.php" >2018</a></li>
			          				<li><a href="cutoffug19.php" >2019</a></li>
			          			</ul>
			          		</li>
			          		<li class="dropdown-submenu">
			          			<a class=test href="#">Post Graduation<span class="caret"></span></a>
			          			<ul class="dropdown-menu">
			          				<li><a href="#">2018</a></li>
			          				<li><a href="#">2019</a></li>
			          			</ul>
			          		</li>
			        	</ul>
			      	</li> -->
			       <li class="dropdown">
			       		<a class="dropdown-toggle" data-toggle="dropdown" href="#">&nbsp;&nbsp;Faculty <span class="caret"></span></a>
			        	<ul class="dropdown-menu">
			          		<li>
			          			<a href="teaching.php">Teaching staff</a>
			          		</li>
			          		<li>
			          			<a href="nonteaching.php">Non-teaching staff</a>
			          		</li>
			        	</ul>
			      	</li>

			      	<li>
				      	<a href="placement1.php">&nbsp;&nbsp;Placement</a>
				    </li>

			      	<!-- <li class="dropdown">
			      		<a class="dropdown-toggle" data-toggle="dropdown" href="placement.php">Placement
			      		 <span class="caret"></span>
			      		</a>
			        	<ul class="dropdown-menu">
			          		<li>
			          			<a href="#">2017-18</a>
			          		</li>
			          		<li>
			          			<a href="#">2018-19</a>
			          		</li>
			        	</ul>
			      	</li>
 -->
			       <li class="dropdown">
			       		<a class="dropdown-toggle" data-toggle="dropdown" href="#">&nbsp;&nbsp;Gallery <span class="caret"></span>
			       		</a>
			       	 	<ul class="dropdown-menu">
			          		<li>
			          			<a href="image.php">Images</a>
			          		</li>
			          		<li>
			          			<a href="#">Videos</a>
			          		</li>
			        	</ul>
			      		</li>
			       
				    
				    <li>
				      	<a href="#">&nbsp;&nbsp;News and Articles</a>
				    </li>
				    

				    <li>
				      	<a href="#">&nbsp;&nbsp;Result</a>
				    </li>
				    <!-- <li class="dropdown">
				    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">&nbsp;&nbsp;Result <span class="caret"></span>
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

			      	<!-- <li>
				      	<a href="contact.php">Contact</a>
				    </li> -->

			      	<!-- <li class="dropdown">
				    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact <span class="caret"></span>
				    	</a>
			        	<ul class="dropdown-menu">
			          		<li>
			          			<a href="contact.php">Contact </a>
			          		</li>
			          		<li>
			          			<a href="map.php">Maps</a>
			          		</li>
			        	</ul>
			      	</li> -->
			    </ul>
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