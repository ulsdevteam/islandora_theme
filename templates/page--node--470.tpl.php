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

    <div id="one-col-main"> 
  
<!--Admin Menu Items -->
 <?php if ($tabs): ?>
  <div class="tabs"><?php print render($tabs); ?></div>
  <?php endif; ?>
  <?php if ($action_links): ?>
  <ul class="action-links">
    <?php print render($action_links); ?>
  </ul>
  <?php endif; ?>
<!--Close Admin Menu Items  -->
  
  <div id="main-content"> <?php print render($title_prefix); ?>
    <?php if ($title): ?>
    <h1><?php print $title; ?></h1>
    <?php endif; ?>
    <div class="content-wrapper">
		<?php print render($page['content']); ?>
                      
        </div>
              
     <div id="fullsidebar">
  	<?php if ($page['sidebar']): ?>
    <div class="widget">
      <?php print render($page['sidebar']); ?> </div>
    <?php endif; ?><!-- /end widget --> 
  </div><!-- /end sidebar -->
  
  </div><!-- /end main-content -->
 
  <br class="clearfloat"/> 
  </div><!-- closetwo-col-right-main -->
 </div><!-- /end page-landing -->	
  <div id="footer">

  	<div id="footer-col1">
  		<?php print render($page['footer-col1']); ?>
    </div><!-- /end footer column 1 -->
    <div id="footer-col2">
  		<?php print render($page['footer-col2']); ?>
    </div><!-- /end footer column 2 -->
	
  </div><!-- closefooter -->
