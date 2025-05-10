# TP 9 DPBO 2025

## -- Janji --

Saya Khana Yusdiana NIM 2100991 mengerjakan soal TP 9 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## -- Desain Program --

![1]()

## -- Penjelasan Alur --

## Menambahkan Data Mahasiswa

- Pengguna mengisi form input (NIM, Nama, Tempat Lahir, Tanggal Lahir, Gender, Email, Telepon).
- Menekan tombol Simpan, data akan dikirim ke ProsesMahasiswa.php.
- Data ditambahkan melalui method add() pada Mahasiswa.class.php, kemudian diredirect ke index.php.

## Mengedit Data Mahasiswa

- Pengguna menekan tombol Edit pada salah satu baris tabel.
- Data mahasiswa akan dimuat ke form.
- Setelah diubah, pengguna menekan Update, data diperbarui via method update().

## Menghapus Data

- Pengguna menekan tombol Hapus.
- Akan memicu method delete() pada model, lalu diredirect ke halaman utama.

## Menampilkan Data

- index.php memanggil method tampil() untuk menampilkan semua data mahasiswa dalam bentuk tabel.
- File TampilMahasiswa.php menghasilkan isi tabel HTML yang disisipkan dalam template skin.html.

## -- Dokumentasi saat Program di Jalankan --

### Form Tambah Mahasiswa

![1](https://github.com/marimoo0/TP9DPBO2025C2/blob/7449db430ef6bba34e59481edc73bc244795a537/ss/Screenshot_1.png)

### Tabel Mahasiswa

![1](https://github.com/marimoo0/TP9DPBO2025C2/blob/7449db430ef6bba34e59481edc73bc244795a537/ss/Screenshot_2.png)

### Form Edit Mahasiswa

![1](https://github.com/marimoo0/TP9DPBO2025C2/blob/7449db430ef6bba34e59481edc73bc244795a537/ss/Screenshot_3.png)

### Hapus Data

![1](https://github.com/marimoo0/TP9DPBO2025C2/blob/7449db430ef6bba34e59481edc73bc244795a537/ss/Screenshot_4.png)
