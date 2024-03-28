
  <?php 

  include ('includes/header.php');
  include ('includes/navbar.php');
   ?>









    
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Unit Attendance Report</h1> 
         </div> 
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!--dropdown -->
    
<div class="row mx-md-n8">
  
  <div class="col px-md-5"><div class="p-3 border bg-light">
    
<div class="container">
 
  <form  method="POST" action="./section_action.php">
<div class="form-group">
    <label for="div1">Select Division:</label>
    <select name="div1" id="div1" class="form-control" >
   
    <option value="IS">Information System Division </option>
    <option value="MD">Medical Division</option>
    <option value="OD">Operation Division</option>
    <option value="FD">Finance Division</option>s
  </select>
  </div>

  <div class="form-group">

    <label for="exampleFormControlTextarea1">New section name</label>
    <input class="form-control" name= "sec" type="text">
  </div>


  

    <br>
    <button type="submit"  class="btn btn-primary btn-lg btn-block">Create Section</button>

  </div>

<?php  
include('includes/scripts.php') ;
 include('includes/footer.php');  

?>


