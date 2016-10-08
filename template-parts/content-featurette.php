<?php
$course_video_title         = get_field( 'course_video_title' );
$course_video_code          = get_field( 'course_video_code' );
 ?>

<!-- VIDEO FEATURETTE
================================================ -->
<section id="video-featurette">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2><?php echo $course_video_title; ?></h2>
        <?php echo $course_video_code; ?>
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
</section>
