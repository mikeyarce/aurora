jQuery(".sidebar-toggle i").click(function(){jQuery(this).toggleClass("open"),jQuery("body").toggleClass("menu-open")}),jQuery(".main-navigation .page_item_has_children").prepend('<button class="mobile-menu-toggle fa fa-caret-down"></button>'),jQuery(".mobile-menu-toggle").click(function(){jQuery(this).parent(".page_item_has_children").toggleClass("show-children"),jQuery(this).toggleClass("open"),jQuery(this).toggleClass("fa-caret-up")});