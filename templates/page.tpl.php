<div id="page-landing">
<div id="header">

<div id="pittbar-wrapper"><div id="pittbar-content">
		<?php if ($page['pittbar']): ?>
  		<?php print render($page['pittbar']); ?>
		<?php endif; ?> <!-- close pittbar region -->
</div><!-- close pittbarcontent -->
</div><!-- close pittbarwrapper -->

  <div class="banner">
      
	  <?php print render($page['banner']); ?><!-- print banner region -->
      
	  <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Historic Pittsburgh'); ?>" rel="home" id="logo">
        <img class="logo" src="<?php print $logo; ?>" alt="<?php print t('link to Historic Pittsburgh homepage'); ?>" />
      </a>
      <?php endif; ?>
   
    </div><!-- closebanner -->

<div id="nav">
    
	  	  <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('topnav')),)); ?>
      
      <div id="search">
	  
      <a href="http://histpitt.library.pitt.edu/search/" class="adsearch" title="advanced search link" target="_self">Advanced Search</a>
	  
	  <?php print render($page['search']); ?>
      
      </div><!-- close search -->
    
  </div><!-- close nav -->

</div><!-- close header -->   
  
	<?php print $messages; ?>

<div id="content-wrapper">
    
    <div id="content-full">
	
	<?php print render($title_prefix); ?>
    <?php if ($title): ?>
    <h1><?php print $title; ?></h1>
    <?php endif; ?>
    
	<?php print render($page['content']); ?>

  </div><!-- close content -->

 <br class="clearfloat"/>
</div><!-- close content-wrapper -->

</div><!-- close page-landing -->	
  
  <div id="footer">

  	<div id="footer-col1">
  		<?php print render($page['footer-col1']); ?>
    </div><!-- close footer column 1 -->
    <div id="footer-col2">
  		<?php print render($page['footer-col2']); ?>
    </div><!-- close footer column 2 -->
	
  </div><!-- close footer -->