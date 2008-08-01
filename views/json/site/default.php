<?php

	/**
	 * Elgg default layout
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Marcus Povey
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 */

	for ($i = 1; $i < 8; $i++) {
		
		if (isset($vars["area{$i}"]))
			echo $vars["area{$i}"];
		
	}

?>