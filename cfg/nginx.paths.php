<?php
/*! pimpmylog - 1.7.1 - 5190cd82068079c2f68a4c0b8871ba765a41fa91*/
/*
 * pimpmylog
 * http://pimpmylog.com
 *
 * Copyright (c) 2014 Potsky, contributors
 * Licensed under the GPLv3 license.
 */
?>
<?php

/**
 * All possible paths where log files could be found
 *
 * @var  array
 */
$paths = array(
	'/var/log/nginx/',
);


/**
 * All possibles files for each type of log
 *
 * All files will be tried in all possibles paths above
 *
 * The order is important because it will be the order of log files for users.
 * eg: I want error log be the first because most users want to see error and not access logs
 *
 * @var  array
 */
$files = array(
	'error' => array(
		'error.log',
		'error_log',
	),
	'access' => array(
		'access.log',
		'access_log',
	),
);
