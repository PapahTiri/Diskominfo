<section class="bg-white text-gray text-sm font-medium leading-loose rounded-none">
    <div class="container flext flex-col justify-center items-start px-16 py-2.5 w-full max-md:px-5 max-md:max-w-full">
        <div class="flex gap-8">
            <img src="{{ asset('assets/logo.png') }}" alt="" srcset="">
            <div class="flex gap-6 items-center list-none">
                <li class="nav-item ">
                    <a class="nav-link hover:underline {{ request()->routeIs('beranda') ? 'active' : ''}}" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown d-flex align-items-center">
                    <!-- Tautan ke halaman lain -->
                    <a class="nav-link text-decoration : none {{ request()->routeIs('profil_kelurahan') ? 'active' : ''}}" href="{{ route('profil_kelurahan') }}" >Profil Kelurahan</a>
                
                    <!-- Tombol dropdown -->
                    <a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    </a>
                    <!-- Daftar dropdown -->
                    <ul class="dropdown-menu text-left md:text-center z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="{{ route('galeri') }}">Galeri</a></li>
                        <li><a class="dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="{{ route('visi-misi') }}">Visi Misi</a></li>
                        <li><a class="dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="{{ route('geografi-penduduk') }}">Geografis dan Penduduk</a></li>
                        <li><a class="dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="{{ route('struktur-pemerintahan') }}">Struktur Pemerintahan</a></li>
                        <li><a class="dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="{{ route('profil_kelurahan') }}">Lainnya</a></li>
                    </ul>
                </li>             
                <li class="nav-item dropdown d-flex align-items-center">

                    <a class="nav-link text-decoration : none {{ request()->routeIs('berita') ? 'active' : ''}}" href="{{ route('berita') }}" >Berita</a>
                
                    <a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    </a>
                    <!-- Daftar dropdown -->
                    <ul class="dropdown-menu text-left md:text-center z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="{{ route('berita.bidang_kambtibmas', ['id_kategori' => 3]) }}">Bidang Kambtibmas</a></li>
                        <li><a class="dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="{{ route('berita.bidang_kesehatan', ['id_kategori' => 1]) }}">Bidang Kesehatan</a></li>
                        <li><a class="dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="{{ route('berita.bidang_pendidikan', ['id_kategori' => 2]) }}">Bidang Pendidikan</a></li>
                        <li><a class="dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="{{ route('berita.bidang_pariwisata', ['id_kategori' => 4]) }}">Bidang Pariwisata</a></li>
                    </ul>
                </li>
            <div class="flex gap-6 itmes-center list-none">           
                <li class="nav-item dropdown d-flex align-items-center">
                    <a class="nav-link text-decoration : none"  href="{{ route('lembaga') }}" role="button" aria-expanded="false">Kelembagaan</a>
                    
                    <a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    </a>

                    <ul class="dropdown-menu text-left md:text-center z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="nav-link dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="{{ route('LPMK') }}"> LPMK </a></li>
                        <li><a class="nav-link dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="{{ route('UMKM') }}"> UMKM </a></li>
                        <li><a class="nav-link dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="{{ route('BKM') }}"> BKM </a></li>
                        <li><a class="nav-link dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="{{ route('PKK') }}"> PKK </a></li>
                    </ul>
                </li>
            </div>
                {{-- <li class="nav-item ">
                    <a class="nav-link hover:underline ">Layanan</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('layanan')  }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan
                    </a>
                    <ul class="dropdown-menu w-auto" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('layanan')  }}">unduh file formulir pelayanan </a></li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Layanan dokumen kependudukan</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Pembuatan KK</a></li>
                                <li><a class="dropdown-item" href="#">Pembuatan KTP</a></li>
                                <li><a class="dropdown-item" href="#">Pembuatan Dokumen Kematian</a></li>
                                <li><a class="dropdown-item" href="#">Keterangan Domisili</a></li>
                                <li><a class="dropdown-item" href="#">Pengantar Pindah</a></li>
                                <li><a class="dropdown-item" href="#">Pengantar Pindah Datang</a></li>
                                <li><a class="dropdown-item" href="#">Pembuatan Dokumen Kelahiran</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item fs-6" href="#">Layanan Pengaduan Masyarakat Sapa Mbak Ita</a></li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">pelayanan umum</a>
                            <ul class="dropdown-menu w-auto">
                                <li><a class="dropdown-item" href="#">Pembuatan KK</a></li>
                                <li><a class="dropdown-item" href="#">Pembuatan KTP</a></li>
                                <li><a class="dropdown-item" href="#">Pembuatan Dokumen Kematian</a></li>
                                <li><a class="dropdown-item" href="#">Keterangan Domisili</a></li>
                                <li><a class="dropdown-item" href="#">Pengantar Pindah</a></li>
                                <li><a class="dropdown-item" href="#">Pengantar Pindah Datang</a></li>
                                <li><a class="dropdown-item" href="#">Pembuatan Dokumen Kelahiran</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">unduh file formulir pelayanan </a></li>
                    </ul>
                </li>                
                <li class="nav-item ">
                    <a class="nav-link hover:underline ">Daftar Informasi</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link hover:underline ">Kontak Kami</a>
                </li>
            </div>
    </div>
</section>

