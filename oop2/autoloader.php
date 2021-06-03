<?php 

define("CLASS_DIR", "src" . DIRECTORY_SEPARATOR);

set_include_path(
    CLASS_DIR . PATH_SEPARATOR . get_include_path()
);
spl_autoload_extensions('.class.php,.library.php');
spl_autoload_register();
//SPL -- Standardd PHP Library

/*
src/Demo.class.php  --> class Demo;
*/
?>
