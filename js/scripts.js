/* Toggle Fly-Out Sidebar on top right of site */
jQuery('.sidebar-toggle i').click(function(){
    jQuery(this).toggleClass('open');
    jQuery('body').toggleClass('menu-open');
});

/* Toggle Mobile Menu buttons to show child pages */
jQuery('.page_item_has_children')
	.prepend('<button class="mobile-menu-toggle fa fa-caret-down"></button>');
jQuery('.mobile-menu-toggle').click(function() {
	jQuery(this).parent('.page_item_has_children').toggleClass('show-children');
	jQuery(this).toggleClass('open');
	jQuery(this).toggleClass('fa-caret-up');
});