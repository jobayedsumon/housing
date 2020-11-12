@include('layouts.default.header')

<style>
.sta p{line-height: 3px;}
.c_red{color:#eb1d25}
.sta strong{color:#008ccd;}
  .page-header{
        background: url(/uploads/images/csr.jpg) no-repeat center;
        padding: 131px 0px 80px;
    }

</style>

    <div class="page-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">CSR</li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <h1 class="page-title">CSR</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content start -->
<br><br><br><br>

<div class="container-fluid news_nav">

    <ul class="nav nav-pills" role="tablist">
      <li class="nav-item active">
        <a class="nav-link " data-toggle="pill" href="#all">All</a>
      </li>
    @foreach(Helper::getAllCsr() as $data)
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#{{$data->type}}">{{$data->type}}</a>
      </li>
    @endforeach
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="all" class="tab-pane fade in active"><br>
        <div class="row">
          @foreach($allData as $data)
            <div class="col-md-4">
                <div data-id="{{$data->id}}" class="csr_row">
                  <img src="/uploads/images/{{$data->thumbnail}}">
                  <p class="csr_name">{{$data->name}}</p> <div class="details dp-none">{!! $data->details !!}</div>
                </div>
            </div>
          @endforeach

        </div>
    </div>

    <div id="EDUCATION" class="tab-pane"><br>
        <div class="row">
          @foreach($allData as $data)
            @if($data->type == 'EDUCATION')
              <div class="col-md-4">
                  <div data-id="{{$data->id}}" class="csr_row">
                    <img src="/uploads/images/{{$data->thumbnail}}">
                    <p class="csr_name">{{$data->name}}</p> <div class="details dp-none">{!! $data->details !!}</div>
                  </div>
              </div>
            @endif;
            @endforeach
        </div>
    </div>
    <div id="HEALTH" class="tab-pane"><br>
      <div class="row">
        @foreach($allData as $data)
          @if($data->type == 'HEALTH')
            <div class="col-md-4">
                <div data-id="{{$data->id}}" class="csr_row">
                  <img src="/uploads/images/{{$data->thumbnail}}">
                  <p class="csr_name">{{$data->name}}</p> <div class="details dp-none">{!! $data->details !!}</div>
                </div>
            </div>
          @endif;
          @endforeach
      </div>
  </div>
  <div id="WELL-BEING" class="tab-pane"><br>
    <div class="row">
      @foreach($allData as $data)
        @if($data->type == 'WELL-BEING')
          <div class="col-md-4">
              <div data-id="{{$data->id}}" class="csr_row">
                <img src="/uploads/images/{{$data->thumbnail}}">
                <p class="csr_name">{{$data->name}}</p> <div class="details dp-none">{!! $data->details !!}</div>
              </div>
          </div>
        @endif;
        @endforeach
    </div>
</div>
<div id="CULTURAL" class="tab-pane"><br>
  <div class="row">
    @foreach($allData as $data)
      @if($data->type == 'CULTURAL')
        <div class="col-md-4">
            <div data-id="{{$data->id}}" class="csr_row">
              <img src="/uploads/images/{{$data->thumbnail}}">
              <p class="csr_name">{{$data->name}}</p> <div class="details dp-none">{!! $data->details !!}</div>
            </div>
        </div>
      @endif;
      @endforeach
  </div>
</div>
<div id="EMERGENCIES" class="tab-pane"><br>
  <div class="row">
    @foreach($allData as $data)
      @if($data->type == 'EMERGENCIES')
        <div class="col-md-4">
            <div data-id="{{$data->id}}" class="csr_row">
              <img src="/uploads/images/{{$data->thumbnail}}">
              <p class="csr_name">{{$data->name}}</p> <div class="details dp-none">{!! $data->details !!}</div>
            </div>
        </div>
      @endif;
      @endforeach
  </div>
</div>
<div id="RECREATION" class="tab-pane"><br>
  <div class="row">
    @foreach($allData as $data)
      @if($data->type == 'RECREATION')
        <div class="col-md-4">
            <div data-id="{{$data->id}}" class="csr_row">
              <img src="/uploads/images/{{$data->thumbnail}}">
              <p class="csr_name">{{$data->name}}</p> <div class="details dp-none">{!! $data->details !!}</div>
            </div>
        </div>
      @endif;
      @endforeach
  </div>
</div>
<div id="SANITATION" class="tab-pane"><br>
  <div class="row">
    @foreach($allData as $data)
      @if($data->type == 'SANITATION')
        <div class="col-md-4">
            <div data-id="{{$data->id}}" class="csr_row">
              <img src="/uploads/images/{{$data->thumbnail}}">
              <p class="csr_name">{{$data->name}}</p> <div class="details dp-none">{!! $data->details !!}</div>
            </div>
        </div>
      @endif;
      @endforeach
  </div>
</div>
<div id="ENVIRONMENT" class="tab-pane"><br>
  <div class="row">
    @foreach($allData as $data)
      @if($data->type == 'ENVIRONMENT')
        <div class="col-md-4">
            <div data-id="{{$data->id}}" class="csr_row">
              <img src="/uploads/images/{{$data->thumbnail}}">
              <p class="csr_name">{{$data->name}}</p> <div class="details dp-none">{!! $data->details !!}</div>
            </div>
        </div>
      @endif;
      @endforeach
  </div>
</div>

    </div>
  </div>


  <!-- The Modal -->
<div class="modal fade" id="csrModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <img class="modal_img"><br><br>
          <div class="modal_details"></div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>

  <br><br><br><br><br>

@include('layouts.default.footer')
<script>
  jQuery(document).on('click','.csr_row',function(){
    jQuery('.modal-title').html(jQuery(this).find('.csr_name').text());
    jQuery('.modal_img').attr('src',jQuery(this).find('img').attr('src'));
    jQuery('.modal_details').html(jQuery(this).find('.details').text());

    jQuery('#csrModal').modal('show');
  });
</script>
