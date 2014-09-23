<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		Barefoot Brainstorm theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE HTML>
<!-- Begin Head -->
	<?php include('head.inc.php'); ?>
<!-- End Head -->

<body id="who" >

<!-- Begin Header -->
	<?php include('header.inc.php'); ?>
<!-- End Header -->

<!-- Begin Header Responsive -->
	<?php include('header-responsive.inc.php'); ?>
<!-- End Header Responsive -->

<div id="wrapper">

<!-- Begin Sidebar -->
<div id="left_column">
	<h1 class="section_title" id="who"><a href="<?php print $url_prefix; ?>who-is-barefoot/"><span>Who is Barefoot?</span></a></h1>
	<h1 class="mobile_section_title" id="who">>Who is Barefoot?</h1>
</div>   
<!-- End Sidebar -->

<!-- Begin Content -->

<div id="right_column">
	<div id="content">
		<?php get_page_content(); ?>
  </div>	
</div>

<!-- End Content -->

<!-- Begin Footer -->
	<?php include('footer.inc.php'); ?>
<!-- End Footer -->
	
	
</div>

</body>
</html>
