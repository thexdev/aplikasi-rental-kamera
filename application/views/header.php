<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="blue=device-blue, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <title>YNC.Rental</title>
  </head>
  <body>
  <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">YNC.Rental</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

              <li class="nav-item">
                  <a class="nav-link" href="<?=base_url('index.php/login/logout')?>">Logout</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  MENU
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="<?=base_url('index.php/barang/')?>">Data Barang</a>

                        <a class="dropdown-item" href="<?=base_url('index.php/member/')?>">Data Member</a>

                        <a class="dropdown-item" href="<?=base_url('index.php/sewa/')?>">Data Sewa</a>

                </div>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Input Data
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="<?=base_url('index.php/sewa/input')?>">Input Sewa</a>
                          <a class="dropdown-item" href="<?=base_url('index.php/barang/input')?>">Input Barang</a>
                          <a class="dropdown-item" href="<?=base_url('index.php/member/input')?>">Input Member</a>
                  </div>
                </li>

            </ul>

          </div>
        </nav>
    <div class="row">
    <div class="col-12">

