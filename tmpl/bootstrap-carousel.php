<?php
/**
 * @version    2.0.x
 * @package    SPEDI Image Splider
 * @author     SPEDI srl http://www.spedi.it
 * @copyright  Copyright (c) Spedi srl.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die ('Restricted access');
?>
<?php $heroCarouselId = 'hero-carousel-'.$module->id; ?>
<div id="<?php echo $heroCarouselId ?>" class="hero-carousel carousel slide" data-ride="carousel" style="height: <?php echo $image_height ?>px">
  <div class="carousel-inner" role="listbox">
    <?php $c = 0; ?>
    <?php foreach ($slides as $slide) : ?>
      <?php $active = ($c++ == 0) ? 'active' : ''; ?>
      <div class="carousel-item <?php echo $active ?>">
        <img class="" src="<?php echo $slide->image ?>" alt="<?php echo $slide->title ?>">
        <div class="carousel-caption">
          <h1 class="animated slideInLeft"><?php echo $slide->title ?></h1>
          <?php echo $slide->description ?>
          <?php if(!is_null($slide->params->get('link_type'))) : ?>
          <p class="mt-3">
            <a href="<?php echo $slide->link ?>" target="<?php echo $slide->params->get('link_target') ?>" class="btn btn-primary">Vai all'evento <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </p>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <?php if($show_custom_nav) : ?>
  <ol class="carousel-indicators">
  <?php for ($k = 0; $k < $c; $k++) : ?>
    <?php $active = ($k == 0) ? 'active' : ''; ?>
    <li data-target="#<?php echo $heroCarouselId ?>" data-slide-to="<?php echo $k ?>" class="<?php echo $active ?>">
      0<?php echo $k+1 ?>
    </li>
  <?php endfor; ?>
  </ol>
  <?php endif; ?>

  <?php if($show_arrows) : ?>
  <a class="carousel-control-prev" href="#<?php echo $heroCarouselId ?>" role="button" data-slide="prev">
    <span class="fa fa-angle-left fa-5x" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#<?php echo $heroCarouselId ?>" role="button" data-slide="next">
    <span class="fa fa-angle-right fa-5x" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <?php endif; ?>

</div>
