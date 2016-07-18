<div id="pittbar" class="whitebar">
<a href="http://pitt.edu"><img src="/sites/digital/themes/digital_pitt/images/pitt-logo-whitebkg.gif"> </a>  <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('footernav')),)); ?>
</div><!-- /end pittbar -->
<div id="wrap_headers" class="blue_bg">
<div class="banner">

		
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
  <div id="wrap_banner" class="dark_blue"> <div id="banimage">
    <img src="/sites/digital/themes/digital_pitt/images/banner_960.jpg" style="margin:0px auto;">
</div> <!--/end banimage -->
</div> <!-- /end wrap_banner -->
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
  
  <?php if ($tabs): ?>
  <div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
  <?php if ($action_links): ?>
  <ul class="action-links">
    <?php print render($action_links); ?>
  </ul><?php endif; ?>
  
  <div id="main-content"> <?php print render($title_prefix); ?>
    <?php if ($title): ?>
    <h1><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?> <?php print render($page['content']); ?> </div>
  <!-- /end main-content -->
  <div id="sidebar">
    <div class="widget"> <?php print render($page['sidebar']); ?> </div>
    <!-- /end widget --> 
  </div>
  <!-- /end sidebar -->
  </div>
<!-- /end two-col-left-main -->
  <div id="footer">

    <div id="footer-col1"> <?php print render($page['footer-col1']); ?> </div>
    <!-- /end footer column 1 -->
    <div id="footer-col2"> <?php print render($page['footer-col2']); ?> </div>
    <!-- /end footer column 2 --> 
  </div>
  <!-- /end footer --> 
  
