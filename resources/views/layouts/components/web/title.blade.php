<div class="page sidebar-true">

    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{ isset($category) ? $category->name : ''}}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                    <span>
                                        <a title="Go to Delmont." href="{{ url('layanan') }}" class="home"><i
                                                class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                    </span>
                                    <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                    <span>{{ isset($category) ? $category->name : ''}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>