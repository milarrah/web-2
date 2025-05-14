<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="../dist/assets/img/dosen.png"
              alt="Dosen Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Manajemen Dosen</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
            <li class="nav-header">Admin</li>
              <li class="nav-item">
                <a href="index.php" class="nav-link ">
                <i class="bi bi-speedometer2 nav-icon"></i>
                <p>Dashboard</p>
                </a>
              </li> 
                           
              <li class="nav-header">FITUR UTAMA </li>
              <li class="nav-item">
                  <a href="dosen_list.php" class="nav-link">
                  <i class="bi bi-person-vcard nav-icon"></i>
                   <p>Manajemen Dosen </p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="bi bi-search nav-icon"></i>                 <p>
                    Manajemen Penelitian
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="penelitian_list.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Data Penelitian</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="tim_peneliti.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Tim Peneliti</p>
                    </a>
                  </li>
               
                </ul>
              </li>
              
                <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="bi bi-clipboard-data nav-icon"></i>                  <p>
                      Manajemen Akademik 
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="prodi_list.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Prodi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="bidang_ilmu.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Bidang Ilmu</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="jenis_kegiatan_list.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Jenis Kegiatan</p>
                    </a>
                  </li>
                </ul>
              </li>


               

           

              
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="bi bi-journal-check nav-icon"></i>
                   <p>
                    Manajemen Kegiatan
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="kegiatan_list.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Data Kegiatan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="kegiatan_dosen_list.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Kegiatan Dosen</p>
                    </a>
                  </li>
                 
                </ul>
              </li>
              
            
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>