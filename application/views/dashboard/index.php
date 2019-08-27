<div class="container">
	<div class="row my-5">
		<div class="col-12 col-sm col-md-12 col-lg-12">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="card highlight bg-orange-coral rounded-left shadow-sm border-0 d-flex flex-row mb-4 mb-md-0">
							<div class="card-header border-0 rounded shadow">
								<i class="fa fa-bookmark-o fa-5x text-light my-3"></i>
							</div>
							<div class="card-body text-light">
								<h2>Barang</h2>
								<p class="lead"><?php echo $totalBarang; ?>
								<?php if ( $this->session->userdata('login')['role'] == 'admin' ) : ?>
									<a href="<?php echo site_url('barang/input'); ?>" class="text-white btn btn-outline-light btn-sm rounded-pill ml-0 ml-md-5">Tambah Data</a>
								<?php else : ?>
									<?php echo null; ?>
								<?php endif; ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card highlight bg-kimoby rounded-left shadow-sm border-0 d-flex flex-row mb-4 mb-md-0">
							<div class="card-header border-0 rounded shadow">
								<i class="fa fa-address-book-o fa-5x text-light my-3"></i>
							</div>
							<div class="card-body text-light">
								<h2>Member</h2>
								<p class="lead"><?php echo $totalMember; ?>
								<?php if ( $this->session->userdata('login')['role'] == 'admin' ) : ?>
									<a href="<?php echo site_url('member/input'); ?>" class="text-white btn btn-outline-light btn-sm rounded-pill ml-0 ml-md-5">Tambah Data</a>
								<?php else : ?>
									<?php echo null; ?>
								<?php endif; ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card highlight bg-subu rounded-left shadow-sm border-0 d-flex flex-row mb-4 mb-md-0">
							<div class="card-header border-0 rounded shadow">
								<i class="fa fa-folder-o fa-5x text-light my-3"></i>
							</div>
							<div class="card-body text-light">
								<h2>Sewa</h2>
								<p class="lead"><?php echo $totalSewa; ?>
								<?php if ( $this->session->userdata('login')['role'] == 'admin' ) : ?>
									<a href="<?php echo site_url('sewa/input'); ?>" class="text-white btn btn-outline-light btn-sm rounded-pill ml-0 ml-md-5">Tambah Data</a>
								<?php else : ?>
									<?php echo null; ?>
								<?php endif; ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>