<?php

include("model/Template.class.php");
include("model/DB.class.php");
include("model/Mahasiswa.class.php");
include("model/TabelMahasiswa.class.php");

/******************************************
 Asisten Pemrograman 13 & 14
 ******************************************/

// Presenter Mahasiswa
class ProsesMahasiswa
{
	private $mahasiswa;

	function __construct()
	{
		$this->mahasiswa = new Mahasiswa();
	}

	function tampil()
	{
		// Ambil data dari model
		$data = $this->mahasiswa->getMahasiswa();

		// Tampilkan dalam bentuk tabel HTML
		$tabel = new TabelMahasiswa();
		$isiTabel = $tabel->tampil($data);

		// Siapkan template dan ganti placeholder
		$view = new Template("templates/skin.html");
		$view->replace("DATA_TABEL", $isiTabel);
		$view->write();
	}

	function tambahData($data)
	{
		$this->mahasiswa->add($data);
		header("Location: index.php");
		exit;
	}

	function updateData($id, $data)
	{
		$this->mahasiswa->update($id, $data);
		header("Location: index.php");
		exit;
	}


	function deleteData($id)
	{
		$this->mahasiswa->delete($id);
		header("Location: index.php");
		exit;
	}

	function getDataById($id)
	{
		$result = $this->mahasiswa->getMahasiswaById($id);
		return $this->mahasiswa->fetchMahasiswa($result);
	}
}