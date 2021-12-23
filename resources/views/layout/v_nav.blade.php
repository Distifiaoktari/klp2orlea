<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ request()->is('/home') ? 'active' : '' }}"><a href="/home"> <i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="{{request()->is('/dataadmin') ? 'active' : '' }}"><a href="/dataadmin"><i class="fa fa-book"></i> <span>Data Admin</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{request()->is('/') ? 'active' : '' }}"><a href="#"><i class="fa fa-circle-o"></i> Pelanggan</a></li>
            <li class="{{request()->is('/') ? 'active' : '' }}"><a href="#"><i class="fa fa-circle-o"></i> Barberman</a></li>
            <li class="{{request()->is('/') ? 'active' : '' }}"><a href="#"><i class="fa fa-circle-o"></i> Paket Barber</a></li>
          </ul>
        </li>
        <li class="{{request()->is('/') ? 'active' : '' }}"><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Pemesanan</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Cetak Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{request()->is('/') ? 'active' : '' }}"><a href="#"><i class="fa fa-circle-o"></i> Transaksi</a></li>
            <li class="{{request()->is('/') ? 'active' : '' }}"><a href="#"><i class="fa fa-circle-o"></i> Pendapatan</a></li>
          </ul>
        </li>
      </ul>