<?php

  include ('includes/header.php');
  include ('includes/navbar.php');
   ?>

<div class="row mx-md-n8">

  <div class="col px-md-5"><div class="p-3 border bg-light">

<div class="container">


<form action="/action_page.php">

	<div>


	<div class="form-group">
    <label for="email">Select Section:</label>
    <select name="cars" id="cars" class="form-control" >

    <option value="volvo">Information System </option>
    <option value="saab">Administration</option>
    <option value="opel">unit 1</option>
    <option value="audi">level 2</option>
  </select>
  </div>

  <div class="form-group ">

    <label for="date">Select Date :</label> </div><br>
    <label for="date">Date:</label>
    <input type="date" style="margin-bottom: 10px" class="formcontrol" id="date" name="date">


<br>
    <button type="button"  class="btn btn-primary btn-lg btn-block">Report</button>

  </div>

</div>

  <?php
include('includes/scripts.php') ;

 include('includes/footer.php');

?>


