<?php
/**
 * @version    2.0.x
 * @package    SPEDI Image Splider
 * @author     SPEDI srl http://www.spedi.it
 * @copyright  Copyright (c) Spedi srl.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die ('Restricted access');
// $heroCarouselId = 'hero-fade-carousel-'.$module->id;
?>
<?php if($slides >= 2) : ?>
<section class="hero-grid-vertical">
  <div class="container">
    <div class="row">
      <?php foreach ($slides as $k => $slide) : ?>
        <div class="col hero-cell" style="height: <?php echo $image_height ?>px">
          <div class="cover" style="background-image: url(<?php echo $slide->image ?>)"></div>
          <div class="caption">
            <?php if($slide->title) : ?>
              <h3><?php echo $slide->title ?></h3>
            <?php endif; ?>
            <?php if($slide->description) : ?>
              <?php echo $slide->description ?>
            <?php endif; ?>
          </div>
          <?php if(!is_null($slide->params->get('link_type'))) : ?>
            <a href="<?php echo $slide->link ?>" target="<?php echo $slide->params->get('link_target') ?>" class="link"></a>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div><!-- end .row -->
  </div>
</section>
<?php endif; ?>
