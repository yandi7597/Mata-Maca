
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mata | Maca @yield('title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('style/images/apple-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('style/images/favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('style/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="{{asset('style/assets/css/bootstrap-select.less')}}"> -->
    <link rel="stylesheet" href="{{asset('style/assets/scss/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><i class="menu-icon fa fa-book" alt="Logo" style="width: 30px"></i><h4>Mata|Maca</h4></a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{url('/')}}"> <i class="menu-icon fa fa-dashboard"></i>Beranda</a>
                        <a href="/profil"> <i class="menu-icon fa fa-laptop"></i>Profil</a>
                        <a href="/buku"> <i class="menu-icon fa fa-th"></i>Buku</a>
                        <a href="/artikel"> <i class="menu-icon fa fa-puzzle-piece"></i>Artikel</a>
                        <a href="/pengguna"> <i class="menu-icon fa fa-spinner"></i>Pengguna</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>
                
                    <div class="header-left pull-right">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
        </header><!-- /header -->
        <!-- Header-->
        
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="1.png" class="d-block w-100" height="250px" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="2.png" class="d-block w-100" height="250px" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="3.png" class="d-block w-100" height="250px" alt="...">
                  </div>
                </div>
              </div>
        <br>
        <div class="col">
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="card">
              <img src="buku.jpg" class="card-img-top" height="190px"  alt="...">
              <div class="card-body">
                <h5 class="card-title">Kumpulan Buku Terbaru</h5>
                <p class="card-text">Klik Baca untuk melihat dan membaca kumpulan buku terbaru</p>
                <a href="#" class="btn btn-secondary pull-right" style="width: 120px"> Baca </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="artikel.jpg" class="card-img-top" height="190px" alt="...">
              <div class="card-body">
                <h5 class="card-title">Kumpulan Artikel Terbaru</h5>
                <p class="card-text">Klik Baca untuk melihat dan membaca kumpulan artikel terbaru</p>
                <a href="#" class="btn btn-secondary pull-right" style="width: 120px"> Baca </a>
              </div>
            </div>
          </div>
      </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                @yield('container')


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

<!-- Right Panel -->



    <script src="{{asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('style/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('style/assets/js/plugins.js')}}"></script>
    <script src="{{asset('style/assets/js/main.js')}}"></script>


    <script src="{{asset('style/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/datatables-init.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
