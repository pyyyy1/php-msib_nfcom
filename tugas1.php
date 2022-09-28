<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Aplikasi Form Input Data Pegawai 1 PHP || Zhafia Rabbani Amalia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  </head>
  <style>
    body {
      background-size: cover;
      background-attachment: fixed;
      background-image: url('https://images.unsplash.com/photo-1577017040065-650ee4d43339?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');
      font-family: Viga;
      margin: 1cm 3cm;
    }
    .accordion-header,
    .accordion-item {
      overflow: hidden;
      align-items: center;
      background-color: rgba(23, 230, 227, 0.58);
    }
    .accordion-button {
      font-size: 20px;
      text-align: center;
      color: rgb(23, 230, 227);
      background-color: #191919;
    }
    .card-text {
      color: rgb(241, 52, 19);
    }
    .topbar {
      padding: 2%;
      margin-bottom: 2%;
      align-items: center;
      overflow: hidden;
      background-color: #191919;
    }
    .topten {
      padding: 2%;
      margin-bottom: 2%;
      align-items: center;
      overflow: hidden;
      background-color: rgba(37, 230, 23, 0.682);
    }
    #p {
      text-align: center;
      font-size: 25px;
      font-family: Viga;
      color: rgb(23, 230, 227);
    }
  </style>
  <body>
    <div class="topbar">
      <p id="p">Form Input Data Pegawai</p>
    </div>
    <form class="row g-3" method="POST">
    <div class="topten">
    <div class="row mb-4 pt-4">
    <div class="col-md-6">
                <label for="inputNama" class="form-label fw-bold">Nama Pegawai</label>
                <input type="text" class="form-control" id="inputNama" name="nama" required />
            </div>

            <div class="col-md-6">
                <label for="inputAgama" class="form-label fw-bold">Agama</label>
                <select id="inputAgama" name="agama" class="form-select" required>
                    <option value="" selected>-- Pilih Agama --</option>
                    <option value="islam">Islam</option>
                    <option value="katolik">Katolik</option>
                    <option value="kristen">Kristen</option>
                    <option value="konghucu">Konghucu</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                </select>
            </div>

            <div class="col-md-6 pt-3">
                <label class="form-label d-block fw-bold">Jabatan</label>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="manager" type="radio" name="jabatan" value="Manager" required />
                    <label class="form-check-label" for="manager">Manager</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="assisten" type="radio" name="jabatan" value="Assisten" required />
                    <label class="form-check-label" for="assisten">Assisten</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="kabag" type="radio" name="jabatan" value="Kepala Bagian" required />
                    <label class="form-check-label" for="kabag">Kepala Bagian</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="staff" type="radio" name="jabatan" value="Staff" required />
                    <label class="form-check-label" for="staff">Staff</label>
                </div>
            </div>

            <div class="col-md-6 pt-3">
                <label class="form-label d-block fw-bold">Status</label>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="menikah" type="radio" name="status" value="Menikah" required />
                    <label class="form-check-label" for="menikah">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="belumMenikah" type="radio" name="status" value="Belum Menikah" required />
                    <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
                </div>
            </div>

            <div class="col-12">
                <label for="inputAnak" class="form-label fw-bold">Jumlah Anak</label>
                <input type="number" class="form-control" id="inputAnak" name="jumlahAnak" />
            </div>

            <div class="col-12 pt-3">
                <button type="submit" name="proses" class="btn btn-sm btn-primary">Save</button>
            </div>
        </form>

        <?php
            error_reporting(0);
            // declare for request
            $nama = $_POST['nama'];
            $agama = $_POST['agama'];
            $jabatan = $_POST['jabatan'];
            $status = $_POST['status'];
            $jumlahAnak = $_POST['jumlahAnak'];
            $tombolButton = $_POST['proses'];

            switch ($jabatan) {
                case "Manager": $gajiPokok = 20000000; break;
                case "Asissten": $gajiPokok = 15000000; break;
                case "Kepala Bagian": $gajiPokok = 10000000; break;
                case "Staff": $gajiPokok = 4000000; break;
                default: $gajiPokok = 0; break;
            }

            if ($status == "Menikah" && $jumlahAnak <= 2) $tunjanganKeluarga = $gajiPokok * 5 / 100;
            else if ($status == "Menikah" && $jumlahAnak <= 5) $tunjanganKeluarga = $gajiPokok * 10 / 100;
            else if ($status == "Menikah" && $jumlahAnak > 5) $tunjanganKeluarga = $gajiPokok * 15 / 100;
            else $tunjanganKeluarga = 0;

            $tunjanganJabatan = $gajiPokok * 20 / 100;
            $gajiKotor = $gajiPokok + $tunjanganJabatan + $tunjanganKeluarga;
            $zakatProfesi = $agama == "islam" && $gajiKotor >= 6000000 ? $gajiKotor * 2.5 / 100 : 0;
            $takeHomePay = $gajiKotor - $zakatProfesi;

            if (isset($tombolButton)) { 
        ?>
            <div class="table-responsive rounded my-5">
                <table class="table table-bordered mb-2">
                    <thead>
                        <tr class="text-light bg-primary text-center">
                            <th>Nama Pegawai</th>
                            <th>Jabatan</th>
                            <th>Agama</th>
                            <th>Status</th>
                            <th>Jumlah Anak</th>
                            <th>Gaji Pokok</th>
                            <th>Tunjangan Jabatan</th>
                            <th>Tunjangan Keluarga</th>
                            <th>Gaji Kotor</th>
                            <th>Zakat Profesi</th>
                            <th>Take Home Pay</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-light bg-dark">
                            <td><?= $nama; ?> </td>
                            <td><?= $jabatan; ?></td>
                            <td><?= $agama; ?>
                            <td><?= $status; ?></td>
                            <td><?= $jumlahAnak; ?></td>
                            <td><?= 'Rp ',number_format($gajiPokok, 2, ',', '.'); ?></td>
                            <td><?= 'Rp ',number_format($tunjanganJabatan, 2, ',', '.'); ?></td>
                            <td><?= 'Rp ',number_format($tunjanganKeluarga, 2, ',', '.'); ?></td>
                            <td><?= 'Rp ',number_format($gajiKotor, 2, ',', '.'); ?></td>
                            <td><?= 'Rp ',number_format($zakatProfesi, 2, ',', '.'); ?></td>
                            <td><?= 'Rp ',number_format($takeHomePay, 2, ',', '.'); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php } ?>
    </div>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>