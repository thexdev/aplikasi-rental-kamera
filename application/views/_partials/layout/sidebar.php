<div class="sidebar-content">
	<ul class="nav flex-column my-2">
		 <li class="nav-item my-1">
		    <a class="nav-link text-light active" href="javascript:void(0);" id="dashboard"><i class="fa fa-dashboard mr-2"></i> Dashboard</a>
		 </li>
		 <li class="nav-item my-1">
		    <a class="nav-link text-light" href="javascript:void(0);" id="barang"><i class="fa fa-bookmark-o mr-2"></i> <?php echo ( $this->session->userdata('login')['role'] == 'admin' ) ? 'Data' : 'Report' ?> Barang</a>
		 </li>
		 <li class="nav-item my-1">
		    <a class="nav-link text-light" href="javascript:void(0);" id="member"><i class="fa fa-address-book-o mr-2"></i> <?php echo ( $this->session->userdata('login')['role'] == 'admin' ) ? 'Data' : 'Report' ?> Member</a>
		 </li>
		 <li class="nav-item my-1">
		    <a class="nav-link text-light" href="javascript:void(0);" id="sewa"><i class="fa fa-folder-o mr-2"></i> <?php echo ( $this->session->userdata('login')['role'] == 'admin' ) ? 'Data' : 'Report' ?> Sewa</a>
		 </li>
		 <li class="nav-item my-1">
		 </li>
	</ul>
</div>