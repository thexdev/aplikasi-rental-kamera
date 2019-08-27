<div class="card border-0 bg-light shadow">
	<div class="card-body">	
		<form action="<?=base_url();?>index.php/sewa/input_act" method="POST">
		    <div class="form-group">
		        <label for="id_barang">Nama Barang</label>
		        <?php echo form_dropdown('id_barang', $barang, '', ' class="form-control"');?>
		    </div> 
		    <div class="form-group">
		        <label for="jml">Jumlah</label>
		         <input type="number" name="jml" class="form-control">
		    </div> 
		    <div class="form-group">
		        <label for="id_member">Nama Member</label>
		        <?php echo form_dropdown('id_member', $member, '', 'class="form-control"');?>
		    </div> 
		    <div class="form-group">
		        <label for="lama">Lama Pinjam</label>
		         <input type="number" name="lama" class="form-control">
		    </div> 
		    <div class="form-button">
		    	<button type="submit" class="btn btn-primary btn-block shadow"><i class="fa fa-check-circle-o mr-2"></i> Simpan</button>
		    </div>
		</form>
	</div>
</div>