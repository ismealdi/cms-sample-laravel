@extends('layouts.app')
@section('title', 'Dashboard')
@section('buttons')
<a href="custom/apps/user/add-user.html" class="btn btn-light-primary font-weight-bold ml-2">Add User</a>
@endsection
@section('pagination-sample')
<div class="d-flex d-none justify-content-between align-items-center flex-wrap">
    <div class="d-flex flex-wrap mr-3">
        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
            <i class="ki ki-bold-double-arrow-back icon-xs"></i>
        </a>
        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
            <i class="ki ki-bold-arrow-back icon-xs"></i>
        </a>
        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
            <i class="ki ki-bold-arrow-next icon-xs"></i>
        </a>
        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
            <i class="ki ki-bold-double-arrow-next icon-xs"></i>
        </a>
    </div>
    <div class="d-flex align-items-center">

        <span class="text-muted">Displaying 10 of 230 records</span>
    </div>
</div>
@endsection
@section('content')
<div class="row mt-0 mt-lg-3">
    <div class="col-xl-4">
        <!--begin::Mixed Widget 17-->
        <div class="card card-custom gutter-b card-stretch">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <div class="card-title font-weight-bolder">
                    <div class="card-label">
                        Weekly Sales Stats
                        <div class="font-size-sm text-muted mt-2">890,344 Sales</div>
                    </div>
                </div>
                <div class="card-toolbar">
                    <div class="dropdown dropdown-inline">
                        <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="ki ki-bold-more-hor"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                            <!--begin::Naviigation-->
                            <ul class="navi">
                                <li class="navi-header font-weight-bold py-5">
                                    <span class="font-size-lg">Add New:</span>
                                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip"
                                        data-placement="right" title=""
                                        data-original-title="Click to learn more..."></i>
                                </li>
                                <li class="navi-separator mb-3 opacity-70"></li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                                        <span class="navi-text">Order</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="navi-icon flaticon2-calendar-8"></i></span>
                                        <span class="navi-text">Members</span>
                                        <span class="navi-label">
                                            <span
                                                class="label label-light-danger label-rounded font-weight-bold">3</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="navi-icon flaticon2-telegram-logo"></i></span>
                                        <span class="navi-text">Project</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="navi-icon flaticon2-new-email"></i></span>
                                        <span class="navi-text">Record</span>
                                        <span class="navi-label">
                                            <span
                                                class="label label-light-success label-rounded font-weight-bold">5</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-separator mt-3 opacity-70"></li>
                                <li class="navi-footer pt-5 pb-4">
                                    <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
                                    <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#"
                                        data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Click to learn more...">Learn more</a>
                                </li>
                            </ul>
                            <!--end::Naviigation-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body p-0 d-flex flex-column" style="position: relative;">
                <!--begin::Items-->
                <div class="flex-grow-1 card-spacer">
                    <div class="row row-paddingless mt-5 mb-10">
                        <!--begin::Item-->
                        <div class="col">
                            <div class="d-flex align-items-center mr-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-45 symbol-light-info mr-4 flex-shrink-0">
                                    <div class="symbol-label">
                                        <span
                                            class="svg-icon svg-icon-lg svg-icon-info"><!--begin::Svg Icon | path:/metronic/theme/html/demo9/dist/assets/media/svg/icons/Shopping/Cart3.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path
                                                        d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                    <path
                                                        d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z"
                                                        fill="#000000"></path>
                                                </g>
                                            </svg><!--end::Svg Icon--></span>
                                    </div>
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Title-->
                                <div>
                                    <div class="font-size-h4 text-dark-75 font-weight-bolder">$2,034</div>
                                    <div class="font-size-sm text-muted font-weight-bold mt-1">Author Sales</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="col">
                            <div class="d-flex align-items-center mr-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-45 symbol-light-danger mr-4 flex-shrink-0">
                                    <div class="symbol-label">
                                        <span
                                            class="svg-icon svg-icon-lg svg-icon-danger"><!--begin::Svg Icon | path:/metronic/theme/html/demo9/dist/assets/media/svg/icons/Home/Library.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path
                                                        d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                        fill="#000000"></path>
                                                    <rect fill="#000000" opacity="0.3"
                                                        transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
                                                        x="16.3255682" y="2.94551858" width="3" height="18" rx="1">
                                                    </rect>
                                                </g>
                                            </svg><!--end::Svg Icon--></span>
                                    </div>
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Title-->
                                <div>
                                    <div class="font-size-h4 text-dark-75 font-weight-bolder">$706</div>
                                    <div class="font-size-sm text-muted font-weight-bold mt-1">Commision</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Widget Item-->
                    </div>

                    <div class="row row-paddingless">
                        <!--begin::Item-->
                        <div class="col">
                            <div class="d-flex align-items-center mr-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-45 symbol-light-success mr-4 flex-shrink-0">
                                    <div class="symbol-label">
                                        <span
                                            class="svg-icon svg-icon-lg svg-icon-success"><!--begin::Svg Icon | path:/metronic/theme/html/demo9/dist/assets/media/svg/icons/Shopping/Cart3.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path
                                                        d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                    <path
                                                        d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z"
                                                        fill="#000000"></path>
                                                </g>
                                            </svg><!--end::Svg Icon--></span>
                                    </div>
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Title-->
                                <div>
                                    <div class="font-size-h4 text-dark-75 font-weight-bolder">$49</div>
                                    <div class="font-size-sm text-muted font-weight-bold mt-1">Average Bid</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="col">
                            <div class="d-flex align-items-center mr-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-45 symbol-light-primary mr-4 flex-shrink-0">
                                    <div class="symbol-label">
                                        <span
                                            class="svg-icon svg-icon-lg svg-icon-primary"><!--begin::Svg Icon | path:/metronic/theme/html/demo9/dist/assets/media/svg/icons/Shopping/Barcode-read.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <rect fill="#000000" opacity="0.3" x="4" y="4" width="8"
                                                        height="16"></rect>
                                                    <path
                                                        d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z"
                                                        fill="#000000" fill-rule="nonzero"></path>
                                                </g>
                                            </svg><!--end::Svg Icon--></span>
                                    </div>
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Title-->
                                <div>
                                    <div class="font-size-h4 text-dark-75 font-weight-bolder">$5.8M</div>
                                    <div class="font-size-sm text-muted font-weight-bold mt-1">All Time Sales</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Item-->
                    </div>
                </div>
                <!--end::Items-->

                <!--begin::Chart-->
                <div id="kt_mixed_widget_17_chart" class="card-rounded-bottom" data-color="primary"
                    style="height: 200px; min-height: 200px;">
                    <div id="apexcharts90prqz4d" class="apexcharts-canvas apexcharts90prqz4d apexcharts-theme-light"
                        style="width: 345px; height: 200px;"><svg id="SvgjsSvg1088" width="345" height="200"
                            xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                            transform="translate(0, 0)" style="background: transparent;">
                            <g id="SvgjsG1090" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(0, 0)">
                                <defs id="SvgjsDefs1089">
                                    <clipPath id="gridRectMask90prqz4d">
                                        <rect id="SvgjsRect1093" width="352" height="203" x="-3.5" y="-1.5" rx="0"
                                            ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="gridRectMarkerMask90prqz4d">
                                        <rect id="SvgjsRect1094" width="349" height="204" x="-2" y="-2" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                        </rect>
                                    </clipPath>
                                </defs>
                                <g id="SvgjsG1101" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1102" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                    </g>
                                </g>
                                <g id="SvgjsG1110" class="apexcharts-grid">
                                    <g id="SvgjsG1111" class="apexcharts-gridlines-horizontal" style="display: none;">
                                        <line id="SvgjsLine1113" x1="0" y1="0" x2="345" y2="0" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1114" x1="0" y1="20" x2="345" y2="20" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1115" x1="0" y1="40" x2="345" y2="40" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1116" x1="0" y1="60" x2="345" y2="60" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1117" x1="0" y1="80" x2="345" y2="80" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1118" x1="0" y1="100" x2="345" y2="100" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1119" x1="0" y1="120" x2="345" y2="120" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1120" x1="0" y1="140" x2="345" y2="140" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1121" x1="0" y1="160" x2="345" y2="160" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1122" x1="0" y1="180" x2="345" y2="180" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1123" x1="0" y1="200" x2="345" y2="200" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG1112" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine1125" x1="0" y1="200" x2="345" y2="200" stroke="transparent"
                                        stroke-dasharray="0"></line>
                                    <line id="SvgjsLine1124" x1="0" y1="1" x2="0" y2="200" stroke="transparent"
                                        stroke-dasharray="0"></line>
                                </g>
                                <g id="SvgjsG1095" class="apexcharts-area-series apexcharts-plot-series">
                                    <g id="SvgjsG1096" class="apexcharts-series" seriesName="NetxProfit"
                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                        <path id="SvgjsPath1099"
                                            d="M 0 200L 0 100C 24.15 100 44.85 116.66666666666666 69 116.66666666666666C 93.15 116.66666666666666 113.85 50 138 50C 162.15 50 182.85 100 207 100C 231.15 100 251.85 16.666666666666657 276 16.666666666666657C 300.15 16.666666666666657 320.85 16.666666666666657 345 16.666666666666657C 345 16.666666666666657 345 16.666666666666657 345 200M 345 16.666666666666657z"
                                            fill="rgba(215,249,239,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-area" index="0" clip-path="url(#gridRectMask90prqz4d)"
                                            pathTo="M 0 200L 0 100C 24.15 100 44.85 116.66666666666666 69 116.66666666666666C 93.15 116.66666666666666 113.85 50 138 50C 162.15 50 182.85 100 207 100C 231.15 100 251.85 16.666666666666657 276 16.666666666666657C 300.15 16.666666666666657 320.85 16.666666666666657 345 16.666666666666657C 345 16.666666666666657 345 16.666666666666657 345 200M 345 16.666666666666657z"
                                            pathFrom="M -1 200L -1 200L 69 200L 138 200L 207 200L 276 200L 345 200">
                                        </path>
                                        <path id="SvgjsPath1100"
                                            d="M 0 100C 24.15 100 44.85 116.66666666666666 69 116.66666666666666C 93.15 116.66666666666666 113.85 50 138 50C 162.15 50 182.85 100 207 100C 231.15 100 251.85 16.666666666666657 276 16.666666666666657C 300.15 16.666666666666657 320.85 16.666666666666657 345 16.666666666666657"
                                            fill="none" fill-opacity="1" stroke="#0bb783" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                            class="apexcharts-area" index="0" clip-path="url(#gridRectMask90prqz4d)"
                                            pathTo="M 0 100C 24.15 100 44.85 116.66666666666666 69 116.66666666666666C 93.15 116.66666666666666 113.85 50 138 50C 162.15 50 182.85 100 207 100C 231.15 100 251.85 16.666666666666657 276 16.666666666666657C 300.15 16.666666666666657 320.85 16.666666666666657 345 16.666666666666657"
                                            pathFrom="M -1 200L -1 200L 69 200L 138 200L 207 200L 276 200L 345 200">
                                        </path>
                                        <g id="SvgjsG1097" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                            <g class="apexcharts-series-markers">
                                                <circle id="SvgjsCircle1131" r="0" cx="0" cy="0"
                                                    class="apexcharts-marker w21ay7iua no-pointer-events"
                                                    stroke="#0bb783" fill="#d7f9ef" fill-opacity="1" stroke-width="3"
                                                    stroke-opacity="0.9" default-marker-size="0"></circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1098" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine1126" x1="0" y1="0" x2="345" y2="0" stroke="#b6b6b6"
                                    stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1127" x1="0" y1="0" x2="345" y2="0" stroke-dasharray="0"
                                    stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1128" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1129" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1130" class="apexcharts-point-annotations"></g>
                            </g>
                            <g id="SvgjsG1109" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                            <g id="SvgjsG1091" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 100px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title" style="font-family: Poppins; font-size: 12px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(215, 249, 239);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-label"></span><span
                                            class="apexcharts-tooltip-text-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                            <div class="apexcharts-xaxistooltip-text" style="font-family: Poppins; font-size: 12px;">
                            </div>
                        </div>
                        <div
                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
                <!--end::Chart-->
                <div class="resize-triggers">
                    <div class="expand-trigger">
                        <div style="width: 346px; height: 384px;"></div>
                    </div>
                    <div class="contract-trigger"></div>
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Mixed Widget 17-->
    </div>
    <div class="col-xl-4">

        <!--begin::List Widget 9-->
        <div class="card card-custom gutter-b card-stretch">
            <!--begin::Header-->
            <div class="card-header align-items-center border-0 mt-4">
                <h3 class="card-title align-items-start flex-column">
                    <span class="font-weight-bolder text-dark">My Activity</span>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm">890,344 Sales</span>
                </h3>
                <div class="card-toolbar">
                    <div class="dropdown dropdown-inline">
                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ki ki-bold-more-hor"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                            <!--begin::Navigation-->
                            <ul class="navi navi-hover">
                                <li class="navi-header font-weight-bold py-4">
                                    <span class="font-size-lg">Choose Label:</span>
                                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip"
                                        data-placement="right" title=""
                                        data-original-title="Click to learn more..."></i>
                                </li>
                                <li class="navi-separator mb-3 opacity-70"></li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-text">
                                            <span
                                                class="label label-xl label-inline label-light-success">Customer</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-text">
                                            <span class="label label-xl label-inline label-light-danger">Partner</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-text">
                                            <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-text">
                                            <span class="label label-xl label-inline label-light-primary">Member</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-text">
                                            <span class="label label-xl label-inline label-light-dark">Staff</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-separator mt-3 opacity-70"></li>
                                <li class="navi-footer py-4">
                                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                        <i class="ki ki-plus icon-sm"></i>
                                        Add new
                                    </a>
                                </li>
                            </ul>
                            <!--end::Navigation-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body pt-4">
                <!--begin::Timeline-->
                <div class="timeline timeline-6 mt-3">
                    <!--begin::Item-->
                    <div class="timeline-item align-items-start">
                        <!--begin::Label-->
                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">08:42</div>
                        <!--end::Label-->

                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-warning icon-xl"></i>
                        </div>
                        <!--end::Badge-->

                        <!--begin::Text-->
                        <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">
                            Outlines keep you honest. And keep structure
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="timeline-item align-items-start">
                        <!--begin::Label-->
                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">10:00</div>
                        <!--end::Label-->

                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-success icon-xl"></i>
                        </div>
                        <!--end::Badge-->

                        <!--begin::Content-->
                        <div class="timeline-content d-flex">
                            <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">AEOL meeting</span>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="timeline-item align-items-start">
                        <!--begin::Label-->
                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">14:37</div>
                        <!--end::Label-->

                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-danger icon-xl"></i>
                        </div>
                        <!--end::Badge-->

                        <!--begin::Desc-->
                        <div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">
                            Make deposit
                            <a href="#" class="text-primary">USD 700</a>.
                            to ESL
                        </div>
                        <!--end::Desc-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="timeline-item align-items-start">
                        <!--begin::Label-->
                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
                        <!--end::Label-->

                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-primary icon-xl"></i>
                        </div>
                        <!--end::Badge-->

                        <!--begin::Text-->
                        <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">
                            Indulging in poorly driving and keep structure keep great
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="timeline-item align-items-start">
                        <!--begin::Label-->
                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
                        <!--end::Label-->

                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-danger icon-xl"></i>
                        </div>
                        <!--end::Badge-->

                        <!--begin::Desc-->
                        <div class="timeline-content font-weight-bolder text-dark-75 pl-3 font-size-lg">
                            New order placed <a href="#" class="text-primary">#XF-2356</a>.
                        </div>
                        <!--end::Desc-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="timeline-item align-items-start">
                        <!--begin::Label-->
                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">23:07</div>
                        <!--end::Label-->

                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-info icon-xl"></i>
                        </div>
                        <!--end::Badge-->

                        <!--begin::Text-->
                        <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">
                            Outlines keep and you honest. Indulging in poorly driving
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="timeline-item align-items-start">
                        <!--begin::Label-->
                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
                        <!--end::Label-->

                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-primary icon-xl"></i>
                        </div>
                        <!--end::Badge-->

                        <!--begin::Text-->
                        <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">
                            Indulging in poorly driving and keep structure keep great
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="timeline-item align-items-start">
                        <!--begin::Label-->
                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
                        <!--end::Label-->

                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-danger icon-xl"></i>
                        </div>
                        <!--end::Badge-->

                        <!--begin::Desc-->
                        <div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">
                            New order placed <a href="#" class="text-primary">#XF-2356</a>.
                        </div>
                        <!--end::Desc-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Timeline-->
            </div>
            <!--end: Card Body-->
        </div>
        <!--end: List Widget 9-->
    </div>
    <div class="col-xl-4">

        <!--begin::Engage Widget 5-->
        <div class="card card-custom gutter-b card-stretch bg-info">
            <div class="card-body d-flex p-0">
                <div class="flex-grow-1 bg-info p-12 pb-40 card-rounded flex-grow-1 bgi-no-repeat"
                    style="background-position: right bottom; background-size: 55% auto; background-image: url(/metronic/theme/html/demo9/dist/assets/media/svg/humans/custom-6.svg)">

                    <h3 class="text-inverse-info pb-5 font-weight-bolder">Start Now</h3>

                    <p class="text-inverse-info pb-5 font-size-h6">
                        Offering discounts for better<br>
                        online a store can loyalty<br>
                        weapon into driving
                    </p>

                    <a href="#" class="btn btn-success font-weight-bold py-2 px-6">Join Now</a>
                </div>
            </div>
        </div>
        <!--end::Engage Widget 5-->
    </div>
</div>
@endsection