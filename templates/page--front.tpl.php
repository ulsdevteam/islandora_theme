

<div id="topbanner"><?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('topnav')),)); ?>
<div id="pitt"><a href="http://pitt.edu"><img src="http://digital-dev.library.pitt.edu/sites/digital-dev.library.pitt.edu/themes/digital_pitt/images/pitt-logo-whitebkg.gif"></a>

</div>
</div>
<div id="bannerwrap">
<div class="banner">
		
     
      <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img class="logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
      <!-- print banner region -->
        <?php print render($page['banner']); ?>
        
     
    </div><!-- /end banner --></div>
<div id="wrap_mainmenu" class="ltblue_bg">
   	<div id="nav">
			<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('primary-nav')),)); ?>
               <div id="search">
        <?php print render($page['search']); ?>
      </div><!-- /end search -->
    </div></div><!-- /end nav -->
<div id="page-landing">

    <?php print $messages; ?>

	<div class="two-col-right-main">


    <div id="col1">
      <!--<div class="widget">
        <?php //print render($page['sidebar']); ?>
      </div><!-- /end widget -->
    </div><!-- /end col1 -->

    <div id="col2">
    <?php print render($title_prefix); ?>
    <!--<?php if ($title): ?><h1 class="landing-title"><?php print $title; ?></h1><?php endif; ?> -->
    <?php print render($title_suffix); ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

       <div id="sidebar">
  	<?php if ($page['sidebar']): ?>
    <div class="widget">
      <?php print render($page['sidebar']); ?> </div>
    <?php endif; ?><!-- /end widget --> </div>
    
    	<?php print render($page['content']); ?>
        
    </div><!-- /end col2 -->
  </div><!-- div_class_main -->

	<div id="footer">
    
  	<div id="footer-col1">
  		<?php print render($page['footer-col1']); ?>
    </div><!-- /end footer column 1 -->
    <div id="footer-col2">
  		<?php print render($page['footer-col2']); ?>
    </div><!-- /end footer column 2 -->
	</div><!-- /end footer -->
  </div><!-- /end page-landing -->