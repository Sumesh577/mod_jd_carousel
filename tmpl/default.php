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
    <?php JHtml::_('bootstrap.framework'); ?>
  <?php endif; ?>

<div id="jd_carousel_<?php echo $module->id; ?>" class="carousel slide jd-slider" data-ride="carousel">
  <!-- Indicators -->
<?php if($jd_indicate == 1): ?>
  <ul class="carousel-indicators">
    <?php $i=0; $count=1;  foreach($jd_carousel['jd_carousel_img'] as $img) : ?>
      <li data-target="#jd_carousel_<?php echo $module->id; ?>" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0){ echo "active";} ?>">
			<span class="slide-number"><?php echo  $count; ?></span>
				<span class="tab-title">
					<span class="tab-intro"><?php echo $jd_carousel['jd_carousel_Title'][$i];  ?></span></span>
					<strong><?php echo $jd_carousel['jd_carousel_SubTitle'][$i];  ?></strong>
			</span>
		</li>
    <?php $i++; $count++; endforeach; ?>
  </ul>
<?php endif; ?>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <?php $i=0; foreach($jd_carousel['jd_carousel_img'] as $img) :?>
      <div class="carousel-item <?php if($i==0){ echo "active";} ?>">
  			<?php  if(!empty($jd_carousel['jd_carousel_backgroundImg'][$i])) {?>
				<img class="d-block w-100" src="<?php echo $jd_carousel['jd_carousel_backgroundImg'][$i];  ?>" width="1100" height="500">
			<?php } ?>
			<div class="carousel-caption d-none d-md-block">
				<?php  if(!empty($jd_carousel['jd_carousel_Title'][$i])) {?>
						<div class="slide-title"><?php echo $jd_carousel['jd_carousel_Title'][$i];  ?></div>
				<?php } ?>
				<?php  if(!empty($jd_carousel['jd_carousel_SubTitle'][$i])) {?>
						  <div class="slide-intro"><?php echo $jd_carousel['jd_carousel_SubTitle'][$i];  ?></div>
				<?php } ?>

				<?php  if(!empty($jd_carousel['jd_carousel_buttonText'][$i])) {?>
					<?php  if(!empty($jd_carousel['jd_carousel_buttonlink'][$i])) {?>
						<a class="btn btn-primary" href="<?php echo $jd_carousel['jd_carousel_buttonlink'][$i];  ?>" role="button">
					<?php }?>
						<?php echo $jd_carousel['jd_carousel_buttonText'][$i];  ?>

					<?php  if(!empty($jd_carousel['jd_carousel_buttonlink'][$i])) {?>
						</a>
					<?php }?>
				<?php } ?>

				<?php if(!empty($img)) { ?>
					<img class="d-block w-100" src="<?php echo $img; ?>" alt="Second slide">
				  <?php } ?>
			</div>
      </div> 
    <?php $i++; endforeach; ?>
  </div
  
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