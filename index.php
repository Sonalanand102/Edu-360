<?php
include 'assets/header.php';
include 'assets/navbar.php';
?>

<div class="homePage container">
    <div class="row">
        <div class="col-md-6 text-white my-5">
            <h1 >It’s time we started <span id='brainless'>BRAINLESS</span> each other. </h1>
            <div ><i class="fas fa-dove"></i> <i class="fas fa-dove"></i></div>
            <p class='mt-4'>Hello there, This is EDU-360. One stop destination for Academics plus Innovative Workspace for AKU.
            <br>
            <br> ExamSpace - A place to find the previous year papers that serves the new AKU curriculum</br>
            <br> LearnSpace - A place to find study materials of respective semesters. </br>
            

            </p>
            <button id='register-btn'>Register yourself</button>
        </div>
        <div class="col-md-6">
            <img src="assets\images\Untitled design.gif" alt="">
        </div>
    </div>
    <!-- study space -->
    <div class="studySpace text-center" style='background-color:#121e42; color:#fff;border-radius:10px; margin-top:-100px;'>
      <div class="row" style='font-size:32px; padding:20px; word-spacing:3px; '>
        <div class="col-md-6">
          <i class="fas fa-book"></i>
          <div>
            Exam Space <br>
          </div>
        </div>
        <div class="col-md-6">
          <i class="fas fa-book-reader"></i>
          <div>
            Learn Space
          </div>
        </div>
      </div>
    </div>
<!-- Notification Table -->
    <div class="n-table text-light my-5" style='border-radius:10px; border:2px solid #fff; background-color:#121e42;'>
        <table class="table" >
            <thead >
                <tr >
                    <th class='pl-5' style='border-top:none;'>Date</th>
                    <th class='text-center' style='border-top:none;'>Notifications</th>
                </tr>
            </thead>
            <tbody >
                <tr  onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
                    <td class='pl-4'>16-Sept-2021</td>
                    <td class='text-center'>Induction Session | GDSC BCE Patna</td>
                </tr>
                <tr onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'" >
                    <td class='pl-4'>12-1-2021</td>
                    <td class='text-center'>Lorem ipsum dolor, sit amet consectetur adipisicing Lorem, ipsum dolor.</td>
                </tr>
                <tr onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
                    <td class='pl-4'>12-1-2021</td>
                    <td class='text-center'>Lorem ipsum dolor, sit amet consectetur adipisicing Lorem, ipsum dolor.</td>
                </tr>
                <tr onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
                    <td class='pl-4'>12-1-2021</td>
                    <td class='text-center'>Lorem ipsum dolor, sit amet consectetur adipisicing Lorem, ipsum dolor.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php
include 'assets/footer.php';
?>