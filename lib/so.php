<?php

/*
	Copyright (c) 2015-2016 So, All rights reserved.

	This file is part of the soFramework (https://github.com/sochap/soFramework).
*/

//! Legacy mode enabler
class So {

	static
		//! Framework instance
		$fw;

	/**
	*	Forward function calls to framework
	*	@return mixed
	*	@param $func callback
	*	@param $args array
	**/
	static function __callstatic($func,array $args) {
		if (!self::$fw)
			self::$fw=Base::instance();
		return call_user_func_array(array(self::$fw,$func),$args);
	}

}
