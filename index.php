<?php include "header.php"; ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="padding-top: 40px">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/2.jpg" style="width: 100%; height: 450px">
    </div>

    <div class="item">
      <img src="img/c1.jpg" style="width: 100%; height: 450px">
    </div>

    <div class="item">
      <img src="img/c2.png" style="width: 100%; height: 450px">
    </div>

    <div class="item">
      <img src="img/electricity.jpeg" style="width: 100%; height: 450px">
    </div>

    <div class="item">
      <img src="img/water-issue.jpg" style="width: 100%; height: 450px">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- Page Content -->
    <div class="container" style="padding-top: 30px">

        <div class="row">
            <div class="col-lg-6">
                <h3><b>Gramin Digital Solutions</b></h3>
                <p></p>
            </div>
            <div class="col-lg-2">
                <center><img src="img/111.jpg" style="border-radius: 50%">
                    <h5><b>C. P. Radhakrishnan<br><span style="font-size: 12px">Governor</span></b></h5>
                </center>
            </div>
            <div class="col-lg-2">
                <center><img src="img/12.jpg" style="border-radius: 50%">
                    <h5><b>Shri Hemant Soren<br><span style="font-size: 12px">Chief Minister</span></b></h5>
                </center>
            </div>
            <div class="col-lg-2">
                <center><img src="img/13.jpeg" style="border-radius: 50%">
                    <h5><b>Lalbiaktluanga Khiangte<br><span style="font-size: 12px">Chief Secretary</span></b></h5>
                </center>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12" style="text-align:center">
                   <b class="copyright">&copy; 2024 Gramin Digital Solutions </b> All rights reserved.
                </div>
            </div>
           
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
