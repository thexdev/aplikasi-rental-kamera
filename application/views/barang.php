<h1>Master Barang</h1>
<table class="table table-bordered">
    <thead>
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Ket</th>
        <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
<?php
$i=0;
foreach($barang as $row){
$i++;
?>
<tr>
    <td><?=$i;?></td>
    <td><?=$row->nama;?></td>
    <td><?=$row->harga;?></td>
    <td><?=$row->ket;?></td>
    <td>
    <a href="<?=base_url('index.php/barang/edit/'.$row->id_barang)?>" class="btn btn-success">Edit</a>
        <a href="<?=base_url('index.php/barang/hapus/'.$row->id_barang)?>" class="btn btn-danger">Hapus</a>
    </td>
</tr>
<?php
    }
?>
    </tbody>
</table>