<?php
    include('assets/header.php');
    include('assets/navbar.php');
?>

<h2 class='text-center text-light' style='margin-top:150px;'>Contact Us</h2>

<div class='container d-flex justify-content-center text-light' > 
<form class='contact-form' onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
  <div class="form-group">
    <label for="name">Your Name</label>
    <input type="text" class="form-control"  placeholder="Enter Your Name">
  </div>
  <div class="form-group">
    <label for="email">Your Email</label>
    <input type="email" class="form-control"  placeholder="Enter Your Email">

  </div>
  <div class="form-group">
    <label for="phone">Phone No.</label>
    <input type="tel" class="form-control"  placeholder="Enter Your Phone No." max-width='10'>

  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" rows="3" placeholder='Enter Your Message'></textarea>
  </div>

  <div class="form-group d-flex justify-content-center">
  <button class='btn btn-primary '>Submit</button>

  </div>
</form>
</div>

<?php
    include('assets/footer.php');
?>