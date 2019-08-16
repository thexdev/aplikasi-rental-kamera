<h1>Master Data Member</h1>
<table class="table table-bordered">
    <thead>
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
<?php
$i=0;
foreach($member as $row){
$i++;
?>
<tr>
    <td><?=$i;?></td>
    <td><?=$row->nama;?></td>
    <td><?=$row->alamat;?></td>
    <td><?=$row->no_hp;?></td>
    <td>
        <a href="<?=base_url('index.php/member/edit/'.$row->id_member)?>" class="btn btn-success">Edit</a>
        <a href="<?=base_url('index.php/member/hapus/'.$row->id_member)?>" class="btn btn-danger">Hapus</a>
    </td>
</tr>
<?php
    }
?>
    </tbody>
</table>