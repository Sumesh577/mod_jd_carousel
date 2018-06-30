<?php 
  // no direct access
 // Licensed under the GPL v3
defined( '_JEXEC' ) or die( 'Restricted access' );       
?>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>

  <?php if($jd_bootstrap_3 == 1): ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php endif; ?>

<div id="jd_carousel_<?php echo $module->id; ?>" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
<?php if($jd_indicate == 1): ?>
  <ul class="carousel-indicators">
    <?php $i=0; foreach($jd_carousel['jd_carousel_img'] as $img) : ?>
      <li data-target="#jd_carousel_<?php echo $module->id; ?>" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0){ echo "active";} ?>"></li> 
    <?php $i++; endforeach; ?>
  </ul>
<?php endif; ?>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <?php $i=0; foreach($jd_carousel['jd_carousel_img'] as $img) :?>
      <div class="carousel-item <?php if($i==0){ echo "active";} ?>">
        <img class="d-block w-100" src="<?php echo $img; ?>" width="1100" height="500">
        <?php if($jd_caption==1) :?>
          <div class="carousel-caption d-none d-md-block">
            <h3><?php echo $jd_carousel['jd_carousel_CapitionTitle'][$i];  ?></h3>
            <p><?php echo $jd_carousel['jd_carousel_CapitionSubTitle'][$i];  ?></p>
          </div> 
         <?php endif; ?> 
      </div> 
    <?php $i++; endforeach; ?>
  </div>
  

  <?php if($jd_arrow == 1): ?>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#jd_carousel_<?php echo $module->id; ?>" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#jd_carousel_<?php echo $module->id; ?>" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
<?php endif; ?>
</div>

</body>
</html>