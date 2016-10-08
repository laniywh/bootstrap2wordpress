<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>

	</div><!-- #content -->



  <!-- SIGN UP SECTION
  ================================================ -->
  <section id="sign-up" data-type="background" data-speed="4">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>

          <p><a href="#hero" class="btn btn-lg btn-success btn-block">Yes, sign me up!</a></p>
        </div><!-- col -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- sign-up -->


  <!-- FOOTER
  ================================================ -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Bootstrap to WordPress">
        </div><!-- col -->
        <div class="col-sm-6">
          <?php
            wp_nav_menu( array(

              'menu'              => 'Footer Menu',
              'theme-location'    => 'footer',
              'container'         => 'nav',
              'menu_class'        => 'list-unstyled list-inline'

              ) );
          ?>
        </div><!-- col -->
        <div class="col-sm-3">
          <?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> <?php echo the_author_link(); ?>
        </div><!-- col -->
      </div>
    </div>

  </footer>


  <!-- MODAL
  ================================================ -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title"><i class="fa fa-envelope"></i> Subscribe to our mailing list</h4>
        </div><!-- modal-header -->

        <div class="modal-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia qui amet omnis voluptatum sapiente tempora itaque.</p>

          <form class="form-inline" role="form">

            <div class="form-group">
              <label class="sr-only" for="subscribe-name">Your first name</label>
              <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
            </div><!-- form-group -->

            <div class="form-group">
              <label class="sr-only" for="subscribe-email">Your email</label>
              <input type="text" class="form-control" id="subscribe-email" placeholder="Your email">
            </div><!-- form-group -->

            <input type="submit" class="btn btn-danger" value="Subscribe">

          </form>

          <hr>

          <p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam maxime repellat nihil.</small></p>
        </div><!-- modal-body -->

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- BOOTSRAP CORE JAVASCRIPT
       Placed at the end of the document so the pages
       load faster
  ================================================ -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.1.1.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

  <!-- TypeKit Fonts -->
  <script src="https://use.typekit.net/wvf4ubx.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_footer(); ?>

</body>
</html>
