<?php
$mhs = array(
    array(
        "npm" => "22441102",
        "nama" => "Nety Etika Sari",
        "prodi" => "Sistem Informasi (S1)",
    ),
    array(
        "npm" => "22441142",
        "nama" => "Meliyani",
        "prodi" => "Sistem Informasi (S1)",
    ),
    array(
        "npm" => "22441160",
        "nama" => "Muhammad Haekal Rasyad Nasution",
        "prodi" => "Sistem Informasi (S1)",
    ),
    array(
        "npm" => "22441161",
        "nama" => "Rizki Mahesa Ginting",
        "prodi" => "Sistem Informasi (S1)",
    )
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h3>Data Mahasiswa STMIK Kaputama</h3>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 0;
        foreach ($mhs as $mhs) {
            $no++;
        ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $mhs['npm']; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['prodi']; ?></td>
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editMhs<?= $mhs['npm']; ?>">
                        Edit
                    </button>
                </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="editMhs<?= $mhs['npm']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Mahasiswa</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="npm" id="npm" value="<?= $mhs['npm']; ?>">
                                <label for="npm">NPM</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $mhs['nama']; ?>">
                                <label for="nama">Nama</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="prodi" id="prodi" value="<?= $mhs['prodi']; ?>">
                                <label for="prodi">Program Studi</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>