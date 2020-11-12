@include('layouts.default.header')

<style>
#la,#nm,#roi {
    display: block !important;
    border: none;
    padding: 5px 11px 5px 0;
    text-align: right;
    float: right;
    background: none;
    border-bottom: 1px dashed #a7a7a7;
    margin-bottom: 15px;
    margin-top: -50px;
}
#la_value,#nm_value,#roi_value{
    display: none;
}
hr{clear: both;}
#loantable td{text-align: center;}

</style>
       <div class="page-header loan_image">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Loan Calculator</li>
                        </ol>
                    </div>
                </div>
                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                           <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-12">
                                <h1 class="page-title">Loan Calculator</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="wrapper-content bg-white pinside40">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="bg-light pinside40 outline">
                                        <span>Loan Amount is </span>
                                        <strong>
                                            <span class="pull-right" id="la_value">30000</span></strong>
                                        <input type="text" data-slider="true" value="30000" data-slider-range="100000,5000000" data-slider-step="100000" data-slider-snap="true" id="la">
                                        <hr>
                                        <span>No. of Month is <strong>
                                            <span class="pull-right"  id="nm_value">30</span> </strong>
                                        </span>
                                        <input type="text" data-slider="true" value="30" data-slider-range="12,120" data-slider-step="1" data-slider-snap="true" id="nm">
                                        <hr>
                                        <span>Rate of Interest [ROI] is <strong><span class="pull-right"  id="roi_value">10</span>
                                        </strong>
                                        </span>
                                        <input type="text" data-slider="true" value="10.2" data-slider-range="6,16" data-slider-step=".5" data-slider-snap="true" id="roi">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="bg-light pinside30 outline">
                                                EMI
                                                <h2 id='emi' class="pull-right"></h2>
                                            </div>
                                        </div>
                                 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div id="loantable" class='table table-striped table-bordered loantable table-responsive'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @include('layouts.default.footer')
 <script type="text/javascript" src="{{ asset('theme') }}/js/calculator.js"></script>