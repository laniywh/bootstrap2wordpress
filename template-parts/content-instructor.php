<?php
$instructor_section_title   = get_field( 'instructor_section_title' );
$instructor_name            = get_field( 'instructor_name' );
$bio_excerpt                = get_field( 'bio_excerpt' );
$full_bio                   = get_field( 'full_bio' );
$twitter_username           = get_field( 'twitter_username' );
$facebook_username          = get_field( 'facebook_username' );
$google_plus_username       = get_field( 'google_plus_username' );
$num_students               = get_field( 'num_students' );
$num_reviews                = get_field( 'num_reviews' );
$num_courses                = get_field( 'num_courses' );
 ?>

<!-- INSTRUCTOR
================================================ -->
<section id="instructor">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-6">
        <div class="row">
          <div class="col-lg-8">
            <h2><?php echo $instructor_section_title; ?><small><?php echo $instructor_name; ?></small></h2>
          </div><!-- col -->
          <div class="col-lg-4">
            <a href="https://twitter.com/<?php echo $twitter_username; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://plus.google.com/<?php echo $google_plus_username; ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
          </div><!-- col -->
        </div><!-- row -->

        <p class="lead"><?php echo $bio_excerpt; ?></p>

        <?php echo $full_bio; ?>

        <hr>

        <h3>The Numbers <small>They Don't Lie</small></h3>

        <div class="row">
          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">
                <?php echo $num_students ?> <span>students</span>
              </div>
            </div>
          </div><!-- col -->
          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">
                <?php echo $num_reviews; ?> <span>reviews</span>
              </div>
            </div>
          </div><!-- col -->
          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">
                <?php echo $num_courses; ?> <span>courses</span>
              </div>
            </div>
          </div><!-- col -->

        </div><!-- row -->
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
</section>
