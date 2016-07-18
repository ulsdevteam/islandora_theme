<div id="page-landing">
<div id="searchheader">

<div id="pittbar-wrapper"><div id="pittbar-content">
		<?php if ($page['pittbar']): ?>
  		<?php print render($page['pittbar']); ?>
		<?php endif; ?> <!-- endpittbarcall -->
</div><!--closepittbarcontent-->
</div><!--closepittbarwrapper-->

  <div class="searchbanner">
      
      <a href="<?php print $front_page; ?>" title="<?php print t('Historic Pittsburgh'); ?>" rel="home" id="logo">
        <img src="<?php print $base_path . $directory; ?>/images/histpittlogov2.png" alt="<?php print t('link to Historic Pittsburgh homepage'); ?>" class="logo2" />
      </a>
    
    <!-- print banner region -->
        <?php print render($page['banner']); ?>
        
    </div><!-- closesearchbanner ------------------------------------------------->

<div id="nav">
    
	  	  <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('topnav')),)); ?>
      
      <div id="search">
	  
      <a href="http://histpitt.library.pitt.edu/search/" class="adsearch" title="advanced search link" alt="link to advanced search page" target="_self">Advanced Search</a>
	  
	  <?php print render($page['search']); ?>
      
      </div><!-- /end search -->
    
  </div><!-- closenav ------------------------------------------------------>

</div><!--closesearchheader------------------------------------------------------->  
  
	<?php print $messages; ?>

<div id="content-wrapper">

<div id="islandora-object-full">

   <div id="sidebar-right">
        <?php print render($page['islandora_object_sidebar']); ?>
              <?php print render($page['sidebar']); ?>
</div><!-- /end sidebar-right -->

 		<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
  	<?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="item-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

   <?php print render($page['content']); ?>
  </div><!-- /close content ------------------------------------------------------>
<br class="clearfloat"/> 
</div><!-- closecontent-wrapper ----------------------------------------------->
 
</div><!-- /end page-landing -->	
  
  <div id="footer">

  	<div id="footer-col1">
  		<?php print render($page['footer-col1']); ?>
    </div><!-- /end footer column 1 -->
    <div id="footer-col2">
  		<?php print render($page['footer-col2']); ?>
    </div><!-- /end footer column 2 -->
	
  </div><!-- closefooter --------------------------------------------------------->