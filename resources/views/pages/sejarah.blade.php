<!--page start-->
@extends('layouts.base')
@section('title', "Berita")

@section('statusbar', true)
@section("content")

<div class="page sidebar-true">

    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{ isset($news) ? $news->title : ''}}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main single">

        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-right ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 content-area">
                        <!-- post -->
                        <article class="post ttm-blog-classic clearfix">
                            <!-- post-featured-wrapper -->
                            <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                                <div class="ttm-post-featured">
                                    <img class="img-fluid" src="images/portfolio/sejarah.jpg" alt="">
                                </div>
                            
                            </div><!-- post-featured-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                                <div class="entry-content pt-5" >
                                <div class="container">
                                  <!--  <div class="section">
                                        <h6> A. Biodata</h6>
                                        <p><strong>Nama:</strong> Dr. Mas Goenawan Partowidigdo</p>
                                        <p><strong>Tempat Tgl Lahir:</strong> Nganjuk Jawa Timur, 1 Maret 1909</p>
                                        <p><strong>Alamat:</strong> Sanatorium Tjisarua Bogor Kab. Bogor, Jawa Barat</p>
                                        <p><strong>Agama:</strong> Islam</p>
                                        <p><strong>Istri:</strong> Bidan Soetjiati</p>
                                        <p><strong>Tempat Menikah:</strong> Komplek Sanatorium Tjisarua 1978</p>
                                        <p><strong>Anak angkat:</strong> 1). Sri Widodo, dan 2). Syukur Yuwono Goenawan</p>
                                        <p><strong>Pangkat terakhir:</strong> Dokter Letnan Kolonel</p>
                                        <p><strong>Tempat Wafat:</strong> RSCM Jakarta 2 Maret 1994, dimakamkan 3 Maret 1994, di Pemakaman Kp Paragajen Cibeureum, Jalan Taman Safari Indonesia Cisarua Bogor,</p>
                                    </div>
                                    <div class="section">
                                        <h6>B. Pendidikan</h6>
                                        <p>1. Europeesche Lagere School (ELS) setingkat SD, Bojonegoro Jawa Timur (1915),</p>
                                        <p>2. Meer Uitgebreid Lager School Onderwijs (MULO) setingkat SMP, Praban Surabaya,</p>
                                        <p>3. Algemeene Middelbare School (AMS) setingkat SMA, Yoyakarta,</p>
                                        <p>4. Geneeskundige Hoge School (GHS) setingkat S1 Bachelor/Sederajat, yang selanjutnya menjadi FKUI Jakarta (1929 – 1938),</p>
                                        <p>5. Specialist Penjakit Paru-Paru, setingkat S2 Master/Sederajat,</p>
                                    </div>
                                    <div class="section">
                                        <h6>C. Jasa Dan Karya</h6>
                                        <p>1. Meraih gelar Arts (Dokter Umum) dengan skripsi “De Behandeling der Longsonsteking met Sulfa-Piridine” pada 7 Mei 1938,</p>
                                        <p>2. Ketua Local Joint Committe Semarang untuk pengoperan Djateng dari Belanda,</p>
                                        <p>3. Masuk Pembela tanah air (Peta) Bersama teman – teman, yaitu pak Soedirman (yang kemudian menjadi Panglima Besar TNI), Mr. Kasman Singadireja, Mr. Soebarjo, Pak Soepriadi, Dr. Kornel Singawinata, Abu Bakar dan Dr. Ismail (1943),</p>
                                    </div>
                                </div> -->
                                <div class="section" align=justify>
                                     <h6 >RS Paru Dr. M. Goenawan Partowidigdo (RSP Goenawan Partowidigdo) 
                                    (15 November 1928 – Kini)</h6>
                                         <p align=justify> Rumah Sakit Paru Dr. M. Goenawan Partowidigdo (RSP Goenawan Partowidigdo) terletak di Desa Cibeureum, Kecamatan Cisarua, Kabupaten Bogor, Jawa Barat. RSPG memiliki luas lahan 67.847m2 sesuai sertipikat nomor 3 yang dikeluarkan oleh kantor Agraria Bogor tertanggal 1 Mei 1981. 
                                    RSP Goenawan Partowidigdo berawal dari sebuah Zending School yang didirikan pada tahun 1908 yang selanjutnya tahun 1928 diambil oleh Stichting Centrale Voor Tuberculose Bestrijding (SCVT). Kemudian pada tanggal 15 Agustus 1938 dilakukan peletakan batu pertama pembangunan serta tanggal 15 November 1938 dilakukan pembukaan pertama Sanatorium vor Lunlojders (setelah SCVT berusia 10 tahun) dan ini dijadikan sebagai momentum hari lahirnya RSP Goenawan Partowidigdo (15 November 1928). 
                                    Pada tahun 1978 berubah namanya menjadi RSTP (Rumah Sakit Tuberkulosa Paru-Paru) berdasarkan Surat Keputusan Menteri Kesehatan Nomor: 137/SK/MENKES/IV/78 tanggal 28 April 1978 tentang struktur Organisasi dan Tata Kerja Rumah Sakit Tuberkulosa Paru-Paru. Kemudian pada tahun 2004 berubah lagi namanya dari RSTP (Rumah Sakit Tuberkulosa Paru-Paru) menjadi Rumah Sakit Paru (RSP) dengan nama Rumah Sakit Paru (RSP) Dr.M.Goenawan Partowidigdo berdasarkan Keputusan Menteri Kesehatan Nomor 190/Menkes/SK/II/2004 tentang Organisasi dan Tata Kerja Rumah Sakit Paru. Berdasarkan Peraturan Menteri Kesehatan RI Nomor 251/Menkes/Per/III/2008 tentang Organisasi dan Tata Kerja Rumah Sakit Paru Dr.M.Goenawan Partowidigdo (RSPG) Cisarua Bogor, RSPG mempunyai tugas menyelenggarakan upaya penyembuhan dan pemulihan secara paripurna, pendidikan dan pelatihan, penelitian dan pengembangan di bidang kesehatan paru secara serasi, terpadu dan berkesinambungan dengan upaya peningkatan kesehatan lainnya serta melaksanakan upaya rujukan. 
                                    Berdasarkan Keputusan Menteri Keuangan Nomor 226/KMK.05/2009 tentang Penetapan Rumah Sakit Paru Dr.M.Goenawan Partowidigdo Cisarua Bogor Pada Departemen Kesehatan Sebagai Instansi Pemerintah Yang Menerapkan Pengelolaan Keuangan Badan Layanan umum, RSPG merupakan instansi pemerintah yang menerapakan Pengelolaan Keuangan Badan Layanan Umum dengan status Badan Layanan Umum secara penuh (BLU penuh).
                                    Keputusan Menteri Kesehatan RI Nomor HK.02.02/I/3856/2020 tanggal 22 Oktober 2020 tentang Izin Operasional Rumah Sakit Khusus Paru Dr.M.Goenawan Partowidigdo dengan Klasifikasi Rumah Sakit Khusus Kelas A.
                                    Keputusan Menteri Kesehatan RI Nomor 25 tahun 2022 tanggal 15 September 2022 tentang Perubahan Atas Peraturan Menteri Kesehatan Nomor 45 Tahun 2019 Tentang Klasifikasi Organisasi Rumah Sakit Di Lingkungan Kementerian Kesehatan.
                                         </p>
                                </div>
                                    <div class="ttm-blogbox-desc-footer">
                                        <div class="ttm-social-share-wrapper">
                                            <div class="ttm-social-share-title">Share Post</div>
                                            <div class="social-icons circle">
                                                <ul>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"><i
                                                                class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="ttm-post-prev-next-buttons d-none">
                                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-square ttm-icon-btn-left ttm-btn-style-fill ttm-btn-color-skincolor mb-10"
                                                href="#"><i class="ti ti-angle-double-left"></i>Previous</a>
                                        </div>
                                    </div>
                                    <div class="ttm-blog-classic-box-comment d-none">
                                        <div id="comments" class="comments-area">
                                            <h2 class="comments-title">3 Replies to “How much aspirin to take for
                                                stroke”</h2>
                                            <ol class="comment-list">
                                                <li>
                                                    <div class="comment-body">
                                                        <div class="comment-author vcard">
                                                            <img src="images/blog/blog-comment-01.jpg" class="avatar"
                                                                alt="comment-img">
                                                        </div>
                                                        <div class="comment-box">
                                                            <div class="comment-meta commentmetadata">
                                                                <cite class="ttm-comment-owner">Alex</cite>
                                                                <a href="#">February 14, 2019 at 8:41 am</a>
                                                            </div>
                                                            <div class="author-content-wrap">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Laudantium eius, sunt porro corporis maiores
                                                                    ea, voluptatibus omnis maxime</p>
                                                            </div>
                                                            <div class="reply">
                                                                <a rel="nofollow" class="comment-reply-link"
                                                                    href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="children comment">
                                                    <div class="comment-body">
                                                        <div class="comment-author vcard">
                                                            <img src="images/blog/blog-comment-02.jpg" class="avatar"
                                                                alt="comment-img">
                                                        </div>
                                                        <div class="comment-box">
                                                            <div class="comment-meta">
                                                                <cite class="ttm-comment-owner">Cherieh</cite>
                                                                <a href="#">February 14, 2019 at 8:42 am</a>
                                                            </div>
                                                            <div class="author-content-wrap">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Laudantium eius, sunt porro corporis maiores
                                                                    ea, voluptatibus omnis maxime</p>
                                                            </div>
                                                            <div class="reply">
                                                                <a rel="nofollow" class="comment-reply-link"
                                                                    href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <div class="comment-author vcard">
                                                            <img src="images/blog/blog-comment-01.jpg" class="avatar"
                                                                alt="comment-img">
                                                        </div>
                                                        <div class="comment-box">
                                                            <div class="comment-meta">
                                                                <cite class="ttm-comment-owner">Alex</cite>
                                                                <a href="#">February 14, 2019 at 8:43 am</a>
                                                            </div>
                                                            <div class="author-content-wrap">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Laudantium eius, sunt porro corporis maiores
                                                                    ea, voluptatibus omnis maxime</p>
                                                            </div>
                                                            <div class="reply">
                                                                <a rel="nofollow" class="comment-reply-link"
                                                                    href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                            <div class="comment-respond">
                                                <h3 class="comment-reply-title">Leave a Reply</h3>
                                                <form action="#" method="post" id="commentform" class="comment-form">
                                                    <p class="comment-notes">Your email address will not be published.
                                                    </p>
                                                    <p class="comment-form-comment">
                                                        <textarea id="comment" placeholder="Comment" name="comment"
                                                            cols="45" rows="8" aria-required="true"></textarea>
                                                    </p>
                                                    <p class="comment-form-author">
                                                        <input id="author" placeholder="Name (required)" name="author"
                                                            type="text" value="" size="30" aria-required="true">
                                                    </p>
                                                    <p class="comment-form-email">
                                                        <input id="email" placeholder="Email (required)" name="email"
                                                            type="text" value="" size="30" aria-required="true">
                                                    </p>
                                                    <p class="comment-form-url">
                                                        <input id="url" placeholder="Website" name="url" type="text"
                                                            value="" size="30">
                                                    </p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit"
                                                            class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor"
                                                            value="Post Comment">
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ttm-blog-classic-content end -->
                        </article><!-- post end -->
                    </div>
                    
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->


    </div>
</div>


@endsection