
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

<body id="<?php return_page_slug(); ?>" >

<!-- Begin Header -->
	<?php include('header.inc.php'); ?>
<!-- End Header -->

<!-- Begin Header Responsive -->
	<?php include('header-responsive.inc.php'); ?>
<!-- End Header Responsive -->

<div id="wrapper">
<!-- Begin Content -->

<div id="right_column_home">
	<h1 class="section_title" id="home"><span>What's the Big Idea?</span></h1>
	<div id="content_home">
		    <?php get_page_content(); ?>
  </div>	
</div>

<!-- End Content -->

<!-- Begin Sidebar Home -->
<div id="left_column_home">
   <?php get_component('sidebar-home');?>
</div>   
<!-- End Sidebar Home -->


<!-- Begin Footer -->
	<?php include('footer.inc.php'); ?>
<!-- End Footer -->
	
	
</div>

</body>
</html>
