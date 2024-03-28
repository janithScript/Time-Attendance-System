<?php

  include ('includes/header.php');
  include ('includes/navbar2.php');
  include ('./dbc.php');
   ?>

<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change the password</h1>
         </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <div class="row mx-md-n8">

  <div class="col px-md-5"><div class="p-3 border bg-light">

<div class="container">

<form action="./chng_pwd.action.php" method="post">
<div class="form-group">
        <label for="password">Current Password:</label>
        <input type="password" id="password" name="password" placeholder="Current Password" required>
    </div>

    <div class="form-group">
        <label for="re-password">New Password:</label>
        <input type="password" id="re-password" name="new-password" placeholder="New Password" required>
    </div>
    <div class="form-group">
        <label for="re-password">Confirm Password:</label>
        <input type="password" id="re-password" name="re-password" placeholder="Confirm Password" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Change</button>
    </div>
</form>

</div>


<?php

include ('includes/footer.php');
include ('includes/scripts.php');
 ?>
