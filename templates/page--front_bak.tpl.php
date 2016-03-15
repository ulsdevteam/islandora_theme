<div id="page-landing">
<div id="header">

<?php include("upitthead.php"); ?><!--callpitthead-->
  
  <div class="banner">
 
	  <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img class="logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
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

<div id="two-col-left-main">
    
    <div id="front-main-content">
	
	<?php print render($title_prefix); ?>
    <?php if ($title): ?>
    <h1><?php print $title; ?></h1>
    <?php endif; ?>
    <div class="content-wrapper"> 
	
	<?php print render($page['content']); ?> </div>

  </div><!-- /end main-content ------------------------------------------------------>
    
    <div id="displaybox">
	
        <div class="view largebox">  
             <h2>Collections</h2> 
             <div class="mask"> 
             <h2>Collections</h2> 
             <p>The research materials available on Historic Pittsburgh include a variety of primary and secondary sources in various formats, including: full-texts (books), maps, images, videos, and manuscripts.</p>  
               <a href="http://histpitt.library.pitt.edu/collections" class="info"></a>  
            </div><!--Close mask-->
            </div><!--Close viewbox large-->

    	<div class="view smallbox blue">  
             <h2>Exhibits</h2> 
             <div class="mask"> 
             <h2>Exhibits</h2> 
             <p>The Archives Service Center at the University of Pittsburgh has utilized many of the image collections on the Historic Pittsburgh Site to create the following exhibits.</p>  
               <a href="http://histpitt.library.pitt.edu/exhibits" class="info"></a>  
            </div><!--Close mask-->
            </div><!--Close viewbox small-->
            
             <div class="view smallbox orange">  
             <h2>Chronology</h2> 
             <div class="mask"> 
             <h2>Chronology</h2> 
             <p>This online chronology of Pittsburgh is taken from the fifth edition (1999) of Pittsburgh.</p>  
               <a href="http://digital.library.pitt.edu/chronology/" class="info"></a>  
            </div><!--Close mask-->
            </div><!--Close viewbox small-->
       
		<div class="view smallbox green">  
             <h2>Archival Resources</h2> 
             <div class="mask"> 
             <h2>Archival Resources</h2> 
             <p>The Historic Pittsburgh site can direct users to other available resources when conducting research on Pittsburgh history. </p>  
               <a href="http://histpitt.library.pitt.edu/archivalresources" class="info"></a>  
            </div><!--Close mask-->
            </div><!--Close viewbox small-->
       
		<div class="view smallbox cyan">  
             <h2>Partners</h2> 
             <div class="mask"> 
             <h2>Partners</h2> 
             <p>Are you a cultural heritage institution in greater Pittsburgh interested in joining us?<br>We’d love to talk to you! </p>  
               <a href="http://histpitt.library.pitt.edu/partners" class="info"></a>  
            </div><!--Close mask-->
            </div><!--Close viewbox small--> 
   
  </div><!--Close displaybox--------------------------------------------------------->
  
<div id="rightsidebarfront">
  	<?php if ($page['sidebar']): ?>
    <div class="widget">
      <?php print render($page['sidebar']); ?> </div>
    <?php endif; ?><!-- /end widget --> 
  </div><!-- /end sidebar -->
  <br class="clearfloat"/> 
  </div><!-- closetwo-col-left-main ----------------------------------------------->
</div><!-- /end page-landing -->	
  <div id="footer">

  	<div id="footer-col1">
  		<?php print render($page['footer-col1']); ?>
    </div><!-- /end footer column 1 -->
    <div id="footer-col2">
  		<?php print render($page['footer-col2']); ?>
    </div><!-- /end footer column 2 -->
	
  </div><!-- closefooter --------------------------------------------------------->
