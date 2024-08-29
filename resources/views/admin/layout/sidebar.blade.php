     <!-- ========== Left Sidebar Start ========== -->
     <div class="left-side-menu">

         <div class="h-100" data-simplebar>

             <!--- Sidemenu -->
             <div id="sidebar-menu">

                 <ul id="side-menu">

                     <li>
                         <a href="{{ url('admin/dashboard') }}">
                             <i data-feather="airplay"></i>
                             <span> Dashboard </span>
                         </a>
                     </li>

                     <li class="menu-title mt-2">PEMUDA</li>


                     <li>
                         <a href="{{ route('admin.pemuda') }}">
                             <i data-feather="users"></i>
                             <span> Data Pemuda </span>
                         </a>
                     </li>
                     <li class="menu-title mt-2">DATA MASTER</li>

                     <li>
                        <a href="{{ route('admin.wilayah') }}">
                             <i data-feather="box"></i>
                             <span> Data Wilayah </span>
                         </a>
                     </li>
                     <li>
                        <a href="{{ route('admin.gereja') }}">
                            <i data-feather="home"></i>
                            <span> Data Gereja </span>
                        </a>
                    </li>

                    <li class="menu-title mt-2">INFORMASI & PUBLIKASI</li>

                    <li>
                        <a href="{{ route('admin.pengumuman') }}">
                            <i data-feather="info"></i>
                            <span> Pengumuman </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.agenda') }}">
                            <i data-feather="calendar"></i>
                            <span> Agenda Kegiatan </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.galeri') }}">
                            <i data-feather="image"></i>
                            <span> Galeri </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.jadwal') }}">
                            <i data-feather="book-open"></i>
                            <span> Jadwal Ibadah </span>
                        </a>
                    </li>

                    <li class="menu-title mt-2">PENGATURAN</li>

                    <li>
                        <a href="{{ url('admin/jurusan') }}">
                            <i data-feather="settings"></i>
                            <span> Pengguna </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/jurusan') }}">
                            <i data-feather="globe"></i>
                            <span> Informasi Situs </span>
                        </a>
                    </li>

                    <li class="menu-title mt-2">Laporan</li>


                    <li>
                        <a href="{{ url('admin/jurusan') }}">
                            <i data-feather="file-text"></i>
                            <span> Laporan </span>
                        </a>
                    </li>
                    <li class="menu-title mt-2">Logout</li>
                     <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        <i class="fe-log-out"></i>
                        {{ __('Keluar') }}
                    </a>
                     </li>


                 </ul>

             </div>
             <!-- End Sidebar -->

             <div class="clearfix"></div>

         </div>
         <!-- Sidebar -left -->

     </div>
     <!-- Left Sidebar End -->
