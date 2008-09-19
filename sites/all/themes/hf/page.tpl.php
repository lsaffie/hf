<?php
// $Id: page.tpl.php,v 1.28 2008/01/24 09:42:52 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body>

<div class="whole_body">
<div class="top-border"></div>
<div class="top_body">
	<div id="logo">
      <?php if ($logo) { ?><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a><?php } ?>
      <?php if ($site_name) { ?><h1 class='site-name'><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
      <?php if ($site_slogan) { ?><div class='site-slogan'><?php print $site_slogan ?></div><?php } ?>
    </div>
     <div id="menu_hf">
		<img src="/sites/default/files/logo-small.gif">
	    <?php if (isset($secondary_links)) { ?><?php print theme('links', $secondary_links, array('class' => 'links', 'id' => 'subnavlist')) ?><?php } ?>
	    <?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist')) ?><?php } ?>
	    <?php print $search_box ?>
		<?php print $header ?>
	</div>
	
	
</div> <!-- End top_body -->

<div class="body_wrapper">	
	
	<div class="left_body">
		<?php print $left ?>
	</div>
	
	<div class="right_body">
       <?php // print $breadcrumb ?>
       <h1 class="title"><?php print $title ?></h1>
       <div class="tabs"><?php print $tabs ?></div>
       <?php if ($show_messages) { print $messages; } ?>
       <?php print $help ?>
       <?php print $content; ?>
       <?php print $feed_icons; ?>

		<?php if(isset($projects)) {print $projects;} ?>
		<?php if(isset($methods)) {print $methods;} ?>
		<?php if(isset($research)) {print $research;} ?>
	</div>
<?php	
// $node = node_load(arg(1));
// 	if($node) {
// 		foreach($node->taxonomy as $term) { 
// 			if ($term->tid >= 11 && $term->tid <= 22){
// 	 			$terms[] = $term->tid; 
// 				}
// 			}
// 		  print implode('+', $terms);
	// }
	
	 ?>

	 <?php if ($right) { ?><td id="sidebar-right">
	    <?php print $right ?>
	 <?php } ?>

	<div id="footer">
	  	<?php print $footer_message ?>
		<?php //print $footer ?>
	</div>	
	
		<div class="border-type2">
			<div class="grid-footer">
		    <ul>
					<li>tel. 416.340.4800 </li>
					<li>info@humanfactors.ca</li>
				</ul>
				<p>Centre for Global eHealth Innovation  - 190 Elizabeth St - R. Fraser Elliot Building, 4th Floor - M5G 2C4 Toronto, Canada</p>

			</div>
		</div>
</div> <!-- end body_wrapper-->


<?php print $closure ?>
</body>
</html>
