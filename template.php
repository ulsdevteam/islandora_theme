<?php

function gamera_pitt_preprocess_islandora_objects_subset(&$variables) {
  $islandora_object = menu_get_object('islandora_object', 2);
  module_load_include('inc', 'islandora', 'includes/metadata');
  if ($islandora_object) {
    $page_number = (empty($_GET['page'])) ? 0 : $_GET['page'];
    $page_size = (empty($_GET['pagesize'])) ? variable_get('islandora_basic_collection_page_size', '10') : $_GET['pagesize'];
    #list($total_count, $results) = islandora_basic_collection_get_member_objects($islandora_object, $page_number, $page_size);
    #$variables['total_count'] = $total_count;
    $variables['total_count'] = $variables['total'];
    $collection_tn_url = (isset($islandora_object['TN_LARGE'])) ? url("islandora/object/{$islandora_object->id}/datastream/TN_LARGE/view") :
      ((isset($islandora_object['TN'])) ?  url("islandora/object/{$islandora_object->id}/datastream/TN/view") : NULL);
    $params = array(
      'title' => $islandora_object->label,
      'alt' => $islandora_object->label,
      'path' => $collection_tn_url);
    $variables['collection_img'] = ($collection_tn_url) ? theme('image', $params) : '';

    // This is now being populated by the upitt_islandora_solr_search_extras for islandora-solr-wrapper.tpl.php
    // $variables['collection_metadata'] = islandora_retrieve_metadata_markup($islandora_object);

    #var_dump($variables);
  }
}

function gamera_pitt_user_menu() {
  $items['user/login'] = array(
    'title' => 'Log in',
    'access callback' => 'user_is_anonymous',
    'type' => MENU_DEFAULT_LOCAL_TASK,
  );

  return $items;
}
