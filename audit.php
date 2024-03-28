<?php

  include ('includes/header2.php');
  include ('includes/navbar2.php');
   ?>
 <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Audits Report</h1>
         </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!--dropdown -->

<div class="row mx-md-n8">

  <div class="col px-md-5"><div class="p-3 border bg-light">

<div class="container">

  <form action="/action_page.php">
<div class="form-group">
    <label for="email">Select Division:</label>
    <select name="cars" id="cars" class="form-control" >

    <option value="volvo">Information System Division </option>
    <option value="saab">Medicle Division</option>
    <option value="opel">Operation Division</option>
    <option value="audi">Finance Division</option>
  </select>
  </div>



  <div class="form-group ">

    <label for="date">Select Date :</label> </div><br>
    <label for="date">From:</label>
    <input type="date" class="formcontrol" id="date" name="date">


    <label for="date" >To:</label>
    <input type="date" style="margin-bottom: 10px" class="formcontrol" id="date" name="date">

    	<br>
    <br>
    <button type="button"  class="btn btn-primary btn-lg btn-block">Report</button>

  </div>







   <?php
include('includes/scripts.php') ;

 include('includes/footer.php');

?>
