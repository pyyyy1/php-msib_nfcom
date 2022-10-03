<?php
require 'pegawai.php';
    $p1 = new Pegawai('0110220219', 'Fia Amalia', 'Manager', 'Islam', 'Belum Menikah');
    $p2 = new Pegawai('0110220129', 'Zhalfica', 'Asisten Manager', 'Islam', 'Belum Menikah');
    $p3 = new Pegawai('0110219220', 'Raihando Kristin', 'Kepala Bagian', 'Hindu', 'Menikah');
    $p4 = new Pegawai('0110220120', 'Ronaldo Ragusfi', 'Staff', 'Kristen', 'Menikah');
    $p5 = new Pegawai('0110219102', 'Azaria Leivora', 'Staff', 'Budha', 'Menikah');
    $p6 = new Pegawai('0110219120', 'Ashila Angelica', 'Staff', 'Hindu', 'Belum Menikah');
    $p7 = new Pegawai('0110219001', 'Athalia Purnama', 'Staff', 'Islam', 'Menikah');
    $p4 = new Pegawai('0110220120', 'Thariq Christian ', 'Staff', 'Kristen', 'Menikah');
    $p8 = new Pegawai('0110218102', 'Faizah Raihana', 'Staff', 'Kristen', 'Belum Menikah');
    $p9 = new Pegawai('0110219024', 'Azzura Bilqis', 'Staff', 'Islam', 'Belum Menikah');
    $p10 = new Pegawai('0110219207', 'Baihaqi Arrasyid', 'Staff', 'Islam', 'Menikah');
    
    $pegawai = [$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10];
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aplikasi Data Gaji Pegawai || Zhafia Rabbani Amalia</title>

    <!-- Link rel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <style>
    body {
        background-image: url('https://images.unsplash.com/photo-1664447972862-e26efc5b709f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80');
    }
    </style>

    <!-- Header Content -->
    <header class="sticky-top">
        <div class="container py-4">
            <div class="container d-flex flex-wrap justify-content-center align-items-center">
                <h3 class="fs-4">Daftar Gaji Pegawai</h3><a class="animate__animated animate__rotateIn navbar-brand"
                    </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container py-5">
            <div class="table-responsive">
                <table class="table table-primary table-bordered table-striped align-middle">
                    <thead class="table-light text-center">
                        <tr>
                            <?php $ar_judul = ['NO', 'NIP', 'Nama Pegawai', 'Jabatan', 'Agama', 'Status', 'Gaji Pokok', 'Tunjangan Jabatan', 'Tunjangan Keluarga', 'Gaji Kotor', 'Zakat Profesi', 'Take Home Pay'];foreach($ar_judul as $judul) {?>
                            <th><?= $judul ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach($pegawai as $pegawai) {?>
                        <tr align="center">
                            <td><?= $no++ ?></td>
                            <?= $pegawai->mencetak() ?>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="py-4">
        <div class="container">
            <p class="text-small text-center fw-semibold m-0">
                Developed by <a href="https://github.com/zhafiara/php-msib_nfcom" target="_blank"
                    class="text-decoration-none fw-semibold">Zhafia Rabbani Amalia</a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>