<div id="page-secondary">
<div class="banner"> <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('banner')),)); ?>
  <?php if ($logo): ?>
  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"> <img class="logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
  <?php endif; ?>
  <!-- print banner region --> 
  <?php print render($page['banner']); ?> </div>
<!-- /end banner -->

<div id="nav"> <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('primary-nav')),)); ?>
  <div id="search"> <?php print render($page['search']); ?> </div>
  <!-- /end search --> 
</div>
<!-- /end nav --> 

<?php print $messages; ?>
<div id="two-col-right-main">

  <?php if ($tabs): ?>
  <div class="tabs"><?php print render($tabs); ?></div>
  <?php endif; ?>
  <?php if (isset($action_links)): ?>
  <ul class="action-links">
    <?php print render($action_links); ?>
  </ul>
  <?php endif; ?>
  
  <div id="main-content-outer">
    <?php if (isset($solr_search_links) && is_array($solr_search_links) && (count($solr_search_links)>0)): ?>
    <div class="searchnav">
      <ul class="searchnav-links">
      <?php foreach ($solr_search_links as $solr_search_link) : ?>
        <li><?php print $solr_search_link; ?></li>
      <?php endforeach; ?>
      </ul>
      <br class="clearfloat">
    </div>
    <?php endif; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
    <h1><?php print $title; ?></h1>
    <?php endif; ?>

    <?php print render($title_suffix); ?> 

    <?php if ($page['sidebar']): ?>
    <div id="sidebar">
      <div class="widget"> <!-- BTB - added 7-15-14 to alleviate the left margin on responsive design media query ~466 in islandora_default.css -->
        <?php print render($page['sidebar']); ?> </div>
      <!-- /end widget -->
    </div>
    <!-- /end sidebar -->
    <?php endif; ?>

    <?php print render($page['content']); ?>

    <?php if (isset($collection_img)): ?>
    <div class="islandora-basic-collection-metadata-image"> <?php print $collection_img; ?> </div>
    <?php endif; ?>

    <?php if (isset($collection_metadata)): ?>
      <div id="sidebar-right">
        <div class="islandora-basic-collection-metadata">
          <?php print $collection_metadata; ?> 
        </div>
      </div><!-- /end sidebar -->
    <?php endif; ?>

  </div>
  <!-- /end col2 -->
  <div id="footer">
    <div id="footer-col1"> <?php print render($page['footer-col1']); ?> </div>
    <!-- /end footer column 1 -->
    <div id="footer-col2"> <?php print render($page['footer-col2']); ?> </div>
    <!-- /end footer column 2 --> 
  </div>
  <!-- /end footer --> 
</div>
<!-- /end page-secondary -->
