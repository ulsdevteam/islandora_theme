<div id="page-landing">
<div id="header">

<?php include("upitthead.php"); ?><!--callpitthead-->
  
  <div class="banner">
 
	  <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Historic Pittsburgh'); ?>" rel="home" id="logo">
        <img class="logo" src="<?php print $logo; ?>" alt="<?php print t('link to Historic Pittsburgh homepage'); ?>" />
      </a>
    <?php endif; ?>
    
    <!-- print banner region -->
        <?php print render($page['banner']); ?>
        
    </div><!-- closebanner ------------------------------------------------->

<div id="nav">
    
	  	  <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('topnav')),)); ?>
      
      
      
      <div id="search">
	  
      <a href="http://histpitt.library.pitt.edu/search/" class="adsearch" title="advanced search link" target="_self">Advanced Search</a>
	  
	  <?php print render($page['search']); ?>
      
      </div><!-- /end search -->
    
  </div><!-- closenav ------------------------------------------------------>

</div><!--closeheader------------------------------------------------------->   
  
	<?php print $messages; ?>

<div id="islandora-object-main">

 		<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
  	<?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="item-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>


   <?php print render($page['content']); ?>

    <!--<div id="col1">
      <div class="widget">
        <?php //print render($page['islandora_object_sidebar']); ?>
      </div><!-- /end widget -->
    <!--</div>--><!-- /end col1 -->
</div><!-- closetwo-col-left-main ----------------------------------------------->

<br class="clearfloat"/> 
</div><!-- /end page-landing ----------------------------------------------------->
</div><!-- closetwo-col-left-main ----------------------------------------------->
	
  <div id="footer">

  	<div id="footer-col1">
  		<?php print render($page['footer-col1']); ?>
    </div><!-- /end footer column 1 -->
    <div id="footer-col2">
  		<?php print render($page['footer-col2']); ?>
    </div><!-- /end footer column 2 -->
	
  </div><!-- closefooter --------------------------------------------------------->

