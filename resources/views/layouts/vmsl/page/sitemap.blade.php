@include('layouts.default.header')

<style>
.sta p{line-height: 3px;}
.c_red{color:#eb1d25}
.sta strong{color:#008ccd;}
  .page-header{

        padding: 131px 0px 80px;
    }

</style>

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Sitemap</li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-9 col-sm-12 col-12">
                                <h1 class="page-title">Site Map</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content start -->
<?php  $menus = SiteHelpers::menus('top') ;?>

<div id="" class="my-5 ml-5">
    <ul>
        <li><a href="/" class="animsition-link">Home</a> </li>
        <li><a href="#" class="animsition-link menu-has-children">About us </a>
            <ul class="">
                <li><i class=""></i>&nbsp;<a href="/company-profile">Company Profile</a></li>
                <li><i class=""></i>&nbsp;<a href="/mission-vision">Mission & Vision</a></li>
                <li><i class=""></i>&nbsp;<a href="/shareholding-structure">Shareholders</a></li>
                <li class="has_drop" ><i class=""></i>&nbsp;
                    <a href="javascript:void(0)">Board of Directors</a>
                    <ul class="child_element">
                        <li><i class=""></i>&nbsp;<a href="/management-team?nav=bod">Board of Directors</a></li>
                        <li><i class=""></i>&nbsp;<a href="/management-team?nav=ec">Executive Committee</a></li>
                        <li><i class=""></i>&nbsp;<a href="/management-team?nav=ac">Audit Committee</a></li>
                    </ul>
                </li>
                <li><i class=""></i>&nbsp;<a href="/management-team?nav=exe">Executives</a></li>
                <li><i class=""></i>&nbsp;<a href="/strategic-partners">Strategic Partners</a></li>

            </ul>
        </li>
        <li id=""><a href="#" class="animsition-link">Loans</a>
            <ul>
            @foreach(Helper::getLoanCat() as $cat)
                @if( count(Helper::getLoanName($cat->id)) > 0)
                    <li class="text-black">{{$cat->name}}</li>
                @endif

                <ul>
                    @foreach(Helper::getLoanName($cat->id) as $l)
                        <li><i class=""></i>&nbsp;<a href="/loans/{{$l->id}}">{{$l->name}}</a></li>
                    @endforeach
                </ul>
            @endforeach
            </ul>
        </li>
        <li id=""><a href="#" class="animsition-link">Deposits</a>
        <ul>
            @foreach(Helper::getDepositCat() as $cat)
                @if( count(Helper::getLoanName($cat->id)) > 0)
                    <li class="text-black">{{$cat->name}}</li>
                @endif

                <ul>
                    @foreach(Helper::getDepositName($cat->id) as $l)
                        <li><i class=""></i>&nbsp;<a href="/deposit-schemes/{{$l->id}}">{{$l->name}}</a></li>
                    @endforeach
                </ul>

            @endforeach
        </ul>
        </li>
        <li ><a href="#" class="animsition-link">Investor Relations</a>
            <ul>
                <li><i class=""></i>&nbsp;<a href="/financial-report">Financial Report</a></li>
                <li><i class=""></i>&nbsp;<a href="/files/9">Director's Report</a></li>
                <li><i class=""></i>&nbsp;<a href="/files/10">Price Sensitive Information</a></li>
                <li><i class=""></i>&nbsp;<a href="/files/11">AGM</a></li>
                <li><i class=""></i>&nbsp;<a href="/files/12">Buy/Sale Information</a></li>
                <li><i class=""></i>&nbsp;<a href="/files/13">Compliance Guidelines</a></li>
                <li><i class=""></i>&nbsp;<a href="/investor-relations">Investor Relations</a></li>
                <li><i class=""></i>&nbsp;<a href="/files/15">Notice</a></li>
            </ul>
        </li>
        <li><a href="/regulatory-disclosures" class="animsition-link">Regulatory Disclosure</a> </li>
        {{--                            <li id="contactBtn"><a href="#" class="animsition-link">Contact us <span><i class="fa fa-angle-down"></i></span></a> </li>--}}
        <li><a href="/vacancy-announcement" class="animsition-link">Career</a> </li>

        <li class="menu-has-children text-black">Others
            <ul class="">
                <li><a href="/news-bulletin">News Bulletin</a></li>
                <li><a href="/downloads">Download</a></li>
                <li><a href="/complain-cell">Complain Cell</a></li>
                <li><a href="/csrs">CSR</a></li>
                <li><a href="/news">News and Events</a></li>
                <li><a href="/green-banking">Green Banking</a></li>
                <li><a href="/contact-us">Contact Us</a></li>
            </ul>
        </li>

    </ul>
    <ul>













    <!--<li class="animsition-link"><a href="#">Test</a>
			<ul><li class="animsition-link"><a href="#">Test</a>
				<ul><li class="animsition-link"><a href="#">Test</a></li></ul>
			</li></ul>
		</li> -->
    </ul>
</div>


@include('layouts.default.footer')
