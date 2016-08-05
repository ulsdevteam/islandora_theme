<div id="pittbar" class="whitebar">
<a href="http://pitt.edu"><img src="<?php print base_path() . path_to_theme(); ?>/images/pitt-logo-whitebkg.gif" /></a>   <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('footernav')),)); ?>
</div><!-- /end pittbar -->
<div id="wrap_headers" class="blue_bg">

<div class="banner">   

		 <!-- print banner region -->
      <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img class="logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

      <!-- print banner region -->
        <?php print render($page['banner']); ?>   
 
    </div>
<!-- /end banner -->
</div><!-- /end wrap_headers -->
  <div id="wrap_banner" class="dark_blue"> <div id="banimage">
    <img src="/sites/digital/themes/digital_pitt/images/banner_960.jpg" style="margin:0px auto;">
</div> <!-- /end banimage -->
</div> <!-- /end wrap_banner -->
<div id="wrap_mainmenu" class="ltblue_bg">
   	<div id="nav">
			<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('primary-nav')),)); ?>
  
    </div><!-- /end nav -->
</div> <!-- end wrap_mainmenu -->

    <?php print $messages; ?>

	<div class="two-col-right-main">


    <div id="col2">
  
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="landing-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>           
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    	<?php print render($page['content']); ?>
            <div id="homesearch"><h2>Search Digital Collections</h2><br>

            <?php print render ($page['search']); ?>  
            <p>Content includes a diverse array of formats, including photographic images, books, maps, artwork, manuscripts, atlases, ephemera, correspondence, and audio-video media.</p> 
        
        <a href="collections"><strong>Browse Collections</strong></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="search"><strong>Advanced Search</strong></a>
      </div><!-- /end home search -->
      <div id="hometext">
        <p>Looking for a specific collection? Some of our most popular include:</p>
        <li><a href="http://historicpittsburgh.org/">Historic Pittsburgh</a></li>
<li><a href="http://documenting.library.pitt.edu/">Documenting Pitt</a></li>
<li><a href="/collection/archives-scientific-philosophy ">Archives of Scientific Philosophy</a></li>
<li><a href="/collection/darlington-memorial-library ">Darlington Digital Library</a></li>
<li><a href="/collection/pittsburgh-city-photographer-collection">Pittsburgh City Photographer Collection</a></li>
<li><a href="/collection/stephen-foster-collection">Stephen Foster Collection</a></li>
</div> <!---end home text-->
    </div><!-- /end col2 -->
    
  </div><!-- two-col-right-main -->
	<div id="footer">
  	<div id="footer-col1">
  		<?php print render($page['footer-col1']); ?>
    </div><!-- /end footer column 1 -->
    <div id="footer-col2">
     

  		<?php print render($page['footer-col2']); ?>
    </div><!-- /end footer column 2 -->
	</div><!-- /end footer -->

