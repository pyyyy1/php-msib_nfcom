<?php
// Daftar Nilai Mahasiswa STT NF
$m1 = ["nama" => "Fia Amalia", "NIM" => "0110220219", "nilai" => 100];
$m2 = ["nama" => "Zhalfica", "NIM" => "0110220129", "nilai" => 100];
$m3 = ["nama" => "Kanis", "NIM" => "0110219210", "nilai" => 60];
$m4 = ["nama" => "Raihan", "NIM" => "0110219220", "nilai" => 80];
$m5 = ["nama" => "Thariq", "NIM" => "0110220120", "nilai" => 50];
$m6 = ["nama" => "Fadilah", "NIM" => "0110220101", "nilai" => 50];
$m7 = ["nama" => "Dhia", "NIM" => "0110221023", "nilai" => 90];
$m8 = ["nama" => "Azaria", "NIM" => "0110219102", "nilai" => 45];
$m9 = ["nama" => "Ashila", "NIM" => "0110220126", "nilai" => 30];
$m10 = ["nama" => "Ryan", "NIM" => "0110221029", "nilai" => 100];
$ar_judul = ["NO", "NIM", "NAMA", "NILAI", "KETERANGAN", "GRADE", "PREDIKAT"];

// Array Associative
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Data Nilai Mahasiswa || Zhafia Rabbani Amalia</title>
</head>

<body>
    <h3 align="center">DATA NILAI MAHASISWA</h3>
    <table align="center" width="80%" cellspacing="5" cellpadding="15" border="2">
        <thead>
            <tr style="background-color: greenyellow;">
                <?php
                foreach ($ar_judul as $judul) {

                ?>
                <th><?= $judul ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $m) {
                $nilai = $m['nilai'];
                // Grade Nilai
                if ($nilai > 85 && $nilai <= 100) $grade = "A";
                elseif ($nilai > 75 && $nilai <= 85) $grade = "B";
                elseif ($nilai > 75 && $nilai <= 85) $grade = "B";
                elseif ($nilai > 60 && $nilai <= 75) $grade = "C";
                elseif ($nilai > 40 && $nilai <= 60) $grade = "D";
                else $grade = "E";

                // Keterangan LULUS atau TIDAK
                $keterangan = ($nilai >= 60) ? "Lulus" : "Gagal";

                // Predikat Nilai
                switch ($grade) {
                    case 'A':
                        $predikat = 'Memuaskan';
                        break;
                    case 'B':
                        $predikat = 'Bagus';
                        break;
                    case 'C':
                        $predikat = 'Cukup';
                        break;
                    case 'D':
                        $predikat = 'Kurang';
                        break;
                    case 'E':
                        $predikat = 'Buruk';
                        break;

                    default:
                        $predikat = '';
                        break;
                }

            ?>
            <tr style="text-align: center;">
                <td><?= $no; ?></td>
                <td><?= $m['NIM']; ?></td>
                <td><?= $m['nama']; ?></td>
                <td><?= $m['nilai']; ?></td>
                <td><?= $keterangan ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
            <?php $no++;
            } ?>
        </tbody>
        <tfoot>

            <?php
            // Fungsi Aggregrate Pada PHP
            $totalMahasiswa = count($mahasiswa);
            $jumlahNilai = array_column($mahasiswa, 'nilai');
            $nilaiTertinggi = max($jumlahNilai);
            $nilaiTerendah = min($jumlahNilai);
            $totalNilai = array_sum($jumlahNilai);
            $nilaiRataRata = $totalNilai / $totalMahasiswa;

            // Hasil
            $result = [
                'Nilai Tertinggi' => $nilaiTertinggi,
                'Nilai Terendah' => $nilaiTerendah,
                'Nilai Rata-rata' => $nilaiRataRata,
                'Jumlah Mahasiswa' => $totalMahasiswa
            ];

            foreach ($result as $key => $value) {

            ?>
            <tr>
                <th colspan="6" align="left"> <?= $key ?></th>
                <th><?= $value ?></th>
                <?php } ?>
            </tr>
        </tfoot>
    </table>
</body>

</html>