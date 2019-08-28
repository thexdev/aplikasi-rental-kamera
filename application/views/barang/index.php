<div class="container my-5">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card border-0 mx-3 shadow">    
                <div class="card-body">
                    <h3 class="mb-3">Data Barang</h3>
                    <div class="table-responsive">
                        <?php if ( $this->session->userdata('login')['role'] == 'admin' ) : ?>
                            <a href="<?php echo site_url('barang/input'); ?>" class="btn bg-orange-coral btn-sm mb-4 rounded-pill shadow"><i class="fa fa-plus-circle"></i> Tambah</a>
                        <?php endif; ?>
                        <a href="<?php echo site_url('laporan/barang'); ?>" target="_blank" class="ml-2 btn btn-secondary mb-4 btn-sm rounded-pill shadow"><i class="fa fa-file-pdf-o mr-1"></i> Export</a href="">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama
                                    <th scope="col">Harga</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Foto</th>
                                    <?php if ( $this->session->userdata('login')['role'] == 'admin' ) : ?>
                                        <th scope="col">&nbsp;</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $counter = 1; ?>
                            <?php foreach ( $barang as $item ) : ?>
                                <tr>
                                    <th scope="row"> <?php echo $counter; ?> </th>
                                    <td> <?php echo $item->nama; ?> </td>
                                    <td>Rp. <?php echo number_format( $item->harga ); ?> </td>
                                    <td> <?php echo $item->ket; ?> </td>
                                    <td><img width="100" height="50" src="<?php echo base_url('uploads/image/' . $item->foto); ?>" alt=""></td>
                                    <?php if ( $this->session->userdata('login')['role'] == 'admin' ) : ?>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="<?php echo site_url('barang/edit/' . $item->id_barang); ?>" class="btn btn-sm bg-orange-coral"><i class="fa fa-edit"></i></a>
                                                <a href="<?php echo site_url('barang/hapus/' . $item->id_barang)?>" class="btn btn-sm bg-orange-coral"><i class="fa fa-trash"></i></a>
                                            </div>
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
    </div>
</div>
<script>
    $('#dataTable').DataTable()
</script>