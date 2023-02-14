<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link <?php if($page =='index'){echo 'active-link';} ?>" href="index.php">
        <i class="bi bi-grid"></i><span>Dasboard</span>
      </a>
    </li><!-- End Dashboard Nav -->
    <li class="nav-item">
      <a class="nav-link <?php if($page =='data'){echo 'active-link';} ?>" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content active collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a class="<?php if($page2 =='data-sp'){echo 'active';} ?>" href="data-supplier.php">
            <i class="bi bi-circle"></i><span>Supplier</span>
          </a>
        </li>
        <li>
          <a class="<?php if($page2 =='data-cs'){echo 'active';} ?>" href="data-customer.php">
            <i class="bi bi-circle"></i><span>Customer</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Katergori Produk</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Kategori Pejualan</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Merk Produk</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Data Produk</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Data Set Produk</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Data Produk E-Cat</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Data Set Produk E-Cat</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Perubahan Merk</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Keterangan Barang Masuk</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Keterangan Barang Keluar</span>
          </a>
        </li>
      </ul>
    </li><!-- End Data Nav -->

    <li class="nav-item">
      <a class="nav-link active collapsed" data-bs-target="#barang-masuk" data-bs-toggle="collapse" href="#">
        <i class="bi bi-file-ruled-fill"></i><span>Barang Masuk</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="barang-masuk" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Barang Masuk Reguler</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Barang Masuk E-Cat</span>
          </a>
        </li>
      </ul>
    </li><!-- End Barang Masuk Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#barang-keluar" data-bs-toggle="collapse" href="#">
        <i class="bi bi-file-ruled"></i><span>Barang Keluar</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="barang-keluar" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Barang Keluar Reguler</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Barang Keluar E-Cat</span>
          </a>
        </li>
      </ul>
    </li><!-- End Barang Keluar Nav -->

    <li class="nav-item">
      <a class="nav-link <?php if($page =='transaksi'){echo 'active-link';} ?>" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bar-chart"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a class="<?php if($page2 =='spk'){echo 'active';} ?>" href="spk-reg.php">
            <i class="bi bi-circle"></i><span>SPK</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Faktur Non PPN</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Faktur PPN</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Faktur BUM</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Data Pajak Digunggung</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Non PPN</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>BUM</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bank2"></i><span>Data Finance</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Chart.js</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>ApexCharts</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>ECharts</span>
          </a>
        </li>
      </ul>
    </li><!-- End Charts Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-person"></i>
        <span>Data User</span>
      </a>
    </li><!-- End Data User Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-arrows-fullscreen"></i>
        <span>Role User</span>
      </a>
    </li><!-- End Role User Page Nav -->
  </ul>
</aside><!-- End Sidebar-->