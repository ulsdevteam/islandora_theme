<?php print $messages; ?>

<div id="two-col-left-main">

  <?php if ($tabs): ?>
  <div class="tabs"><?php print render($tabs); ?></div>
  <?php endif; ?>
  <?php if ($action_links): ?>
  <ul class="action-links">
    <?php print render($action_links); ?>
  </ul>
  <?php endif; ?>

  <div id="main-content">
	<?php print render($title_prefix); ?>

  <div id="metadata-sidebar">
  <?php if ($collection_metadata): ?>
  <div class="islandora-basic-collection-metadata">
    <!--<p>using the islandora metadata framework</p>-->
    <?php print $collection_metadata; ?> </div>
  <?php endif; ?>
                <?php if ($page['sidebar']): ?>
    <div class="widget"> <?php print render($page['sidebar']); ?> </div>
    <!-- /end widget -->
    <?php endif; ?>
  </div><!-- /end sidebar -->

	<?php if ($collection_img): ?>
  <div class="islandora-basic-collection-metadata-image"> <?php print $collection_img; ?> </div>
  <?php endif; ?>

  <?php
        $block = block_load('islandora_datastream_blocks', 'idb-DESC');
        $renderable_block = _block_get_renderable_array(_block_render_blocks(array($block)));
        print $renderable_block['islandora_datastream_blocks_idb-DESC']['#markup'];
  ?>
  <div class="islandora-basic-collection clearfix"> <span class="islandora-basic-collection-display-switch">
    <ul class="links inline">
      <?php foreach ($view_links as $link): ?>
      <li> <a <?php print drupal_attributes($link['attributes']) ?>><?php print filter_xss($link['title']) ?></a> </li>
      <?php endforeach ?>
    </ul>
    </span>
    <?php if ($collection_search) {
      print render($collection_search);
    } ?>
    <?php print $collection_pager; ?>
    <div>Total objects: <?php print $total_count; ?></div>
    <?php print $collection_content; ?>
    <?php print $collection_pager; ?>
  </div><!-- /end islandora-basic-collection-metadata-desc -->

</div><!-- /end main-content -->
</div><!-- /end two col left main -->
