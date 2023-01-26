@include('layout.header')

<div class="container mt-5">
    @yield('content')
</div>


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
        <h4>
            Get In Touch
        </h4>
        <div class="row">
            <div class="col-lg-10 mx-auto">
            <div class="info_items">
                <div class="row">
                <div class="col-md-4">
                    <a href="">
                    <div class="item ">
                        <div class="img-box ">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <p>
                        Lorem Ipsum is simply dummy text
                        </p>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                    <div class="item ">
                        <div class="img-box ">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <p>
                        +02 1234567890
                        </p>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                    <div class="item ">
                        <div class="img-box">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <p>
                        demo@gmail.com
                        </p>
                    </div>
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</section>


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayDateYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->


</body>

</html>
