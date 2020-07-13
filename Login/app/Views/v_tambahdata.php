<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Tekweb &mdash; Ahmad Rofi</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/stisla-master/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/stisla-master/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/home">Tekweb</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/home">TW</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header"></li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Profil</span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="/Error" class="dropdown-item has-icon">
                        <i class="fas fa-cog"></i> Settings
                    </a>
                  </li>
                  <li>
                    <a href="<?= base_url('login/logout') ?>" class="has-icon text-danger">
                      <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                  </li>
                </ul>
              </li>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://www.instagram.com/ahmad_rofi04/" class="btn btn-primary btn-lg btn-block btn-icon-split">  
                <i class="beep">
                    <img src="<?= base_url() ?>/template/stisla-master/assets/img/ahmadrofi2.jpg" alt="logo" width="30" class="shadow-light rounded-circle">
                </i>
                    Ahmad Rofi
              </a>
            </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Data</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/user">home</a></div>
              <div class="breadcrumb-item">Tambah Data</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Data User pada form di bawah ini</h4>
                    <div class="card-header-action">

                        <a href="/user" class="btn btn-danger btn-block">  
                          <i></i>Batal
                        </a>

                    </div>
                  </div>

          <form action="/user/save" method="post">
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NO ID</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="id_user" class="form-control" placeholder="masukan nomor ID">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="nama_user" class="form-control" placeholder="masukan nama">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="email" class="form-control" placeholder="masukan email">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <button type="submit" class="btn btn-success">  Simpan  </button>
                      </div>
                    </div>
                  </div>

            </form>
            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?= base_url() ?>/template/stisla-master/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?= base_url() ?>/template/stisla-master/assets/js/scripts.js"></script>
  <script src="<?= base_url() ?>/template/stisla-master/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url() ?>/template/stisla-master/assets/js/page/bootstrap-modal.js"></script>

</body>
</html>
