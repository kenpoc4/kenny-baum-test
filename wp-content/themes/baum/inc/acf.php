<?php

foreach ( glob(realpath(dirname(__FILE__)) . '/acf/*.php') as $file ) {
	@include_once $file;
}