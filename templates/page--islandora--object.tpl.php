<div id="page-landing">
<div id="searchheader">

<div id="pittbar-wrapper"><div id="pittbar-content">
		<?php if ($page['pittbar']): ?>
  		<?php print render($page['pittbar']); ?>
		<?php endif; ?> <!-- endpittbarcall -->
</div><!-- close pittbarcontent -->
</div><!-- close pittbarwrapper -->

  <div class="searchbanner">
      <a href="<?php print $front_page; ?>" title="<?php print t('Historic Pittsburgh'); ?>" rel="home" id="logo">
        <img src="<?php print $base_path . $directory; ?>/images/histpittlogov2_beta.png" alt="<?php print t('link to Historic Pittsburgh homepage'); ?>" class="logo2" />
      </a>
    <!-- printbannerregion -->
        <?php print render($page['banner']); ?>
    </div><!-- close searchbanner -->

<div id="nav">
	  <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('topnav')),)); ?>
      <div id="search">
      <a href="http://histpitt.library.pitt.edu/search/" class="adsearch" title="advanced search link" target="_self">Advanced Search</a>
	  <?php print render($page['search']); ?>
      </div><!-- end search -->
  </div><!-- close nav -->

</div><!-- close searchheader -->  
  
	<?php print $messages; ?>

<div id="content-wrapper">

<div id="islandora-object-full">
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

    <?php if ($solr_search_links && (count($solr_search_links)>0)): ?>
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
    <?php if ($title): ?><h1 class="item-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

   <?php print render($page['content']); ?>
  
  </div><!-- close islandora-object-full -->
   

<br class="clearfloat"/> 
</div><!-- close content-wrapper -->
 
</div><!-- endpagelanding -->	
  
  <div id="footer">

  	<div id="footer-col1">
  		<?php print render($page['footer-col1']); ?>
    </div><!-- endfootercolumn1 -->
    <div id="footer-col2">
  		<?php print render($page['footer-col2']); ?>
    </div><!-- endfootercolumn2 -->
	
  </div><!-- closefooter -->
