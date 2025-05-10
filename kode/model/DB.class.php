<?php

/******************************************
 Asisten Pemrograman 13 & 14
 ******************************************/

class DB
{
	var $db_host = "localhost";
	var $db_user = "root";
	var $db_pass = "";
	var $db_name = "mvp_php";
	var $result = 0;
	var $link;

	function __construct()
	{
		$this->open();
	}

	function open()
	{
		$this->link = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

		if (!$this->link) {
			die("Koneksi ke database gagal: " . mysqli_connect_error());
		}
	}

	function execute($query)
	{
		$this->result = mysqli_query($this->link, $query);
		if (!$this->result) {
			die("Query error: " . mysqli_error($this->link));
		}
		return $this->result;
	}



	function fetch($result)
	{
		return mysqli_fetch_assoc($result);
	}

	function getResult()
	{
		return $this->result;
	}

	function close()
	{
		mysqli_close($this->link);
	}
}