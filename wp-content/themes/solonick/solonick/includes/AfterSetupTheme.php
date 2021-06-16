<?php

class Solonick_AfterSetupTheme{
	
	
	static function return_thme_option($string,$str=null){
		global $solonick;
		if($str!=null)
		return isset($solonick[''.$string.''][''.$str.'']) ? $solonick[''.$string.''][''.$str.''] : null;
		else
		return isset($solonick[''.$string.'']) ? $solonick[''.$string.''] : null;
	}
	
	
}
?>