<?php

$sumber = 'https://api.steinhq.com/v1/storages/642110d4eced9b09e9c62384/20A2';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);
?>

<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="table">
        <section class="table__header">
                <h2><img src="images/upb.PNG" alt="" width="50px" height="50px">&nbsp;&nbsp; Data Mahasiswa TI.20.A2</h2>
                <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> No <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Mahasiswa <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Nim <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Kehadiran <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class = "row">
                    <?php 
                 foreach($data as $row){
                ?>  
                        <div>
                        <td><?php echo $row['NO']?></td>
                        <td> <img src="images/ss.PNG" alt=""><?php echo $row['Nama']?></td>
                        <td><?php echo $row['NIM']?></td>
                        <td><?php echo $row['1']?>&nbsp;<?php echo $row['2']?>&nbsp;<?php echo $row['3']?>&nbsp;<?php echo $row['4']?></td>         
                    </tr>
                    <?php }?>
                </tbody>
            </table>

        </section>
    </main>
</body>
<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju-2.js" type="text/javascript"></script>
</html>