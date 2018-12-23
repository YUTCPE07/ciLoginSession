<div class="container">

  <div class="jumbotron">
    <h1>My First Bootstrap Page</h1>
  </div>


  	<div class="col-6 offset-3">
  		<form method="post" action="<?php echo base_url(); ?>home/login_varidation">
		  	<div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input name="username" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			    <small class="form-text text-muted"><?php //echo form_error('username'); ?></small>
		  	</div>
			<div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			    <!-- <small class="form-text text-muted"><?php //echo form_error('password'); ?></small> -->
			</div>
		  	<!-- <div class="form-check">
		    	<input type="checkbox" class="form-check-input" id="exampleCheck1">
		    	<label class="form-check-label" for="exampleCheck1">Check me out</label>
		  	</div> -->
		  	<button type="submit" class="btn btn-primary">Submit</button>
		  	<div class="form-group">
  				<!-- <?php 
  					//$this->session->flashdata('error');
	  			?> -->
		  	</div>
		</form> 
  	</div> <!-- col-6 offset-3 -->
  	
</div> <!-- container -->

<!-- base_url(); -->