<?php
# @Author: SPEDI srl
# @Date:   19-01-2018
# @Email:  sviluppo@spedi.it
# @Last modified by:   SPEDI srl
# @Last modified time: 15-02-2018
# @License: GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
# @Copyright: Copyright (C) SPEDI srl

defined('_JEXEC') or die ('Restricted access');
$id = 'gid-'.$module->id;
?>
<?php if($slides >= 4) : ?>
<section class="hero-grid <?= $id ?> container p-0" style="height: <?php echo $image_height ?>px">

  <?php foreach ($slides as $k => $slide) : ?>
    <?php if($k == 4) break; ?>
    <?php
      switch ($k) {
        case 0: $class = 'big'; break;
        case 1: $class = 'wide'; break;
        case 2: $class = 'small'; break;
        case 3: $class = 'small'; break;
      }
    ?>
    <div class="hero-grid-item <?= $class ?>">
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

</section>
<?php endif; ?>
