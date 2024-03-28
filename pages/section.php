<?php 

  include ('time/includes/header.php');
  include ('time/includes/navbar.php');
   ?>

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

  
  <div class="form-group">
    <label for="formGroupExampleInput">Add Section</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  </div>
    <option value="volvo">Information System </option>
    <option value="saab">Administration</option>
    <option value="opel">unit 1</option>
    <option value="audi">level 2</option>
  </select>
  </div>



<?php  
include ('includes/scripts.php') ;
   
 include ('includes/footer.php');  

?>
  