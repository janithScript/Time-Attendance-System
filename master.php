
  <?php 

  include ('includes/header.php');
  include ('includes/navbar.php');
   ?>











    <!--dropdown -->
    
<div class="row mx-md-n8">
  
  <div class="col px-md-5"><div class="p-3 border bg-light">
    
<div class="container">
 
 
  <div class="form-group">
    <label for="place">Employee master records:</label>

    <table class="table table-striped">
    <form class="table table-striped">

      </div>
        </div>
         
           


 

      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="Employee Nnumber">#</th>
      <th scope="col">Name</th>
      <th scope="col">Division</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">513622</th>
      <td>P D L Fernando</td>
      <td>INFORMATION SYSTEMS</td>
      <td>


       <a href="masterviwe.php">
          <button type="button" class="btn btn-primary btn-sm">
              <i class="far fa-eye"></i>
            </button>
        </a>
             


       <a href="masterviwe.php">
          <button type="button" class="btn btn-success btn-sm">
              <i class="fas fa-edit"></i>
            </button>
        </a>
<a href="masterviwe.php">
          <button type="button" class="btn btn-danger btn-sm">
              <i class="far fa-trash-alt"></i>
            </button>
        </a>


            
   
    </tr>
  </tbody>
</table>
 </div>

<?php  
include('includes/scripts.php') ;
include('includes/footer.php');  

?>


