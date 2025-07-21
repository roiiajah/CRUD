<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1><?= $title; ?></h1>
        <hr>

        <?php if(session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
        <?php endif; ?>

        <a href="/mahasiswa/create" class="btn btn-primary mb-3">Tambah Data Mahasiswa</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($mahasiswa as $mhs): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $mhs['nim']; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['prodi']; ?></td>
                    <td>
                        <a href="/mahasiswa/edit/<?= $mhs['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/mahasiswa/delete/<?= $mhs['id']; ?>" method="post" class="d-inline">
                             <?= csrf_field(); ?>
                             <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?');">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>