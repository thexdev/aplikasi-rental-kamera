<div class="col-6">
<form action="<?=base_url();?>index.php/sewa/input_act" method="POST">

    
    <div class="form-group">
        <label for="id_barang">Nama Barang</label>
            <?php echo form_dropdown('id_barang',$barang,'',' class="form-control"');?>
    </div> 
    <div class="form-group">
        <label for="jml">Jumlah</label>
            <input type="text" name="jml" class="form-control">
    </div> 
    <div class="form-group">
        <label for="id_member">Nama Member</label>
            <?php echo form_dropdown('id_member',$member,'','  class="form-control"');?>
    </div> 
    <div class="form-group">
        <label for="lama">Lama Pinjam</label>
            <input type="text" name="lama" class="form-control">
    </div> 
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-save"></i>
        Simpan</button>

</form>
</div>