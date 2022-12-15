<?php
function check_is_active($uri_segment, $menu_akses)
{
	if ($uri_segment == strtolower($menu_akses)) :
		echo 'active';
	else :
		echo '';
	endif;
}
