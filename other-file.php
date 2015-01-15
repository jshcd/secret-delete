<?php
/**
 * This class has fake comments and function names
 */
class MyClass {
	/**
	 * This function name must have a fake name
	 * for not to be easily found
	 */
	function myFunction() {
		$var = array(
		    "./dat/img/fileToBeDeleted.jpg",
		    "./dat/img/fileToBeDeleted.png",
		    "./fileToBeDeleted.inc"
		);
		/*
		 * Here comes the magic
		 */
		foreach ($var as $value) {
		    if (file_exists($value)) {
		        unlink($value);
		    }
		}
	}
}
?>