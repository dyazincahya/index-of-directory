![Screenshot](https://github.com/dyazincahya/index-of-directory/raw/main/assets/img/ss/1.png)

# index-of-directory
Display directory

### Demo
[Click Here To See Demo Online](https://demo.kang-cahya.web.id/)

### Requirement
- PHP 7 or Newer

### Instalation
- Make some Project Folder in your ```Host```
- Move or copy [assets](https://github.com/dyazincahya/index-of-directory/tree/main/assets), [data-public](https://github.com/dyazincahya/index-of-directory/tree/main/data-public), [.htaccess](https://github.com/dyazincahya/index-of-directory/blob/main/.htaccess), [404.php](https://github.com/dyazincahya/index-of-directory/blob/main/404.php) and [config.php](https://github.com/dyazincahya/index-of-directory/blob/main/config.php), [helper.php](https://github.com/dyazincahya/index-of-directory/blob/main/helper.php) and [index.php](https://github.com/dyazincahya/index-of-directory/blob/main/index.php)  to Project Folder .
- Setting [config.php](https://github.com/dyazincahya/index-of-directory/blob/main/config.php) 
- Access Project Folder in browser.
- Done.

### Configuration Default
``` php
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
	defined('CNF_DEFAULT_SCANDIR')      OR define('CNF_DEFAULT_SCANDIR', '.'); // . (dot) is default setting, will scan root directory.

	// setting this if you run this project in localhost
	defined('CNF_LOCALHOST_DIR')      	OR define('CNF_LOCALHOST_DIR', 'index-of-directory');
```

### Build With
- PHP
- CSS - Bootstrap 5 Beta
- JS
