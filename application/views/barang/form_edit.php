<div class="card border-0 bg-light shadow">
    <div class="card-body">
        <form action="<?php echo site_url('barang/edit_act'); ?>" method="POST">
            <input type="hidden" name="id_member" value="<?php echo $barang->id_barang; ?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $barang->nama; ?>">
            </div> 
            <div class="form-group">
                <label for="harga">Harga Sewa</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $barang->harga; ?>">
            </div> 
            <div class="form-group">
                <label for="ket">Keterangan</label>
                <textarea name="ket" class="form-control"><?php echo $barang->ket; ?></textarea>
            </div> 
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block shadow"><i class="fa fa-check-circle-o mr-2"></i>    Simpan</button>
            </div>
        </form>
    </div>
</div>