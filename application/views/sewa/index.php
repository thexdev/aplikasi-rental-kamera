<div class="container my-5">
    <div class="card bg-white border-0 mx-3 shadow">
        <div class="card-body">
            <h3 class="mb-3">Daftar Sewa Aktif</h3>
            <?php if ( $this->session->userdata('login')['role'] == 'admin' ) : ?>
                <a href="<?php echo site_url('sewa/input'); ?>" class="btn bg-subu btn-sm mb-4 rounded-pill shadow"><i class="fa fa-plus-circle"></i> Tambah</a>
            <?php endif; ?>
            <a href="<?php echo site_url('laporan/sewa'); ?>" target="_blank" class="ml-2  btn btn-secondary mb-4 btn-sm rounded-pill shadow"><i class="fa fa-file-pdf-o mr-1"></i> Export</a href="">
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
                            <?php if ( $this->session->userdata('login')['role'] == 'admin' ) : ?>
                                <th scope="col" class="text-nowrap">&nbsp;</th>
                            <?php endif; ?>
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
                            <?php if ( $this->session->userdata('login')['role'] == 'admin' ) : ?>
                                <td>
                                    <a href="<?php echo site_url('sewa/kembali/' . $item->id_sewa); ?>" class="btn bg-subu btn-sm">Kembalikan</a>
                                </td>
                            <?php endif; ?>
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