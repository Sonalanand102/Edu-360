<?php
include('assets/config.php');
include('assets/header.php');
include('assets/navbar.php');
if(isset($_POST['uploadblog_btn'])){
    $shrt_desc=$_POST['blogTitle'];
    $long_desc=$_POST['blogMsg'];
    $img=$_FILES['blogImg']['name'];

    $sql = "INSERT INTO `blogs`(`img`,`shrt_desc`,`long_desc`) VALUES('" . $img . "','" . $shrt_desc . "','" . $long_desc . "')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        if (move_uploaded_file($_FILES["blogImg"]["tmp_name"], "assets/images/blog/" . $img))
        echo "<script>alert('blog Uploaded successfully!!'); window.location='blog.php';</script>";
    } else {
        echo "<script>alert('can't upload blog!!retry...');window.location='blog.php';</script>";
    }
}

?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Write Your Blog Here</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Image:</label>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="blogImg" name="blogImg" required
                                    accept="image/*">
                                <label class="custom-file-label" for="blogImg">Choose file</label>
                            </div>
                        </div>



                    </div>
                    <div class="form-group">
                        <label for="blogTitle" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" id="blogTitle" name="blogTitle"
                            placeholder="Enter Title of the Blog" required>
                    </div>
                    <div class="form-group">
                        <label for="blogMsg" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="blogMsg" name="blogMsg" rows="10"
                            placeholder="Write Blog Here" required></textarea>
                    </div>
                </div>
                <div class="modal-footer buttons">
                    <button type="button" class="btn1" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn1" name="uploadblog_btn"
                        style="background: linear-gradient(to bottom left, #e9a3ad 40%, #e2c6b5 100%);">Upload</button>
                </div>
            </form>

        </div>
    </div>
</div>



<div class="container">
    <!--Blog section start-->
    <div 
        class="blog-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-45 pb-lg-25 pb-md-15 pb-sm-5 pb-xs-15">
        <div class="container">
            <a href="" data-toggle="modal" data-target="#exampleModal" class="pb-5" style="margin-left: auto;">
                <h2 class="pb-5"><i class="fa fa-plus"></i> Post Blogs </h2>
            </a>

            <div class="row d-flex justify-content-center">
            <?php
                $select = "SELECT * FROM `blogs` ORDER BY `blogs`.`id` DESC";
                $qry = mysqli_query($conn, $select);

                while ($row = mysqli_fetch_array($qry)) {
                    $path = "assets/images/blog/" . $row['img'];


                ?>
                <!-- Single Blog Start -->
                <div class="blog-items mb-30 mb-xs-10 col-md-3 col-sm-3"
                    onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
                    <div class="blog-inner heading-color">
                        <div class="blog-image">
                            <a href="detail_blog.php?id=<?php echo $row['id'];?>" class="image"><img
                                    src="<?php echo $path; ?>" alt="" height='245px' width='100%'></a>
                            <ul class="meta theme-color" style="list-style: none;">
                                <li> <?php echo $row['created_at'];?><i class="fa fa-clock"></i></li>
                            </ul>
                        </div>
                        <div class="content" style="margin-left: 20px; font-size:10px;">
                            <h3 class="title"><a
                                    href="detail_blog.php?id=<?php echo $row['id'];?>"><?php echo $row['shrt_desc'];?></a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- Single Blog End -->
                    <?php } ?>    

            </div>

        </div>
    </div>
</div>
    <!--Blog section end-->

    <?php
    include('assets/footer.php');
    ?>