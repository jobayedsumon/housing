@section('title','Downloads')
@include('layouts.default.header')
 <style>
    .page-header{
        background: url(/uploads/images/corporate.jpg) no-repeat center;
        padding: 131px 0px 80px;
    }
    .job_item {
		background: #eaeaea;
		padding: 15px 0 6px;
		margin-bottom: 15px;
	}
	.serial_text {
		background: #6fbfe5;
		color: #fff;
		line-height: 40px;
		padding: 15px 25px;
		font-size: 30px;
		display: inline-block;
	}

	.job_item .button {
		background-color: #6fbfe5;
		border: none;
		color: #FFFFFF;
		text-align: center;
		display: inline-block;
		font-size: 14px;
		text-transform: uppercase;
		padding: 11px;
		transition: all 0.5s;
		cursor: pointer;
		margin-top: 16px;
	}
	.date_item{
	    margin-bottom: 10px;
	}
</style>

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">JOIN NHFIL FAMILY</li>
                        </ol>
                    </div>
                </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-4 col-sm-4 col-4">
                                <h1 class="page-title">JOIN NHFIL FAMILY</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
			@foreach($circular as $key => $c)
			  <div class="job_item">
				<div class="row">
						<div class="col-md-2">
							<p class="text-center"><span class="serial_text">{{$key+1}}</span></p>
						</div>
						<div class="col-md-6">
							<p class="date_item">Post Date: {{ date('d M, Y', strtotime($c->post_date)) }}</p>
							<p class="date_item">End Date: {{ date('d M, Y', strtotime($c->end_date)) }}</p>
							<p class="post_title text-uppercase">{{strtoupper($c->title)}}</p>
						</div>
						<div class="col-md-2">
							<a class="apply_button button" href="{{ asset('uploads/files/'.$c->circular_file) }}"><span>see the circular</span></a>
						</div>
						<div class="col-md-2">
							<a class="apply_button button" href="/career-with-us/?job={{$c->id}}"><span>apply now</span></a>
						</div>
					</div>
			   </div>
			@endforeach

    </div><br><br>
 @include('layouts.default.footer')
