<?php
    include('assets/header.php');
    include('assets/navbar.php');
    include('assets/config.php');
    if(isset($_POST['contact_btn'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $message=$_POST['message'];

      $in="INSERT INTO `contactus`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')";
      $query=mysqli_query($conn,$in);
      if($query){
        echo "<script>alert('Thank you for your response!! we will get back to you soon.');window.location='index.php';</script>";
      }else{
        echo "<script>alert('Something went wrong!!please retry...');window.location='contact.php';</script>";
      }
    }
?>

<h2 class='text-center text-light' style='margin-top:150px;'>Contact Us</h2>

<div class='container d-flex justify-content-center text-light' > 
<form action='' method='post' class='contact-form'  enctype="multipart/form-data" onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
  <div class="form-group">
    <label for="name">Your Name</label>
    <input type="text" class="form-control" name='name'  placeholder="Enter Your Name">
  </div>
  <div class="form-group">
    <label for="email">Your Email</label>
    <input type="email" class="form-control" name='email'  placeholder="Enter Your Email">

  </div>
  <div class="form-group">
    <label for="phone">Phone No.</label>
    <input type="tel" class="form-control" name='phone'  placeholder="Enter Your Phone No." max-width='10'>

  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" rows="3" name='message' placeholder='Enter Your Message'></textarea>
  </div>

  <div class="form-group d-flex justify-content-center">
  <button type='submit' name='contact_btn' class='btn btn-primary '>Submit</button>

  </div>
</form>
</div>

<?php
    include('assets/footer.php');
?>