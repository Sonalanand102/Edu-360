<?php
include 'assets/config.php';
include 'assets/header.php';
include 'assets/navbar.php';

?>

<div class="homePage container">
    <div class="row">
        <div class="col-md-6 text-white my-5">
            <h1 >Hello there, <span id='brainless'>This is EDU-360.</span> </h1>
            <br><h3>One stop destination for Academics plus Innovative Workspace for AKU.</h3> 
            <div ><i class="fas fa-dove"></i> <i class="fas fa-dove"></i></div>
            <br>
            
            <p class='mt-4'>
            
            <br><h4>Here are some features of EDU-360</h4><br>

            ExamSpace - A place to find the previous year papers that serves the new AKU curriculum
            <br><br> LearnSpace - A place to find study materials of respective semesters
            <br><br>Blog Section - In this section anyone with login credentials can post blogs
            <br><br> Discussion Panel - All the queries and doubts will be resolved here

            </p>
            <button id='register-btn'><a href="contact.php">Contact Us</a></button>
        </div>
        <div class="col-md-6">
            <img src="assets\images\Untitled design.gif" alt="">
        </div>
    </div>
    <!-- study space -->
    <div class="studySpace text-center" style='background-color:#121e42; color:#fff;border-radius:10px; margin-top:-100px;'>
      <div class="row" style='font-size:32px; padding:20px; word-spacing:3px; '>
        <div class="col-md-6">
            <a href="exam_space.php">
                <i class="fas fa-book"></i>
                <div>
                Exam Space 
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="learn_space.php" class=''>
                <i class="fas fa-book-reader"></i>
                <div>
                    Learn Space
                </div>
            </a>
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
                <?php
                    $sel="SELECT * FROM `notification` ORDER BY `notification`.`id` DESC";
                    $query = mysqli_query($conn,$sel);
                    while($row=mysqli_fetch_assoc($query)){
                ?>
                <tr onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
                    <td class='pl-4'><?php echo $row['created_at'];?></td>
                    <td class='text-center'><?php echo $row['notice'];?></td>
                </tr>
                <?php } ?>              
            </tbody>
        </table>
    </div>
</div>
<?php
include 'assets/footer.php';
?>