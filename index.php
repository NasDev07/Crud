<?php

require 'function.php';

$data = query("SELECT * FROM mahasiswa");

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <a class="btn btn-primary mt-5" href="tambah.php">Tambah Data</a>
        <table class="table my-5">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama Mata Kuliah</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data as $row) : ?>
                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $row["kode"]; ?></td>
                        <td><?php echo $row["mk"]; ?></td>
                        <td><?php echo $row["sks"]; ?></td>
                        <td>
                            <a class="btn btn-warning" href="ubah.php?id=<?= $row["id"]; ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus.php?id=<?= $row["id"]; ?>">Hapus</a>
                        </th>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
