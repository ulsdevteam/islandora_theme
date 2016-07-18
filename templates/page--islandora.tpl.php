<div id="topbanner"><?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('topnav')),)); ?>
<div id="pitt"><a href="http://pitt.edu"><img src="http://documenting.library.pitt.edu/sites/documenting.library.pitt.edu/themes/documenting_pitt/images/pitt-logo-whitebkg.gif"></a>

</div><!-- /end pitt -->
</div><!-- /end topbanner -->
<div id="bannerwrap">
<div class="banner">
		
    		  <img src="/sites/documenting.library.pitt.edu/themes/documenting_pitt/images/DocuPitt_Header_small.jpg" style="margin:0px auto;">

     <!-- <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img class="logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>-->
      <!-- print banner region -->
        <?php print render($page['banner']); ?> 
             
     
    </div><!-- /end banner -->
    </div><!-- /end bannerwrap -->
<div id="wrap_mainmenu" class="ltblue_bg">
   	<div id="nav">
			<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('primary-nav')),)); ?>
               <div id="search">
        <?php print render($page['search']); ?>
      </div><!-- /end search -->
    </div><!-- /end nav -->
    </div><!-- /end wrap_mainmenu -->
<div id="page-secondary">
<?php print $messages; ?>
<div id="two-col-right-main">


  <?php if ($tabs): ?>
  <div class="tabs"><?php print render($tabs); ?></div>
  <?php endif; ?>
  <?php if ($action_links): ?>
  <ul class="action-links">
    <?php print render($action_links); ?>
  </ul>
  <?php endif; ?>
  <div id="sidebar">
    <div class="widget"> <!-- BTB - added 7-15-14 to alleviate the left margin on responsive design media query ~466 in islandora_default.css --> 
      <?php print render($page['sidebar']); ?> </div>
    <!-- /end widget --> 
  </div>
  <!-- /end sidebar -->
  
  <div id="main-content"> <?php print render($title_prefix); ?>
    <?php if ($title): ?>
    <h1><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?> <?php print render($page['content']); ?> </div>
  <!-- /end main-content -->
  </div> <!-- /end two-col-right-main -->
  <div id="footer">
    <div id="footer-col1"> <?php print render($page['footer-col1']); ?> </div>
    <!-- /end footer column 1 -->
    <div id="footer-col2"> <?php print render($page['footer-col2']); ?> </div>
    <!-- /end footer column 2 --> 
  </div>
  <!-- /end footer --> 
  </div><!-- /end page-secondary -->