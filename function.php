<?php

$conn = mysqli_connect("localhost", "root", "", "crud");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    // ambil data dari tiap elemet dalam form
    global $conn;

    $kode = htmlspecialchars($data["kode"]);
    $mk = htmlspecialchars($data["mk"]);
    $sks = htmlspecialchars($data["sks"]);


    $query = "INSERT INTO mahasiswa VALUES ('', '$kode', '$mk', '$sks')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $kode = htmlspecialchars($data["kode"]);
    $mk = htmlspecialchars($data["mk"]);
    $sks = htmlspecialchars($data["sks"]);

    $query = "UPDATE mahasiswa SET
                kode = '$kode',
                mk = '$mk',
                sks = '$sks'
            WHERE id = $id
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}
