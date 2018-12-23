<div class="container">
  <div class="jumbotron">
    <h1>Admin Page</h1>
    <h3>hello <?php echo $_SESSION['username']; ?></h3>
  </div>
  <div class="row">
    <div class="col-12">
      <a href="<?php echo base_url(); ?>home/logout">Logout</a>
    </div>
  </div>
</div>