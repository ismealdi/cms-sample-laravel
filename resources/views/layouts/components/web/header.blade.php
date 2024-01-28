<header id="masthead" class="header ttm-header-style-classicinfo">

    <div class="ttm-fbar-main-w ttm-fbar-position-right">
        <div class="ttm-fbar-box-w ttm-textcolor-white ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes">
            <span class="ttm-fbar-btn">
                <a href="javascript:void(0)" class="ttm-fbar-btn-link">
                    <span class="ttm-fbar-open-icon"><i class="fa fa-bars"></i></span>
                    <span class="ttm-fbar-close-icon"><i class="fa fa-times"></i></span>
                </a>
            </span>
            <div class="ttm-fbar-bg-layer ttm-bg-layer"></div>
            <div class="ttm-fbar-content-wrapper">
                @include("widgets.appointment")
            </div>
        </div>
    </div>


    @hasSection('statusbar')
    @include("widgets.statusbar")
    @endif
    <div class="ttm-header-wrap">
        <div id="ttm-stickable-header-w" class="ttm-stickable-header-w ttm-bgcolor-white clearfix">
            <div id="site-header-menu" class="site-header-menu">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <div class="site-branding">
                            <a class="home-link" href="{{ url('/') }}" title="Delmont" rel="home">
                                <img id="logo-img" class="img-center" src="{{ url('images/logo-img-rspg.png') }}"
                                    alt="logo-img">
                            </a>
                        </div>

                        <div id="site-navigation" class="site-navigation">
                            <div class="ttm-header-icons ">
                                <div class="ttm-header-icon ttm-header-search-link">
                                    <a href="#"><i class="ti ti-search"></i></a>
                                    <div class="ttm-search-overlay">
                                        <div class="ttm-search-outer">
                                            <div class="ttm-form-title">Hi, How Can We Help You?</div>
                                            <form method="get" class="ttm-site-searchform" action="#">
                                                <div class="w-search-form-h">
                                                    <div class="w-search-form-row">
                                                        <div class="w-search-input">
                                                            <input type="search" class="field searchform-s" name="s"
                                                                placeholder="Type Word Then Enter...">
                                                            <button type="submit">
                                                                <i class="ti ti-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="ttm-menu-toggle">
                                <input type="checkbox" id="menu-toggle-form" />
                                <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                    <span class="toggle-block toggle-blocks-1"></span>
                                    <span class="toggle-block toggle-blocks-2"></span>
                                    <span class="toggle-block toggle-blocks-3"></span>
                                </label>
                            </div>
                            <nav id="menu" class="menu">
                                @include('layouts.components.web.menu')
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ttm-content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ttm-info-widget">
                        <div class="header-widget">
                            <div class="header-icon">
                                <i class="fa fa-hospital-o"></i>
                            </div>
                            <div class="header-content">
                                <h3>Rumah Sakit Nomor 1</h3>
                                <p>di Cisarua</p>
                            </div>
                        </div>
                        <div class="header-widget">
                            <div class="header-icon">
                                <i class="fa fa-user-md"></i>
                            </div>
                            <div class="header-content">
                                <h3>Kabinet Pribadi</h3>
                                <p>Staf Berkualitas</p>
                            </div>
                        </div>
                        <div class="header-widget">
                            <div class="header-icon">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="header-content">
                                <h3>Dapatkan Hasil Online</h3>
                                <p>Pasien Puas</p>
                            </div>
                        </div>
                    </div>

                    <div class="ttm-contact">
                        <span class="icon"><i class="fa fa-phone"></i></span>Call Center IGD (0251) 8253629
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>