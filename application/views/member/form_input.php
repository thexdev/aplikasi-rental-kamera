<div class="card border-0 bg-light shadow">
    <div class="card-body">
        <form action="<?php echo site_url('member/input_act'); ?>" method="POST">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control">
            </div> 
            <div class="form-group">
                <label for="alamat">Alamat</label>  
                    <input type="text" name="alamat" class="form-control">
            </div> 
            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="text" name="no_hp" class="form-control">
            </div> 
            <button type="submit" class="btn btn-primary btn-block shadow rounded-pil"><i class="fa fa-check-circle-o"></i> Simpan</button>
        </form>
    </div>
</div>