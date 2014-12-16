<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			page.php
* @Package:		GetSimple
* @Action:		Skeleton theme for GetSimple CMS
*
*****************************************************/
# Include the header template
include('header.inc.php'); 
?>		          
		<nav class="sixteen columns">
		
		    <ul>
		        <?php get_navigation(get_page_slug(FALSE)); ?>		        
		    </ul>
		<hr />
		</nav>  
		
		<article class="sixteen columns">
		<h3><?php get_page_title(); ?></h3>
		<?php get_page_content(); ?>
		</article>
		
	</div><!-- container -->
    
<!-- include the footer template -->
<?php include('footer.inc.php'); ?>
