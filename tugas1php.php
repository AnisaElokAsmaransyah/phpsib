<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latihan Memproses Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <form class="border border-light p-5" method="POST">
   
            <p class="h4 mb-4 text-center">Form Gaji Pegawai</p>

            <label for="nama">Nama Pegawai</label>
            <input type="text" name="nama" class="form-control mb-4" placeholder="Nama Pegawai">

            <label for="agama">Agama</label>
            <select class="browser-default custom-select mb-4" name="agama">
                <option value="" disabled="" selected="">-- Pilih Agama --</option>
                <option value="islam">Muslimm</option>
                <option value="islam">Non Muslim</option>
            </select>
            <br />
            <label for="jabatan">Jabatan</label>
            <br/>
            <input type="radio" name="jabatan" value="manager"> Manager <br>
            <input type="radio" name="jabatan" value="asisten"> Asisten <br>
            <input type="radio" name="jabatan" value="kabag"> Kabag<br>
            <input type="radio" name="jabatan" value="staff"> Staff <br>
            
            <label for="status">Status Menikah</label>
            <br/>
            <input type="radio" name="status" value="sudah"> Sudah<br>
            <input type="radio" name="status" value="belum"> Belum<br>

            <label for="nilai">Jumlah Anak</label>
            <input type="text" name="anak" class="form-control mb-4" placeholder="Jumlah anak">

            <button class="btn btn-info btn-block my-4" name="proses" type="submit">Simpan</button>
        </form>

        <?php 
        //tangkap request
        $nama = $_POST['nama'];
        $agama = $_POST['agama'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];
        $jumlahanak = $_POST['anak'];
        $simpan = $_POST['proses'];
        //tentukan kelulusan
        // $ket = ($nilai >= 60)?"Lulus":"Gagal";
        //tentukan grade nilai
        if($status == "sudah" && $jumlahanak = 2) $tunjangan = 0.05 * $gapok;
        else if($status == "sudah" && $jumlahanak <=5 ) $tunjangan = 0.10 * $gapok;
        else if($status == "sudah" && $jumlahanak > 5 ) $tunjangan = 0.15 * $gapok;
        else $tunjangan = 0;
        //tentukan predikat

        switch ($jabatan) {
            case "manager":
                $gapok = 20000000 ;
                break;
            case "asisten":
                $gapok = 15000000 ;
                break;
            case "kabag":
                $gapok  = 10000000;
                break;
            case "staff":
                $gapok = 4000000;
                break;
            default: $gapok = 0;
        }

        $gajikotor = $gapok + $tunjangan;
        if ($agama == "muslim" && $gajikotor >= 6000000) {
            $zaprof = 2.5 / 100 * $gajikotor;
        }
        else {
            $zaprof = 0;
        }

        $thp = $gajikotor - $zaprof ;

        if(isset($simpan)){ ?>
        <div class="card" style="width: 100%;">
            <div class="body">
                <div class=" alert alert-primary p-5" role="alert">
                    Nama Pegawai: <?= $nama ?>
                    <br />Agama: <?= $agama ?>
                    <br />Jabatan: <?= $jabatan?>
                    <br />Status: <?= $status?>
                    <br />Jumlah Anak: <?= $jumlahanak ?>
                    <br />Tunjangan: <?= $tunjangan?>
                    <br />Gaji Kotor: <?= $gajikotor ?>
                    <br />Take Home Pay: <?= $thp ?>
                </div>
            </div>
        </div>
        <?php } ?>
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
</body>
</html>
