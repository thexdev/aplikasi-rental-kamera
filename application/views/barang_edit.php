<div class="col-6">
<form action="<?=base_url();?>index.php/barang/edit_act" method="POST">
<input type="hidden" name="id_member" value="<?=$barang->id_barang?>">
    <div class="form-group">
        <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?=$barang->nama?>">
    </div> 
    <div class="form-group">
        <label for="harga">Harga Sewa</label>
            <input type="text" name="harga" class="form-control" value="<?=$barang->harga?>">
    </div> 
    <div class="form-group">
        <label for="ket">Ket</label>
            <input type="text" name="ket" class="form-control" value="<?=$barang->ket?>">
    </div> 
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>

</form>
</div>