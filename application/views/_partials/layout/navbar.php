<nav class="navbar navbar-expand-lg navbar-light shadow bg-white rounded-left">
    <div class="container">
        <a class="navbar-brand" href="<?php echo site_url(); ?>">YNC.Rental</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-block d-md-none"><a class="nav-link" href="javascript:void(0);" id="barang">Data Barang</a></li>
                <li class="nav-item d-block d-md-none"><a class="nav-link" href="javascript:void(0);" id="member">Data Member</a></li>
                <li class="nav-item d-block d-md-none"><a class="nav-link" href="javascript:void(0);" id="sewa">Data Sewa</a></li>
                <!-- <li class="nav-item dropdown d-block d-md-none">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Input Data</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo site_url('sewa/input')?>">Input Sewa</a>
                        <a class="dropdown-item" href="<?php echo site_url('barang/input')?>">Input Barang</a>
                        <a class="dropdown-item" href="<?php echo site_url('member/input')?>">Input Member</a>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('logout'); ?>" id="logout"><i class="fa fa-sign-out"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>