<div class="container my-5">
    <!-- <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">  
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card border-0 bg-light shadow">
                        
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="card bg-white border-0 mx-3 shadow">
        <div class="card-body">
            <h3 class="mb-3">Daftar Sewa Aktif</h3>
            <a href="<?php echo site_url('sewa/input'); ?>" class="btn btn-primary btn-sm mb-4 rounded-pill shadow"><i class="fa fa-plus-circle"></i> Tambah</a>
            <div class="table-responsive">
                <table class="table table-striped dataTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" class="text-nowrap">Nama Member</th>
                            <th scope="col" class="text-nowrap">Nama Barang</th>
                            <th scope="col" class="text-nowrap">Jumlah</th>
                            <th scope="col" class="text-nowrap">Tanggal Sewa</th>
                            <th scope="col" class="text-nowrap">Lama</th>
                            <th scope="col" class="text-nowrap">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $counter = 1; ?>
                    <?php foreach ( $sewa as $item ) : ?>
                        <tr>
                            <td scope="row"> <?php echo $counter; ?> </td>
                            <td> <?php echo $item->nama; ?> </td>
                            <td> <?php echo $item->nama_barang; ?> </td>
                            <td> <?php echo $item->jml; ?> </td>
                            <td> <?php echo $item->tgl_sewa; ?> </td>
                            <td> <?php echo $item->lama; ?> Hari</td>
                            <td>
                                <a href="<?php echo site_url('sewa/kembali/' . $item->id_sewa); ?>" class="btn btn-primary btn-sm">Kembalikan</a>
                            </td>
                        </tr>
                    <?php $counter++; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $('.dataTable').DataTable()
</script>