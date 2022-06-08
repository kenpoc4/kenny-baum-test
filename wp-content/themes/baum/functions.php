<?php
// load inc files
foreach ( glob(realpath(dirname(__FILE__)) . '/inc/*.php') as $file ) {
	@include_once $file;
}