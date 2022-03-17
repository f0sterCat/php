<?php
    // Form submission script 
    include_once 'formsubmit.php';

    // Print form errors
    if(!empty($errors)) {
      echo "<ul class='errors'>";
      foreach($errors as $error) {
        echo "<li>".$error."</li>";
      }
      echo "</ul>";
    }

    //Print success message
    if(!empty($response)) {
      echo "<ul class='success'>";
      foreach($response as $res) {
        echo "<li>".$res."</li>";
      }
      echo "</ul>";
    }
  ?>
   
    <div class="container">
      <form id="form-id" class="form-class" method="post" action="">
        
        <div class="form-group">
          <label for="name" class="label">Name</label>
          <div class="input-group">
            <input type="text" id="name" name="name" class="form-control">
          </div>
        </div>
      
        <div class="form-group">
          <label for="email" class="label">Email</label>
          <div class="input-group">
            <input type="email" id="email" name="email" class="form-control">
          </div>
        </div>
        
        <div class="form-group">
          <label for="subject" class="label">Subject</label>
          <div class="input-group">
            <input type="text" id="subject" name="subject" class="form-control">
          </div>
        </div>
          
        <div class="form-group">
	        	<label for="message" class="label">Message</label>
		      <div class="input-group">
			          <textarea id="message" name="message" class="form-control" rows="6" maxlength="3000"></textarea>
	        </div>
	      </div>
        <div class="form-group">
		        <button type="submit" name="submit" id="button" class="btn btn btn-lg btn-block">Send</button>
        </div>

         
      </form>
  </div>
