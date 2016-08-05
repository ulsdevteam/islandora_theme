<?php
/**
	* @file
	* Islandora-upitt-view display template.
	*
	* Variables available:
	* - $upitt_date: The defined date corresponding to the Solr field.
	* - $upitt_creator: The defined creator corresponding to the Solr field.
	* - $upitt_lg_thumb: The defined large thumbnail image corresponding to the Solr field.
	*
	* @see template_preprocess_islandora-upitt-view
	*/
?>


  <p class="subtitle-first"><?php print $upitt_date; ?></p>
  <p class="subtitle"><?php print $upitt_creator; ?></p>
  <p class="subtitle"><?php print $upitt_viewer_link; ?></p>
  <div id="islandora-collection-thumb"> <?php print $upitt_object_view; ?> <?php print $upitt_lg_thumb; ?> </div><!-- /end main-content -->
 
  <div id="islandora-sidebar-meta">
    <?php print render($page['sidebar']); ?>
    <?php print $metadata; ?>
  </div><!-- /end sidebar -->
  