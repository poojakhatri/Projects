<?php
  $blogData = $con->getBlog(); 
// // echo "<pre>";print_r($blogData);
//   $title = $blogData['title'];
//   $description = $blogData['description'];
//   $content = $blogData['content'];
?>

<!-- Portfolio -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h2>User Experience</h2>

            <hr class="small">
            <div class="row">
              
              <div class="col-md-6">
               <div class="portfolio-item">
                  <a href="post.php?id=-1">
                    <img class="img-portfolio" src="img/add.jpg"  width = "445" height = "225" style="height:!auto">
                  </a>
                  <h4>Add New Blog</h4>
                </div>
              </div>
              <?php foreach($blogData as $blog){ ?>
                <div class="col-md-6">
                  <div class="portfolio-item">
                    <a href="post.php?id=<?php echo $blog['id'];?>">

                      <img class="img-portfolio" src="img/<?php echo $blog['Image'];?>"   width = "445" height = "225">
                    </a>
                    <h4><?php echo $blog['title'];?></h4>
                  </div>
                </div>
              <?php  } ?>
              
            </div>
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
