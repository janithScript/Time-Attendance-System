
  <?php 

  include ('includes/header.php');
  include ('includes/navbar.php');
   ?>









<div class="mb-8">
    
<div class="row mx-md-n9">
  
  
    

 
  


  <div class="p-5 border bg-light">
          
<div class="col px-md-10">
          <div class="container">
 
  <div class="container">
  <h2>Edit Master Records</h2>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
       <label for="formGroupExampleInput" class="form-label">Emplyee Number</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="employee number" placeholder="employee number" name="employee number">
      </div>
    </div>
    




    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>



<?php  
include('includes/scripts.php') ;
include('includes/footer.php');  

?>
