<div class="col-6">
<form action="<?=base_url();?>index.php/member/edit_act" method="POST">
<input type="hidden" name="id_member" value="<?=$member->id_member?>">
    <div class="form-group">
        <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?=$member->nama?>">
    </div> 
    <div class="form-group">
        <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?=$member->alamat?>">
    </div> 
    <div class="form-group">
        <label for="no_hp">No HP</label>
            <input type="text" name="no_hp" class="form-control" value="<?=$member->no_hp?>">
    </div> 
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-save"></i>
        Simpan</button>

</form>
</div>