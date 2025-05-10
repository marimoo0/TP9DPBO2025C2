<?php

/******************************************
 Asisten Pemrograman 13 & 14
 ******************************************/

class Template
{
	var $filename = '';
	var $content = '';

	function __construct($filename = '')
	{
		$this->filename = $filename;

		if (file_exists($filename)) {
			$this->content = file_get_contents($filename);
		}
	}

	function replace($old, $new)
	{
		$this->content = str_replace($old, $new, $this->content);
	}

	function write()
	{
		echo $this->content;
	}

	function setTemplate($filename)
	{
		if (file_exists($filename)) {
			$this->content = file_get_contents($filename);
		}
	}
}