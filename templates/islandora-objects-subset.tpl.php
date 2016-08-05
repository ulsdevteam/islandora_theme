<?php print $messages; ?>

<div id="islandora-content-wrapper">
  <?php if ($tabs): ?>
  <div class="tabs"><?php print render($tabs); ?></div>
  <?php endif; ?>
  <?php if ($action_links): ?>
  <ul class="action-links">
    <?php print render($action_links); ?>
  </ul>
  <?php endif; ?>

<div id="collection-metadata-block"> 
  	<?php if ($collection_metadata): ?>
  <div class="islandora-basic-collection-metadata">
    <?php print $collection_metadata; ?> </div><!--close islandora-basic-collection-metadata-->
  <?php endif; ?>
  
 <!-- force islandora to render sidebar region -->
  <div class="widget"><?php print render(block_get_blocks_by_region('sidebar'));?></div>
   
    </div><!--close collection-metadata-block -->
    
<div id="islandora-content-left">
<?php print render($title_prefix); ?>
	<?php if ($collection_img): ?>
  <div class="islandora-basic-collection-metadata-image"> <?php print $collection_img; ?> </div>
  <?php endif; ?>
  </div><!-- close islandora-content-left -->
 
 <div class="islandora-basic-collection-desc">
  <?php
        $block = block_load('islandora_datastream_blocks', 'idb-DESC');
        $renderable_block = _block_get_renderable_array(_block_render_blocks(array($block)));
        print $renderable_block['islandora_datastream_blocks_idb-DESC']['#markup'];
  ?>
  </div><!--close islandora-basic-collection-desc-->

  
  <div class="islandora-basic-collection clearfix">
    <span class="islandora-objects-display-switch">
    <?php
    print theme('links', array(
      'links' => $display_links,
      'attributes' => array('class' => array('links', 'inline')),
      ));
    ?>
  </span>
    <?php print $pager; ?>
    <div>Total objects: <?php print $total_count; ?></div>
    <?php print $content; ?>
    <?php print $pager; ?>
  </div><!-- closeislandorabasiccollectionmetadatadesc -->







