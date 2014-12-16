<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			tempate.php
* @Package:		GetSimple
* @Action:		Skeleton theme for GetSimple CMS
*
*****************************************************/
# Include the header template
include('header.inc.php'); 
?>		
		<figure >
            <?php get_component('homeimg'); ?>            
        </figure>
          
		<nav class="sixteen columns">
		<hr />
		    <ul>
		        <?php get_navigation(get_page_slug(FALSE)); ?>		        
		    </ul>
		<hr />
		</nav>  
		
		<article class="ten columns ">
		<h3><?php get_page_title(); ?></h3>
		<?php get_page_content(); ?>
		</article>
		
		<aside class="six columns ">
		<?php get_component('sidebar');	?>
	    </aside>

	</div><!-- container -->
    
<!-- include the footer template -->
<?php include('footer.inc.php'); ?>
