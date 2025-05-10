<?php

/******************************************
 Asisten Pemrograman 13 & 14
 ******************************************/

// Kelas yang berisikan tampilan tabel dari mahasiswa
class TabelMahasiswa extends DB
{
	function getMahasiswa()
	{
		$query = "SELECT * FROM mahasiswa";
		return $this->execute($query);
	}

	function tampil($data)
	{
		$html = "<thead class='thead-light'><tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>TEMPAT</th>
                    <th>TANGGAL LAHIR</th>
                    <th>GENDER</th>
                    <th>EMAIL</th>
                    <th>TELEPON</th>
                    <th>AKSI</th>
                </tr></thead>";
		$no = 1;

		while ($mhs = $this->fetch($data)) {
			$html .= "<tr>
                        <td>" . $no . "</td>
                        <td>" . $mhs['nim'] . "</td>
                        <td>" . $mhs['nama'] . "</td>
                        <td>" . $mhs['tempat'] . "</td>
                        <td>" . $mhs['tl'] . "</td>
                        <td>" . $mhs['gender'] . "</td>
                        <td>" . $mhs['email'] . "</td>
                        <td>" . $mhs['telp'] . "</td>
                        <td>
                            <a href='?edit=" . $mhs['id'] . "'>Edit</a> |
                            <a href='?delete=" . $mhs['id'] . "' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>
                        </td>
                    </tr>";
			$no++;
		}

		return $html;
	}
}