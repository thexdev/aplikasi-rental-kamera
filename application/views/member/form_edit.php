<div class="card border-0 bg-light shadow">
    <div class="card-body">
        <form action="<?php echo site_url('member/edit_act'); ?>" method="POST">
            <input type="hidden" name="id_member" value="<?php echo $member->id_member; ?>">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control rounded-pill" value="<?php echo $member->nama; ?>">
                </div> 
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control rounded-pill" value="<?php echo $member->alamat; ?>">
                </div> 
                <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="number" name="no_hp" class="form-control rounded-pill" value="<?php echo $member->no_hp; ?>">
                </div> 
                <div class="form-group">
                    <button type="submit" class="btn bg-kimoby rounded-pill text-white btn-block shadow"><i class="fa fa-check-circle-o mr-2"></i> Simpan</button>
                </div>
            </form>
    </div>
</div>