
  <?php 

  include ('includes/header2.php');
  include ('includes/navbar.php');
  include ('./dbc.php');
   ?>

<?php
if (isset($_GET['error']) && $_GET['error'] === 'password_mismatch') {
    echo '<p style="color: red;">Passwords do not match. Please try again.</p>';
}
?>








    
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create user</h1> 
         </div> 
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!--dropdown -->
    
<div class="row mx-md-n8">
  
  <div class="col px-md-5"><div class="p-3 border bg-light">
    
<div class="container">
 


<form method="POST" action="./user_action.php">
    <div class="form-group">
        <label for="division">Select Division:</label>
        <select name="div" id="div" class="form-control">
            <!-- Options go here -->
            <option value="IS">Information System Division </option>
            <option value="MD">Medical Division</option>
            <option value="OD">Operation Division</option>
            <option value="FD">Finance Division</option>
        </select>
    </div>

    <div class="form-group">
        <label for="role">Select user role:</label>
        <select name="role" id="role" class="form-control">
            <option value="Super_Ad">Super Admin </option>
            <option value="Administration">Administration</option>
            <option value="Administration_clerk">Administrative Clerk</option>
            <option value="clerk">Clerk</option>
        </select>
    </div>

    <div class="form-group">
        <label for="password">Create Password:</label> 
        <input type="password" id="password" name="password" placeholder="Password" required>
    </div>

    <div class="form-group">
        <label for="re-password">Confirm Password:</label> 
        <input type="password" id="re-password" name="re-password" placeholder="Confirm Password" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block">create user</button>
    </div>
</form>



<?php  
include('includes/scripts.php') ;
 include('includes/footer.php');  

?>


