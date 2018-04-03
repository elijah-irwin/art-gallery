<?php 
	include 'headers/indexHeader.php';
	include 'headers/dropdownbarHeader.php';
?>

<div class="container">
		<div class="jumbotron">
			<h1 class="heading">Our Team</h1>
			<p>Group #43</p>
		</div>

		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="thumbnail">
				<img src="assets/doritoResize.jpg">
				</div>
				<p>Mckenzie Irwin<br>500 697 853</p>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="thumbnail">
				<img src="assets/dany.jpg">
				</div>
				<p>Danylo Dotsenko<br>500 696 280</p>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="thumbnail">
				<img src="assets/maria.jpg">
				</div>
				<p>Maria Poveda<br>500 694 400</p>
			</div>
		</div>
	</div>

	<div class="container">
		<!-- The Modal -->
		<div id="myModal" class="modal">
		    
		    <!-- Modal content -->
		    <div class="modal-content">

		    	<div class="modal-header">
			        <span class="close">&times;</span>
			        <h2 id="title"></h2>
		    	</div>

		    	<div class="modal-body">
			    	<img id="photo" src="">
			    	<div id="info">	
					    <p id="name"></p>
					    <p id="stuNum"></p>
					    <p id="program"></p>
				    </div>
		    	</div>
		 	</div>
		</div>
	</div>

<?php include 'headers/indexFooter.php';?>