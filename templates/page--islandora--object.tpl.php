<div id="pittbar" class="whitebar">
<a href="http://pitt.edu"><img src="<?php print base_path() . path_to_theme(); ?>/images/pitt-logo-whitebkg.gif" /></a>    <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('footernav')),)); ?>
</div><!-- /endpittbar -->
<div id="wrap_headers" class="blue_bg">

<div class="banner">
       <img src="/sites/digital/themes/digital_pitt/images/collection_banner.jpg" style="float:right;">
		 
      <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img class="logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
 
      <!-- print banner region -->
        <?php print render($page['banner']); ?>
    </div>
<!-- /end banner -->
</div> <!-- /end wrap_headers -->
<div id="wrap_mainmenu" class="ltblue_bg">
   	<div id="nav">
			<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('primary-nav')),)); ?>
      <div id="search">
        <?php print render($page['search']); ?>
      </div><!-- /end search -->
    </div><!-- /end nav -->
    </div> <!-- /end wrap_mainmenu -->

    <?php print $messages; ?>

<div id="two-col-left-main">
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

    <?php if ($page['sidebar']): ?>
    <div id="sidebar">
      <?php print render($page['sidebar']); ?>
    </div>
    <?php endif; ?>

   <?php print render($page['content']); ?>

    <!--<div id="col1">
      <div class="widget">
        <?php //print render($page['islandora_object_sidebar']); ?>
      </div><!-- /end widget -->
    <!--</div>--><!-- /end col1 -->


 <div id="footer">
  	<div id="footer-col1">
  		<?php print render($page['footer-col1']); ?>
    </div><!-- /end footer column 1 -->
    <div id="footer-col2">
  		<?php print render($page['footer-col2']); ?>
    </div><!-- /end footer column 2 -->
	</div><!-- /end footer -->

</div><!-- /end two-col-left-main -->
</div><!-- /end page-secondary -->

