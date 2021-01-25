<?php
	// setting hidden file or folder here, define all filename or foldername in lowercase.
	defined('CNF_HIDDEN_FILES')      	OR define('CNF_HIDDEN_FILES', [
										'.htaccess',
										'.well-known',
										'cgi-bin',
										'error_log',
										'index.php',
										'404.php',
										'.git',
										'license',
										'readme.md',
										'assets',
										'config.php',
										'data-public',
										'helper.php'
									]);

	// setting directory location to scan
	defined('CNF_DEFAULT_SCANDIR')      OR define('CNF_DEFAULT_SCANDIR', '.');

	// setting this if you run this project in localhost
	defined('CNF_LOCALHOST_DIR')      	OR define('CNF_LOCALHOST_DIR', 'index-of-directory');

?>
