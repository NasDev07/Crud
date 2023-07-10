<?php

require 'function.php';
$conn = mysqli_connect("localhost", "root", "", "crud");

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

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

        <h1>Tambah Data</h1>
        <div class="col-md-6">
            <form action="" method="POST" enctype="multipart/form-data">
                <ul class="list-group">
                    <li class="list-group">
                        <label class="col-form-label" for="kode">Kode</label>
                        <input class="form-control" type="text" name="kode" id="kode" required>
                    </li>
                    <li class="list-group">
                        <label class="col-form-label" for="mk">Nama Mata Kuliah </label>
                        <input class="form-control" type="text" name="mk" id="mk" required>
                    </li>
                    <li class="list-group">
                        <label class="col-form-label" for="sks">SKS</label>
                        <input class="form-control" type="text" name="sks" id="sks" required>
                    </li>
                </ul>
                <button class="btn btn-primary my-3" type="submit" name="submit">Tambah Data</button>
            </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
