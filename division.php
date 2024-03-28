    
<?php 

  include ('includes/header.php');
  include ('includes/navbar.php');
   ?>










     <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Division </h1> 
         </div> 
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!--dropdown -->
    
<div class="row mx-md-n8">
  
  <div class="col px-md-5"><div class="p-3 border bg-light">
    
<div class="container">
 
  <form method="POST" action="./division_action.php">


  <div class="form-group">

    <label for="exampleFormControlTextarea1">New Division Name</label>
    <input class="form-control" name="div2" type="text">
  </div>

 <br>
    <button type="submit"  class="btn btn-primary btn-lg btn-block">Create Division</button>

  </div>

  <?php  
include('includes/scripts.php') ;
 include('includes/footer.php');  

?>
