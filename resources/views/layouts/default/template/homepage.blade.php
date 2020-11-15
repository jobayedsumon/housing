

@section('title', 'Home')


    <div class="slider" id="slider">
        @foreach($slider as $data)
            <a href="{{ $data->button_link }}">
                <img src="{{ asset('slider/'.$data->image) }}" alt="{{ $data->sub_title }}" class="">
            </a>
        @endforeach
    </div>









<style>
.modal.and.carousel {
  position: fixed; // Needed because the carousel overrides the position property
}
@media (min-width: 768px){
.modal-dialog {
    margin: 50px auto !important;
}
}
.modal .right::after {
    display:none;
}

#lightbox{
    padding-top:15%;
    background: #0606067a;
}
.carousel-inner {
    height:auto;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
    width: 100%;
    margin: auto;
    min-height:initial;
}
.modal-dialog {
    max-width: 800px !important;
}
@media (max-width: 768px) {
    .owl-item img {
        height: 200px;
    }
}
</style>



<div class="container">
  <ul class="nav nav-pills nav-stacked" style="display: none">
    <li id='click_me'><a href="#lightbox" data-toggle="modal" data-slide-to="15">Open</a></li>
  </ul>


    <?php
    $popupModel = App\Models\Popupslider::where('status',1)->get();
    ?>
    @if($popupModel->count() > 0)

  <div class="modal fade and carousel slide" id="lightbox" data-ride="carousel" data-interval="3000">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header py-0">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        <div class="modal-body">


          <div class="carousel-inner">

           @foreach($popupModel as $popup)
            <div class="item @if($loop->index == 0) active @endif">
              <a href="{{ $popup->description }}"><img src="{{ asset('/uploads/images/popup') }}/{{ $popup->image }}" alt="First slide"></a>
            </div>
            @endforeach

          </div><!-- /.carousel-inner -->

          <a class="left carousel-control" href="#lightbox" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#lightbox" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

    @endif

</div><!-- /.container -->



<script>
$(document).ready(function(){
  $('#click_me a').trigger('click');
});
</script>








	<!-- I AM LOOKIN FOR START -->
{{--    <section id="iamloking">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row iamlokingbody">--}}
{{--                <div class="col-12 col-sm-3 col-md-1 col-lg-1 lookfor"><p>I'am looking  for...</p></div>--}}
{{--                <div class="col-12 col-sm-9 col-md-10 col-lg-10">--}}
{{--                    <div class="tags iamlokingtags">--}}
{{--                        <ul>--}}
{{--                        @foreach (Helper::getHomepageLoans() as $loan)--}}
{{--                            <li><a href="/loans/{{$loan->id}}">{{ strToUpper($loan->name) }}</a></li>--}}
{{--                        @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
<!-- I AM LOOKIN FOR End -->



    <div class="section-space80">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>Find Loan Products We Offer</h1>
                        <p>We will match you with a loan program that meets your financial need. In short term liquidity, by striving to make funds available <strong>within the shortest possible time.</strong></p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="service" id="service">

					@foreach (Helper::getHomepageLoans() as $loan)

					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="bg-white service-block outline mb30">
                            <div class="icon mb40">
                                <a href="/loans/{{$loan->id}}"><img src="{{ asset('loan/'.$loan->icon) }}" alt="Loan Image" class="loan_thumbnail">
                                </a>
                            </div>
                            <div class="pinside40 pt-0">
                                <h2><a href="/loans/{{$loan->id}}" class="title">{{ $loan->name }}</a></h2>
                                <p>{{ $loan->short_description }}</p>
                                <a href="/loans/{{$loan->id}}" class="btn-link">Read More</a> </div>
                            </div>
                    </div>

					@endforeach

                </div>
            </div>
        </div>
    </div>



    <div class="section-space80">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>Find Deposit Scheme We Offer</h1>
                        <p>Save your valuable money today to have a better future tomorrow. You can choose from our deposit schemes where your money will be in safe hands to grow for your better future.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="service" id="service">

					@foreach (Helper::getHomepageDeposits() as $loan)

					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="bg-white service-block outline mb30">
                            <div class="icon mb40">
                                <a href="/deposit-schemes/{{$loan->id}}">
                                    <img style="width:100%" src="{{ asset('uploads/images/'.$loan->thumbnail) }}" alt="Loan Image" class="loan_thumbnail">
                                </a>
                            </div>
                            <div class="pinside40 pt-0">
                                <h2><a href="/deposit-schemes/{{$loan->id}}" class="title">{{ $loan->name }}</a></h2>
                                <p>{{ $loan->short_description }}</p>
                                <a href="/deposit-schemes/{{$loan->id}}" class="btn-link">Read More</a> </div>
                            </div>
                    </div>

					@endforeach

                </div>
            </div>
        </div>
    </div>





{{--    <div class="bg-white section-space80">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                 <div class="offset-xl-2 col-xl-8 offset-md-2 col-md-8 offset-md-2 col-md-8 col-sm-12 col-12">--}}
{{--                    <div class="mb100 text-center section-title">--}}
{{--                        <!-- section title start-->--}}
{{--                        <h1>Fast &amp; Easy Application Process.</h1>--}}
{{--                     </div>--}}
{{--                    <!-- /.section title start-->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">--}}
{{--                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">--}}
{{--                        <div class="circle"><span class="number">1</span></div>--}}
{{--                        <h3 class="number-title">Choose Loan Amount</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">--}}
{{--                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">--}}
{{--                        <div class="circle"><span class="number">2</span></div>--}}
{{--                        <h3 class="number-title">Get Your Loan Approved</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">--}}
{{--                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">--}}
{{--                        <div class="circle"><span class="number">3</span></div>--}}
{{--                        <h3 class="number-title">Get Your Cash</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                 <div class="offset-xl-2 col-xl-8 offset-md-2 col-md-8 offset-md-2 col-md-8 col-sm-12 col-12 text-center"> <a href="/contact-us" class="btn btn-primary">Contact Us</a> </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


<!--  <div class="bg-default section-space80">
        <div class="container-fluid">

            <div class="row">
                 <div class="offset-xl-2 col-xl-8 offset-md-2 col-md-8 offset-md-2 col-md-8 col-sm-12 col-12">
                    <div class="mb60 text-center section-title">
                        <h1 class="title-white">Bord of Directors</h1>
                        <p>Here's short bio of our honorable Bord of Directors.</p>
                    </div>

                </div>
            </div>
            <div class="row">
             <div id="bod_slider">

            @foreach($bod as $data)
                <div class="col-md-12 clearfix ">
                    <div class="testimonial-block mb30">
                        <div class="bg-white pinside30 mb20">
                            <div class="testimonial-text">
                                {!! Str::words($data->message, 130,'....')  !!}
                                 <p class="text-right"><a href="/directors/{{ $data->id }}">Read More</a></p>
                            </div>
                        </div>
                        <div class="testimonial-autor-box">
                            <div class="testimonial-img pull-left"> <img style="width:150px" src="/uploads/images/{{$data->image}}" alt="{{$data->name}}"> </div>
                            <div class="testimonial-autor pull-left">
                                <h4 class="testimonial-name">{{$data->name}}</h4>
                                <span class="testimonial-meta">{{$data->designation}}</span><br>
                                <span class="testimonial-meta">{{$data->representing}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </div>
</div>  -->



{{--    <div class="section-space80 bg-white">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--               <div class="offset-xl-2 col-xl-8 offset-md-2 col-md-8 offset-md-2 col-md-8 col-sm-12 col-12">--}}
{{--                    <div class="mb60 text-center section-title">--}}
{{--                        <!-- section title-->--}}
{{--                        <h1>We are Here to Help You</h1>--}}
{{--                        <p>Our mission is to deliver reliable, latest news and opinions.</p>--}}
{{--                    </div>--}}
{{--                    <!-- /.section title-->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">--}}
{{--                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">--}}
{{--                        <div class="mb40"><i class="icon-calendar-3 icon-2x icon-default"></i></div>--}}
{{--                        <h2 class="capital-title">Apply For Loan</h2>--}}
{{--                        <p>Looking for a home loan? Then apply for loan now.</p>--}}
{{--                        <a href="/contact-us" class="btn-link">Get Appointment</a> </div>--}}
{{--                </div>--}}
{{--                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">--}}
{{--                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">--}}
{{--                        <div class="mb40"><i class="icon-phone-call icon-2x icon-default"></i></div>--}}
{{--                        <h2 class="capital-title">Call us at </h2>--}}
{{--                        <h1 class="text-big">+88 09609 200555 </h1>--}}
{{--                        <p>lnfo@nationalhousingbd.com</p>--}}
{{--                        <a href="/contact-us" class="btn-link">Contact us</a> </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">--}}
{{--                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">--}}
{{--                        <div class="mb40"> <i class="icon-users icon-2x icon-default"></i></div>--}}
{{--                        <h2 class="capital-title">Talk to Advisor</h2>--}}
{{--                        <p>Need loan advice? Talk to our loan advisors.</p>--}}
{{--                        <a href="/location" class="btn-link">Meet The Advisor</a> </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

