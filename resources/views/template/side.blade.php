<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/image/user/{{ Auth::user()->foto }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
      @if (Auth::user()->role == 'admin')

        <li><a href="/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="/anggota"><i class="fa fa-user"></i> <span>Data Anggota </span></a></li></li>

        <li><a href="/tambah-anggota"><i class="fa fa-plus"></i> <span>Tambah Anggota </span></a></li></li>

        <li><a href="/daftar-permohonan"><i class="fa fa-clone"></i> <span>Daftar Permohonan </span></a></li></li>

        
      @endif

      @if (Auth::user()->role == 'anggota')
        <li><a href="/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="/syarat"><i class="fa fa-building-o"></i> <span>Syarat dan ketentuan </span></a></li></li>

        <li><a href="/ajukan-pembiayaan"><i class="fa fa-cloud-upload"></i> <span>Ajukan pembiayaan </span></a></li></li>

        <li><a href="/status-pembiayaan"><i class="fa fa-check-circle"></i> <span>Status Pembiayaan </span></a></li></li>

        <li><a href="/profil"><i class="fa fa-key"></i> <span>Ubah Password </span></a></li></li>
      @endif
        

        <!-- <li class="header">LABELS</li> -->
        <!-- <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Faqs</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>About</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>