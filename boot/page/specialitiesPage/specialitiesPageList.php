<?php
  $blogData = $con->getSpecialityBy(); 
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
           

            <hr class="small">
            <div class="row">
              <?php foreach($blogData as $blog){ ?>
                <div class="col-md-6">
                  <div class="portfolio-item">
                    <a href="speciality.php?id=<?php echo $blog['id'];?>">
                      <img class="img-portfolio" src="img/<?php echo $blog['Image'];?>"   width = "445" height = "225">
                    </a>
                    <h4><?php echo $blog['title'];?></h4>
                  </div>
                </div>
              <?php  } ?>
              
              
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>

