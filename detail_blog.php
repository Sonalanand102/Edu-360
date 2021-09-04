<?php
include('assets/config.php');
include('assets/header.php');
include('assets/navbar.php');
?>

<div class="container" style='margin-top:150px;'>

    <!--Blog section start-->
    <div style="padding:30px 50px;background-color:white;margin:50px 10px;border-radius:10px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;"
        class="blog-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">

            <div class="row">
                <?php
                $sql = "SELECT * FROM `blogs` WHERE id='" . $_GET['id'] . "'";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($query);
                $path = "assets/images/blog/" . $row['img'];
                ?>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <!-- Single Blog Start -->
                            <div class="blog post-full-item mb-30 col-lg-12">
                                <div class="blog-inner heading-color">
                                    <div class="blog-image" style="margin-top: 20px;">
                                        <a href="#" class="image"><img src="<?php echo $path; ?>" alt=""
                                                height="400px"></a>
                                        <ul class="meta theme-color" style="list-style: none;">
                                            <li><i class="fa fa-clock-o"></i><?php echo $row['created_at']; ?></li>
                                            <li><i class="fa fa-comments"></i>0</li>
                                        </ul>
                                    </div>
                                    <div class="content blog-grid-content">
                                        <h3 class="title"><?php echo $row['shrt_desc'] ?></h3>
                                        <blockquote>
                                            <p><?php echo $row['long_desc']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Blog End -->


                        </div>
                    </div>
                    <div class="col-lg-3 mt-sm-3 mt-xs-3">
                        <div class="sidebar"
                            style="display:flex;justify-content:center;align-items:center;flex-direction:column;">
                            <h3 class="sidebar-title">Recent Posts</h3>
                            <?php
                            $sel = "SELECT * FROM `blogs` ORDER BY `blogs`.`id` DESC";
                            $q = mysqli_query($conn, $sel);
                            while ($row1 = mysqli_fetch_array($q)) {
                                $path = "assets/images/blog/" . $row1['img'];
                            ?>
                            <div class="sidebar-blog"
                                style="background: linear-gradient(to bottom left, #e9a3ad 40%, #e2c6b5 100%);padding:5px;border-radius:5px;transition:all 300ms;box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;margin:10px; height:160px;width:150px;text-align:center;"
                                onmouseover="this.style.transform='scale(1.03)'"
                                onmouseout="this.style.transform='scale(1)'">

                                <a href="detail_blog.php?id=<?php echo $row1['id']; ?>" class="image"><img
                                        src="<?php echo $path; ?>" alt=""
                                        style="width: 115px;height:80px;margin-left: 10px;"></a>
                                <div class="content" style="height:70px;">
                                    <div><a
                                            href="detail_blog.php?id=<?php echo $row1['id']; ?>"><?php echo $row1['shrt_desc']; ?></a>
                                    </div>
                                    
                                </div>

                            </div>
                            <?php }  ?>
      
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!--Blog section end-->

    </div>

</div>


<?php
include("assets/footer.php");

?>