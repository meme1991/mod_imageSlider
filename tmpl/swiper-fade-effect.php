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
$heroCarouselId = 'hero-fade-carousel-'.$module->id;
?>
<!-- Swiper -->
<?php if($slides): ?>
<div class="swiper-container hero-fade-carousel" id="<?php echo $heroCarouselId ?>" style="height: <?php echo $image_height ?>px">
  <div class="swiper-wrapper">
    <?php foreach ($slides as $slide) : ?>
    <div class="swiper-slide" style="background-image:url(<?php echo $slide->image ?>)">
      <div class="caption-slider">
        <h1 class="animated slideInLeft"><?php echo $slide->title ?></h1>
        <?php echo $slide->description ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination swiper-pagination-white"></div>
  <!-- Add Arrows -->
  <div class="swiper-button-next swiper-button-white"></div>
  <div class="swiper-button-prev swiper-button-white"></div>
</div>

<?php
$document->addScriptDeclaration("
	jQuery(document).ready(function($){

    var swiper = new Swiper('#".$heroCarouselId."', {
      spaceBetween: 30,
      effect: 'fade',
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },

    });


    swiper.on('slideChange', function () {
      $('#".$heroCarouselId." .swiper-slide').each(function () {
          if ($(this).index() === swiper.activeIndex) {
              $(this).find('.caption-slider > h1').fadeIn(300).addClass('slideInLeft');
          }
          else {
              $(this).find('.caption-slider > h1').removeClass('slideInLeft');
          }
      });
    });


	})
");
?>
<?php endif; ?>
