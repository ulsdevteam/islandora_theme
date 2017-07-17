<div id="page-landing">
  <div id="searchheader">
    <div id="pittbar-wrapper">
      <div id="pittbar-content">
        <?php if ($page['pittbar']): ?>
        <?php print render($page['pittbar']); ?>
        <?php endif; ?>
        <!-- endpittbarcall --> 
      </div>
      <!-- closepittbarcontent --> 
    </div>
    <!-- closepittbarwrapper -->
    
    <div class="searchbanner"> <a href="<?php print $front_page; ?>" title="<?php print t('Historic Pittsburgh'); ?>" rel="home" id="logo"> <img src="<?php print $base_path . $directory; ?>/images/histpittlogov2_beta.png" alt="<?php print t('link to Historic Pittsburgh homepage'); ?>" class="logo2" /> </a> 
      
      <!-- print banner region --> 
      <?php print render($page['banner']); ?> </div>
    <!-- closesearchbanner -->
    
    <div id="nav"> <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('topnav')),)); ?>
      <div id="search"> <a href="http://histpitt.library.pitt.edu/search/" class="adsearch" title="advanced search link" target="_self">Advanced Search</a> <?php print render($page['search']); ?> </div>
      <!-- close search --> 
    </div><!-- closenav --> 
  </div><!-- closesearchheader --> 
  <?php print $messages; ?>
  <div id="content-wrapper">
 
 <!--drupal breadcrumbs -->
 <div id="breadcrumbs-isl">
<?php if ($breadcrumb): ?>
    <?php print $breadcrumb; ?>
  <?php endif; ?>
</div><!--closebreadcrumbsisl-->

<div id="sidebar-meta"> 
  <?php if (isset($collection_metadata)): ?>
  <div class="islandora-basic-collection-metadata">
    <?php print $collection_metadata; ?>
  </div><!--close islandora-basic-collection-metadata-->
  <?php endif; ?>

   <?php // if ($page['sidebar']): ?>
   <!-- div class="widget" -->
     <?php // print render($page['sidebar']); ?>
    <!-- /div --><!--close widget-->
   <?php // endif; ?>
</div><!--closesidebar-meta-->

  <?php if ($page['sidebar']): ?>    
    <div id="islandora-collection">
  <?php else: ?>
    <div id="islandora-object-main">
  <?php endif; ?>
      <?php if ($tabs): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
      <?php endif; ?>

    <?php if (isset($solr_search_links) && (is_array($solr_search_links))): ?>
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
      <h1 class="item-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?> </div>
    <!-- close content --> 
    
    <br class="clearfloat"/>
  </div>
  <!-- closecontentwrapper --> 
  
</div>
<!-- closepagelanding -->

<div id="footer">
  <div id="footer-col1"> <?php print render($page['footer-col1']); ?> </div>
  <!-- close footer column 1 -->
  <div id="footer-col2"> <?php print render($page['footer-col2']); ?> </div>
  <!-- close footer column 2 --> 
  
</div>
<!-- closefooter --> 

