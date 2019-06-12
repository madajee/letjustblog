<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package letjustblogwordpress
 */

?>
<?php wp_footer(); ?>
  <!-- SIGN UP SECTION
================================================== -->
<section id="signup" data-type="background" data-speed="4">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
        <p><a href="" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
      </div><!-- end col -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- signup -->

<!-- FOOTER
================================================== -->
<footer>
  <div class="container">
    <div class="row">
        <div class="col-md-3">
            <p><a href="index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a></p>
        </div><!-- end col -->
        <div class="col-md-6">
          <nav>
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item"><a href="">Home</a></li>
              <li class="list-inline-item"><a href="">Blog</a></li>
              <li class="list-inline-item"><a href="">Resources</a></li>
              <li class="list-inline-item"><a href="">Contact</a></li>
              <li class="signup-link list-inline-item"><a href="">Sign up now</a></li>
            </ul>
          </nav>
        </div><!-- end col -->
        <div class="col-md-3">
          <p>&copy; 2014 Brad Hussey</p>
        </div><!-- end col -->
    </div>
  </div><!-- container -->
</footer>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel"><h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
        
            <form class="form-inline" role="form">
              <div class="form-group">
                <label class="sr-only" for="subscribe-name">Your first name</label>
                <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
              </div>
              <div class="form-group">
                <label class="sr-only" for="subscribe-email">and your email</label>
                <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
              </div>
              <input type="submit" class="btn btn-danger" value="Subscribe!">
            </form>
            
            <hr>
            
            <p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- FOOTER -->
  <footer id="main-footer" class="text-center p-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <p>&#9410;
          <span id="year"></span></p>
      </div>
    </div>
  </div>
</footer>
  
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>
<script>
  // Get the current year for the copyright
  $('#year').text(new Date().getFullYear());
</script>

</body>
</html>
