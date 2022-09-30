<?php
//array scalar (1 dimensi)
$b1 = ['nim'=>'202051171','nama'=>'Anisa','nilai'=>70];
$b2 = ['nim'=>'202051172','nama'=>'Anggun','nilai'=>60];
$b3 = ['nim'=>'202051173','nama'=>'Rizki','nilai'=>80];
$b4 = ['nim'=>'202051174','nama'=>'Azriel','nilai'=>90];
$b5 = ['nim'=>'202051175','nama'=>'Luna','nilai'=>85];
$b6 = ['nim'=>'202051176','nama'=>'Eva','nilai'=>56];
$b7 = ['nim'=>'202051177','nama'=>'Adit','nilai'=>88];
$b8 = ['nim'=>'202051178','nama'=>'Bagus','nilai'=>92];
$b9 = ['nim'=>'202051179','nama'=>'Doni','nilai'=>78];
$b10 = ['nim'=>'202051180','nama'=>'Sania','nilai'=>40];

$ar_judul = ['No','NIM','Nama','Nilai','Keterangan',
'grade','Predikat'];

//array assosiative (> 1 dimensi)
$data = [$b1,$b2,$b3,$b4,$b5,$b6,$b7,$b8,$b9,$b10];

//aggregate function in array
$jumlah_data = count($data);
$jml_nilai = array_column($data,'nilai');
$total_data = array_sum($jml_nilai);
$max_dt = max($jml_nilai);
$min_dt = min($jml_nilai);
$rata2 = $total_data / $jumlah_data;
//keterangan
$tampil = [
    'Jumlah Data'=>$jumlah_data,
    'Total Data'=>$total_data,
    'Jumlah data Tertinggi'=>$max_dt,
    'Jumlah data Terendah'=>$min_dt,
    'Rata2'=>$rata2
];
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Belajar Array</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <h3 class="text-center">Daftar Nilai Mahasiswa</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $jdl){
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($data as $dt){
                //rumus2
                //tentukan kelulusans
                    $aksi =  $dt  ['nilai'] >= 60 ? "Lulus":"Gagal";
                    
                    //tentukan grade nilai
                    if( $dt ['nilai'] >= 85 && $dt ['nilai'] <= 100) $grade = "A";
                    else if($dt  ['nilai'] >= 75 && $dt['nilai'] < 85) $grade = "B";
                    else if($dt ['nilai'] >= 60 && $dt  ['nilai'] < 75) $grade = "C";
                    else if($dt  ['nilai'] >= 30 && $dt  ['nilai'] < 60) $grade = "D";
                    else if($dt  ['nilai'] >= 0 && $dt  ['nilai'] < 30) $grade = "E";
                    else $grade = "";
                    //tentukan predikat
                    switch ($grade) {
                        case "A": $predikat = "Memuaskan"; break;
                        case "B": $predikat = "Bagus"; break;
                        case "C": $predikat = "Cukup"; break;
                        case "D": $predikat = "Kurang"; break;
                        case "E": $predikat = "Buruk"; break;
                        default: $predikat = "";
                    }
        
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $dt['nim'] ?></td>
                    <td><?= $dt['nama'] ?></td>
                    <td><?= $dt['nilai'] ?></td>
                    <td><?= $aksi?></td>
                    <td><?= $grade ?></td> 
                    <td><?= $predikat ?></td> 
                </tr>
                <?php $no++; } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($tampil as $ket => $hasil) {
                ?>
                <tr>
                    <th colspan="7"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>
