<?php

/******************************************
 Asisten Pemrograman 13 & 14
 ******************************************/

// Model Mahasiswa mewarisi class DB
class Mahasiswa extends DB
{
	function getMahasiswa()
	{
		$query = "SELECT * FROM mahasiswa";
		return $this->execute($query);
	}

	function getMahasiswaById($id)
	{
		$query = "SELECT * FROM mahasiswa WHERE id = $id";
		return $this->execute($query);
	}
	public function add($data)
	{
		$nim = $data['nim'];
		$nama = $data['nama'];
		$tempat = $data['tempat'];
		$tl = $data['tl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telp = $data['telp'];

		$query = "INSERT INTO mahasiswa VALUES (
        '', '$nim', '$nama', '$tempat', '$tl', '$gender', '$email', '$telp'
    )";

		return $this->execute($query);
	}

	public function update($id, $data)
	{
		$nim = $data['nim'];
		$nama = $data['nama'];
		$tempat = $data['tempat'];
		$tl = $data['tl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telp = $data['telp'];

		$query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', tempat='$tempat', tl='$tl', gender='$gender', email='$email', telp='$telp' WHERE id=$id";
		return $this->execute($query);
	}

	function delete($id)
	{
		$query = "DELETE FROM mahasiswa WHERE id=$id";
		return $this->execute($query);
	}

	function fetchMahasiswa($result)
	{
		return mysqli_fetch_assoc($result);
	}
}