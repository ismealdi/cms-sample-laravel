<ul class="dropdown">
    <li class="{{ (Request::is('about*') ? 'active' : '') }}"><a href="{{url('/profile')}}">Tentang Kami</a>
    </li>

    <li><a href="#">Layanan</a>
        <ul>
            <li><a href="{{url('/unggulan')}}">Unggulan </a></li>
            <li><a href="#">Rawat Jalan </a></li>
            <li><a href="{{url('/ruangmelati')}}">Rawat Inap</a></li>
            <li><a href="#">MCU</a></li>
            <li><a href="#">Poliklinik Eksekutif</a></li>
        </ul>
    </li>

    <li><a href="#">Berita</a>
        <ul>
            @foreach(\App\Models\Category::all() as $item)
            <li><a href="{{url('/berita/'.$item->slug )}}">{{ $item->name }}</a></li>
            @endforeach
            <li><a href="{{url('/berita/' )}}">Semua</a></li>

        </ul>
    </li>
    <li><a href="#">Informasi Publik</a>
        <ul>
            <li><a href="#">Pendaftaran Online</a>
                <ul>
                    <li><a href="#">Pendaftaran Pasien</a></li>
                    <li><a href="#">Pendaftaran Melalui WA</a></li>
                    <li><a href="#">Tempat Tidur Online </a></li>

                </ul>
            <li><a href="#">Jadwal Dokter </a></li>
            <li><a href="#">Konsultasi Dokter</a></li>
            <li><a href="#">Info Lelang</a></li>
            <li><a href="#">Karir</a></li>
            <li><a href="#">Reservasi Gedung</a></li>
            <li><a href="#">Jam Kunjungan Pasien</a></li>
            <li><a href="#">Panduan masuk dan Akses</a></li>
            <li><a href="#">Syarat-syarat Pasien/jamninan</a></li>
        </ul>
    </li>
    <li><a href="#">Diklat</a>
        <ul>
            <li><a href="{{url('/pelatihan')}}">Pelatihan </a></li>
            <li><a href="#">Seminar</a></li>
            <li><a href="#">Perpustakaan</a></li>
        </ul>
    </li>
    <li><a href="#">Survei dan Aduan</a>
        <ul>
            <li><a href="#">Survei Kepuasan Masyrakat</a></li>
            <li><a href="#">WBS</a></li>
            <li><a href="#">LAKSA</a></li>
            <li><a href="#">SIAP Kemenkes</a></li>
            <li><a href="#">SP4N Lapor</a></li>
        </ul>
    </li>
</ul>