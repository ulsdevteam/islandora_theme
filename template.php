<?php

function histpitt_pitt_preprocess_islandora_objects_subset(&$variables) {
  $islandora_object = menu_get_object('islandora_object', 2);
  module_load_include('inc', 'islandora', 'includes/metadata');
  if ($islandora_object) {
    $page_number = (empty($_GET['page'])) ? 0 : $_GET['page'];
    $page_size = (empty($_GET['pagesize'])) ? variable_get('islandora_basic_collection_page_size', '10') : $_GET['pagesize'];
    #TODO: find and replace 'total_count' with 'total'
    $variables['total_count'] = $variables['total'];
    if (isset($islandora_object['TN_LARGE'])) {
      $collection_tn_url = url("islandora/object/{$islandora_object->id}/datastream/TN_LARGE/view");
      $params = array(
        'title' => $islandora_object->label,
        'alt' => $islandora_object->label,
        'path' => $collection_tn_url);
      $variables['collection_img'] = theme('image', $params);
    } elseif (isset($islandora_object['TN'])) {
      $collection_tn_url = url("islandora/object/{$islandora_object->id}/datastream/TN/view");
      $params = array(
	'title' => $islandora_object->label,
	'alt' => $islandora_object->label,
	'path' => $collection_tn_url);
      $variables['collection_img'] = theme('image', $params);
    }
    $variables['collection_metadata'] = islandora_retrieve_metadata_markup($islandora_object);
  }
}

function histpitt_pitt_preprocess_islandora_solr_wrapper(&$variables) {
  $islandora_object = menu_get_object('islandora_object', 2);
  module_load_include('inc', 'islandora', 'includes/metadata');
  if ($islandora_object) {
    module_load_include('module', 'upitt_islandora_solr_search_extras', 'upitt_islandora_solr_search_extras');
    // service links block must be manually placed into this collection_metadata area
    $service_links_block_hack = (_is_collection($islandora_object)) ? module_invoke('service_links', 'block_view', 'service_links_not_node')
      : '';
    $variables['collection_page_metadata'] = islandora_retrieve_metadata_markup($islandora_object) .
'<div id="block-service-links-service-links-not-node" class="block block-service-links">' . $service_links_block_hack['content'] . '</div>';
  }
}
