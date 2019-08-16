<h1>List Sewa Aktif</h1>
<table class="table table-bordered">
    <thead>
        <tr>
        <th>No</th>
        <th>Nama Member</th>
        <th>Nama Barang</th>
        <th>Jml</th>
        <th>Tgl Sewa</th>
        <th>Lama</th>
        <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
<?php
$i=0;
foreach($sewa as $row){
$i++;
?>
<tr>
    <td><?=$i;?></td>
    <td><?=$row->nama;?></td>
    <td><?=$row->nama_barang;?></td>
    <td><?=$row->jml;?></td>
    <td><?=$row->tgl_sewa;?></td>
    <td><?=$row->lama;?></td>
    <td>
        <a href="<?=base_url('index.php/sewa/kembali/'.$row->id_sewa)?>" class="btn btn-success">Kembalikan</a>
    </td>
</tr>
<?php
    }
?>
    </tbody>
</table>