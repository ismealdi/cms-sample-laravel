<ul class="dropdown">
    <li class="{{ (Request::is('profile*') ? 'active' : '') }}" style=""><a href="{{url('profile')}}">Tentang Kami</a>
    </li>
    <li class="has-submenu {{ (Request::is('layanan*') ? 'active' : '') }}" style=""><a href="#">Layanan</a>
        <ul class="sub-menu">
            @foreach(\App\Models\Clayanan::all() as $item)
            <li class="{{ (Request::is('layanan/'.$item->slug.'*') ? 'active' : '') }}"><a href="{{url('/layanan/'.$item->slug )}}">{{ $item->name }}</a></li>
            @endforeach
        </ul>
    </li>
    <li class="has-submenu {{ ((Request::is('berita*') || Request::is('galeri*')) ? 'active' : '') }}" style=""><a href="{{url('/berita/')}}">Berita</a>
        <ul class="sub-menu">
            @foreach(\App\Models\Category::all() as $item)
            <li class="{{ (Request::is('berita/'.$item->slug.'*') ? 'active' : '') }}"><a href="{{url('/berita/'.$item->slug )}}">{{ $item->name }}</a></li>
            @endforeach
            <li><a href="{{url('/galeri')}}">Galeri</a></li>
        </ul>
    </li>
    <li class="has-submenu" style=""><a href="#">Informasi Publik</a>
        <ul class="sub-menu ">
            <li class="has-submenu" style=""><a href="#">Pendaftaran Online</a>
                <ul class="sub-menu">
                    <li><a href="http://sapa.rspg-cisarua.co.id/">Pendaftaran Pasien</a></li>
                    <li><a href="https://api.whatsapp.com/send/?phone=6282168000706&text&type=phone_number&app_absent=0">Pendaftaran Melalui WA</a></li>
                    <li><a href="http://sapa.rspg-cisarua.co.id/room-availability">Tempat Tidur Online </a></li>
                </ul>
            </li>
                    
            <li><a href="http://sapa.rspg-cisarua.co.id/">Jadwal Dokter </a></li>
            <li><a href="http://sapa.rspg-cisarua.co.id/">Konsultasi Dokter</a></li>
            <li><a href="">Info Lelang</a></li>
            <li><a href="#">Karir</a></li>
            <li><a href="#">Reservasi Gedung</a></li>
            <li><a href="http://sapa.rspg-cisarua.co.id/">Jam Kunjungan Pasien</a></li>
            <li><a href="{{url('/laporan')}}">Laporan</a></li>
        </ul>
    </li>
    <li><a href="#">Diklat</a>
        <ul class="sub-menu">
            <li><a href="{{url('/pelatihan')}}">Pelatihan </a></li>
            <li><a href="#">Seminar</a></li>
            <li><a href="#">Perpustakaan</a></li>
        </ul>
    </li>
    <li><a href="#">Survei dan Aduan</a>
        <ul class="sub-menu">
        <li class="has-submenu" style=""><a href="http://survey.rspg-cisarua.co.id/">Index Kepuasan Masyarakat</a>
                <ul class="sub-menu" style="left: -100%;">
                    <li><a href="http://survey.rspg-cisarua.co.id/index1.php">Q. Survei Kepuasan Masyarakat (SKM) </a></li>
                    <li><a href="http://survey.rspg-cisarua.co.id/laksarspg/">Q. LAyanan Kepuasan & SAran dari Masyrakat (LAKSA) </a></li>
                    <li><a href="http://survey.rspg-cisarua.co.id/publish/">Hasil IKM </a></li>
                </ul>
        </li>
            <li><a href="https://wbs.kemkes.go.id/">WBS</a></li>
            <li><a href="https://siap.kemkes.go.id/#!/log/in">SIAP Kemenkes</a></li>
            <li><a href="#">SP4N Lapor</a></li>
        </ul>
    </li>
<li class="ttm-sepline" style="width: 106px; left: 0px; opacity: 1;"><span class="sep-img"></span></li>
</ul>