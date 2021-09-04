
    <div class="container-flueid bg-light">
      <div class="container py-5">
        <div class="row ">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8 bceLogo">
                <img src="assets\images\Untitled design.svg" alt="">
                <h4>BrainLess Buddies</h4>
                <p class='mt-3'><h5>Positive Vibes Only</h5></p>
                <div  class=' socialMedia mt-5' >
                 <a href="https://www.facebook.com/"><i class='fab fa-facebook text-dark '></i></a> 
                 <a href="https://www.linkedin.com/"><i class='fab fa-linkedin text-dark pl-3'></i></a> 
                 <a href="https://github.com/Nitish-web-nik/Edu-360"><i class='fab fa-github text-dark pl-3'></i></a> 

                </div>
                <div class="copyri8 mt-3">
                  <i class="far fa-copyright"></i>2021 The Brainless Buddies
                </div>
              </div>
              <div class="col-md-4 mt-5">
              <a href="login.php"<button type="button" class="btn btn-outline-info">Login</button></a>
                <div><br>Get View and Edit Access by Logging <br>In</div>
              </div>
            </div>  
          </div>
          <div class="col-md-6 mt-5">
            <div class="row">
              <div class="col-md-4">
                <a href="about.php"<button type="button" class="btn btn-outline-info">About Us</button></a>
                <div><br>Passionate, Motivated and Energized College Students</div>
              </div>
              <div class="col-md-4">
              <a href="index.php"<button type="button" class="btn btn-outline-info">Our Address</button></a>
                <div><br>Patna, Bihar<br> Pin Code - 803212 India</div>
              </div>
              <div class="col-md-4">
              <a href="contact.php"<button type="button" class="btn btn-outline-info">Contact Us</button></a>
                <button class='btn btn-primary' >Mail Us <i class="fas fa-envelope"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
        <script src="http://websdk.sawolabs.com/sawo.min.js"></script>
        <script>
            var config = {
                containerID: "sawo-container",
                identifierType: "email", // can be either 'email' or 'phone_number_sms'
                apiKey: "0c5f5b4f-b1c6-4a46-8539-5ef2b6ba0602", // add your api key here
                onSuccess: (payload) => {
          
document.getElementById("status").innerHTML =
                        "Login Success";
                        var is_logged_in = true;
                        
                },
            };
            var sawo = new Sawo(config);
            sawo.showForm();
        </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>



            