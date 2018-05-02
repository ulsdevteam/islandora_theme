<div id="two-col-left-main">

  <div id="main-content">
  <?php print render($title_prefix); ?>

  <?php
    if (module_exists('islandora_datastream_blocks')) {
        $block = block_load('islandora_datastream_blocks', 'idb-DESC');
        $renderable_block = _block_get_renderable_array(_block_render_blocks(array($block)));
        print $renderable_block['islandora_datastream_blocks_idb-DESC']['#markup'];
    }
  ?>
  <div class="islandora-basic-collection clearfix"> <span class="islandora-basic-collection-display-switch">
    <ul class="links inline">
      <?php foreach ($view_links as $link): ?>
      <li> <a <?php print drupal_attributes($link['attributes']) ?>><?php print filter_xss($link['title']) ?></a> </li>
      <?php endforeach ?>
    </ul>
    </span>
    <?php print $collection_content; ?>
    <?php print $collection_pager; ?>
  </div><!-- /end islandora-basic-collection-metadata-desc -->

</div><!-- /end main-content -->
</div><!-- /end two col left main -->
