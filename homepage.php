
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
<head>
<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/screen.css" type="text/css" media="screen" />
</head>
<body id="<?php return_page_slug(); ?>" >

<!-- Begin Header -->
<div id="header_wrap">
   <div id="header">
      <div id="logo">
         <a href="<?php get_site_url(); ?>"><img src="<?php get_theme_url(); ?>/images/barefoot_logo_blue.gif" width="204" height="206" alt="Barefoot Brainstorming" /></a>
      </div>
      <div id="main_navigation">
	         <ul>
	            <li><a href="<?php get_site_url(); ?>" id="home">Home</a></li>
	            <li><a href="<?php get_site_url(); ?>who-is-barefoot/" id="who">Who is Barefoot?</a></li>
	            <li><a href="<?php get_site_url(); ?>our-services/" id="services">Our Services</a></li>
	            <li><a href="<?php get_site_url(); ?>why-go-barefoot/" id="why">Why Go Barefoot?</a></li>
	            <li><a href="<?php get_site_url(); ?>our-clients/" id="clients">Our Clients</a></li>
	            <li><a href="<?php get_site_url(); ?>in-the-news/" id="news">In the News</a></li>
	            <li><a href="<?php get_site_url(); ?>contact-us/" id="contact">Contact Us</a></li>
	         </ul>
      </div>
		<div id="testimonial_header">
			<a href="<?php get_site_url(); ?>our-clients/testimonials/"><img src="<?php get_theme_url(); ?>/images/testimonial_home.jpg" width="968" height="162" /></a>
		</div>
   </div>
</div>
<!-- End Header -->

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
