<nav class="navbar navbar-expand-lg navbar-dark shadow bg-dark">
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
                <li class="nav-item">
                    <a class="nav-link text-light btn btn-danger-alt rounded-pill" href="<?php echo site_url('logout'); ?>" id="logout">logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>