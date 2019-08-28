<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <?php $this->load->view('_partials/layout/meta-tags'); ?>
    <!-- Bootstrap CSS -->
    <?php $this->load->view('_partials/bootstrap-4/bootstrap-4-css'); ?>
    <!-- Font Awesome CSS -->
    <?php $this->load->view('_partials/font-aweseome/font-awesome-4'); ?>
    <!-- Custom CSS -->
    <?php $this->load->view('_partials/layout/css/base-css'); ?>
    <!-- Site Title -->
    <title>YNC.Rental</title>
</head>
<body>
<div class="container mt-4">
	<div class="row justify-content-center">
		<div class="col-12 col-sm-12 col-md-5 col-lg-5">
            <a href="<?php echo site_url(); ?>" class="btn btn-outline-dark rounded-pill shadow mb-3 btn-back"><i class="fa fa-arrow-circle-left mr-1"></i> Back</a>
            <h5 class="float-right"> <?php echo $pageTitle; ?> </h5>
            <?php switch ( $currentPage ) {
                case 'barang' :
                    if ( $actionPage == 'input' )
                    {
                        $this->load->view($currentPage . '/form_input');
                    }
                    else
                    {
                        $this->load->view($currentPage . '/form_edit');
                    }
                break;

                case 'member' :
                    if ( $actionPage == 'input' )
                    {
                        $this->load->view($currentPage . '/form_input');
                    }
                    else
                    {
                        $this->load->view($currentPage . '/form_edit');
                    }
                break;

                case 'sewa' :
                    if ( $actionPage == 'input' )
                    {
                        $this->load->view($currentPage . '/form_input');
                    }
                    else
                    {
                        $this->load->view($currentPage . '/form_edit');
                    }
                break;

                default :
                    redirect(site_url());
                break;
            } ?>
        </div>
    </div>
</div>

<?php $this->load->view('_partials/bootstrap-4/bootstrap-4-js'); ?>
</body>
</html>