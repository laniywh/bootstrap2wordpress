<?php
$optin_text         = get_field('optin_text');
$optin_button_text  = get_field('optin_button_text');
?>

<!-- OPT IN SECTION
================================================ -->
<section id="optin">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <p class="lead"><?php echo $optin_text; ?></p>
      </div><!-- col -->
      <div class="col-sm-4">
        <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
          <?php echo $optin_button_text; ?>
        </button>
      </div><!-- col -->
    </div><!-- row -->

  </div><!-- container -->
</section><!-- optin -->
