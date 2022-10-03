<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aplikasi Kumpulan Bangun Datar || Zhafia Rabbani Amalia</title>

    <!-- Link rel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <style>
    body {
        background-image: url('https://images.unsplash.com/photo-1664447972862-e26efc5b709f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80');
    }

    .card {
        margin: 2rem;
        text-align: center;
    }

    .card-header {
        background-color: grey;
        font-size: 1.3rem;
        font-weight: bold;
    }

    table {
        border: 1px solid black;
        width: 100%;
    }

    tr,
    th,
    td {
        border: 1px solid black;
        text-align: center;
    }
    </style>
</head>

<body>
    <?php
      //sertakan file induk class
      require_once "lingkaran.php";
      require_once "segitiga.php";
      require_once "persegipanjang.php";
      
      //array scalar
      $se1 = new segitiga(12, 5);
      $li1 = new lingkaran(14);
      $pe1 = new persegipanjang(5, 4);
      $se2 = new segitiga(3, 4);
      $li2 = new lingkaran(7);
      $pe2 = new persegipanjang(10, 5);
      $se3 = new segitiga(8, 6);
      $li3 = new lingkaran(5);
      $pe3 = new persegipanjang(12, 10);
            
      $arr_judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
      
      //array associative
      $kump_bidang = [$se1 ,$li1, $pe1, $se2, $li2, $pe2, $se3, $li3, $pe3];
    ?>

    <div class="card">
        <div class="card-header">
            DATA KUMPULAN BANGUN DATAR
        </div>
        <div class="card-body">
            <p class="card-text">
            <table class="scroll" cellpadding="8" cellspacing="0">
                <thead>
                    <tr bgcolor="#9EC9E2">
                        <?php foreach ($arr_judul as $jdl) { ?>
                        <th><?= $jdl ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php 
              $no = 1;
              foreach ($kump_bidang as $bidang) { 
              
              ?>

                    <tr>
                        <th><?= $no ?></th>
                        <td><?= $bidang->namabidang() ?></td>
                        <td><?= $bidang->keterangan() ?></td>
                        <td class="center"><?= $bidang->luasbidang() ?></td>
                        <td class="center"><?= $bidang->kelilingbidang() ?></td>
                    </tr>
                    <?php $no++; } ?>
                </tbody>
            </table>
            </p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>