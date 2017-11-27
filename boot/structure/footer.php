
    <!-- Footer -->
    <section id = "contact" style="background-color: #eeeeed">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">

            <h2> If you need any help </h2>

              <form class="form-horizontal" id="submitForm" method="post" action="submit.php">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="mobile" class="col-sm-2 control-label">Mobile</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="mobile" name="mobile" placeholder="+91 9999999999">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">E-Mail</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 text-right">
                    <button type="submit" class="btn btn-success">Submit Details</button>
                  </div>
                </div>
              </form>

              <span id="footerNotification"></soan>

          </div>
          <div class="col-lg-6 mx-auto text-center">
            <h4>
              <strong>Jaipur Tourism</strong>
            </h4>
            <p>35-Room no, Kalpana Hostel
              <br>Pondicherry University</p>
            <ul class="list-unstyled">
              <li>
                <i class="fa fa-phone fa-fw"></i>
                +91-8900000000</li>
              <li>
                <i class="fa fa-envelope-o fa-fw"></i>
                <a href="mailto:name@example.com">pinkjaipur@tiddle.com</a>
              </li>
            </ul>
            <br>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="http://facebook.com/pooja" target="_blank">
                  <i class="fa fa-facebook fa-fw fa-3x"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://twitter.com/tourism_jaipur" target="_blank">
                  <i class="fa fa-twitter fa-fw fa-3x"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/jaipiurtourism/">
                  <i class="fa fa-instagram fa-fw fa-3x"></i>
                </a>
              </li>
            </ul>
            <hr class="small">
            <p class="text-muted">Copyright &copy; jaipurtourism2017</p>
          </div>
        </div>
      </div>
      <a id="to-top" href="#top" class="btn btn-dark btn-lg js-scroll-trigger">
        <i class="fa fa-chevron-up fa-fw fa-1x"></i>
      </a>

    </footer>
  </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.js"></script>

    <script>
      $( "body" ).on('submit', '#submitForm',  function(event){
        event.preventDefault();
        $.post("submit.php",$(this).serialize(),function(responseData){
          $('#footerNotification').html( '<p class="bg-success" style="color:white;">' + responseData + '</p>').focus();
        });
      });
      // submitForm
    </script>

  </body>

</html>
