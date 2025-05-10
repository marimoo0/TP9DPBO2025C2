<?php

include("presenter/ProsesMahasiswa.php");

$mahasiswa = new ProsesMahasiswa();

// Jika ada aksi tambah/update
if (isset($_POST['submit'])) {
    if ($_POST['submit'] == 'Simpan') {
        $mahasiswa->tambahData($_POST);
        header("Location: index.php");
        exit;
    } elseif ($_POST['submit'] == 'Update') {
        $mahasiswa->updateData($_POST['id'], $_POST);
        header("Location: index.php");
        exit;
    }
}

// Jika ada aksi hapus
if (isset($_GET['delete'])) {
    $mahasiswa->deleteData($_GET['delete']);
    header("Location: index.php");
    exit;
}

// Ambil data untuk diedit
$editData = null;
if (isset($_GET['edit'])) {
    $editData = $mahasiswa->getDataById($_GET['edit']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4"><?= isset($editData) ? "Edit Mahasiswa" : "Tambah Mahasiswa" ?></h2>

        <form method="POST" action="">
            <?php if (isset($editData)) echo "<input type='hidden' name='id' value='{$editData['id']}'>" ?>

            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" name="nim" class="form-control" value="<?= $editData['nim'] ?? '' ?>" required>
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= $editData['nama'] ?? '' ?>" required>
            </div>

            <div class="form-group">
                <label for="tempat">Tempat Lahir</label>
                <input type="text" name="tempat" class="form-control" value="<?= $editData['tempat'] ?? '' ?>" required>
            </div>

            <div class="form-group">
                <label for="tl">Tanggal Lahir</label>
                <input type="date" name="tl" class="form-control" value="<?= $editData['tl'] ?? '' ?>" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control" required>
                    <option value="Laki-laki"
                        <?= (isset($editData) && $editData['gender'] == 'Laki-laki') ? 'selected' : '' ?>>Laki-laki
                    </option>
                    <option value="Perempuan"
                        <?= (isset($editData) && $editData['gender'] == 'Perempuan') ? 'selected' : '' ?>>Perempuan
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="<?= $editData['email'] ?? '' ?>" required>
            </div>

            <div class="form-group">
                <label for="telp">Telepon</label>
                <input type="text" name="telp" class="form-control" value="<?= $editData['telp'] ?? '' ?>" required>
            </div>

            <button type="submit" name="submit" value="<?= isset($editData) ? 'Update' : 'Simpan' ?>"
                class="btn btn-primary">
                <?= isset($editData) ? 'Update' : 'Simpan' ?>
            </button>
        </form>

        <hr class="my-5">

        <h3 class="mb-3">Daftar Mahasiswa</h3>
        <?php $mahasiswa->tampil(); ?>
    </div>
</body>

</html>