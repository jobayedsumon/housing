{{--<nav class="navbar navbar-hover navbar-expand-lg navbar-soft navbar-default">--}}

{{--    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav99" aria-expanded="false">--}}
{{--        <span class="sr-only">Toggle navigation</span>--}}
{{--        <span class="icon-bar"></span>--}}
{{--        <span class="icon-bar"></span>--}}
{{--        <span class="icon-bar"></span>--}}
{{--    </button>--}}
{{--    <a href="{{ url('')}}" class="navbar-brand">--}}
{{--        @if(file_exists(public_path().'/uploads/images/'.config('sximo')['cnf_logo']) && config('sximo')['cnf_logo'] !='')--}}
{{--            <img src="{{ asset('uploads/images/'.config('sximo')['cnf_logo'])}}" alt="{{ config('sximo')['cnf_appname'] }}" width="30" />--}}
{{--        @else--}}
{{--            <img src="{{ asset('uploads/logo.png')}}" alt="{{ config('sximo')['cnf_appname'] }}"  width="30" />--}}
{{--        @endif--}}
{{--    </a>--}}



{{--    <div class="collapse navbar-collapse" id="main_nav99">--}}
{{--        <ul class="nav navbar-nav">--}}
{{--            <li class="nav-item"> <a class="nav-link" href="/">Home </a> </li>--}}

{{--            <li class="nav-item dropdown has-megamenu">--}}
{{--                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> ABOUT US  </a>--}}
{{--                <div class="dropdown-menu animate fade-down megamenu">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="col-megamenu">--}}
{{--                                <ul class="">--}}
{{--                                    <li>&nbsp;<a href="/company-profile">Company Profile</a></li>--}}
{{--                                    <li>&nbsp;<a href="/mission-vision">Mission & Vision</a></li>--}}
{{--                                    <li>&nbsp;<a href="/shareholding-structure">Shareholders</a></li>--}}
{{--                                    <li class="has_drop" >&nbsp;--}}
{{--                                        <a href="javascript:void(0)">Board of Directors</a>--}}
{{--                                        <ul class="child_element">--}}
{{--                                            <li>&nbsp;<a href="/management-team?nav=bod">Board of Directors</a></li>--}}
{{--                                            <li>&nbsp;<a href="/management-team?nav=ec">Executive Committee</a></li>--}}
{{--                                            <li>&nbsp;<a href="/management-team?nav=ac">Audit Committee</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>&nbsp;<a href="/management-team?nav=exe">Executives</a></li>--}}
{{--                                    <li>&nbsp;<a href="/strategic-partners">Strategic Partners</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>  <!-- col-megamenu.// -->--}}
{{--                        </div><!-- end col-3 -->--}}


{{--                    </div><!-- end row -->--}}
{{--                </div> <!-- dropdown-mega-menu.// -->--}}
{{--            </li>--}}

{{--            <li class="nav-item dropdown has-megamenu">--}}
{{--                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Loans  </a>--}}
{{--                <div class="dropdown-menu animate fade-down megamenu">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="col-megamenu">--}}
{{--                                @foreach(Helper::getLoanCat() as $cat)--}}
{{--                                    @if( count(Helper::getLoanName($cat->id)) > 0)--}}
{{--                                        <h4>{{$cat->name}}</h4>--}}
{{--                                    @endif--}}

{{--                                    <ul class="list-unstyled menuStyle">--}}
{{--                                        @foreach(Helper::getLoanName($cat->id) as $l)--}}
{{--                                            <li>&nbsp;<a href="/loans/{{$l->id}}">{{$l->name}}</a></li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                @endforeach--}}
{{--                            </div>  <!-- col-megamenu.// -->--}}
{{--                        </div><!-- end col-3 -->--}}


{{--                    </div><!-- end row -->--}}
{{--                </div> <!-- dropdown-mega-menu.// -->--}}
{{--            </li>--}}
{{--            <li class="nav-item dropdown has-megamenu">--}}
{{--                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> DEPOSITS <i class="fa fa-caret-right text-red"></i> </a>--}}
{{--                <div class="dropdown-menu animate fade-down megamenu">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="col-megamenu">--}}
{{--                                @foreach(Helper::getDepositCat() as $cat)--}}
{{--                                    @if( count(Helper::getDepositName($cat->id)) > 0)--}}
{{--                                        <h4>{{$cat->name}}</h4>--}}
{{--                                    @endif--}}

{{--                                    <ul class="list-unstyled menuStyle">--}}
{{--                                        @foreach(Helper::getDepositName($cat->id) as $l)--}}
{{--                                            <li><i class="fa fa-caret-right text-red"></i>&nbsp;<a href="/deposit-schemes/{{$l->id}}">{{$l->name}}</a></li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                @endforeach--}}
{{--                            </div>  <!-- col-megamenu.// -->--}}
{{--                        </div><!-- end col-3 -->--}}


{{--                    </div><!-- end row -->--}}
{{--                </div> <!-- dropdown-mega-menu.// -->--}}
{{--            </li>--}}


{{--            <li class="nav-item dropdown has-megamenu">--}}
{{--                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> INVESTOR RELATIONS <i class="fa fa-caret-right text-red"></i> </a>--}}
{{--                <div class="dropdown-menu animate fade-down megamenu">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="col-megamenu">--}}
{{--                                <ul class="list-unstyled menuStyle">--}}
{{--                                    <li><i class="fa fa-caret-right text-red"></i>&nbsp;<a href="/financial-report">Financial Report</a></li>--}}
{{--                                    <li><i class="fa fa-caret-right text-red"></i>&nbsp;<a href="/files/9">Director's Report</a></li>--}}
{{--                                    <li><i class="fa fa-caret-right text-red"></i>&nbsp;<a href="/files/10">Price Sensitive Information</a></li>--}}
{{--                                    <li><i class="fa fa-caret-right text-red"></i>&nbsp;<a href="/files/11">AGM</a></li>--}}
{{--                                    <li><i class="fa fa-caret-right text-red"></i>&nbsp;<a href="/files/12">Buy/Sale Information</a></li>--}}
{{--                                    <li><i class="fa fa-caret-right text-red"></i>&nbsp;<a href="/files/13">Compliance Guidelines</a></li>--}}
{{--                                    <li><i class="fa fa-caret-right text-red"></i>&nbsp;<a href="/investor-relations">Investor Relations</a></li>--}}
{{--                                    <li><i class="fa fa-caret-right text-red"></i>&nbsp;<a  href="/files/15">Notice</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>  <!-- col-megamenu.// -->--}}
{{--                        </div><!-- end col-3 -->--}}


{{--                    </div><!-- end row -->--}}
{{--                </div> <!-- dropdown-mega-menu.// -->--}}
{{--            </li>--}}

{{--            <li class="nav-item"><a href="/regulatory-disclosures" class="nav-link">Regulatory Disclosure</a> </li>--}}
{{--            <li class="nav-item"><a href="/contact-us" class="nav-link">Contact us </a> </li>--}}
{{--            <li class="nav-item"><a href="/vacancy-announcement" class="nav-link">Career</a> </li>--}}

{{--        </ul>--}}



{{--    </div> <!-- navbar-collapse.// -->--}}
{{--    --}}
{{--</nav>--}}


<style>

    .stickyMenu {
        position: fixed;
        z-index: 9999;
        background-color: inherit;
        width: 100%;
        padding-left: 0;
        padding-right: 0;
    }

    .navbar, .navbar-nav li a, .menuStyle li a {
        text-transform: uppercase;
    }

    .navbar-brand {
        padding: 0 !important;
    }

    .navbar-toggle .icon-bar {
        background-color: #888;
    }

    @media (min-width: 768px) {
        .navbar, .navbar-nav {
            display: flex !important;
            justify-content: space-between;
            align-items: center;
        }
        .menuStyle {
            display: flex !important;
        }
    }
</style>



<div class="container-fluid stickyMenu">
    <div class="top-bar" style="width: 100%">
        <!-- top-bar -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6 col-6 d-none d-xl-block d-lg-block">
                    <p class="mail-text"> <span> <i class="fa fa-phone"></i> </span>+88 09609 200555</p>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12 text-right">
                    <div class="top-nav">
                        <span class="top-text"><a href="/calculator">EMI Calculator</a></span>
                        <span class="top-text"><a href="/news-bulletin">News Bulletin</a></span>
                        <span class="top-text"><a href="/downloads">Download</a></span>
                        <span class="top-text"><a href="/complain-cell">Complain Cell</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">	<span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a href="{{ url('')}}" class="navbar-brand">
                @if(file_exists(public_path().'/uploads/images/'.config('sximo')['cnf_logo']) && config('sximo')['cnf_logo'] !='')
                    <img src="{{ asset('uploads/images/'.config('sximo')['cnf_logo'])}}" alt="{{ config('sximo')['cnf_appname'] }}" />
                @else
                    <img src="{{ asset('uploads/logo.png')}}" alt="{{ config('sximo')['cnf_appname'] }}" />
                @endif
            </a>

        </div>
        <div class="collapse navbar-collapse js-navbar-collapse">

            <ul class="nav navbar-nav">
                <li class=""> <a class="" href="/">HOME </a> </li>
                <li class="dropdown mega-dropdown">	<a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT&nbsp;US></a>

                    <ul class="dropdown-menu mega-dropdown-menu row">
                        <li class="col-md-12">
                            <ul class="menuStyle">
                                <li>&nbsp;<a href="/company-profile">Company Profile</a></li>
                                <li>&nbsp;<a href="/mission-vision">Mission & Vision</a></li>
                                <li>&nbsp;<a href="/shareholding-structure">Shareholders</a></li>
                                <li class="has_drop" >&nbsp;
                                    <a href="javascript:void(0)">Board of Directors</a>
                                    <ul class="child_element">
                                        <li>&nbsp;<a href="/management-team?nav=bod">Board of Directors</a></li>
                                        <li>&nbsp;<a href="/management-team?nav=ec">Executive Committee</a></li>
                                        <li>&nbsp;<a href="/management-team?nav=ac">Audit Committee</a></li>
                                    </ul>
                                </li>
                                <li>&nbsp;<a href="/management-team?nav=exe">Executives</a></li>
                                <li>&nbsp;<a href="/strategic-partners">Strategic Partners</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown mega-dropdown">	<a href="#" class="dropdown-toggle" data-toggle="dropdown">LOANS></a>

                    <ul class="dropdown-menu mega-dropdown-menu row">
                        <li class="col-md-12">
                            @foreach(Helper::getLoanCat() as $cat)
                                @if( count(Helper::getLoanName($cat->id)) > 0)
                                    <h4>{{$cat->name}}</h4>
                                @endif

                                <ul class="list-unstyled menuStyle">
                                    @foreach(Helper::getLoanName($cat->id) as $l)
                                        <li>&nbsp;<a href="/loans/{{$l->id}}">{{$l->name}}</a></li>
                                    @endforeach
                                </ul>
                            @endforeach

                        </li>
                    </ul>
                </li>
                <li class="dropdown mega-dropdown">	<a href="#" class="dropdown-toggle" data-toggle="dropdown">DEPOSITS></a>

                    <ul class="dropdown-menu mega-dropdown-menu row">
                        <li class="col-md-12">
                            @foreach(Helper::getDepositCat() as $cat)
                                @if( count(Helper::getDepositName($cat->id)) > 0)
                                    <h4>{{$cat->name}}</h4>
                                @endif

                                <ul class="list-unstyled menuStyle">
                                    @foreach(Helper::getDepositName($cat->id) as $l)
                                        <li>&nbsp;<a href="/deposit-schemes/{{$l->id}}">{{$l->name}}</a></li>
                                    @endforeach
                                </ul>
                            @endforeach

                        </li>
                    </ul>
                </li>
                <li class="dropdown mega-dropdown">	<a href="#" class="dropdown-toggle" data-toggle="dropdown">INVESTOR&nbsp;RELATIONS></a>

                    <ul class="dropdown-menu mega-dropdown-menu row">
                        <li class="col-md-12">
                            <ul class="menuStyle">
                                <li>&nbsp;<a href="/financial-report">Financial Report</a></li>
                                <li>&nbsp;<a href="/files/9">Director's Report</a></li>
                                <li>&nbsp;<a href="/files/10">Price Sensitive Information</a></li>
                                <li>&nbsp;<a href="/files/11">AGM</a></li>
                                <li>&nbsp;<a href="/files/12">Buy/Sale Information</a></li>
                                <li>&nbsp;<a href="/files/13">Compliance Guidelines</a></li>
                                <li>&nbsp;<a href="/investor-relations">Investor Relations</a></li>
                                <li>&nbsp;<a  href="/files/15">Notice</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=""><a href="/regulatory-disclosures" class="">Regulatory&nbsp;Disclosure</a> </li>
                <li class=""><a href="/contact-us" class="">Contact&nbsp;us </a> </li>
                <li class=""><a href="/vacancy-announcement" class="">Career</a> </li>
            </ul>

        </div>
        <!-- /.nav-collapse -->
    </nav>
</div>
